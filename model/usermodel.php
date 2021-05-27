<?php
    require_once "connection.php";
    
class UserModel
{

    public $Username;
    public $Email;
    public $password;
    public $id_matiere;
    
    static $table = "user";
    static $table3 = "matieres";

    public function insert()
    {

       
        $con = new Connection;
    
        $con->insert(self::$table, ['Username', 'Email','password','id_matiere'], [$this->Username, $this->Email,$this->password,$this->id_matiere ]);
        
    }

    public function check(){
        
        $con=new Connection;
        $user=$con->one(self::$table,$this->Email);
        return $user ;
       

    }
    public function getmatiere()
    {

        $con = new Connection;
        return $con->select(self::$table3);
    }
}

    ?>