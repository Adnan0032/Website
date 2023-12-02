<?php
require_once("model/Model.php");
function index()
{
    afficher("index.php");
}

function commande()
{
    $car = $_GET["id"] ?? "";
    $data = ["car" => $car];
    afficher("saisiedata.php", $data);
}
function buy()
{
    $nom =$_POST["nom"];
    $prenom =$_POST["prenom"];
    $cin =$_POST["cin"];
    $telephone =$_POST["telephone"];
    $ccv =$_POST["carte_bancaire"];
    $exp =$_POST["date_naissance"];
    $email =$_POST["email"];
    
        save($nom,$prenom,$cin,$telephone,$ccv,$exp,$email);
        
        header("location: index.php?action=result");
    
}
function auth(){
if ($_SERVER["REQUEST_METHOD"]=="POST") {	
    $email = $_POST["email"];
    $pas= $_POST["password"];			
    if(empty($email))    $erreur["email"] ="L'e-mail ne peut être vide !..."   ;
    if(empty($pas))    $erreur["password"] ="Le mot de passe ne peut être vide !..."   ;
    if (!isset($erreur)) {
    
    header ("location:index.php?action=data");	
    }
}
$data =["email" => $email ?? "",
				"password" =>  $pas ?? "" ,
				"erreur"=> $erreur ?? ""
			   ];
		afficher ("loginadmin.php",$data);
}
function result()
{
    $car = $_GET["id"] ?? "";
    $data = ["car" => $car];
    afficher("result.php", $data);
}

function data(){

    afficher("data.php");
}
function up(){
    afficher("update.php");
}
function update(){
   
$con=mysqli_connect("localhost","root","","projectweb"); 
if(!$con) { die(" Connection Error "); } 
if(isset($_POST["submit"])){
    $nom =$_POST["nom"];
    $lastname =$_POST["prenom"];
    $cin =$_POST["cin"];
    $telephone =$_POST["telephone"];
    $ccv =$_POST["carte_bancaire"];
    $exp =$_POST["date_naissance"];
    $email =$_POST["email"];
$sql="UPDATE `data_users` SET `nom`='$nom',`prenom`='$lastname',`cin`='$cin',`telephone`='$telephone',`ccv`='$ccv',`date_expiration`='$exp',`email`='$email'";
$result=mysqli_query($con,$sql);
if($result){
    echo '<script>alert("Update successfully");</script>';
    header("location: index.php?action=data");
}
}




}
