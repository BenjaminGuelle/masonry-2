<section class="presentation section">
        <?php
            // On inclut des sous-vues => "partials"
            include __DIR__.'/../partials/modal.tpl.php';
            include __DIR__.'/../partials/topMain.tpl.php';
        ?>
    <div class="board">
        <div class="prez-content">
        <?php foreach( $presentation as $pres ): ?>
            <div class="prez-picture">
                image
            </div>
            <div class="prez-numbers">
                <?= $pres->getCaseC() ?>
            </div>
            <div class="prez-description">
                <?= $pres->getDescription() ?>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
