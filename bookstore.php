<?php
/**
 * Created by PhpStorm.
 * User: biljana
 * Date: 1/25/18
 * Time: 1:37 AM
 */

class Book{

    public $price;
    public $title;

    public function setPrice($par){
        $this->price = $par;
    }

    public function getPrice(){
        return $this->price;
    }

    public function setTitle($par){
        $this->title = $par;
    }

    public function getTitle(){
        return $this->title;
    }
}


$firstBook= new Book;
$firstBook->setPrice(40);

$firstBook->setTitle('Alhemist');
$firstBook->getTitle();
echo  'The price of '.$firstBook->getTitle() .' is '.$firstBook->getPrice() .' $. ';