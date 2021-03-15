<section class="user_select section">
        <?php
            // On inclut des sous-vues => "partials"
            include __DIR__.'/../../partials/topMain.tpl.php';
        ?>
        <div class="board">
            <div class="user_update">
                <form action="<?= $router->generate('admin-profils-update', [ "id" => $userSelect->getId() ]) ?>" method="POST">
                    <div class="item">
                        <span>Prenom</span>
                        <input type="text" name="firstName" id="firstName" value="<?= $userSelect->getFirstName() ?>">
                    </div>
                    <div class="item">
                        <span>Nom</span>
                        <input type="text" name="lastName" id="lastName" value="<?= $userSelect->getLastName() ?>">
                    </div>
                    <div class="item">
                        <span>Email</span>
                        <input type="email" name="email" id="email" value="<?= $userSelect->getEmail() ?>">
                    </div>
                    <div class="item">
                        <span>Nouveau mot de passe</span>
                        <input type="password" name="password" id="password" placeholder="*****">
                    </div>
                    <div class="item">
                        <span>Confirmer mot de passe</span>
                        <input type="password" name="password" id="password" placeholder="*****">
                    </div>
                    <div class="item">
                        <span>Rôle</span>
                        <input type="text" name="role" id="role" value="<?= $userSelect->getRole() ?>">
                    </div>

                    <button type="submit">
                        Modifier
                    </button>
                </form>
            </div>
        </div>
</section>
