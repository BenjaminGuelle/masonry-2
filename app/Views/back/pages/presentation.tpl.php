<section class="presentation section">
        <?php
            // On inclut des sous-vues => "partials"
            include __DIR__.'/../partials/modal.tpl.php';
            include __DIR__.'/../partials/topMain.tpl.php';
        ?>
    <div class="board">
        <div class="prez-content">
        <?php foreach( $presentation as $pres ): ?>

            <div class="form-content form_picture">
                <form action="<?= $router->generate('admin-presentation-upload', [ "id" => $pres->getId() ]) ?>" enctype="multipart/form-data" method="POST" name="picture_form" class="form">
                    <h3>
                        <span>Image de section de la présentation :</span>
                    </h3>
                    <label for="fileUpload" id="picture-upload_presentation">
                        <img src="<?= getPrivateAssets('/images/upload.svg') ?>" alt="logo to upload">
                        <span>Choisir un fichier</span>
                    </label>
                    <span class="picture_name">
                        
                    </span>
                    <!-- <input type="hidden" name="MAX_FILE_SIZE" value="100000" class="input_hidden"> -->
                    <input type="file" id="fileUpload" name="picture"  class="input_hidden">
                    <input id="picture_type" name="picture_type" type="text" value="presentation" class="input_hidden">
                    <button type="submit" name="picture_form">
                        Modifier
                    </button>
                </form>
                <div class="preview">
                    <div class="picture-preview">
                        <img src="<?= getPrivateAssets('images/presentation/'.$pres->getPicture()) ?>" alt="">
                    </div>
                </div>
            </div>

            <div class="form-content form_title">
                <form action="<?= $router->generate('admin-presentation-edit', [ "id" => $pres->getId() ]) ?>" method="POST" name="title_form" class="form">
                    <h3>
                        <span>Titre de section de la présentation :</span>
                    </h3>
                    <input class="input-txt" name="title" type="text">
                    <button type="submit" name="title_form">
                        Modifier
                    </button>
                </form>
                <div class="preview">
                    <h2>
                        <span>
                            <?= $pres->getTitle(); ?>
                        </span>
                    </h2>
                </div>
            </div>

            <div class="form-content form_subtitle">
                <form action="<?= $router->generate('admin-presentation-edit', [ "id" => $pres->getId() ]) ?>" method="POST" name="subtitle_form" class="form">
                    <h3>
                        <span>Sous-titre de section de la présentation :</span>
                    </h3>
                    <input id="subtitle" class="input-txt" name="subtitle" type="text">
                    <button type="submit" name="subtitle_form">
                        Modifier
                    </button>
                </form>
                <div class="preview">
                    <h3>
                        <span>
                            <?= $pres->getSubtitle(); ?>
                        </span>
                    </h3>
                </div>
            </div>

            <div class="form-content form_description">
                <form action="<?= $router->generate('admin-presentation-edit', [ "id" => $pres->getId() ]) ?>" method="POST" name="description_form" class="form">
                    <h3>
                        <span>Description de section de la présentation :</span>
                    </h3>
                    <textarea class="textarea" name="description" rows="5" cols="33" placeholder="Mon super titre" wrap="true">
                    </textarea>
                    <button type="submit" name="description_form">
                        Modifier
                    </button>
                </form>
                <div class="preview">
                    <div class="description">
                        <?= $pres->getDescription(); ?>
                    </div>
                </div>
            </div>

            <div class="form-content form_boxes">
                <form action="<?= $router->generate('admin-presentation-edit', [ "id" => $pres->getId() ]) ?>" method="POST" name="boxes_form" class="form form-boxes">
                    <h3>
                        <span>Boxes numéros A - B - C:</span>
                    </h3>
                    <div class="all_input_boxes">
                        <div class="case case-num">
                            <span>
                                Case A numéro :
                            </span>
                            <input type="number" name="case_a" value="<?= $pres->getCaseA(); ?>" />
                        </div>
                        <div class="case case-txt">
                            <span>
                                Case A texte :
                            </span>
                            <input type="text" name="case_a_txt" value="<?= $pres->getCaseATxt(); ?>">
                        </div>
                        <div class="case case-num">
                            <span>
                                Case B numéro :
                            </span>
                            <input type="number" name="case_b" value="<?= $pres->getCaseB(); ?>">
                        </div>
                        <div class="case case-txt">
                            <span>
                                Case B texte :
                            </span>
                            <input type="text" name="case_b_txt" value="<?= $pres->getCaseBTxt(); ?>">
                        </div>
                        <div class="case case-num">
                            <span>
                                Case C numéro :
                            </span>
                            <input type="number" name="case_c" value="<?= $pres->getCaseC(); ?>">
                        </div>
                        <div class="case case-txt">
                            <span>
                                Case C texte :
                            </span>
                            <input type="text" name="case_c_txt" value="<?= $pres->getCaseCTxt(); ?>">
                        </div>

                    </div>
                    <button type="submit" name="boxes_form">
                        Modifier
                    </button>
                </form>
                <div class="preview preview-boxes">
                    <div class="boxes">
                        <div class="box box_a">
                            <div class="number">
                                <?= $pres->getCaseA(); ?>
                            </div>
                            <div class="text">
                                <?= $pres->getCaseATxt(); ?>
                            </div>
                        </div>
                        <div class="box box_b">
                            <div class="number">
                                <?= $pres->getCaseB(); ?>
                            </div>
                            <div class="text">
                                <?= $pres->getCaseBTxt(); ?>
                            </div>
                        </div>
                        <div class="box box_c">
                            <div class="number">
                                <?= $pres->getCaseC(); ?>
                            </div>
                            <div class="text">
                                <?= $pres->getCaseCTxt(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <?php endforeach; ?>
        </div>
    </div>
</section>
