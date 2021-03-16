<section class="user_addview section">
        <?php
            // On inclut des sous-vues => "partials"
            include __DIR__.'/../../partials/topMain.tpl.php';
        ?>
        <div class="board">
            <div class="user_add">
                <form action="<?= $router->generate('admin-profils-addPost') ?>" method="POST">
                    <div class="item">
                        <span>Prenom</span>
                        <input type="text" name="firstName" id="firstName" placeholder="votre prénom">
                    </div>
                    <div class="item">
                        <span>Nom</span>
                        <input type="text" name="lastName" id="lastName" placeholder="votre nom">
                    </div>
                    <div class="item">
                        <span>Email</span>
                        <input type="email" name="email" id="email" placeholder="votre email">
                    </div>
                    <div class="item">
                        <span>Nouveau mot de passe</span>
                        <input type="password" name="password" id="password" placeholder="votre mot de passe">
                    </div>
                    <div class="item">
                        <span>Confirmer mot de passe</span>
                        <input type="password" name="passwordConfirm" id="passwordConfirm" placeholder="confirmer le mot de passe">
                    </div>
                    <div class="item">
                        <span>Rôle</span>
                        <input type="text" name="role" id="role" placeholder="votre rôle">
                    </div>

                    <button type="submit">
                        Ajouter
                    </button>
                </form>
            </div>
        </div>
</section>