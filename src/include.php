<?php
//definition des constante
define("SRC", dirname(__FILE__));
define("ROOT", dirname(SRC));
define("SP", DIRECTORY_SEPARATOR);
define("CONFIG", ROOT.SP."config"); 
define("VIEWS", ROOT.SP."views"); 
define("MODEL", ROOT.SP."model");
print_r(array(CONFIG,MODEL,VIEWS));

//print_r(SRC);//exit();
// les fonctions appelée par le controller
require "functions.php";



?>