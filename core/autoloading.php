<?php
spl_autoload_register(function($nomDeClasse){


//require_once "core/Controllers/Garage.php";

$nomDeClasse = str_replace("\\", "/", $nomDeClasse);


require_once "core/$nomDeClasse.php";

//require_once "core/Controllers\Garage.php";


});