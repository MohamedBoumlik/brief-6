<?php
include_once __DIR__.'/../model/userModel.php';

class UserContro {
// ----------------------- index -----------------------
    function index(){

        require __DIR__.'/../view/user.php';
    }

// ----------------------- insert -----------------------

    function insert(){

        $obj = new UserModel();
        $obj->nom = $_POST['nom'];
        $obj->prenom = $_POST['prenom'];
        $obj->tel = $_POST['tel'];
        $obj->email = $_POST['email'];
        $obj->age = $_POST['age'];
        $obj->reference = $_POST['cin'];
        $obj->insert();

        // header("http://localhost/brief6/");
        
    }

// ----------------------- insert -----------------------


}