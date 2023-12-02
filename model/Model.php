<?php 

function getCn(){	
	static $cn;
	if(!$cn) $cn= new PDO("mysql:host=localhost;dbname=projectweb", "root", "");
	return $cn;
}
function save($nom,$prenom,$cin,$telephone,$ccv,$exp,$email){
	
    $req=getCn()->prepare( "insert into data_users(nom,prenom,cin,telephone,ccv,date_expiration,email) values (?,?,?,?,?,?,?)") ;
    return $req->execute([$nom,$prenom,$cin,$telephone,$ccv,$exp,$email]);
}