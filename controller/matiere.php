<?php

require_once "model/matieremodel.php";

class Matiere
{


        public function create()
        {

                require_once "view/matiere/create.php";
        }
        public function save()
        {
                $obj = new MatiereModel();
                $obj->name = $_POST['name'];
                $obj->insert();
                ////////////////////////////////
                header("location:http://localhost/brief5/matiere");
        }
        public function index()
        {

                $obj = new MatiereModel;

                $matieres = $obj->getAll();

                require_once "view/matiere/index.php";
        }
        public function delete($id)
        {

                MatiereModel::sup($id);

                header("location:http://localhost/brief5/matiere");
        }

        public function edit($id)
        {

                $obj = new MatiereModel;
                $matiereedit = $obj->edit($id);
                require_once "view/matiere/edit.php";
        }
        public function makeedit($id)
        {

                $obj = new MatiereModel;
                $obj->name = $_POST['name'];

                $obj->makeedit($id);
                header("location:http://localhost/brief5/matiere");
        }
}
