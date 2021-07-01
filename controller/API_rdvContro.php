<?php
include_once __DIR__.'/../model/rdvModel.php';

class RdvContro {
// ----------------------- index -----------------------

    function readAll(){

        if($_SERVER["REQUEST_METHOD"]=="GET"){

            $obj = new  RdvModel();
            $rdvs = $obj->select()->fetchAll(PDO::FETCH_ASSOC);  
            echo json_encode($rdvs);

        }

    }

// ----------------------- insert -----------------------

    function insert() {

       if($_SERVER["REQUEST_METHOD"]=="POST"){
           
            // $obj = new RdvModel();
            // $obj->date = $_POST['date'];
            // $obj->consu = $_POST['consu'];
            // $obj->horaire = $_POST['horaire'];

            $data = json_decode(file_get_contents("php://input"));

            $obj = new RdvModel();

            $obj->date = $data->date;
            $obj->consu = $data->consu;
            $obj->horaire = $data->horaire;
            
            $obj->insert($data->date, $data->consu, $data->horaire);

        }

    }

// ----------------------- delete -----------------------

    function delete($id) {

        if($_SERVER["REQUEST_METHOD"]=="DELETE"){

            $obj = new RdvModel();
            $obj->delete($id);
            echo json_encode(["message"=>"delete success"]);
        }
    }

// ----------------------- edit -----------------------

    function edit($id) {

        if($_SERVER["REQUEST_METHOD"]=="GET"){

            $obj1 = new RdvModel();
            $res = $obj1->edit($id);
            // echo json_encode(["message"=>$res]);


        }
    }

// ----------------------- update -----------------------

    function update($id) {

        if($_SERVER["REQUEST_METHOD"]=="PUT"){

            $data = json_decode(file_get_contents("php://input"));

            $obj = new RdvModel();
            $obj->date = $data->date;
            $obj->consu = $data->consu;
            $obj->horaire = $data->horaire;
            $obj->update($id);
        
        }

    }
}