<?php
/**
 * Created by PhpStorm.
 * User: biljana
 * Date: 1/18/18
 * Time: 4:08 PM
 */

class Car {
    public $comp;
    public $color = "red";
    public $hasRoof = true;

    public function carNoise(){
        return "beep";
    }

    public function setNoise($newNoise){
        return $newNoise;
    }
}


$bmw = new Car;
echo $bmw->carNoise();
echo "<br/>";
echo $bmw->setNoise("scwrk");