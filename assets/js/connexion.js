$(document).ready(function(){
			// GESTION DE LA CONNEXION
			$("#connexion").on("click",function(){
				var connexion=true;
				
				if($("#email").val().length<=0)
				{
					$("#nologin-connexion").show();
					connexion=false;
				}
				
				if($("#pwd").val().length<8)
				{
					$("#inexistant").show();
					connexion=false;
				}
				
				if(connexion==true)
				{
					var info_connexion=true;
					
					var request = $.ajax({
					  url: "lib/AJAX/connexion/connexion.php",
					  method: "POST",
					  async: false,
					  data: { identifiant : $("#email").val() , password : $("#pwd").val() },
					  dataType: "html"
					});
					 
					request.done(function( msg ) {
		
					  if(msg=="inexistant")
					  {
						  $("#inexistant").show();
						  info_connexion=false;
					  }
					  if(msg=="OK")
					  {
						  $("#form-connexion").submit();
					  }							
					});
				
				}
			});
});
			