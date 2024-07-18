<?php
namespace app\controllers;

// very important if you want to get objects form SiteControllers

use app\core\App;
use app\core\Controller;
use app\core\Request;
use app\models\ContactForm;

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

    public function home()
    {
        $params = [
            "name" => "Khaled"
        ];
        return $this->render('home', $params);
    }
    public function contact(Request $request)
    {
        $contact = new ContactForm();
        if ($request->isPost()) {
            $contact->loaddata($request->getbody());
            if ($contact->validate() && $contact->send()) {
                App::$app->session->setFlash('success', 'Thanks for Contacting us ');
                return $response->redirect('/contact');
            }
        }
        return $this->render('contact', ['model'=>$contact]);
    }

}