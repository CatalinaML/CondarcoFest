<?php

namespace DAO;

use Models\Event as Event;
use DAO\IRepositorio as IRepositorio;
use DAO\Connection as Connection;
use Exception;
use PDOException;

class EventDAO implements IRepositorio{

    private $connection;

    public function add($event){
        try{
            $this->connection = Connection::GetInstance();

            $query = "INSERT INTO event (name, date, price) VALUES (:name, :date, :price)";

            $params['name'] = $event->getName();
            $params['date'] = $event->getDate();
            $params['price'] = $event->getPrice();

            $this->connection->ExecuteNonQuery($query, $params);

        }catch(Exception $e){
            throw $e;
        }
    }

    public function getById($id)
    {
        try{
            $this->connection = Connection::GetInstance();
            $query = "SELECT * FROM event WHERE id_event = :id_event";

            $params['id_event'] = $id;

            $resultado = $this->connection->Execute($query, $params);

            $event = new Event($resultado[0]['price'], $resultado[0]['name'], $resultado[0]['date']);
            $event->setIdEvent($resultado[0]['id_event']);

            return $event;
        }catch(Exception $e){
            throw $e;
        }
    }

    public function getAll()
    {
        try {
            $array = array();
            $query = "SELECT * FROM event";
            $this->connection = Connection::GetInstance();
            $resultado = $this->connection->Execute($query);

            foreach ($resultado as $fila) {

                $evento = new Event($fila['price'], $fila['name'], $fila['date']);
                $evento->setIdEvent($fila['id_event']);
                array_push($array, $evento);
            }

            return $array;
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function remove($id)
    {
        
    }

}