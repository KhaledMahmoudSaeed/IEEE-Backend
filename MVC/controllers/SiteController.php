<?php
namespace app\controllers;

// very important if you want to get objects form SiteControllers

use app\core\App;
use app\core\Controller;
use app\core\Request;

/**
 * Class SiteController
 * 
 * @author KhaledMahmoudSaeed <khaild22k12m71f@gmail.com>
 * @package app\controllers
 */

class SiteController extends Controller
{

    /* most of methods here have to be static  or just write code like that 
    $app->router->post('/contact', [new SiteController(), 'handelcontact']); instead of that $app->router->post('/contact', [SiteController::class, 'handelcontact']);
    to prevent such error
    Uncaught TypeError: call_user_func(): Argument #1 ($callback) must be a valid callback, non-static method app\controllers\SiteController::handelcontact() cannot be called statically
    // that is why we use call_user_func with object from anthor class */
    // public function __construct(
    //     $app
    // ) {
    //     $this->app = $app;
    // }
    public function appAccess($app)
    {
        self::$app = $app;
    }
    static function home()
    {
        $params = [
            "name" => "Khaled"
        ];
        return self::render('home', $params);
    }
    static function contact()
    {
        return self::render('contact');
    }
    static function handelcontact(
        Request $request
    ) {
        $body = $request->getbody();
        return "Handling Submitted data";
    }
}