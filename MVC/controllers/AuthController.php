<?php
namespace app\controllers;

use app\core\App;
use app\core\Controller;
use app\core\Middlewares\AuthMiddleware;
use app\core\Request;
use app\core\Response;
use app\models\LoginForm;
use app\models\User;

/**
 * Class AuthController
 * 
 * @author KhaledMahmoudSaeed <khaild22k12m71f@gmail.com>
 * @package app\controllers
 */
class AuthController extends Controller
{

    public $firstname;
    public function __construct()
    {
        $this->registerMiddleware(new AuthMiddleware(['profile']));
    }
    public function login(
        Request $request,
        Response $response
    ) {
        $loginform = new LoginForm();
        if ($request->isPost()) {
            $loginform->loaddata($request->getbody());
            if ($loginform->validate() && $loginform->login()) {
                $response->redirect('/');
                return;
            }
        }
        $this->setlayout('auth');
        return $this->render('login', ['model' => $loginform]);
    }
    public function register(Request $request)
    {
        $errors = [];
        $user = new User();
        $this->setlayout('auth');
        if ($request->isPost()) {
            $user->loaddata($request->getbody());

            if ($user->validate() && $user->save()) {
                App::$app->session->setFlash('success', 'Successful Registration');
                //echo App::$app->session->getFlash('success');
                App::$app->response->redirect('/');
            }

            return $this->render('register', ['model' => $user]);
        }
        $this->setlayout('auth');
        return $this->render('register', ['model' => $user]);
    }
    public function logout(Request $request, Response $response)
    {
        App::$app->logout();
        $response->redirect('/');
    }
    public function profile()
    {
        return $this->render('profile');
    }
}