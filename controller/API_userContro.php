<?php
include_once __DIR__.'/../model/userModel.php';

class UserContro {
// ----------------------- index -----------------------
    function index(){

        // require __DIR__.'/../view/user.php';
    }

// ----------------------- insert -----------------------

    function insert(){

        if($_SERVER["REQUEST_METHOD"]=="POST"){

            $data = json_decode(file_get_contents("php://input"));

            $obj = new UserModel();

            // $obj->varName(in qry) = $data->input's_Name;
            $obj->nom = $data->nom;
            $obj->prenom = $data->prenom;
            $obj->tel = $data->tel;
            $obj->email = $data->email;
            $obj->age = $data->age;
            $obj->reference = $data->cin;

            // $obj->prenom = $_POST['prenom'];
            // $obj->tel = $_POST['tel'];
            // $obj->email = $_POST['email'];
            // $obj->age = $_POST['age'];
            // $obj->reference = $_POST['cin'];
            
            $obj->insert($data->nom,$data->prenom,$data->tel,$data->email,$data->age,$data->cin);

        }   
        
    }

// ----------------------- insert -----------------------


}