<?php
namespace Models;

class Guest{
    private $id_guest;
    private $name;
    private $last_name;
    private $dni;
    private $paid;
    private $is_in;
    private $in_charge;

    public function __construct($id_guest, $name, $last_name, $dni, $paid)
    {
        $this->id_guest = $id_guest;
        $this->name = $name;
        $this->last_name = $last_name;
        $this->dni = $dni;
        $this->paid = $paid;
    }

    public function getId(){
        return $this->id_guest;
    }

    public function getName(){
        return $this->name;
    }

    public function getLasName(){
        return $this->last_name;
    }

    public function getDni(){
        return $this->dni;
    }

    public function getPaid(){
        return $this->paid;
    }

    public function getIn_charge(){
        return $this->in_charge;
    }

    public function getIs_in(){
        return $this->is_in;
    }

    public function setIs_in($is_in){
        $this->is_in = $is_in;
    }

    public function setPaid($paid){
        $this->paid = $paid;
    }
}