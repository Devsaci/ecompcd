

<?php
//Gestionnaire de requettes
require "include.php";

$url = trim($_SERVER['PATH_INFO'], '/');
$url = explode('/', $url);
$route = array("accueil", "contact");
//print_r($url);
$action = $url[0];
// print_r($action);

// controller
if (!in_array($action, $route)) {
    $title = "Page Error";
    $content = "URL introuvable !";
} else {
    //echo "Bienvenue dans la page   ".$action ;
    $function = "display" . ucwords($action);
    $title = "Page " . $action;
    $content = $function();
    //echo $function;
}
require VIEWS . SP . "templates" . SP . "default.php";
?>


