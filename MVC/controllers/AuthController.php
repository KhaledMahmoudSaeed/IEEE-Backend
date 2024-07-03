<?php
namespace app\controllers;


use app\core\Controller;
use app\core\Request;
use app\models\User;

/**
 * Class AuthController
 * 
 * @author KhaledMahmoudSaeed <khaild22k12m71f@gmail.com>
 * @package app\controllers
 */
class AuthController extends Controller
{
    // public function __construct(
    //     $app
    // ) {
    //     $this->app = $app;
    // }
    public $firstname;
    public function appAccess(
        $app
    ) {
        self::$app = $app;
    }
    static function login(
    ) {
        self::setlayout('auth');
        return self::render('login');
    }
    static function register(Request $request)
    {
        $errors = [];
        $user = new User();
        self::setlayout('auth');
        if ($request->isPost()) {
            $user->loaddata($request->getbody());

            if ($user->validate() && $user->save()) {
                App::$app->session->setFlash('success', "Thanks");
                App::$app->response->redirect('/');
            }

            return self::render('register', ['model' => $user]);
        }
        self::setlayout('auth');
        return self::render('register', ['model' => $user]);
    }
}