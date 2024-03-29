<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masonry</title>

    <!-- Link font  -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,700;0,900;1,400&display=swap" rel="stylesheet">
    <!-- Links css  -->
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/hero.css">
    <link rel="stylesheet" href="./css/services.css">
    <link rel="stylesheet" href="./css/presentation.css">
    <link rel="stylesheet" href="./css/gallery.css">
    <link rel="stylesheet" href="./css/contact.css">
    <link rel="stylesheet" href="./css/footer.css">

</head>
<body>

    <header>
        <div class="nav">
            <div class="logo">
                <img src="./assets/images/logologo.svg" alt="logo SARL Stéphane Michel">
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
                <a href="#">Accueil</a>
                <a href="#">Prestations</a>
                <a href="#">Nous découvrir</a>
                <a href="#">Galerie</a>
            </nav>
            <a href="#" class="contact-us">
                Contact
            </a>
        </div>
        <div class="nav-mobile">
            <a href="#">Accueil</a>
            <a href="#">Prestations</a>
            <a href="#">Nous découvrir</a>
            <a href="#">Galerie</a>
            <a href="#">Contact</a>
        </div>
        <a href="tel:0641796665" class="phonefaster">
            <img src="./assets/images/logoContact/tel.png" alt="phone">
        </a>
        <a href="http://localhost/masonry-2#hero" class="up">
            <img src="./assets/images/up-arrow.svg" alt="up">
        </a>
    </header>

    <main>
    <!-- section hero  -->
    <section id="hero" class="hero container">
        <div class="background-hero">
            <img src="./assets/images/backgroundhero.svg" alt="">
        </div>
        <div class="hero-content">
            <div class="hero-top hero-box">
                <h2>SARL Stéphane Michel</h2>
                <h3>Artisan Maçon</h3>
                <div class="hero-text">
                    Depuis 7 générations, l’expérience et le savoir faire sont transmis de père en fils.
                </div>
                <a href="#" class="link-hero">
                    Découvrez nous
                </a>
            </div>
            <div class="hero-bot hero-box">
                <h2>Notre savoir faire, nos compétences</h2>
                <h3>Construction, rénovation, tous travaux</h3>
                <div class="hero-text">
                    Proféssionnel du batiment, nous saurons vous accompagner pour vos projets.
                </div>
                <a href="#" class="link-hero">
                    Demandez un devis
                </a>
            </div>
        </div>
    </section>

    <!-- section services  -->
    <section class="services container">
        
        <div class="services-content">
            <div class="services-top">
                <h2>Nos prestations</h2>
                <div class="services-text">
                    <span>
                        Grâce à notre expérience, nous sommes capable de donner vie à toutes vos idées de création.
                    </span>
                    <span>
                        Que ce soit en construction d'une extension de votre maison, d'un éléments à rénover ou tout autres travaux de maçonnerie.
                    </span>
                </div>
                <a href="#" class="link-services">
                    Découvrez no services
                </a>
            </div>
            <div class="services-bot">
                <div class="card">
                    <div class="card-title">
                        <h3>Construction</h3>
                        <div class="card-logo">
                            <img src="./assets/images/logoCards/brickwall.svg" alt="logo Construction">
                        </div>
                    </div>
                    <div class="card-content">
                        <span>Maçconnerie</span>
                        <span>Béton armé</span>
                        <span>Dallage</span>
                        <span>Façade</span>
                        <span>Piscine</span>
                    </div>
                </div>

                <div class="card">
                    <div class="card-title">
                        <h3>Rénovation</h3>
                        <div class="card-logo">
                            <img src="./assets/images/logoCards/renovation.svg" alt="logo Rénovation">
                        </div>
                    </div>
                    <div class="card-content">
                        <span>Maçconnerie</span>
                        <span>Béton armé</span>
                        <span>Dallage</span>
                        <span>Façade</span>
                        <span>Piscine</span>
                    </div>
                </div>

                <div class="card">
                    <div class="card-title">
                        <h3>Tous travaux</h3>
                        <div class="card-logo">
                            <img src="./assets/images/logoCards/settings.svg" alt="logo Tous travaux">
                        </div>
                    </div>
                    <div class="card-content">
                        <span>Maçconnerie</span>
                        <span>Béton armé</span>
                        <span>Dallage</span>
                        <span>Façade</span>
                        <span>Piscine</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner">
            <img src="./assets/images/bannerServices.svg" alt="image services">
        </div>
    </section>

    <!-- section presentation  -->
    <section class="prez container">
        <div class="prez-content">
            <div class="prez-top">
                <img src="./assets/images/worker.jpg" alt="photo Stéphane Michel">
            </div>
            <div class="prez-bot">
                <div class="box-number">
                    <div class="box">
                        <span>30</span>
                        <span>Années d'expérience</span>
                    </div>
                    <div class="box">
                        <span>168</span>
                        <span>Projets réalisés</span>
                    </div>
                    <div class="box">
                        <span>79</span>
                        <span>Clients</span>
                    </div>
                </div>
                <div class="prez-description">
                    <h2>SARL Stéphane Michel</h2>
                    <h3>Plus de 30 ans d'expérience</h3>
                    <div class="prez-txt">
                        <span>
                            Notre équipe de professionnel du bâtiment intervient chez les particuliers et les professionnels afin d'étudier leurs projets et de les réaliser.
                        </span>
                        <span>
                            Toute l'expérience et le savoir faire de notre équipe est mis à disposition des projets les plus complexes et techniques.
                        </span>
                    </div>
                    <a href="#" class="link-prez">
                        Découvrez nous
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- section slideshow  -->
    <section class="lastproject container">
        <h2>Nos dernières réalisations</h2>
        <div id="slider" class="slider">
            <div class="wrapper">
                <div id="slides" class="slides">
                <span class="slide">
                    Slide 1
                    <img src="./assets/images/slides/img1.jpg" alt="photo1">
                </span>
                <span class="slide">
                    Slide 2
                    <img src="./assets/images/slides/img2.jpg" alt="photo2">
                </span>
                <span class="slide">
                    Slide 3
                    <img src="./assets/images/slides/img3.jpg" alt="photo3">
                </span>
                <span class="slide">
                    Slide 4
                    <img src="./assets/images/slides/img4.jpg" alt="photo4">
                </span>
                <span class="slide">
                    Slide 5
                    <img src="./assets/images/slides/img5.jpg" alt="photo5">
                </span>
                <span class="slide">
                    Slide 6
                    <img src="./assets/images/slides/img6.jpg" alt="photo6">
                </span>
                <span class="slide">
                    Slide 7
                    <img src="./assets/images/slides/img7.jpg" alt="photo7">
                </span>
                <span class="slide">
                    Slide 8
                    <img src="./assets/images/slides/img8.jpg" alt="photo8">
                </span>
                <span class="slide">
                    Slide 9
                    <img src="./assets/images/slides/img9.jpg" alt="photo9">
                </span>
                <span class="slide">
                    Slide 10
                    <img src="./assets/images/slides/img10.jpg" alt="photo10">
                </span>
                <span class="slide">
                    Slide 11
                    <img src="./assets/images/slides/img11.jpg" alt="photo11">
                </span>
                </div>
            </div>
            <a id="prev" class="control prev">
                <span>&lt;</span>
            </a>
            <a id="next" class="control next">
                <span>&gt;</span>
            </a>
            </div>
            <h2>Venez découvrir toutes nos réalisation dans notre galerie</h2>
    </section>

    <!-- section contact  -->
    <section class="contact container">
        <div class="contact-content">
            <div class="infos">
                <h2>Contactez nous!</h2>
                <div class="contact-txt">
                    Pour toute demande de renseignements ou demande de devis, n'hésitez à nous contacter, nous vous répondrons dans les plus bref délais.
                </div>
                <div class="contact-links">
                    <div class="link telephone">
                        <div class="contact-link_logo">
                            <img src="./assets/images/logoContact/tel.png" alt="logo-tel">
                        </div>
                        <span>06 41 79 66 65</span>
                    </div>
                    <div class="link mail">
                        <div class="contact-link_logo">
                            <img src="./assets/images/logoContact/letter.png" alt="logo-mail">
                        </div>
                        <span>stephane.michel@gmail.com</span>
                    </div>
                    <div class="link adress">
                        <div class="contact-link_logo">
                            <img src="./assets/images/logoContact/location.png" alt="logo-adress">
                        </div>
                        <span>14 Rue Grand Veneur, 14930 Maltot.</span>
                    </div>
                </div>
            </div>
            <form action="#" method="POST" class="form-contact">
                <input type="text" id="name" placeholder="Votre nom">
                <input type="tel" id="tel" placeholder="Votre numéro de contact">
                <input type="email" id="email" placeholder="Votre email">
                <input type="text" id="message" placeholder="Votre demande">
                <button type="button">
                    Envoyer
                </button>
            </form>
        </div>
    </section>
    </main>

    <footer>
        <div class="container">
            <div class="society content">
                <h3>
                    <img src="./assets/images/logoFooter/pin.svg" alt="logo-sarl">
                    <span>SARL Stéphane Michel</span>
                </h3>
                <span>stephane.michel@gmail.com</span>
                <span>14 Rue Grand Veneur, 14930 Maltot.</span>
                <a href="tel:0641796665"class="mobile">06 41 79 66 65</a>
            </div>
            <div class="horraire content">
                <h3>
                    <img src="./assets/images/logoFooter/time-left.svg" alt="logo-horraires">
                    <span>Horraires d'ouverture</span>
                </h3>
                <span>Lun-Ven 08h-12h / 13h-17h</span>
                <span>Sam-Dim Fermé</span>
            </div>
            <div class="know-more content">
                <h3>
                    <img src="./assets/images/logoFooter/information.svg" alt="logo-infos">
                    <span>à propos</span>
                </h3>
                <a href="#">Accueil</a>
                <a href="#">Nous contacter</a>
                <a href="#">Mentions légales</a>
                <a href="#">Plan du site</a>
            </div>
            <div class="follow-us content">
                <h3>
                    <img src="./assets/images/logoFooter/share.svg" alt="logo-social">
                    <span>Suivez-nous</span>
                </h3>
                <div class="reseaux">
                    <span class="reseau facebook">
                        <img src="./assets/images/logoFooter/facebook.svg" alt="facebook">
                    </span>
                    <span class="reseau instagram">
                        <img src="./assets/images/logoFooter/instagram.svg" alt="instagram">
                    </span>
                </div>
                
            </div>
        </div>
    </footer>

    <!-- Js  -->
    <script src="./js/index.js"></script>
    <script src="./js/slideshow.js"></script>
</body>
</html>