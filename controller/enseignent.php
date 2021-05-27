<?php
   require_once  "model/EnseignentModel.php";

class enseignent{

    public function create(){
        $obj1 = new EnseignentModel;
        $salles= $obj1->getsalle();
        $groupes= $obj1->getgroupe();
        
        
        require_once "view/enseignent/create.php";
    }
 

    public function index(){
    
        $obj1 = new EnseignentModel;
        $salles= $obj1->getsalle();

        $groupes= $obj1->getgroupe();
        
        require_once "view/enseignent/index.php";

      }   

       
    public function save(){
        
        $obj = new EnseignentModel;
        echo $obj->date=$_POST['date'];
        echo $obj->heure=$_POST['heure'];
        echo $obj->id_salle=$_POST['id_salle'];
        echo $obj->id_groupe=$_POST['id_groupe'];
        // echo $obj->id_matiere=$_POST['id_matiere'];
        
        $obj->insert();
       header("location:http://localhost/brief5/enseignent");
        
    }
}
