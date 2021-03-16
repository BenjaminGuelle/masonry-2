<section class="topMain">
    <h3>
        <span>
            Gestion de l'élément : 
        </span>
        <span class="endtitle">
            <?php
                if ( end($breadcrumper) === 'admin' ) {
                    echo 'accueil';
                }
                else echo end($breadcrumper);
            ?>
        </span>
    </h3>
    <div class="breadcrumper">
        <?php foreach( $breadcrumper as $path ) : ?>
            <a  class="breadcrumper_link"
                href="
                <?php
                    if ( $path === 'admin' ) {
                        echo $router->generate('admin');
                    }
                    elseif ( $path === 'profils' ) {
                        echo $router->generate('admin-profils');
                    }
                    elseif ( $path === 'update' ) {
                        echo $router->generate('admin-profils-update');
                    }
                ?>
            ">
                <span>/</span>
                <?php
                    if ( $path === 'admin' ) {
                        echo 'accueil';
                    }
                    else echo $path;
                ?>
            </a>
            
        <?php endforeach; ?>
    </div>
    <div class="list-buttons">
		<?php if ( $GLOBALS['match']['name'] === 'admin-profils' ) : ?>
			<a href="<?= $router->generate('admin-profils-add'); ?>" class="link-to_adduser">
				Ajouter un membre
			</a>
		<?php endif; ?>
    </div>
</section>