<!-- link css body accueil -->
<link href="assets/css/body_accueil.css" rel="stylesheet" />
<!-- header --->
<?php include($_SERVER['DOCUMENT_ROOT'].'/osepose/lib/header.php'); ?>
<body id="fond">
<header>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/osepose/lib/fonctions/navbar.php'); ?>
</header>

<div class="container-perso">
    <div class="row defis" id="premier_defi">
        <!-- On the left -->
        <div class="col-md-5-5">
            <img src="assets/img/image_franz.png" class="profil_1" alt="profil-x">
            <h2 class="name_gauche">Franz</h2>
            <p class="commentaire"><a href="#" class="sport_lien">#Boxe:</a> entrainement intensif !!</p>
            <video class="gauche" controls="controls" width="100%" preload="metadata">
                <source src="videos/floyd_boxe.mp4" type="video/mp4">
            </video>

            <img src="assets/img/fond_gris_vote.png" class="fond_gris_vote" alt="vote_jaune">
            <img src="assets/img/vote_white.png" class="etoile_white" alt="vote_blanc">

            <span class="vote_person" >1k</span>

        </div>

        <!-- The time -->
        <div id="time-container">
            <div id="time">
                <h5>Temps restant</h5>
                <span id="chronotime"></span>
            </div>
        </div>

        <!--On the right-->
        <div class="col-md-5-5">
            <img src="assets/img/william.png" class="profil_2" alt="profil-y">
            <h2 class="name_droite">William</h2>
            <p class="commentaire"><a href="#" class="sport_lien">#Surf:</a> Plaisir, plaisir avant tout !</p>
            <video  class="droite" controls="controls" width="100%" preload="metadata">
                <source src="videos/sport_mer.mp4">
            </video>

            <img src="assets/img/fond_gris_vote.png" class="fond_gris_vote" alt="vote_jaune">
            <img src="assets/img/vote_white.png" class="etoile_white" alt="vote_blanc">
        </div>
    </div>

    <div class="defis">

    </div>

    <div class="defis">

    </div>
</div>

<!-- footer -->
<?php include($_SERVER['DOCUMENT_ROOT'].'/osepose/lib/footer.php'); ?>
</body>
</html>
