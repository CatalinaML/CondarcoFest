<?php

namespace DAO;

use Models\Guest as Guest;
use DAO\IRepositorio as IRepositorio;
use DAO\Connection as Connection;
use Exception;
use PDOException;

class GuestDAO implements IRepositorio{

    private $connection;

    public function add($guest){
        try{
            $this->connection = Connection::GetInstance();

            $query = "INSERT INTO guest (name, last_name, dni, paid, is_in, in_charge, id_event) 
                        VALUES (:name, :last_name, :dni, :paid, :is_in, :in_charge, :id_event)";

            $params['name'] = $guest->getName();
            $params['last_name'] = $guest->getLastName();
            $params['dni'] = $guest->getDni();
            $params['paid'] = $guest->getPaid();
            $params['is_in'] = $guest->getIs_in();
            $params['in_charge'] = $guest->getIn_charge();
            $params['id_event'] = $guest->getIdEvent();

            $this->connection->ExecuteNonQuery($query, $params);

        }catch(Exception $e){
            throw $e;
        }
    }

    public function getById($id)
    {

    }

    public function getAll()
    {
        try {
            $array = array();
            $query = "SELECT * FROM guest";
            $this->connection = Connection::GetInstance();
            $resultado = $this->connection->Execute($query);

            foreach ($resultado as $fila) {

                $guest = new Guest($fila['in_charge'], $fila['name'], $fila['last_name'], $fila['dni'], $fila['paid']);
                $guest->setIdEvent($fila['id_event']);
                $guest->setIs_in($fila['is_in']);
                $guest->setPaid($fila['paid']);
                $guest->setId($fila['id_guest']);

                array_push($array, $guest);
            }

            return $array;
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function remove($id)
    {
        try{
            $this->connection = Connection::GetInstance();
            $query = "DELETE FROM guest WHERE id_guest = :id_guest";

            $params['id_guest'] = $id;

            $this->connection->ExecuteNonQuery($query, $params);
        }catch(Exception $e){
            throw $e;
        }
    }

}