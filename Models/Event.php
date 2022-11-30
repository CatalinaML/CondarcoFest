<?php
namespace Models;

class Event{
    private $price;
    private $is_in;
    private $in_charge;

    public function __construct($price, $is_in, $in_charge)
    {
        $this->price = $price;
        $this->is_in = $is_in;
        $this->in_charge = $in_charge;
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
}