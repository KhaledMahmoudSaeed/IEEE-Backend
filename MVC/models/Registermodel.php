<?php
namespace app\models;

use app\core\App;
use app\core\Controller;
use app\core\Model;
use app\core\Request;

/**
 * Class Registermodel
 * 
 * @author KhaledMahmoudSaeed <khaild22k12m71f@gmail.com>
 * @package app\models
 */
class Registermodel extends Model
{
    public string $firstname;
    public string $lastname;
    public string $email;
    public string $password;
    public string $prepassword;
    public function register()
    {

    }
    public function rules(): array
    {
        return [
            'firstname' => [self::RULE_REQUIRED],
            'lastname' => [self::RULE_REQUIRED],
            'email' => [self::RULE_REQUIRED, self::RULE_EMAIL],
            'password' => [self::RULE_REQUIRED, [self::RULE_MIN, 'min' => 8], [self::RULE_MAX, 'max' => 24]],
            'prepassword' => [self::RULE_REQUIRED, [self::RULE_MATCH, 'match' => 'password']],
        ];
    }

}