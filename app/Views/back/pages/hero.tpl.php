<section class="hero section views_update">
        <?php
            // On inclut des sous-vues => "partials"
            include __DIR__.'/../partials/modal.tpl.php';
            include __DIR__.'/../partials/topMain.tpl.php';
        ?>
    <div class="board">
        <div class="hero-content views_update_content">
        <?php foreach ($heros as $hero) : ?>
            <div class="form-content form_picture">
                <form 
                    action="#"
                    enctype="multipart/form-data"
                    method="POST"
                    name="picture_form"
                    class="form"
                >
                    <h3>
                        <span>Image de section de la hero :</span>
                    </h3>
                    <label for="fileUpload_hero" id="picture-upload_hero">
                        <img src="<?= getPrivateAssets('/images/upload.svg') ?>" alt="logo to upload">
                        <span>Choisir un fichier</span>
                    </label>
                    <span class="picture_name"></span>
                    <!-- <input type="hidden" name="MAX_FILE_SIZE" value="100000" class="input_hidden"> -->
                    <input type="file" id="fileUpload_hero" name="picture"  class="input_file input_hidden">
                    <input id="picture_type_hero" name="picture_type" type="text" value="hero" class="input_hidden">
                    <button type="submit" name="picture_form">
                        Modifier
                    </button>
                </form>
                <div class="preview">
                    <div class="picture-preview">
                        <img src="<?= getPrivateAssets('images/hero/'.$hero->getPicture()) ?>" alt="">
                    </div>
                </div>
            </div>

            <div class="form-content content_a">
                <form
                    action="<?= $router->generate('admin-hero-edit', [ "id" => $hero->getId() ]) ?>"
                    method="POST"
                    name="content_a"
                    class="form"
                >
                    <h3>
                        <span>Accueil box A :</span>
                    </h3>
                    <div class="all_input_boxes">
                        <div class="case">
                            <span>
                                Titre A :
                            </span>
                            <input
                                type="text"
                                name="title_a"
                                value="<?= $hero->getTitleA() ?>"
                            >
                        </div>
                        <div class="case">
                            <span>
                                Sous-titre A :
                            </span>
                            <input
                                type="text"
                                name="subtitle_a"
                                value="<?= $hero->getSubtitleA() ?>"
                            >
                        </div>
                        <div class="case">
                            <span>
                                Description A :
                            </span>
                            <textarea
                                type="text"
                                name="description_a"
                                class="textarea"
                                rows="5"
                                cols="33"
                                value="<?= $hero->getDescriptionA() ?>"
                            >
                            <?= $hero->getDescriptionA() ?>
                            </textarea>
                        </div>
                    </div>
                    <button type="submit" name="content_a">
                        Modifier
                    </button>
                </form>
                <div class="preview hero_box">
                    <h2>
                        <span>
                            <?= $hero->getTitleA() ?>
                        </span>
                    </h2>
                    <h3>
                        <span>
                            <?= $hero->getSubtitleA() ?>
                        </span>
                    </h3>
                    <div class="description">
                        <?= $hero->getDescriptionA() ?>
                    </div>
                </div>
            </div>

            <div class="form-content content_b">
                <form
                    action="<?= $router->generate('admin-hero-edit', [ "id" => $hero->getId() ]) ?>"
                    method="POST"
                    name="content_b"
                    class="form"
                >
                    <h3>
                        <span>Accueil box B :</span>
                    </h3>
                    <div class="all_input_boxes">
                        <div class="case">
                            <span>
                                Titre B :
                            </span>
                            <input
                                type="text"
                                name="title_b"
                                value="<?= $hero->getTitleB() ?>"
                            >
                        </div>
                        <div class="case">
                            <span>
                                Sous-titre B :
                            </span>
                            <input
                                type="text"
                                name="subtitle_b"
                                value="<?= $hero->getSubtitleB() ?>"
                            >
                        </div>
                        <div class="case">
                            <span>
                                Description B :
                            </span>
                            <textarea
                                type="text"
                                name="description_b"
                                class="textarea"
                                rows="5"
                                cols="33"
                                value="<?= $hero->getDescriptionB() ?>"
                            >
                            <?= $hero->getDescriptionB() ?>
                            </textarea>
                        </div>
                    </div>
                    <button type="submit" name="content_b">
                        Modifier
                    </button>
                </form>
                <div class="preview hero_box">
                    <h2>
                        <span>
                            <?= $hero->getTitleB() ?>
                        </span>
                    </h2>
                    <h3>
                        <span>
                            <?= $hero->getSubtitleB() ?>
                        </span>
                    </h3>
                    <div class="description">
                        <?= $hero->getDescriptionB() ?>
                    </div>
                </div>
            </div>
        
        <?php endforeach; ?>  
        </div>
    </div>
</section>