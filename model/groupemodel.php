<?php
require_once "connection.php";
class GroupeModel
{

    public $name;
    public $capacity;
    static $table = "groupes";

    public function insert()
    {

        $con = new Connection;
        $con->insert(self::$table, ['name', 'capacity'], [$this->name, $this->capacity]);
    }

    static function getAll()
    {

        $con = new Connection;
        return $con->select(self::$table);
    }

    static function sup($id)
    {

        $con = new Connection;
        $con->delete(self::$table, $id);
    }

    static function edit($id)
    {

        $con = new Connection;
        return  $con->edit(self::$table, $id);
    }
    public function makeedit($id)
    {
        
       
        $con = new Connection;
        return  $con->update(self::$table, ['name', 'capacity'], [ $_POST['name'],  $_POST['capacity']], $id);
    }
}
