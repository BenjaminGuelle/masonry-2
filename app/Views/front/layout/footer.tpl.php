</main>

    <footer>
        <div class="container">
            <div class="society content">
                <h3>
                    <img src="public/assets/images/logoFooter/pin.svg" alt="logo-sarl">
                    <span>SARL Stéphane Michel</span>
                </h3>
                <span>stephane.michel@gmail.com</span>
                <span>14 Rue Grand Veneur, 14930 Maltot.</span>
                <a href="tel:0641796665"class="mobile">06 41 79 66 65</a>
            </div>
            <div class="horraire content">
                <h3>
                    <img src="public/assets/images/logoFooter/time-left.svg" alt="logo-horraires">
                    <span>Horaires d'ouverture</span>
                </h3>
                <span>Lun-Ven 08h-12h / 13h-17h</span>
                <span>Sam-Dim Fermé</span>
            </div>
            <div class="know-more content">
                <h3>
                    <img src="public/assets/images/logoFooter/information.svg" alt="logo-infos">
                    <span>à propos</span>
                </h3>
                <a href="<?= $router->generate('homepage') ?>">Accueil</a>
                <a href="<?= $router->generate( 'contact' ) ?>">Nous contacter</a>
                <a href="<?= $router->generate('legal-notice') ?>">Mentions légales</a>
                <a href="#">Plan du site</a>
            </div>
            <div class="follow-us content">
                <h3>
                    <img src="public/assets/images/logoFooter/share.svg" alt="logo-social">
                    <span>Suivez-nous</span>
                </h3>
                <div class="reseaux">
                    <span class="reseau facebook">
                        <img src="public/assets/images/logoFooter/facebook.svg" alt="facebook">
                    </span>
                    <span class="reseau instagram">
                        <img src="public/assets/images/logoFooter/instagram.svg" alt="instagram">
                    </span>
                </div>
                
            </div>
        </div>
    </footer>
    
    <!-- Js  -->
    <script src=" <?= getPublicJs('index') ?> "></script>
    <script src=" <?= getPublicJs('slideshow') ?> "></script>
    <script src=" <?= getPublicMjs('app') ?> " type="text/javascript" ></script>
</body>
</html>