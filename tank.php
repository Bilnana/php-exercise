<?php
/**
 * Created by PhpStorm.
 * User: biljana
 * Date: 1/25/18
 * Time: 2:04 AM
 */

class Car{

    public $tank;

    public function fill($l){
        $this->tank += $l;

        return $this;
    }

    public function ride($r){
        $miles= $r;
        $gallons=$miles/50;
        $this->tank-= ($gallons);

        return $this;
    }
}

$bmv=new Car;
$tank=$bmw -> fill(10)->ride(20)->tank ;

echo "The number of gallons left in the tank: " . $tank . " gal.";