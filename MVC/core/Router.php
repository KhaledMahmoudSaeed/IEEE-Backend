<?php

namespace app\core;

use app\core\Controller;
use app\core\App;

/**
 * Class Router
 * 
 * @author KhaledMahmoudSaeed <khaild22k12m71f@gmail.com>
 * @package app\core
 */

class Router
{
    /**
     * Router constructor
     * @param \app\core\Request $requset
     * @param \app\core\Response $response  
     */
    protected array $routes = [];
    public $type;
    public Response $response;
    public Controller $controller;
    public Request $request;
    // we take from App a request object that assigned to router we do this for only don't write in constructor $this->request= new Request()  literally ^_^
    public function __construct(
        Request $request,
        Response $response
    ) {
        $this->response = $response;
        $this->request = $request;
    }
    public function get(
        $path,
        $callback_fun
    ) {
        $this->routes['get'][$path] = $callback_fun;
    }
    public function post(
        $path,
        $callback_fun
    ) {
        $this->routes['post'][$path] = $callback_fun;
    }
    public function resolve()
    {
        $path = $this->request->getpath();
        $method = $this->request->method();
        $callback = $this->routes[$method][$path] ?? false;
        if ($callback === false) {
            $this->response->setstatuscode(404);
            return $this->renderview('_404');
        }
        if (is_string($callback)) {
            return $this->renderview($callback);
        }
        if (is_array($callback)) {
            $callback[0] = new $callback[0]();
            if (get_class($callback[0]) === "app\controllers\SiteController") {
                $this->type = "main";
            } else {
                $this->type = "auth";
            }

        }

        // here must transfer string to object by asign $callback[0]= new $callback[0](); but i have a problem here because i have a constractor for SiteController
        return call_user_func($callback, $this->request);
    }
    public function renderview($view, $params = [])
    {
        $layoutcontent = $this->Layoutcontent();
        $viewcontent = $this->renderonlyview($view, $params);
        return str_replace("{content}", $viewcontent, $layoutcontent);
    }
    public function Layoutcontent()
    {

        // $layout = App::$app->controller->layout;
        ob_start();//  start caching
        include App::$ROOT_DIR . "../views/layouts/$this->type.php";
        return ob_get_clean();// clean buffer
    }
    protected function renderonlyview($view, $params)
    {
        foreach ($params as $key => $value) {
            $$key = $value;
        }

        ob_start();//  start caching
        include App::$ROOT_DIR . "../views/$view.php";
        return ob_get_clean();// clean buffer
    }
}