<section class="container">
    <div class="login">
        <div class="login-title">
            <h2>
                <span>Veuillez vous connecter</span>
            </h2>
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