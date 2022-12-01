<?php 

namespace DAO;

interface IRepositorio
{
    function add($obj);
    function getById($id);
    function getAll();
    function remove($id);
}

?>