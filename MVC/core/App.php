<?php
namespace app\core;

// very important if you want to get objects form SiteControllers
use app\controllers\SiteController;
use app\core\Controller;

/* instead of wirte require or include in every page we want to use this class we use namespace with the path of it 
# note that app/ = ./ we define that in composer.json file then all what you must do is to specify your class name only where ever you 
want to use it but you must write down requier __DIR__ . "/vendor/autoload.php" to use it and also write use app/core so you have
have to wite only the class name ..... $n =new app/core/App();  ==> $n = new App();
*/

// ************************don't know what is that*************************** 
/**
 * Class App
 * 
 * @author KhaledMahmoudSaeed <khaild22k12m71f@gmail.com>
 * @package app\core
 */

class App
{

    static App $app;
    public static string $ROOT_DIR;
    public Router $router;
    public Request $request;
    public Response $response;
    public Controller $controller;
    public function __construct(
        $root_dir
    ) {
        self::$ROOT_DIR = $root_dir;
        $this->request = new Request();
        $this->response = new Response();
        $this->router = new Router($this->request, $this->response);// unless this line you will get this Fatal error.... you have define always your objects logically ^_^
        //Uncaught Error: Typed property app\core\App::$router must not be accessed before initialization in C:\xampp\htdocs\mvc\index.php:9 Stack trace: #0 {main} thrown in C:\xampp\htdocs\mvc\index.php on line 9
    }
    public function run()
    {
        echo $this->router->resolve();
        // $path = $this->request->getpath();   we don't use this because we don't interact with global path directly unless through router
        // echo '<pre>';
        // var_dump($pa);
        // echo '</pre>';
    }
    /**
     *
     * @return \app\core\Controller
     */
    public function getController(): Controller
    {
        return $this->controller;
    }
    /**
     * 
     * @param \app\core\Controller $controller
     * @return void
     */
    public function setController(Controller $controller): void
    {
        $this->controller = $controller;
    }
}