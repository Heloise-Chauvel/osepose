<!-- link css body accueil -->
<link href="assets/css/body_accueil.css" rel="stylesheet" />
<!-- header --->
<?php include($_SERVER['DOCUMENT_ROOT'].'/osepose/lib/header.php'); ?>
<body id="fond">
<header>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/osepose/lib/fonctions/navbar.php'); ?>
</header>


    <div class="defis" id="premier_defis">
        <!-- On the left -->
        <div class="defis_01">
            <img src="assets/img/image_franz.png" class="profil_1" alt="profil-x">
            <h2 class="name_gauche">Franz</h2>
            <p class="commentaire"><a href="#" class="sport_lien">#Boxe:</a> entrainement intensif !!</p>
            <video class="gauche" controls="controls" height="400" width="660" poster="assets/img/floyd.jpg" >
                <source src="videos/floyd_boxe.mp4" type="video/mp4">
            </video>

            <img src="assets/img/fond_gris_vote.png" class="fond_gris_vote" alt="vote_jaune">
            <img src="assets/img/vote_white.png" class="etoile_white" alt="vote_blanc">

            <span class="vote_person" >1k</span>

        </div>

        <!-- The time -->
        <div class="time" >
            <h5>Temps restant</h5>
            <span id="chronotime"></span>
        </div>

        <!--On the right-->
        <div class="defis_02">
            <img src="assets/img/william.png" class="profil_2" alt="profil-y">
            <h2 class="name_droite">William</h2>
            <p class="commentaire"><a href="#" class="sport_lien">#Surf:</a> Plaisir, plaisir avant tout !</p>
            <video  class="droite" controls="controls" height="400" width="660" poster="assets/img/surf.jpg">
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


<!-- footer -->
<?php include($_SERVER['DOCUMENT_ROOT'].'/osepose/lib/footer.php'); ?>
</body>
</html>
