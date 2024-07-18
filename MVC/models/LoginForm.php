<?php
namespace app\models;

use app\core\App;
use app\core\Model;


/**
 * Class User
 * 
 * @author KhaledMahmoudSaeed <khaild22k12m71f@gmail.com>
 * @package app\models
 */



class LoginForm extends Model
{
    public string $email = '';
    public string $password = '';
    public function rules(): array
    {
        return [
            'email' => [
                self::RULE_REQUIRED,
                self::RULE_EMAIL
            ],
            'password' => [self::RULE_REQUIRED]
        ];
    }
    public function login()
    {
        $user = User::findOne(['email' => $this->email]);
        if (!$user) {
            $this->adderror('email', 'User not found with this email');
            return false;
        }
        if (!password_verify($this->password, $user->password)) {
            $this->adderror('password', 'Password is incorrect');
            return false;
        }

        return App::$app->login($user);
    }
    public function labels(): array
    {
        return [
            'email' => 'Your Email',
            'password' => 'Your Password'
        ];
    }
}