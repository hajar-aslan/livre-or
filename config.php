<?php 
/*$bd_username = 'root';
$bd_password = '';
$bd_name = 'livreor';
$bd_host = 'localhost';
$bd = mysqli_connect($bd_host, $bd_username, $bd_password,$bd_name)
or die('could not connect to database');*/

$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'livreor';


// on établit la connexion 
$connexion = mysqli_connect($servername, $username, $password, $database);
            
//On vérifie la connexion
if(!$connexion) {
    die('Erreur : ' .mysqli_connect_error());
 }
 // echo 'Connexion réussie';
 // on ferme la connexion 
 //mysqli_close($connexion);


?>
