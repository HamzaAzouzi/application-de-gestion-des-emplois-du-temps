<?php
require_once "connection.php";
class EnseignentModel
{


    public $date;
    public $heure;
    public $id_salle;
    public $id_groupe;
    public $id_matiere;

    static $table = "suivi";
    static $table1 = "salles";
    static $table2 = "groupes";
    

    public function insert()
    {

        $con = new Connection;
        $con->insert(self::$table, ['date', 'heure', 'id_salle', 'id_groupe'], [$this->date, $this->heure, $this->id_salle, $this->id_groupe]);
    }

    public function getsalle()
    {

        $con = new Connection;
        return $con->select(self::$table1);
    }

    public function getgroupe()
    {

        $con = new Connection;
        return $con->select(self::$table2);
    }

    
}
