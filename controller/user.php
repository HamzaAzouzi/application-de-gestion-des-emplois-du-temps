<?php
require_once "model/usermodel.php";
class User
{



    public function login()
    {
        require_once "view/register/login.php";

    }


    public function signup()
    {
        $obj1 = new UserModel;
        $matieres= $obj1->getmatiere();
        require_once "view/register/signup.php";

    }



    public function up()
    {
        $obj = new UserModel;

        if ($_POST["password"] === $_POST["confirm"]) {

            $obj->Username = $_POST["username"];
            $obj->Email = $_POST["email"];
            $obj->password = $_POST["password"];
            $obj->id_matiere = $_POST["id_matiere"];
            $obj->insert();
            header("location:http://localhost/brief5/groupe");
        } else {
            echo "  <script> alert('password not confirmed')  </script> ";
        }
    }

    public function lgn()
    {

        $obj = new UserModel;

        $obj->Email = $_POST["email"];
        $user = $obj->check();
        if ($user) {
            if ($_POST['password'] === $user->password) {
                $_SESSION['logged'] = true;
                header("location:http://localhost/brief5/home");
            } else {
                header("location:http://localhost/brief5/user/login");
            }
        }
    }


    public function logout()
    {
        session_destroy();
        header("location:http://localhost/brief5/user/login");
    }
}
