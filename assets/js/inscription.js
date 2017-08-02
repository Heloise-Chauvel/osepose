$(document).ready(function(){

	// Gestion de l'inscription
			$("#inscription").on("click",function(){
			
				//status=true : inscription autorisé 
				var status=true;
				
				// Tout les messages d'erreurs sont masqué avant les vérifications
				$("#noemail").hide();
				$("#falseemail").hide();
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
				

				// Pour chaque condition, si la condition est vrai, on affiche un message d'erreur
				// Et on met status à faux
				
				// Message lié à l'année de naissance
				var date=new Date();
				if($("#year").val()>date.getFullYear()-13)
				{
						$("#tooyoung").show();
						status=false;
				}
				if($("#year").val()<date.getFullYear()-200)
				{
						$("#tooold").show();
						status=false;
				}
				if($("#year").val().length<=0)
				{
						$("#noyear").show();
						status=false;
				}
				
				// Message d'email
				if($("#email-i").val().length<=0)
				{
						$("#noemail").show();
						status=false;
				}
				
				// Vérification que l'email est une véritable email
				var reg = new RegExp('^[a-z0-9]+([_|\.|-]{1}[a-z0-9]+)*@[a-z0-9]+([_|\.|-]{1}[a-z0-9]+)*[\.]{1}[a-z]{2,6}$', 'i');
				if(!reg.test($("#email-i").val()))
				{
					$("#falseemail").show();
					status=false;
				}
				
				
				// Message de mot de passe
				if($("#pwd-i").val().length<=0)
				{
						$("#nopwd1").show();
						status=false;
				}
				if($("#pwd-i").val().length<8)
				{
						$("#length-pwd1").show();
						status=false;
				}
				if($("#pwd2-i").val().length<=0 && $("#pwd-i").val().length>0)
				{
						$("#nopwd2").show();
						status=false;
				}
				if($("#pwd-i").val().length>=8 && $("#pwd2-i").val().length>=8 && $("#pwd2-i").val()!=$("#pwd-i").val())
				{
						$("#same-pwd2").show();
						status=false;
				}
				
				// Message concernant le sexe
				if(!$('input[name=gender]:checked').val())
				{
					$("#nosex").show();
					status=false;
				}
				
				// Message concernant le login
				if($("#login-i").val().length<=0)
				{
					$("#nologin").show();
					status=false;
				}
				
				if($("#login-i").val().length<6)
				{
					$("#length-login").show();
					status=false;
				}
				
				//Création du tableau des sports
				var tableauSport;
				
				
				
				// Si l'inscription est autorisé
				if(status==true)
				{
					var info=true;
					
					// On vérifie que l'adresse e-mail n'éxiste pas et que le login est inconnu de la base
					// Si les infos sont déjà connu on ne fait pas d'inscription
					var request = $.ajax({
					  url: "lib/AJAX/connexion/verif_info.php",
					  method: "POST",
					  async: false,
					  data: { email : $("#email-i").val() , login : $("#login-i").val() },
					  dataType: "html"
					});
					 
					request.done(function( msg ) {
		
					  if(msg.split(",")[0]=="erreur_email")
					  {
						  $("#exist-email").show();
						  info=false;
					  } 
					  if(msg.split(",")[1]=="erreur_login")
					  {
						  $("#exist-login").show();
						  info=false;
					  } 
					});
					
					// Si les infos sont toutes juste on effectue l'enregistrement
					if (info==true)
					{
						var sports="";
						for(i=0;i<$('.sports:checked').length;i++)
						{
							sports=sports+$('.sports:checked').eq(i).val()+",";
						}
						localStorage.setItem("sports",sports);
						$("#inscription-ok").attr("action",$("#inscription-ok").attr("action")+"?sports="+sports)
						$("#inscription-ok").submit();
						
					}
				}
				
			});// fin event click
	
});