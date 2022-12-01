<?php
namespace Models;

class Event{
    private $name;
    private $date;
    private $price;
    private $is_in;
    private $in_charge;

    public function __construct($price, $is_in, $in_charge, $name, $date)
    {
        $this->price = $price;
        $this->is_in = $is_in;
        $this->in_charge = $in_charge;
        $this->name = $name;
        $this->date = $date;
    }

    public function getPrice(){
        return $this->price;
    }

    public function getIs_in(){
        return $this->is_in;
    }

    public function getIn_charge(){
        return $this->in_charge;
    }

    public function setIs_in($is_in){
        $this->is_in = $is_in;
    }

    public function getName(){
        return $this->name;
    }

    public function getDate(){
        return $this->date;
    }
}