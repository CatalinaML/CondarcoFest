<?php
namespace Models;

class Guest{
    private $id_guest;
    private $name;
    private $last_name;
    private $dni;

    public function __construct($id_guest, $name, $last_name, $dni)
    {
        $this->id_guest = $id_guest;
        $this->name = $name;
        $this->last_name = $last_name;
        $this->dni = $dni;
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
}