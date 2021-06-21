<?php

class Connection {
    public $server = 'localhost';
    public $username = 'root';
    public $dbname ='brief_6';
    public $password = '';
    public $conn;

    public function conn() {
        
        try{

            $this->conn = new PDO("mysql: host= $this->server ;dbname=brief_6" , $this->username , $this->password);
            return $this->conn;
        
        }catch(PDOException $e) {
           
            echo "Connection Error: " . $e->getMessage();
        
        }
    }
}