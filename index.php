<html lang="fr">
   <head>
      <title>Ose Pose </title>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Liaisons aux fichiers css de Bootstrap -->
      <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
      <link href="assets/css/bootstrap-theme.min.css" rel="stylesheet" />
      <link href="assets/css/font.css" rel="stylesheet" />
      <link href="assets/css/perso.css" rel="stylesheet" />
	  <link rel="icon" type="image/png" href="assets/img/logo.png" />
	  
      <!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
      <!--[if lt IE 9]>
      <script src="dist/js/html5shiv.js"></script>
      <script src="dist/js/respond.js"></script>
      <![endif]-->
   </head>
   <body>
      <script src="dist/js/jquery.js" type="text/javascript"></script>
      <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	  <script src="assets/js/inscription.js" type="text/javascript"></script>
	  <script src="assets/js/connexion.js" type="text/javascript"></script>
      <header></header>
	  <center>
		<h1>
		<span id="title-1">Ose</span> <span id="title-2">Pose</span>
		</h1>
	  </center>
      <div class="row">
         <div class="col-md-12">
            <div class="panel-content">
                      <form role="form" method="POST" action="accueil.php" id="form-connexion">
					  <input type="hidden" name="inscription" value="2" />
						  <div class="form-group">
							<div class="label-perso">
							<label for="email">Login / mail : </label>
							</div>
							<div class="input-perso">
								<input type="text" class="form-control" id="email">
							</div>
							
							
							<!-- ENCART ERREUR IDENTIFIANT -->
							<div id="nologin-connexion" class="erreur"> Il faut renseigner votre adresse email OU votre login pour pouvoir vous connecter</div>
							<!-- ENCART ERREUR IDENTIFIANT -->
							
							
						  </div>
						  <br />
						  <div class="form-group">
							<div class="label-perso">
							<label for="pwd">Mot de passe : <br /> <a href="#"> <i style="font-size:0.70em;">Mot de passe oublié ?</i></a></label>
							</div>
							<div class="input-perso">
							<input type="password" class="form-control" id="pwd">
							</div>
						  </div>
						  
						   <center>
						  <div class="input-button-perso">
							<input type="button" class="btn-perso" id="connexion" value="Se connecter" />
						  </div>
						  </center>
						  <!-- ENCART ERREUR IDENTIFIANT INCORRECT -->
						  <div id="inexistant" class="erreur"> Les identifiants entrés sont incorrects. </div>
						  <!-- ENCART ERREUR IDENTIFIANT INCORRECT -->
						  
						</form>
            </div>
			
			
			
			 <div class="panel-content" style="float:left;">
                      <form role="form" method="post" action="accueil.php" id="inscription-ok">
						<input type="hidden" name="inscription" value="1" />
					  
						  <div class="form-group">
							<div class="label-perso">
							<label for="email-i"> Adresse mail : </label>
							</div>
							<div class="input-perso">
								<input type="email" name="email" class="form-control" id="email-i">
							</div>
							
							<!-- ENCART ERREUR MAIL -->
							<div id="noemail" class="erreur"> Merci de bien vouloir renseigner une adresse e-mail </div>
							<div id="falseemail" class="erreur"> Merci de bien vouloir renseigner une adresse e-mail valide </div>
							<div id="exist-email" class="erreur"> L'adresse e-mail a déjà été utilisé pour une inscription, merci d'utiliser l'outil mot de passe oublié </div>
							<!-- ENCART ERREUR MAIL -->
							
						  </div>
						  
						  
						  <div class="form-group">
							<div class="label-perso">
								<label for="login-i">Login : </label>
							</div>
							<div class="input-perso">
							<input type="text" name="login" class="form-control" id="login-i">
							</div>
							
							
							<!-- ENCART ERREUR LOGIN -->
							<div id="nologin" class="erreur"> Merci de bien vouloir renseigner un login </div>
							<div id="length-login" class="erreur"> Le login doit être composé d'au moins 6 caractères</div>
							<div id="exist-login" class="erreur"> Le login a déjà été utilisé pour une inscription, merci d'utiliser l'outil mot de passe oublié </div>
							<!-- ENCART ERREUR LOGIN -->
							
							
						  </div>
						  
						  
						   <div class="form-group">
							<div class="label-perso">
								<label for="pwd">Mot de passe : </label>
							</div>
							<div class="input-perso">
							<input type="password" name="password" class="form-control" id="pwd-i">
							</div>
							
							
							<!-- ENCART ERREUR PWD1 -->
							<div id="nopwd1" class="erreur"> Merci de bien vouloir renseigner un mot de passe </div>
							<div id="length-pwd1" class="erreur"> Le mot de passe est trop court pour des raisons de sécurité merci de renseigner un mot de passe d'au minimum 8 caractères </div>
							<!-- ENCART ERREUR PWD1 -->
							
							
						  </div>
						  
						  
						   <div class="form-group">
							<div class="label-perso">
								<label for="pwd2">Confirmer votre mot de passe : </label>
							</div>
							<div class="input-perso">
							<input type="password" class="form-control" id="pwd2-i">
							</div>
							
							<!-- ENCART ERREUR PWD1 -->
							<div id="nopwd2" class="erreur"> Il vous faut confirmer votre mot de passe </div>
							<div id="same-pwd2" class="erreur"> Le mot de passe renseigné n'est pas identique au précédent</div>
							<!-- ENCART ERREUR PWD1 -->
							
							
						  </div>
						  
						  <div class="form-group">
							<div class="label-perso">
								<label>Vous êtes  </label>
							</div>
							<div class="input-perso">
								<input type="radio" name="sexe" value="F" id="F" /> Femme
								<input type="radio" name="sexe" value="H" id="H" /> Homme
							</div>
							
							
							<!-- ENCART ERREUR SEX -->
							<div id="nosex" class="erreur"> Merci de bien vouloir renseigner votre sexe </div>
							<!-- ENCART ERREUR SEX -->
							
							
						  </div>
						  
						  
						  <div class="form-group">
							<div class="label-perso">
								<label>Date de naissance  </label>
							</div>
							<div class="input-perso">
								<select id="jour" name="jour">
									
								</select>
								
								<select id="mois" name="mois">
									<option value="01"> Janvier </option>
									<option value="02"> Février </option>
									<option value="03"> Mars </option>
									<option value="04"> Avril </option>
									<option value="05"> Mai </option>
									<option value="06"> Juin </option>
									<option value="07"> Juillet </option>
									<option value="08"> Août </option>
									<option value="09"> Septembre </option>
									<option value="10"> Octobre </option>
									<option value="11"> Novembre </option>
									<option value="12"> Décembre </option>
								</select>
								
								<input type="text" name="année" id="année" maxlength="4" size="4" />
							</div>
							
							<!-- ENCART ERREUR SEX -->
							<div id="tooyoung" class="erreur"> Il faut avoir plus de 13 ans pour s'inscrire sur ce site </div>
							<div id="tooold" class="erreur"> Vous avez dû vous tromper, il est impossible que vous ayez plus de 200 ans ! </div>
							<div id="noyear" class="erreur"> Merci d'accepter de renseigner votre année de naissance </div>
							<!-- ENCART ERREUR SEX -->
							
							
							
						  </div>
						  
						  <br />
						   <div class="form-group">
							<div class="label-perso">
								<label for="pwd2">Les sports que vous aimez : </label>
							</div>
							<div class="input-perso">
								<div id="multiple-select" >
									Listes déroulantes des sports <img src="assets/img/arrow.png" class="img-responsive" style="float:right;margin-top:2%;" id="arrow" />
								</div>
								<div id="multiple-option" >
									<br />
									Sport en tout genre
									<br />
									<input type="checkbox" class="sports"  value="VTT" /> VTT <br />
									<input type="checkbox" class="sports"  value="Boxe" /> Boxe <br />
									<input type="checkbox" class="sports"  value="Course" /> Course <br />
									<br />
									Sport Extreme
									<br />
									<input type="checkbox" class="sports"  value="Danse" /> Danse <br />
									<input type="checkbox" class="sports"  value="Equitation" /> Equitation <br />
									<input type="checkbox" class="sports"  value="Musculation" /> Musculation <br />
								</div>
							</div>
						
						  </div>
						  
						  <center>
						  <div class="input-button-perso">
							<input type="button" class="btn-perso" id="inscription" value="S'inscrire" />
						  </div>
						  </center>
						  
						  
						</form>
						  </div>
						  
						</div>
         </div>
      </div>
	  <script>
		
		$(document).ready(function(){
			
			// Par défaut tout les messages d'erreurs sont masqué
				$("#noemail").hide();
				$("#nopwd1").hide();
				$("#length-pwd1").hide();
				$("#nosex").hide();
				$("#nopwd2").hide();
				$("#same-pwd2").hide();
				$("#length-pwd1").hide();
				$("#nologin").hide();
				$("#length-login").hide();
				$("#tooyoung").hide();
				$("#tooold").hide();
				$("#noyear").hide();
				$("#exist-login").hide();
				$("#exist-email").hide();
				
				$("#nologin-connexion").hide();
				$("#inexistant").hide();
				
			// Jour
			var maxJour = 31;
			for(var i=1 ; i<=maxJour ; i++)
			{
				$("#jour").append($("<option value='"+i+"'>"+i+"</option>"));
			}
			
			// Adaptation des jours en fonction du mois : 
			$("#mois").on("change", function() {
				$("#jour").find("option").show();
				switch($(this).val())
				{
					case "02" : 
						$("#jour").find("option:gt(27)").hide();
						break;
					case "04" :
					case "06" :
					case "08" :
					case "10" :
					case "12" :
						$("#jour").find("option:gt(29)").hide();
						break;
					default : 
						break;
				}
				
				/*
				if($("#année").val()!="" && $("#année").val()%400==0 && $(this).val()=="02")
				{
					$("#jour").find("option").eq(28).show();
				}
				else
				{
					*/
					$("#jour").find("option").eq(28).hide();
				//}
			});
			
			/*
			//Changement du nombre de jour en cas d'année bisextile et de mois de février
			$("#année").on("change", function() {
				 if($(this).val()!="" && $(this).val()%400==0 && $("#mois").val()=="02")
				{
					$("#jour").find("option").eq(28).show();
				}
				else
				{
					$("#jour").find("option").eq(28).hide();
				}
			});
			*/
			
			// Gestion du menu déroulant pour les sports
			$("#multiple-select,input[type='checkbox'],#multiple-option").on("mouseover",function(){
				$("#multiple-option").show();
				$("#multiple-option").css("width",$("#multiple-select").width());
			});
			$(".input-perso,input,#multiple-option,#multiple-select").on("mouseout",function(){
				$("#multiple-option").hide();
			});
			
			

		}); // fin event ready
		
		
		
	  </script>
 							<br />
						  	<br />
						  	<br />

      <!--
         <footer>
         
         </footer>
         -->
   </body>
</html>