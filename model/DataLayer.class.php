<?php 
class DataLayer {
private $connection;
function __construct(){

    try {
        $this->connexion = new PDO("mysql:host=".HOST.";dbname=".DB_NAME,DB_USER,DB_PASSWORD);
        echo "connection Ok";
    } catch (PDOException $th) {
        echo $th->getMessage();
    }
}

}