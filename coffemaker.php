<?php
/**
 * Created by PhpStorm.
 * User: biljana
 * Date: 1/25/18
 * Time: 10:31 AM
 */

class Coffe{

    public $sugar;
    public $coffe;
    public $milk;
    public $end;

    /*function takeCoffe($parCoffe){
        $this->coffe=$parCoffe;
    }
    function takeShugar($parSugar){
        $this->sugar=$parSugar;
    }*/

    function makeCoffe($parSugar,$parCoffe,$parMilk){
        $this->coffe=$parCoffe;
        $this->sugar=$parSugar;
        $this->milk=$parMilk;

        if ($parCoffe>$parSugar && $parMilk==false){
            echo 'You make strong sweet coffe.';
        }
        if ($parCoffe<$parSugar && $parMilk==true){
            echo 'You make sweet capuchino.';
        }
        if ($parCoffe && $parSugar==0 && $parMilk==false){
            echo 'You make strong coffe.';
        }
        if ($parCoffe && $parSugar ==0 && $parMilk==true){
            echo 'You make strong capuchino.';
        }
        else{
            echo 'Enjoy :).';
        }

    }
}

$newCoffe= new Coffe;
echo $newCoffe->makeCoffe(2, 1,true);