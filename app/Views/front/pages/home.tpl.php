      <!-- section hero  -->
        <section id="hero" class="hero container">
            <div class="background-hero">
                <img src="public/assets/images/backgroundhero.svg" alt="background">
            </div>
            <div class="hero-content">
                <div class="hero-top hero-box">
                    <h2>SARL Stéphane Michel</h2>
                    <h3>Artisan Maçon</h3>
                    <div class="hero-text">
                        Depuis 7 générations, l’expérience et le savoir faire sont transmis de père en fils.
                    </div>
                    <a href="<?= $router->generate( 'presentation' ) ?>" class="link-hero">
                        Découvrez nous
                    </a>
                </div>
                <div class="hero-bot hero-box">
                    <h2>Notre savoir faire, nos compétences</h2>
                    <h3>Construction, rénovation, tous travaux</h3>
                    <div class="hero-text">
                        Proféssionnel du batiment, nous saurons vous accompagner pour vos projets.
                    </div>
                    <a href="#contact" class="link-hero">
                        Demandez un devis
                    </a>
                </div>
            </div>
        </section>

        <!-- section services  -->
        <section class="services container">
            
            <div class="services-content">
                <div class="services-top">
                    <div class="top-container">
                        <h2>
                            <span>Nos prestations</span>
                        </h2>
                        <div class="services-txt">
                            <span>
                                Grâce à notre expérience et notre savoir faire, nous sommes capable de donner vie à toutes vos idées de création.
                            </span><br>
                            <span>
                                Que ce soit en construction d'extension de votre maison, d'un éléments à rénover ou tout autres travaux de maçonnerie.
                            </span>
                        </div>
                        <a href="<?= $router->generate('services') ?>" class="link-services">
                            Découvrez nos services
                        </a>
                    </div>
                </div>
                <div class="services-bot">
                    <div class="card-list">

                        <div class="card">
                            <div class="card-img">
                                <img src="public/assets/images/construction.jpg" alt="services1">
                            </div>
                            <div class="card-title">
                                <h3>Réalisation</h3>
                                <div class="card-logo">
                                    <img src="public/assets/images/logoCards/brickwall.svg" alt="logo Construction">
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
                            <div class="card-img">
                                <img src="public/assets/images/renovation.jpg" alt="services2">
                            </div>
                            <div class="card-title">
                                <h3>Rénovation</h3>
                                <div class="card-logo">
                                    <img src="public/assets/images/logoCards/renovation.svg" alt="logo Construction">
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
            </div>
            <div class="banner">
                <img src="public/assets/images/bannerServices.svg" alt="image services">
            </div>
        </section>

        <!-- section presentation  -->
        <section class="prez container">
            <div class="prez-content">
                <div class="prez-top">
                    <img src="public/assets/images/worker.jpg" alt="photo Stéphane Michel">
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
                        <a href="<?= $router->generate( 'presentation' ) ?>" class="link-prez">
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
                        <img src="public/assets/images/slides/img1.jpg" alt="photo1">
                    </span>
                    <span class="slide">
                        Slide 2
                        <img src="public/assets/images/slides/img2.jpg" alt="photo2">
                    </span>
                    <span class="slide">
                        Slide 3
                        <img src="public/assets/images/slides/img3.jpg" alt="photo3">
                    </span>
                    <span class="slide">
                        Slide 4
                        <img src="public/assets/images/slides/img4.jpg" alt="photo4">
                    </span>
                    <span class="slide">
                        Slide 5
                        <img src="public/assets/images/slides/img5.jpg" alt="photo5">
                    </span>
                    <span class="slide">
                        Slide 6
                        <img src="public/assets/images/slides/img6.jpg" alt="photo6">
                    </span>
                    <span class="slide">
                        Slide 7
                        <img src="public/assets/images/slides/img7.jpg" alt="photo7">
                    </span>
                    <span class="slide">
                        Slide 8
                        <img src="public/assets/images/slides/img8.jpg" alt="photo8">
                    </span>
                    <span class="slide">
                        Slide 9
                        <img src="public/assets/images/slides/img9.jpg" alt="photo9">
                    </span>
                    <span class="slide">
                        Slide 10
                        <img src="public/assets/images/slides/img10.jpg" alt="photo10">
                    </span>
                    <span class="slide">
                        Slide 11
                        <img src="public/assets/images/slides/img11.jpg" alt="photo11">
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
        <section id="contact" class="contact container">
            <div class="contact-content">
                <div class="infos">
                    <h2>Contactez nous!</h2>
                    <div class="contact-txt">
                        Pour toute demande de renseignements ou demande de devis, n'hésitez à nous contacter, nous vous répondrons dans les plus bref délais.
                    </div>
                    <div class="contact-links">
                        <div class="link telephone">
                            <div class="contact-link_logo">
                                <img src="public/assets/images/logoContact/tel.png" alt="logo-tel">
                            </div>
                            <span>06 41 79 66 65</span>
                        </div>
                        <div class="link mail">
                            <div class="contact-link_logo">
                                <img src="public/assets/images/logoContact/letter.png" alt="logo-mail">
                            </div>
                            <span>sarl.michel.stephane@gmail.com</span>
                        </div>
                        <div class="link adress">
                            <div class="contact-link_logo">
                                <img src="public/assets/images/logoContact/location.png" alt="logo-adress">
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
