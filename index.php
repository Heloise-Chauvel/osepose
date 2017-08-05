<!-- header --->
<?php include($_SERVER['DOCUMENT_ROOT'].'/osepose/lib/header.php'); ?>
<body>
    <!--Gestion des gestions-->
    <?php
    if(session_status() == PHP_SESSION_DISABLED || session_status() == PHP_SESSION_NONE):
    ?>
    <!--Nav-->
      <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <a class="navbar-brand" href="#">
              <img src="assets/img/ose-pose.png" id="logo" alt="logo">
          </a>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
              </ul>
              <form role="form" method="POST" action="accueil.php" id="form-connexion" class="form-inline my-2 my-lg-0">
                  <input type="hidden" name="inscription" value="2" />

                  <input class="form-control mr-sm-2" type="text" id="email" placeholder="Login/mail">
                  <!-- ENCART ERREUR IDENTIFIANT -->
                  <div id="nologin-connexion" class="erreur"> Il faut renseigner votre adresse email OU votre login pour pouvoir vous connecter</div>
                  <!-- ENCART ERREUR IDENTIFIANT -->

                  <div class="form-group">
                      <input class="form-control" type="password" id="pwd" placeholder="Mot de passe" aria-describedby="helpBlock">
                      <span id="helpBlock" class="help-block"><a href="#" id="mdp">Mot de passe oublié ?</a></span>
                  </div>

                  <button id="connexion" class="btn btn-outline-success my-2 my-sm-0" type="submit">Se connecter</button>

                  <!-- ENCART ERREUR IDENTIFIANT INCORRECT -->
                  <div id="inexistant" class="erreur"> Les identifiants entrés sont incorrects. </div>
                  <!-- ENCART ERREUR IDENTIFIANT INCORRECT -->
              </form>
          </div>
      </nav>

      <div class="container-fluid">
          <div class="row">
              <div class="col-lg-7 carousel">
                  <div id="carousel-sports" class="carousel slide" data-ride="carousel">
                      <div class="carousel-inner" role="listbox" >
                          <div class="carousel-item active">
                              <div class="slider-size">
                                <img class="d-block img-fluid" src="assets/img/motocross.jpg" alt="Second slide">
                              </div>
                          </div>
                          <div class="carousel-item">
                              <div class="slider-size">
                                  <img class="d-block img-fluid" src="assets/img/parkour.JPG" alt="Third slide">
                              </div>
                          </div>
                          <div class="carousel-item">
                              <div class="slider-size">
                                <img class="d-block img-fluid" src="assets/img/soccer.jpg" alt="Third slide">
                              </div>
                          </div>
                          <div class="carousel-item">
                              <div class="slider-size">
                                <img class="d-block img-fluid" src="assets/img/surf.jpg" alt="Third slide">
                              </div>
                          </div>
                          <div class="carousel-caption d-none d-md-block">
                              <h3>Défiez vos limites avec Ose-Pose !</h3>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="col-lg-5 inscription">
                  <form role="form" method="post" action="inscription.php" id="inscription-ok" class="form-horizontal">
                      <div class="col-lg-12">
                        <h2>Inscription</h2>
                      </div>

                      <input type="hidden" name="inscription" value="1" />

                      <div class="form-group">
                          <div class="col-lg-12">
                              <label for="email-i"> Adresse mail : </label>
                              <input type="email" name="email" class="form-control" id="email-i">
                          </div>
                          <!-- ENCART ERREUR MAIL -->
                          <div id="noemail" class="erreur"> Merci de bien vouloir renseigner une adresse e-mail. </div>
                          <div id="falseemail" class="erreur"> Merci de bien vouloir renseigner une adresse e-mail valide. </div>
                          <div id="exist-email" class="erreur"> L'adresse e-mail a déjà été utilisée pour une inscription, merci d'utiliser l'outil mot de passe oublié. </div>
                          <!-- ENCART ERREUR MAIL -->
                      </div>

                      <div class="form-group">
                          <div class="col-lg-12">
                              <label for="login-i">Login : </label>
                              <input type="text" name="login" class="form-control" id="login-i">
                          </div>

                          <!-- ENCART ERREUR LOGIN -->
                          <div id="nologin" class="erreur"> Merci de bien vouloir renseigner un login. </div>
                          <div id="length-login" class="erreur"> Le login doit être composé d'au moins 6 caractères. </div>
                          <div id="exist-login" class="erreur"> Le login a déjà été utilisé pour une inscription, merci d'utiliser l'outil mot de passe oublié. </div>
                          <!-- ENCART ERREUR LOGIN -->
                      </div>

                      <div class="form-group">
                          <div class="col-lg-12">
                              <label for="pwd-i">Mot de passe : </label>
                              <input type="password" name="password" class="form-control" id="pwd-i">
                          </div>

                          <!-- ENCART ERREUR PWD1 -->
                          <div id="nopwd1" class="erreur"> Merci de bien vouloir renseigner un mot de passe. </div>
                          <div id="length-pwd1" class="erreur"> Le mot de passe est trop court pour des raisons de sécurité merci de renseigner un mot de passe d'au minimum 8 caractères. </div>
                          <!-- ENCART ERREUR PWD1 -->
                      </div>

                      <div class="form-group">
                          <div class="col-lg-12">
                              <label for="pwd2-i">Confirmer votre mot de passe : </label>
                              <input type="password" class="form-control" id="pwd2-i">
                          </div>

                          <!-- ENCART ERREUR PWD1 -->
                          <div id="nopwd2" class="erreur"> Il vous faut confirmer votre mot de passe. </div>
                          <div id="same-pwd2" class="erreur"> Le mot de passe renseigné n'est pas identique au précédent. </div>
                          <!-- ENCART ERREUR PWD1 -->
                      </div>

                      <div class="form-group">
                          <div class="col-lg-12">
                              <label>Vous êtes  </label>
                              <input type="radio" name="gender" value="F" id="F" /> Femme
                              <input type="radio" name="gender" value="H" id="H" /> Homme
                          </div>
                          <!-- ENCART ERREUR SEX -->
                          <div id="nosex" class="erreur"> Merci de bien vouloir renseigner votre sexe. </div>
                          <!-- ENCART ERREUR SEX -->
                      </div>

                      <div class="form-group">
                          <label>Date de naissance  </label>
                          <select id="day" name="day"></select>

                          <select id="month" name="month">
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

                          <input type="text" name="year" id="year" maxlength="4" size="4" />
                      </div>

                      <!-- ENCART ERREUR SEX -->
                      <div id="tooyoung" class="erreur"> Il faut avoir plus de 13 ans pour s'inscrire sur ce site. </div>
                      <div id="tooold" class="erreur"> Vous avez dû vous tromper, il est impossible que vous ayez plus de 200 ans ! </div>
                      <div id="noyear" class="erreur"> Merci de renseigner votre année de naissance. </div>
                      <!-- ENCART ERREUR SEX -->

                      <br />
                      <div class="form-group">
                          <label>Les sports que vous aimez : </label>
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

                      <button class="btn" id="inscription"> S'inscrire </button>
                  </form>
              </div>
          </div>
      </div>
      <!-- footer -->
      <footer id="bas_de_page">
          <div id="element_footer">
              <p class="phrase_footer">
                  Ose-Pose est un réseau social révolutionnaire pour les sportifs, il permettra aux utilisateurs de se défier avec leurs vidéos, principalement sous forme de duels.
              </p>

          </div>
      </footer>
<?php else:
    header("Location:".$_SERVER['DOCUMENT_ROOT']."/osepose/accueil.php");
endif; ?>

<!-- footer --->
<?php include($_SERVER['DOCUMENT_ROOT'].'/osepose/lib/footer.php'); ?>