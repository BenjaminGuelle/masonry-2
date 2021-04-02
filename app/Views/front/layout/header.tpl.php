<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SARL MICHEL Stéphane</title>
    <meta name="description"
        content="Entreprise SARL Michel Stéphane, spécialisée dans la maçonnerie, la construction et la rénovation.">
    <meta property="og:locale" content="fr_FR">
    <meta property="og:type" content="website">
    <meta property="og:title"
        content="SARL MICHEL Stéphane : maçonnerie, rénovation, construction.">
    <meta property="og:description"
        content="Maçon MICHEL Stéphane : nous accompagnons nos clients dans la réalisations de leurs projets de maçonnerie, construction et rénovation de l'habitat.">
    <meta property="og:url" content="https://maconnerie-michel-stephane.fr/">
    <meta property="og:site_name" content="Maçonnerie MICHEL Stéphane">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:description"
        content="Artisan MICHEL Stéphane : nous accompagnons nos clients dans la réalisations de leurs projets de maçonnerie, construction et rénovation de l'habitat.">
    <meta name="twitter:title"
        content="SARL MICHEL Stéphane : maçonnerie, rénovation, construction.">
    <meta name="twitter:site" content="@Michel_stephane">
    <meta name="twitter:image"
        content="/public/assets/images/logologo.svg">
    <meta name="twitter:creator" content="@Michel_stephane">
    <meta name="msapplication-TileImage"
        content="/public/assets/images/logologo.svg">
    <link rel="icon" href="/public/assets/images/logologo.svg" type="image/svg">
    <!--<link rel="manifest" href="/manifest.webmanifest" crossorigin="anonymous">-->
    <meta name="theme-color" content="#F4F4F4">
    <link rel="apple-touch-icon" sizes="48x48" href="/public/assets/images/logologo.svg">
    <link rel="apple-touch-icon" sizes="72x72" href="/public/assets/images/logologo.svg">
    <link rel="apple-touch-icon" sizes="96x96" href="/public/assets/images/logologo.svg">
    <link rel="apple-touch-icon" sizes="144x144" href="/public/assets/images/logologo.svg">
    <link rel="apple-touch-icon" sizes="192x192" href="/public/assets/images/logologo.svg">
    <link rel="apple-touch-icon" sizes="256x256" href="/public/assets/images/logologo.svg">
    <link rel="apple-touch-icon" sizes="384x384" href="/public/assets/images/logologo.svg">
    <link rel="apple-touch-icon" sizes="512x512" href="/public/assets/images/logologo.svg">

    <!-- Link font  -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,700;0,900;1,400&display=swap" rel="stylesheet">

    <!-- Links css  -->
    <link rel="stylesheet" href="<?= getPublicCss('styles') ?> ">
    <link rel="stylesheet" href="<?= getPublicCss('header') ?> ">
    <link rel="stylesheet" href="<?= getPublicCss('hero') ?> ">
    <link rel="stylesheet" href="<?= getPublicCss('services') ?> ">
    <link rel="stylesheet" href="<?= getPublicCss('presentation') ?> ">
    <link rel="stylesheet" href="<?= getPublicCss('presentation_view') ?> ">
    <link rel="stylesheet" href="<?= getPublicCss('gallery') ?> ">
    <link rel="stylesheet" href="<?= getPublicCss('slide') ?> ">
    <link rel="stylesheet" href="<?= getPublicCss('contact') ?> ">
    <link rel="stylesheet" href="<?= getPublicCss('contactUs') ?> ">
    <link rel="stylesheet" href="<?= getPublicCss('footer') ?> ">
    <link rel="stylesheet" href="<?= getPublicCss('errors') ?> ">
    <link rel="stylesheet" href="<?= getPublicCss('legal') ?> ">

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
            <a href="<?= $router->generate( 'contact' ) ?>" class="contact-us">
                Contact
            </a>
        </div>
        <div class="nav-mobile">
            <a href="<?= $router->generate( 'homepage' ) ?>">Accueil</a>
            <a href="<?= $router->generate( 'services' ) ?>">Nos Services</a>
            <a href="<?= $router->generate( 'presentation' ) ?>">Nous découvrir</a>
            <a href="<?= $router->generate( 'gallery' ) ?>">Galerie</a>
            <a href="<?= $router->generate( 'contact' ) ?>">Contact</a>
        </div>
        <a href="tel:0641796665" class="phonefaster">
            <img src="<?= getPublicAssets('images/logoContact/tel.png') ?>" alt="phone">
        </a>
        <div class="up">
            <img src="<?= getPublicAssets('images/up-arrow.svg') ?>" alt="up">
        </div>
    </header>

    <main>
