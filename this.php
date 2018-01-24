<?php
/**
 * Created by PhpStorm.
 * User: biljana
 * Date: 1/24/18
 * Time: 4:29 PM
 */
class User {

    // The class properties.
    public $firstName;

    public $lastName;

    // A method that says hello to the user.
    public function hello()
    {
        return "hello, ". $this->firstName;
    }
}

$user2= new User;
$user2->firstName='Jonie';
$user2->lastName='Koks';

echo $user2->hello();