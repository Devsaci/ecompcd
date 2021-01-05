<?php
//definition des constante
define("SRC", dirname(__FILE__));
//print_r(SRC);//exit();
define("ROOT", dirname(SRC));
define("SP", DIRECTORY_SEPARATOR);
define("VIEWS", ROOT.SP."views"); 
define("MODEL", ROOT.SP."model");
define("CONFIG", ROOT.SP."config"); 
//print_r(array(CONFIG,MODEL,VIEWS));

// import du model
require CONFIG.SP."config.php";
require MODEL.SP."DataLayer.class.php";
// Instanciation de DataLayer
$data = new DataLayer();exit();



// les fonctions appelée par le controller
require "functions.php";



?>