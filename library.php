<?php

function getRoute() {
	/**
		cette fonction analyse la requete pour savoir quelle
		est l'action voulue.
		elle retourne une action valide et prête à être appelée	
	*/		
	$action = $_GET["action"]  ?? "index";
	if (! is_callable($action)) throw new Exception ("Cette action $action n'est pas prise en charge sur ce serveur");
	return $action;
}

function afficher ($view, array $data =array()) {	
	if (!file_exists("views/".$view))
	throw new Exception("Fichier Views/$view introuvable");				
	extract($data);
	require ("views/".$view);						
}