<section class="contactUs">
    <div class="contactUs-content">
        <h2>Rencontrons nous!</h2>
        <span class="subtitle">
            Nous conviendrons d'un rendez-vous, étudirons votre projet et vous apporterons un diagnostic précis.
        </span>
        <div class="contactUs-infos">
            <h3>SARL MICHEL Stéphane</h3>
            <span>14 Rue Grand Veneur</span>
            <span>14930 Maltot</span>
            <a href="tel:0641796665">06 41 79 66 65</a>
            <a href="mailto:sarl.michel.stephane@gmail.com">sarl.michel.stephane@gmail.com</a>
        </div>
        <form action="<?= $router->generate('contactUs-post') ?>" method="post" class="contactUs-form">
            <label for="name" required>
                Vos nom et prénoms
            </label>
            <input type="text" name="name" required>
            <label for="email">
                Votre email
            </label>
            <input type="email" name="email" placeholder="mon_email@exemple.com" required>
            <label for="tel">
                Votre numéro de contact
            </label>
            <input type="tel" name="tel" required>
            <label for="message">
                Votre message
            </label>
            <textarea name="message" id="message-contactUs" cols="30" rows="10" required></textarea>
            <button type="submit">
                Envoyer mon message
            </button>
        </form>
    </div>
</section>