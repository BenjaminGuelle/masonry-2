<section class="contact section views_update">
        <?php
            // On inclut des sous-vues => "partials"
            include __DIR__.'/../partials/modal.tpl.php';
            include __DIR__.'/../partials/topMain.tpl.php';
        ?>
    <div class="board">
        <div class="contact-content views_update_content">
        <?php foreach ( $contact as $item) : ?>
            <div class="form-content form_title">
                <form
                    action="<?= $router->generate('admin-contact-edit', [ "id" => $item->getId() ]) ?>"
                    method="POST"
                    name="title_form"
                    class="form"
                >
                    <h3>
                        <span>Titre de section de la contact :</span>
                    </h3>
                    <input class="input-txt" name="title" type="text">
                    <button type="submit" name="title_form">
                        Modifier
                    </button>
                </form>
                <div class="preview">
                    <h2>
                        <span>
                            <?= $item->getTitle(); ?>
                        </span>
                    </h2>
                </div>
            </div>

            <div class="form-content form_description">
                <form
                    action="<?= $router->generate('admin-contact-edit', [ "id" => $item->getId() ]) ?>"
                    method="POST"
                    name="description_form"
                    class="form"
                >
                    <h3>
                        <span>Description de section de la contact :</span>
                    </h3>
                    <textarea
                        class="textarea"
                        name="description"
                        rows="5"
                        cols="33"
                        placeholder="Mon super titre"
                        wrap="true"
                    ></textarea>
                    <button type="submit" name="description_form">
                        Modifier
                    </button>
                </form>
                <div class="preview">
                    <div class="description">
                        <?= $item->getDescription(); ?>
                    </div>
                </div>
            </div>

            <div class="form-content form_title">
                <form
                    action="<?= $router->generate('admin-contact-edit', [ "id" => $item->getId() ]) ?>"
                    method="POST"
                    name="mobile_form"
                    class="form"
                >
                    <h3>
                        <span>Numéro de contact :</span>
                    </h3>
                    <input class="input-txt" name="mobile" type="text">
                    <button type="submit" name="mobile_form">
                        Modifier
                    </button>
                </form>
                <div class="preview">
                    <div class="description">
                        <?= $item->getMobile(); ?>
                    </div>
                </div>
            </div>

            <div class="form-content form_title">
                <form
                    action="<?= $router->generate('admin-contact-edit', [ "id" => $item->getId() ]) ?>"
                    method="POST"
                    name="mail_form"
                    class="form"
                >
                    <h3>
                        <span>Mail de contact :</span>
                    </h3>
                    <input class="input-txt" name="mail" type="text">
                    <button type="submit" name="mail_form">
                        Modifier
                    </button>
                </form>
                <div class="preview">
                    <div class="description">
                        <?= $item->getMail(); ?>
                    </div>
                </div>
            </div>

            <div class="form-content form_title">
                <form
                    action="<?= $router->generate('admin-contact-edit', [ "id" => $item->getId() ]) ?>"
                    method="POST"
                    name="adress_form"
                    class="form"
                >
                    <h3>
                        <span>Adresse de contact :</span>
                    </h3>
                    <input class="input-txt" name="adress" type="text">
                    <button type="submit" name="adress_form">
                        Modifier
                    </button>
                </form>
                <div class="preview">
                    <div class="description">
                        <?= $item->getAdress(); ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        </div>
    </div>
</section>
