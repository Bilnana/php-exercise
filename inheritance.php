<?php
/**
 * Created by PhpStorm.
 * User: biljana
 * Date: 1/23/18
 * Time: 1:34 PM
 */

class Car {
    public $model;

    function tipOfCar($model){
        echo $model;
    }
}

class SportCar extends Car{

}

$sportsCar1 = new SportCar();

$sportsCar1 -> tipOfCar('Mercedes Benz');

echo $sportsCar1 -> tipOfCar();