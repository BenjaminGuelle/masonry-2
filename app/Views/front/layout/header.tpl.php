<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SARL Stéphane MICHEL</title>

    <!-- Link font  -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,700;0,900;1,400&display=swap" rel="stylesheet">

    <!-- Links css  -->
    <link rel="stylesheet" href="<?= getPublicCss('styles') ?> ">
    <link rel="stylesheet" href="<?= getPublicCss('header') ?> ">
    <link rel="stylesheet" href="<?= getPublicCss('hero') ?> ">
    <link rel="stylesheet" href="<?= getPublicCss('services') ?> ">
    <link rel="stylesheet" href="<?= getPublicCss('presentation') ?> ">
    <link rel="stylesheet" href="<?= getPublicCss('gallery') ?> ">
    <link rel="stylesheet" href="<?= getPublicCss('contact') ?> ">
    <link rel="stylesheet" href="<?= getPublicCss('footer') ?> ">
    <link rel="stylesheet" href="<?= getPublicCss('errors') ?> ">

</head>
<body>

    <header>
        <div class="nav">
            <div class="logo">
                <img src="public/assets/images/logologo.svg" alt="logo SARL Stéphane Michel">
                <div class="logo-txt">
                    <span>Stéphane</span>
                    <span>MICHEL</span>
                </div>
            </div>
            <div class="menu">
                <span>Menu</span>
                <div class="burger">
                    <div class="burger-line"></div>
                </div>
            </div>
            <nav>
                <a href="<?= $router->generate( 'homepage' ) ?>">Accueil</a>
                <a href="<?= $router->generate( 'services' ) ?>">Nos Services</a>
                <a href="<?= $router->generate( 'presentation' ) ?>">Nous découvrir</a>
                <a href="<?= $router->generate( 'gallery' ) ?>">Galerie</a>
            </nav>
            <a href="#contact" class="contact-us">
                Contact
            </a>
        </div>
        <div class="nav-mobile">
            <a href="<?= $router->generate( 'homepage' ) ?>">Accueil</a>
            <a href="<?= $router->generate( 'services' ) ?>">Nos Services</a>
            <a href="<?= $router->generate( 'presentation' ) ?>">Nous découvrir</a>
            <a href="<?= $router->generate( 'gallery' ) ?>">Galerie</a>
        </div>
        <a href="tel:0641796665" class="phonefaster">
            <img src="public/assets/images/logoContact/tel.png" alt="phone">
        </a>
        <a href="http://localhost/masonry-2#hero" class="up">
            <img src="public/assets/images/up-arrow.svg" alt="up">
        </a>
    </header>

    <main>