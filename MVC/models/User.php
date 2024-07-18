<?php
namespace app\models;

use app\core\App;
use app\core\Controller;
use app\core\DbModel;
use app\core\Model;
use app\core\Request;
use app\core\UserModel;

/**
 * Class User
 * 
 * @author KhaledMahmoudSaeed <khaild22k12m71f@gmail.com>
 * @package app\models
 */
class User extends UserModel
{
    const STATUS_INACTIVE = 0;
    const STATUS_ACTIVE = 1;
    const STATUS_DELETE = 2;
    public string $firstname = ' ';
    public string $lastname = ' ';
    public string $email = ' ';
    public int $status = self::STATUS_INACTIVE;
    public string $password = ' ';
    public string $prepassword = ' ';
    public function save()
    {
        $this->status = self::STATUS_INACTIVE;
        $this->password = password_hash($this->password, PASSWORD_DEFAULT);
        // return $this->save();
        return parent::save();
    }
    public function attributes(): array
    {
        return ['firstname', 'lastname', 'email', 'password', 'status'];
    }
    public static function tableName(): string
    {
        return 'users';
    }
    public function primaryKey(): string
    {
        return 'id';
    }
    public function rules(): array
    {
        return [
            'firstname' => [self::RULE_REQUIRED],
            'lastname' => [self::RULE_REQUIRED],
            'email' => [
                self::RULE_REQUIRED,
                self::RULE_EMAIL,
                [
                    self::RULE_UNIQUE,
                    'class' => self::class,
                ]
            ],
            'password' => [self::RULE_REQUIRED, [self::RULE_MIN, 'min' => 8], [self::RULE_MAX, 'max' => 24]],
            'prepassword' => [self::RULE_REQUIRED, [self::RULE_MATCH, 'match' => 'password']],
        ];
    }
    public function labels(): array
    {
        return
            [
                'firstname' => 'First Name',
                'lastname' => 'Last Name',
                'email' => 'Email',
                'password' => 'Password',
                'prepassword' => 'Re-password',
            ];
    }
    public function getDisplayname(): string
    {
        return $this->firstname . ' ' . $this->lastname;
    }
}