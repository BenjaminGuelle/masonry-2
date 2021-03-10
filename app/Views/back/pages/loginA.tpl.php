<section class="login-container">
    <div class="login">
        <div class="login-title">
            <h2>
                <span>Back-office - SARL Stephane Michel</span>
            </h2>
            <span>
                Bienvenue sur l'espace d'administration, veuillez vous connecter pour continuer.
            </span>
        </div>
        <form action="<?= $router->generate('admin-loginPost') ?>" method="POST" class="form">
            <input 
                type="email" 
                id="email" 
                name="email" 
                placeholder="email" 
                value="<?= isset($_SESSION['mailSave']) ? $_SESSION['mailSave'] : '' ?>" 
                required>
            <input 
                type="password" 
                id="password" 
                name="password" 
                placeholder="mot de passe"
                required>
            <button type="submit">
                Valider
            </button>
        </form>
        <?php if (isset($_SESSION['attempt'])) : ?>
            <div class="messages">
                <span>
                    <?= $_SESSION['attempt'] ?>
                </span>
            </div>
        <?php endif; ?>
    </div>
</section>