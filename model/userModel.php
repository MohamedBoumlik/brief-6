<?php

require_once __DIR__.'/../model/connection.php';

class UserModel {
    public $nom;
    public $prenom;
    public $tel;
    public $email;
    public $age;
    public $reference;


// ------------------------insert

    function insert(){
        $reference=$this->tel.Date('y');
        $qry = "INSERT INTO brief_6.user(`reference`, `nom`, `prenom`, `age`, `tel`, `email`) VALUES ('".$reference."','$this->nom','$this->prenom',$this->age,$this->tel,'$this->email')";
        $obj = new Connection();
        $res=$obj->conn()->prepare($qry);
        $res->execute();

    }


}