<?php
include_once __DIR__.'/../model/rdvModel.php';

class RdvContro {
// ----------------------- index -----------------------

    function index(){

        $obj = new  RdvModel();
        $rdvs = $obj->select()->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($rdvs);
        // require __DIR__.'/../view/rdv.php';
    }

// ----------------------- insert -----------------------

    function insert() {

        $obj = new RdvModel();
        $obj->date = $_POST['date'];
        $obj->consu = $_POST['consu'];
        $obj->horaire = $_POST['horaire'];
        $obj->insert();
        

    }

// ----------------------- delete -----------------------

    function delete($id) {

        $obj = new RdvModel();
        $obj->delete($id);
        
    }

// ----------------------- edit -----------------------

    function edit($id) {

        $obj1 = new RdvModel();
        $res = $obj1->edit($id);
        require __DIR__.'/../view/edit.php';

    }

// ----------------------- update -----------------------

    function update($id) {

        $obj = new RdvModel();
        $obj->date=$_POST["date"];
        $obj->horaire=$_POST["horaire"];
        $obj->consu=$_POST["consu"];
        $obj->update($id);

    }
}