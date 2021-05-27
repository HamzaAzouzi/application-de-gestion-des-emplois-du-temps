<?php

require_once "connection.php";

class MatiereModel
{

    public $name;
    static $table = "matieres";
    public function insert()
    {
        // echo $this->name;

        $con = new Connection;
       
        $con->insert(self::$table, ['name'], [$this->name]);
        
    }
 
    static function getAll(){

        $con = new Connection;
        return $con->select(self::$table);
    }
    
    static function sup($id){

        $con = new Connection;
       $con->delete(self::$table,$id);

   }
   static function edit($id)
   {

       $con = new Connection;
       return  $con->edit(self::$table, $id);
   }
   public function makeedit($id)
   {
       
      
       $con = new Connection;
       return  $con->update(self::$table, ['name'], [ $_POST['name']], $id);
   }
}
