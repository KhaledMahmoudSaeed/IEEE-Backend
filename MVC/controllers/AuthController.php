<?php
namespace app\controllers;

use app\models\Registermodel;
use app\core\App;
use app\core\Controller;
use app\core\Request;

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
        $registermodel = new Registermodel();
        self::setlayout('auth');
        if ($request->isPost()) {
            $registermodel->loaddata($request->getbody());

            if ($registermodel->validate() && $registermodel->register()) {
                return "Success";
            }
            return self::render('register', ['model' => $registermodel]);
        }
        self::setlayout('auth');
        return self::render('register', ['model' => $registermodel]);
    }
}