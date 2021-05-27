<?php 
    
    require_once "model/sallemodel.php";

    class Salle{
        
    
        public function create(){
         
          require_once "view/salle/create.php" ;
            
        }
        public function save(){
          
            $obj = new SalleModel; 
            $obj->name=$_POST['name'];
            $obj->capacity=$_POST['capacity'];

            $obj->insert();

            header("location:http://localhost/brief5/salle");

        }

        public function index(){
            require_once "view/includes/header.php" ;

            $obj= new SalleModel;
            $salles =$obj->getAll();
            require_once "view/salle/index.php";
            
        }

        public function delete($id){
            
            $obj=new SalleModel;
            $obj->sup($id);
            header("location:http://localhost/brief5/salle");

        }
        public function edit($id)
        {

                $obj = new SalleModel;
                $salleedit = $obj->edit($id);
                require_once "view/salle/edit.php";
        }
        public function makeedit($id)
        {

                $obj = new SalleModel;
                $obj->name = $_POST['name'];

                $obj->makeedit($id);
                header("location:http://localhost/brief5/salle");
        }
       
    }
