<nav class="navbar navbar-toggleable-md navbar-light bg-faded nav-principal" id="nav-principal">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand nav-image" href="#">
        <img src="assets/img/ose-pose.png" class="osepose-logo" alt="logo">
    </a>


    <!-- CSS NAVBAR -->
    <link href="assets/css/navbar.css" rel="stylesheet" />

    <!--<input type="search" class="input-sm-form-control" placeholder="Rechercher">
    <button type="button">Validez</button> -->

    <!--<input type="text" class="form-control"  placeholder="rechercher" id="bar_recherche" > -->


    <div class="input-group stylish-input-group" id="bar-recherche">
        <input type="text" class="form-control"  placeholder="Search" >
        <span class="input-group-addon">
            <button type="submit" class="btn">
                <img src="assets/img/recherche.png" class="img_recherche">
            </button>
        </span>
    </div>




    <div class="collapse navbar-collapse" id="navbarSupportedContent"  >

        <ul class="nav justify-content-right" id="nav">
            <li class="nav-item">

                <a class="nav-link active" href="http://localhost/osepose/accueil.php">Accueil </a>
            </li>
            <li class="nav-item">

                <a class="nav-link" href="http://localhost/osepose/defis.php">Défier</a>
            </li>
            <li class="nav-item">

                <a class="nav-link" href="http://localhost/osepose/amis.php">Amis</a>
            </li>
            <li class="nav-item">

                <a class="nav-link" href="http://localhost/osepose/profil.php">Profil</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#"><span>Aide</span></a>
                    <a class="dropdown-item" href="<?php $_SERVER['DOCUMENT_ROOT'].'/osepose/lib/deconnexion.php' ?>">Déconnexion</a>
                </div>
            </li>
        </ul>
    </div>
</nav>