<section class="users section">
        <?php
            // On inclut des sous-vues => "partials"
            include __DIR__.'/../partials/modal.tpl.php';
            include __DIR__.'/../partials/topMain.tpl.php';
        ?>
    <div class="board">
        <div class="itemslist">
            <ul class="items row-title">
                <li class="item">
                    Nom   
                </li>
                <li class="item">
                    Prenom
                </li>
                <li class="item email">
                    Email
                </li>
                <li class="item password">
                    Mot de passe
                </li>
                <li class="item">
                    Rôle
                </li>
                <li class="item createdAt">
                    Date de création
                </li>
                <li class="item updatedAt">
                    Derniere modification
                </li>
            </ul>

            <?php foreach( $usersList as $user ): ?>
                <ul class="items row-users">
                    <form action="<?= $router->generate('admin-profils-update', [ "id" => $user->getId() ]) ?>" method="GET" class="item-gear get_modal" data-id="<?= $user->getId() ?>">
                        <button type="submit">
                            <img src="<?= getPrivateAssets('images/settings.svg') ?>" alt="logo-update">
                        </button>
                    </form>
                    <li class="item">
                        <?= $user->getLastName() ?>   
                    </li>
                    <li class="item">
                        <?= $user->getFirstName() ?>
                    </li>
                    <li class="item email">
                        <?= $user->getEmail() ?>
                    </li>
                    <li class="item password">
                        <?php
                            if ( $user->getPassword() > 1 ) {
                                echo '*****';
                            }
                            else $user->getPassword();
                        ?>
                    </li>
                    <li class="item">
                        <?= $user->getRole() ?>
                    </li>
                    <li class="item createdAt">
                        <?= $user->getCreatedAt() ?>
                    </li>
                    <li class="item updatedAt">
                        <?php
                            if ( $user->getUpdatedAt() === null ) {
                                echo '-';
                            }
                            else echo $user->getUpdatedAt();
                        ?>
                    </li>
                </ul>
            <?php endforeach; ?>
        </div>
        
        
    </div>
</section>
