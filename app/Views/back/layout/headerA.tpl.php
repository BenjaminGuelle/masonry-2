<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - SARL Masonry</title>

    <!-- Link font  -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,400;0,700;0,900;1,400&display=swap" rel="stylesheet">

     <!-- Links css  -->
    <link rel="stylesheet" href="<?= getPrivateCss('styles') ?>">
    <link rel="stylesheet" href="<?= getPrivateCss('main') ?>">
    <link rel="stylesheet" href="<?= getPrivateCss('login') ?>">
    <link rel="stylesheet" href="<?= getPrivateCss('modal') ?>">
    <link rel="stylesheet" href="<?= getPrivateCss('userUpdate') ?>">
    <link rel="stylesheet" href="<?= getPrivateCss('userAdd') ?>">
    <link rel="stylesheet" href="<?= getPrivateCss('prez') ?>">
</head>
<body>
    <div class="container">
        <header id="header-admin">
            <div class="header-toggle">
                <span>Menu</span>
                <img src="<?= getPrivateAssets('images/hamburger.svg') ?>" alt="menu-mobile">
            </div>
            <div class="head-admin">
                <h1>
                    <span>Back-Office</span><br>
                    <span>SARL Stéphane Michel</span>
                </h1>
            </div>

            <?php if (isset($_SESSION['userId'])) : ?>
            <div class="user-logged">
                <span> 
                    Bienvenue
                    <?= $user->getFirstName().' '.$user->getLastName() ?>
                </span>
            </div>
            <form action="<?= $router->generate('admin-logout') ?>" method="POST" class="logout">
                <button type="submit">Se déconnecter</button>
                <div class="logo-logout">
                    <img src="<?= getPrivateAssets('images/log-out.svg') ?>" alt="logo logout">
                </div>
            </form>
            <nav>
                <h2>
                    <span>Gestion des éléments :</span>
                </h2>
                <a href="<?= $router->generate('admin') ?>">Accueil</a>
                <a href="<?= $router->generate('admin-profils') ?>">Profils</a>
                <a href="#">Galerie</a>
                <a href="#">Slider</a>
                <a href="#">Services</a>
                <a href="<?= $router->generate('admin-presentation') ?>">Présentation</a>
            </nav>
            <?php endif; ?>

        </header>
        <main>

    
  