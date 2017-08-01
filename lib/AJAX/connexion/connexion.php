<?php
		include($_SERVER['DOCUMENT_ROOT'].'/osepose/lib/config/config_bdd.php');
		session_start();
		$connexion=$db->prepare("SELECT *
			FROM user
			WHERE (login=:identifiant OR email=:identifiant)");
		$connexion->execute(array(
			"identifiant"=>$_POST["identifiant"],
		));
		$result_infos=$connexion->fetchAll();
		if(count($result_infos)==0)
		{
			echo 'inexistant';
		}
		else if($result_infos[0]['password']==sha1(sha1('osepose').sha1($_POST["password"]).sha1('osepose')))
		{
			$infos_user=array(
			'id'=>$result_infos[0]['id'],
			'login'=>$result_infos[0]['login'],
			'email'=>$result_infos[0]['email'],
			'password'=>$result_infos[0]['password'],
			'gender'=>$result_infos[0]['gender'],
			'sports'=>$result_infos[0]['sports'],
			'birthdate'=>$result_infos[0]['birthdate'],
			'rang'=>0
			);
			$_SESSION['infos_user']=$infos_user;
			echo 'OK';
		}
		else
		{
			echo 'inexistant';
		}
		
	?>