<?php 
class DataLayer {
private $connection;
function __construct(){

    try {
        $this->connexion = new PDO("mysql:host=".HOST.";dbname=".DB_NAME,DB_USER,DB_PASSWORD);
        //echo "connection Ok";
    } catch (PDOException $th) {
        echo $th->getMessage();
    }
}
function createCustomers($pseudo,$email,$password){
    $sql = "INSERT INTO customers (pseudo,email,password) VALUES (:pseudo,:email,:password)";
try {
    $result = $this->connexion->prepare($sql);
    $var = $result->execute(array(
        ':pseudo' => $pseudo,
        ':email' => $email,
        ':password' => ($password)
    ));

    if($var){
        return TRUE;
    }else{
        return FALSE;
    }
} catch (PDOException $th) {
    return NULL;
}
}







}