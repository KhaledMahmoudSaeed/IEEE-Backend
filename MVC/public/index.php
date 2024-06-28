<?php
// remember to run php -S localhost:8080 in terminal before starting and run in browser localhost:8080 it will be slightly diffrenet
require_once __DIR__ . '/../vendor/autoload.php';

use app\controllers\AuthController;
use app\core\App;
use app\controllers\SiteController;/* instead of every time when you write /app/core where ever you create a new object, and because App,Router is
in the same Directory */

$app = new App(dirname(__DIR__));
$sc = new SiteController();
$au = new AuthController();
$sc->appAccess($app);
$au->appAccess($app);
// $app->router->get('/', [new SiteController($app), 'home']);
// $app->router->get('/contact', [new SiteController($app), 'contact']);
// $app->router->post('/contact', [new SiteController($app), 'handelcontact']);

// $app->router->get('/login', [new AuthController($app), 'login']);
// $app->router->post('/login', [new AuthController($app), 'login']);

// $app->router->get('/register', [new AuthController($app), 'register']);
// $app->router->post('/register', [new AuthController($app), 'register']);

$app->router->get('/', [SiteController::class, 'home']);
$app->router->get('/contact', [SiteController::class, 'contact']);
$app->router->post('/contact', [SiteController::class, 'handelcontact']);

$app->router->get('/login', [AuthController::class, 'login']);
$app->router->post('/login', [AuthController::class, 'login']);

$app->router->get('/register', [AuthController::class, 'register']);
$app->router->post('/register', [AuthController::class, 'register']);
$app->run();
