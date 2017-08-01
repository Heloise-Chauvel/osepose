 <?php
//$bdd = new PDO('mysql:host=localhost;dbname=qui_joue', 'root', '');
?>

<nav class="navbar navbar-default">
  <div class="container-fluid navbar-perso">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header navbar-perso">
      <button type="button" class="collapsed navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
	  <h1 class="h1 hidden-sm hidden-lg hidden-md lien"><a class="color-perso lien navbar-brand " href="#"> Qui joue ?</a></h1>
    </div>
	<h1 class="h1 hidden-xs lien"><a class="pull-right color-perso lien navbar-brand" href="#"> Qui joue ? </a></h1>
	
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-perso" id="bs-example-navbar-collapse-1">
      <ul class=" nav navbar-nav">
        <li class="background-hover"><a href="#">Accueil <span class="sr-only">(current)</span></a></li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="color" class="form-control" placeholder="Chercher un utilisateur">
        </div>
        <button type="submit" class="btn btn-default">Chercher</button>
      </form>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>