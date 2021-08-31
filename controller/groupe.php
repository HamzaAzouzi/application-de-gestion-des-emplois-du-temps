<?php
   require_once  "model/groupemodel.php";
 
class Groupe{
   
   
    public function create(){
        require_once "view/groupe/create.php";
    }
    // :::::::
    public function save(){
        
        $obj = new GroupeModel;
        $obj->name=$_POST['name'];
        $obj->capacity=$_POST['capacity'];

        $obj->insert();
       header("location:http://localhost/brief5/groupe");
        
    }

  public function index(){
    
      $obj = new GroupeModel;
      $groupes= $obj->getAll();

      require_once "view/groupe/index.php";
    }

    public function delete($id){
      
        GroupeModel::sup($id);

       header("location:http://localhost/brief5/groupe");
        

    }
    public function edit($id){

            $obj = new GroupeModel;
            $groupeedit=$obj->edit($id);
            require_once "view/groupe/edit.php";
          
    }
    public function makeedit($id){

            $obj = new GroupeModel;
             $obj->name=$_POST['name'];

             $obj->makeedit($id);
            header("location:http://localhost/brief5/groupe");
    }

}