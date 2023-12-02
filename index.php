<?php
require_once("library.php");
require_once("controller/Controller.php");

try {	
	$action =getRoute();
	$action();
}catch (Exception $e) {
	afficher("erreur.php",["message"=> $e->getMessage()]);
}