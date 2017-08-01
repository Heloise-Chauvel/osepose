<html lang="fr">
   <head>
      <title>Ose Pose </title>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Liaisons aux fichiers css de Bootstrap -->
      <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
      <link href="assets/css/bootstrap-theme.min.css" rel="stylesheet" />
      <link href="assets/css/font.css" rel="stylesheet" />
      <link href="assets/css/template.css" rel="stylesheet" />
	  <link rel="icon" type="image/png" href="assets/img/logo.png" />
	  
      <!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
      <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.js"></script>
      <![endif]-->
   </head>
   <body>
	<?php 
	session_start();
	include($_SERVER['DOCUMENT_ROOT'].'/osepose/lib/config/config_bdd.php');
	if($_POST["inscription"]==1)
	{
		$inscription=$db->prepare("INSERT INTO user (login, email, password, gender, sports, birthdate) 
		VALUES (:login, :email, :password, :gender, :sports, :birthdate)");
		$inscription->execute(array(
			'login'=>$_POST['login'],
			'email'=>$_POST['email'],
			'password'=>sha1(sha1('osepose').sha1($_POST['password']).sha1('osepose')),
			'gender'=>$_POST['sexe'],
			'sports'=>$_GET['sports'],
			'birthdate'=>$_POST['jour']."/".$_POST['mois']."/".$_POST['année']
		));
		$infos_user=array(
		'id'=>$db->lastInsertId(),
		'login'=>$_POST['login'],
		'email'=>$_POST['email'],
		'password'=>sha1(sha1('osepose').sha1($_POST['password']).sha1('osepose')),
		'gender'=>$_POST['sexe'],
		'sports'=>$_GET['sports'],
		'birthdate'=>$_POST['jour']."/".$_POST['mois']."/".$_POST['année'],
		'rang'=>0
		);
		$_SESSION['infos_user']=$infos_user;
	}
	?>
      <script src="assets/js/jquery.js" type="text/javascript"></script>
      <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
      <header>
	  <center>
			<h1 class="title">
				<span id="title-1">Ose</span> <span id="title-2">Pose</span>
			</h1>
		</center>
		<div class="header-profil">
		<img src="assets/img/user.png" class="img-responsive" /> <span><?php echo $_SESSION['infos_user']['login']; ?></span> <br /> <a href="#"><span>Aide</span></a>
		</div>
		<?php include($_SERVER['DOCUMENT_ROOT'].'/osepose/lib/fonctions/navbar.php'); ?>
	  </header>
	  
	  <div class="panel-content">
		
	  </div>
		
      <!--
         <footer>
         
         </footer>
         -->
   </body>
</html>