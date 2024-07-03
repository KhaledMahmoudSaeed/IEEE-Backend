<?php
namespace app\core;

use app\core\App;

/**
 * Class Model
 * 
 * @author KhaledMahmoudSaeed <khaild22k12m71f@gmail.com>
 * @package app\core
 */
abstract class Model
{
    public const RULE_REQUIRED = 'required';
    public const RULE_EMAIL = 'email';
    public const RULE_MIN = 'min';
    public const RULE_MAX = 'max';
    public const RULE_MATCH = 'match';
    public const RULE_UNIQUE = 'unique';

    public array $errors = [];
    abstract public function rules(): array;

    public function loaddata($data)
    {
        foreach ($data as $key => $value) {
            if (property_exists($this, $key)) {
                $this->{$key} = $value;
            }
        }
    }

    public function validate(
    ) {
        foreach ($this->rules() as $attribute => $rules) {

            $value = $this->{$attribute};
            foreach ($rules as $rule) {
                $rulename = $rule;
                if (!is_string($rulename)) {
                    $rulename = $rule[0];
                }
                if ($rulename === self::RULE_REQUIRED && !$value) {
                    $this->adderror($attribute, self::RULE_REQUIRED);
                }
                if ($rulename === self::RULE_EMAIL && !filter_var($value, FILTER_VALIDATE_EMAIL)) {
                    $this->adderror($attribute, self::RULE_EMAIL);
                }
                if ($rulename === self::RULE_MIN && strlen($value) < $rule['min']) {
                    $this->adderror($attribute, self::RULE_MIN, $rule);
                }
                if ($rulename === self::RULE_MAX && strlen($value) > $rule['max']) {
                    $this->adderror($attribute, self::RULE_MAX, $rule);
                }
                if ($rulename === self::RULE_MATCH && $value !== $this->{$rule['match']}) {
                    $rule['match'] = $this->getlabel($rule['match']);
                    $this->adderror($attribute, self::RULE_MATCH, $rule);
                }
                if ($rulename === self::RULE_UNIQUE) {
                    $classname = $rule['class'];
                    $uniqueAttr = $rule['attribute'] ?? $attribute;
                    $tabelname = $classname::tableName;
                    $statment = App::$app->db->prepare("SELECT * FROM $tabelname $uniqueAttr=:attr");
                    $statment->bindValue(":attr", $value);
                    $statment->execute();
                    $record = $statment->fetchObject();
                    if ($record) {
                        $this->adderror($attribute, self::RULE_UNIQUE, ['field' => $this->getlabel($attribute)]);
                    }
                }
            }
        }
        return empty($this->errors);
    }
    public function adderror(string $attribute, string $rule, $params = [])
    {
        $message = $this->errormessages()[$rule] ?? '';
        foreach ($params as $key => $value) {
            $message = str_replace("{{$key}}", $value, $message);
        }
        $this->errors[$attribute][] = $message;
    }
    public function errormessages()
    {
        return [
            self::RULE_REQUIRED => 'This is required',
            self::RULE_EMAIL => 'This is field must be vaild email address',
            self::RULE_MIN => 'min length of this field must be {min}',
            self::RULE_MAX => 'max length of this field must be {max}',
            self::RULE_MATCH => 'This is field must be the same as {match}',
            self::RULE_UNIQUE => 'Record with this {field} already exists',
        ];
    }
    public function haserror($attribute)
    {
        return $this->errors[$attribute] ?? false;
    }
    public function getFirstError($attribute)
    {
        return $this->errors[$attribute][0] ?? false;
    }
    public function labels(): array
    {
        return [];
    }
    public function getlabel($attribute)
    {
        return $this->labels()[$attribute] ?? $attribute;
    }
}