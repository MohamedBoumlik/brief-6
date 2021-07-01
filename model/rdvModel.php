<?php
require_once __DIR__.'/../model/connection.php';

class RdvModel {
    public $date;
    public $horaire;
    public $consu;

// ------------------------insert

    function insert() {

        $qry = "INSERT INTO brief_6.rendez_vous( `date`, `type_de_consultation`, `horaire`, `reference`) VALUES ('$this->date','$this->consu','$this->horaire','121')";
        $obj = new Connection();
        $res=$obj->conn()->prepare($qry);
        $res->execute();

    }

// ------------------------select

    function select() {
        
        $qry = "SELECT * FROM brief_6.rendez_vous";
        $obj = new Connection();
        return $obj->conn()->query($qry);

    }

// ------------------------delete

    function delete($id) {
        
        $qry = "DELETE FROM `rendez_vous` WHERE id=".$id;
        $obj = new Connection();
        $obj->conn()->query($qry);

    }

// ------------------------edit

    function edit($id) {

        $qry = "SELECT * FROM `rendez_vous` WHERE id=".$id;
        $obj1 = new Connection();
        return $obj1->conn()->query($qry)->fetch(PDO::FETCH_ASSOC);
        
    }

// ------------------------update

    function update($id) {

        $qry = "UPDATE `rendez_vous` SET `date`='$this->date',`type_de_consultation`='$this->consu',`horaire`='$this->horaire',`reference`='121' WHERE id=".$id;
        $obj = new Connection();
        $obj->conn()->query($qry);
        
    }
}