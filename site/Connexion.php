<?php
class Connexion {

    private $dbco;
    public function __construct() {
        $servname = 'localhost';
        $dbname = 'pdodb';
        $user = 'root';
        $pass = 'root';
        
        try{
            $this->dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
            $this->dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $e){
            echo 'Erreur : '.$e->getMessage();
        }
    }

    public function prepare($sql) {
        return $this->dbco->prepare($sql);
    }
    public function lastInsertId(){
        return $this->dbco->lastInsertId();
    }
}
       
        ?>