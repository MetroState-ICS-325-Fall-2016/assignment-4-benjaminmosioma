<?php
/**
 * Created by PhpStorm.
 * User: benjaminmosioma
 * Date: 9/20/16
 * Time: 8:36 PM
 */
class User
{
    public $name;
    public $age;
    public static $minimumPasswordLength = 6;

    public function Describe()
    {
        return $this->name . " is " . $this->age . " years old";
    }

    public static function ValidatePassword($password)
    {
        if(strlen($password) >= self::$minimumPasswordLength)
            return true;
        else
            return false;
    }
}

$password = "test1";
if(User::ValidatePassword($password))
    echo "Password is valid!";
else
    echo "Password is NOT valid!";