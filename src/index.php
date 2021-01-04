

<?php

$url = trim($_SERVER['PATH_INFO'],'/');
$url = explode('/',$url);
$route = array("accueil", "contact");
//print_r($url);
$action = $url[0];
// print_r($action);

// controller
if (!in_array($action,$route)) {
   echo "Page Error";
} else {
    echo "Bienvenue dans la page   ".$action ;

}
?>


