<?php
namespace app\core;

use app\core\App;

/**
 * Class Controller
 * 
 * @author KhaledMahmoudSaeed <khaild22k12m71f@gmail.com>
 * @package app\core
 */

class Controller
{
    static App $app;
    static string $layout = 'main';
    static function setlayout($layout)
    {
        self::$layout = $layout;
    }
    static function render($view, $params = [])
    {
        return self::$app->router->renderview($view, $params);
    }
}