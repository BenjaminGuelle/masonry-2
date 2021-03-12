<section class="users section">
        <?php
            // On inclut des sous-vues => "partials"
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
                <li class="item">
                    Email
                </li>
                <li class="item">
                    Mot de passe
                </li>
                <li class="item">
                    Rôle
                </li>
                <li class="item">
                    Date de création
                </li>
                <li class="item">
                    Derniere modification
                </li>
            </ul>
            <?php foreach( $usersList as $user ): ?>
            <ul class="items row-users">
                <li class="item">
                    <?= $user->getLastName() ?>   
                </li>
                <li class="item">
                    <?= $user->getFirstName() ?>
                </li>
                <li class="item">
                    <?= $user->getEmail() ?>
                </li>
                <li class="item">
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
                <li class="item">
                    <?= $user->getCreatedAt() ?>
                </li>
                <li class="item">
                    <?php
                        if ( $user->getUpdatedAt() === null ) {
                            echo '-';
                        }
                        else $user->getUpdatedAt();
                    ?>
                </li>
            </ul>
            <?php endforeach; ?>
        </div>
        
        
    </div>
</section>
