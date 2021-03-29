      <!-- section hero  -->
        <section id="hero" class="hero container">
            <div class="background-hero">
                <img src="<?= getPublicAssets('/images/home/house.jpg') ?>" alt="background">
            </div>
            <div class="hero-content">
                <?php foreach ($heros as $hero): ?>
                    <div class="hero-top hero-box">
                        <h2><?= $hero->getTitleA() ?></h2>
                        <h3><?= $hero->getSubtitleA() ?></h3>
                        <div class="hero-text">
                            <?= $hero->getDescriptionA() ?>
                        </div>
                        <a href="<?= $router->generate( 'presentation' ) ?>" class="link-hero">
                            Découvrez nous
                        </a>
                    </div>
                    <div class="hero-bot hero-box">
                        <h2><?= $hero->getTitleB() ?></h2>
                        <h3><?= $hero->getSubtitleB() ?></h3>
                        <div class="hero-text">
                            <?= $hero->getDescriptionB() ?>
                        </div>
                        <a href="#contact" class="link-hero">
                            Demandez un devis
                        </a>
                    </div>
                <?php endforeach; ?>
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
                                <img src="<?= getPublicAssets('/images/home/realisation.jpg') ?>" alt="services1">
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
                                <img src="<?= getPublicAssets('/images/home/renovation.jpeg') ?>" alt="services2">
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
                <img src="<?= getPublicAssets('/images/home/banner.jpg') ?>" alt="image services">
            </div>
        </section>

        <!-- section presentation  -->
        <section class="prez container">
            <div class="prez-content">
                <div class="prez-top">
                    <img src="<?= getPublicAssets('/images/home/worker.jpg') ?>" alt="photo Stéphane Michel">
                </div>
                <div class="prez-bot">
                <?php foreach ($presentation as $item) :?>
                    <div class="box-number">
                        <div class="box">
                            <span>
                                <?= $item->getCaseA() ?>
                            </span>
                            <span>
                                <?= $item->getCaseATxt() ?>
                            </span>
                        </div>
                        <div class="box">
                            <span>
                                <?= $item->getCaseB() ?>
                            </span>
                            <span>
                                <?= $item->getCaseBTxt() ?>
                            </span>
                        </div>
                        <div class="box">
                            <span>
                                <?= $item->getCaseC() ?>
                            </span>
                            <span>
                                <?= $item->getCaseCTxt() ?>
                            </span>
                        </div>
                    </div>
                    <div class="prez-description">
                        <h2><?= $item->getTitle() ?></h2>
                        <h3><?= $item->getSubtitle() ?></h3>
                        <div class="prez-txt">
                            <span>
                                <?= $item->getDescription() ?>
                            </span>
                        </div>
                        <a href="<?= $router->generate( 'presentation' ) ?>" class="link-prez">
                            Découvrez nous
                        </a>
                    </div>
                <?php endforeach; ?>
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
                <?php foreach ($contact as $item): ?>
                    <h2><?= $item->getTitle() ?></h2>
                    <div class="contact-txt">
                        <?= $item->getDescription() ?>
                    </div>
                    <div class="contact-links">
                        <div class="link telephone">
                            <div class="contact-link_logo">
                                <img src="<?= getPublicAssets('images/logoContact/tel.png') ?>" alt="logo-tel">
                            </div>
                            <span><?= $item->getMobile() ?></span>
                        </div>
                        <div class="link mail">
                            <div class="contact-link_logo">
                                <img src="<?= getPublicAssets('images/logoContact/letter.png') ?>" alt="logo-mail">
                            </div>
                            <span><?= $item->getMail() ?></span>
                        </div>
                        <div class="link adress">
                            <div class="contact-link_logo">
                                <img src="<?= getPublicAssets('images/logoContact/location.png') ?>" alt="logo-adress">
                            </div>
                            <span><?= $item->getAdress() ?></span>
                        </div>
                    </div>
                <?php endforeach; ?>
                </div>
                <form action="<?= $router->generate( 'contact-post' ) ?>" method="POST" class="form-contact">
                    <input type="text" name="name" id="name" placeholder="Votre nom" required>
                    <input type="tel" name="tel" id="tel" placeholder="Votre numéro de contact" required>
                    <input type="email" name="email" id="email" placeholder="Votre email" required>
                    <textarea type="text" name="message" id="message" placeholder="Votre demande" required></textarea> 
                    <button type="submit">
                        Envoyer
                    </button>
                    <span styles="color:red">
                    <?php 
                        if (isset($_SESSION['sendedMail']))
                        {
                            return $_SESSION['sendedMail'];
                        }
                    ?>
                    </span>
                </form>
            </div>
        </section>
