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
                    else echo $router->generate(buildPath($breadcrumper));
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
        
    </div>
</section>