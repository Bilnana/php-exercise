<?php
/**
 * Created by PhpStorm.
 * User: biljana
 * Date: 1/24/18
 * Time: 4:08 PM
 */

class User {
    public $firstName;
    public $lastName;


    public function hello(){
        return 'Hello User';
    }
}


$user1 = new User;
$user1->firstName='Milena';
$user1->lastName='Dravic';

echo $user1->firstName ." ". $user1->lastName;


