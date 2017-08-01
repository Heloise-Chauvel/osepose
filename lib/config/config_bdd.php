<?php
$bd_name="osepose";
$hostname="root";
$bd_mdp="";
$host="localhost";

try
{
// Connexion à la base de données
$db = new PDO('mysql:host='.$host.';dbname='.$bd_name, $hostname, $bd_mdp);

// Configuration facultative de la connexion
//$db->setAttribute(PDO::ATTR_CASE, PDO::CASE_LOWER); // les noms de champs seront en caractères minuscules
$db->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION); // les erreurs lanceront des exceptions
}
catch(PDOException $e){
   var_dump('Connexion impossible');
   die();
}
?>