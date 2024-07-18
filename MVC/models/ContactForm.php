<?php
namespace app\models;

use app\core\App;
use app\core\Model;


/**
 * Class ContactForm
 * 
 * @author KhaledMahmoudSaeed <khaild22k12m71f@gmail.com>
 * @package app\models
 */

class ContactForm extends Model
{
    public string $subject = '';
    public string $email = '';
    public string $body = '';
    public function rules(): array
    {
        return [
            'subject' => [self::RULE_REQUIRED],
            'email' => [self::RULE_REQUIRED],
            'body' => [self::RULE_REQUIRED]
        ];
    }
    public function labels(): array
    {
        return [
            'subject' => 'Enter Your Subject',
            'email' => 'Email',
            'body' => 'Body',

        ];
    }
    public function send()
    {
        return true;
    }
}