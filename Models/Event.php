<?php
namespace Models;

class Event{
    private $name;
    private $date;
    private $price;


    public function __construct($price, $name, $date)
    {
        $this->price = $price;
        $this->name = $name;
        $this->date = $date;
    }

    public function getPrice(){
        return $this->price;
    }

    public function getName(){
        return $this->name;
    }

    public function getDate(){
        return $this->date;
    }
}