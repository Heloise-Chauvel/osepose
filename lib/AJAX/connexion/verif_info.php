<?php
			include($_SERVER['DOCUMENT_ROOT'].'/osepose/lib/config/config_bdd.php');
			$verif=$db->prepare("SELECT * FROM user WHERE (email=:email OR login=:login) ");
			$verif->execute(array(
				'email'=>$_POST['email'],
				'login'=>$_POST['login']
			));
			$resultat=$verif->fetchAll();
			
			
			if(isset($resultat[0]["email"]) && $resultat[0]["email"]==$_POST['email'])
			{
				echo "erreur_email,";
			}
			if(count($resultat)>0 && isset($resultat[0]["login"])  && $resultat[0]["login"]==$_POST['login'])
			{
				echo "erreur_login";
			}
	?>