<?php
namespace Models;

class Event{
    private $id_event;
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

    public function getIdEvent()
    {
       return $this->id_event;
    }

    public function setIdEvent($id_event){
        $this->id_event = $id_event;
    }
}