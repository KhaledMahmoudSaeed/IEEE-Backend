<?php
// remember to run php -S localhost:8080 in terminal before starting and run in browser localhost:8080 it will be slightly diffrenet

use app\controllers\AuthController;
use app\core\App;
use app\controllers\SiteController;
use app\models\User;/* instead of every time when you write /app/core where ever you create a new object, and because App,Router is
in the same Directory */

require_once __DIR__ . '/../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

$config = [
    'userClass' => User::class,
    'db' => [
        'dsn' => $_ENV['DB_DSN'],
        'username' => $_ENV['DB_USER'],
        'password' => $_ENV['DB_PASSWORD'],
    ]
];

$app = new App(dirname(__DIR__), $config);
// $sc = new SiteController();
// $au = new AuthController();
// $sc->appAccess($app);
// $au->appAccess($app);

// $app->router->get('/', [new SiteController($app), 'home']);
// $app->router->get('/contact', [new SiteController($app), 'contact']);
// $app->router->post('/contact', [new SiteController($app), 'handelcontact']);

// $app->router->get('/login', [new AuthController($app), 'login']);
// $app->router->post('/login', [new AuthController($app), 'login']);

// $app->router->get('/register', [new AuthController($app), 'register']);
// $app->router->post('/register', [new AuthController($app), 'register']);

$app->router->get('/', [SiteController::class, 'home']);
$app->router->get('/contact', [SiteController::class, 'contact']);
$app->router->post('/contact', [SiteController::class, 'contact']);

$app->router->get('/login', [AuthController::class, 'login']);
$app->router->post('/login', [AuthController::class, 'login']);

$app->router->get('/register', [AuthController::class, 'register']);
$app->router->post('/register', [AuthController::class, 'register']);
$app->router->get('/logout', [AuthController::class, 'logout']);
$app->router->get('/profile', [AuthController::class, 'profile']);

$app->run();
