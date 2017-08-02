<html lang="fr">
   <head>
      <title>Ose Pose </title>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Liaisons aux fichiers css de Bootstrap -->
      <link href="dist/css/bootstrap.min.css" rel="stylesheet" />
      <link href="dist/css/bootstrap-theme.min.css" rel="stylesheet" />
      <link href="assets/css/font.css" rel="stylesheet" />
      <link href="assets/css/template.css" rel="stylesheet" />
	  <link rel="icon" type="image/png" href="assets/img/logo.png" />
	  
      <!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
      <!--[if lt IE 9]>
      <script src="dist/js/html5shiv.js"></script>
      <script src="dist/js/respond.js"></script>
      <![endif]-->
   </head>
   <body>
      <?php
      session_start();
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