<nav class="navbar navbar-toggleable-md navbar-light bg-faded nav-principal">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand nav-image" href="#">
        <img src="assets/img/osepose_header.png" id="logo2" alt="logo">
    </a>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <span><?php echo $_SESSION['infos_user']['login']; ?></span>
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Accueil <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Défier</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Amis</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Profil</a>
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
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>