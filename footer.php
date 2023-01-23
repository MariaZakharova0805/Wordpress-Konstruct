<footer class="footer">
    <a name="footer"></a>
    <div class="footer__top">
        <div class="footer__top-container">
            <h2 class="footer__h2">
                <?= CFS()->get('footer_header'); ?>
            </h2>
            <div class="footer__input">
                <input type="text" value="<?= CFS()->get('email_input_text'); ?>" id="input" />
                <button class="blue-button footer__button">
                    <?= CFS()->get('email_button'); ?>
                </button>
            </div>
        </div>
    </div>
    <div class="footer__bottom">
        <div class="container">
            <div class="footer__box">
                <div class="footer__box-item1">
                    <h4>
                        <?= CFS()->get('1st_column_title'); ?>
                    </h4>
                    <div class="footer__logo custom-logo">
                        <?php the_custom_logo(); ?>
                    </div>
                    <p class="footer__text-sm">
                        <?= CFS()->get(' footer_text'); ?>
                    </p>
                </div>

                <div class="footer__box-item2">
                    <h4>
                        <?= CFS()->get('2nd_column_title'); ?>
                    </h4>
                    <div class="footer__links">
                        <div class="footer__links-column1 link__column">
                            <a href="#">
                                <p class="footer-link">Home</p>
                            </a>
                            <a href="#">
                                <p class="footer-link">About</p>
                            </a>
                            <a href="#">
                                <p class="footer-link">Services</p>
                            </a>
                            <a href="#">
                                <p class="footer-link">Projects</p>
                            </a>
                            <a href="#">
                                <p class="footer-link">Contact us</p>
                            </a>
                        </div>
                        <div class="footer__links-column2 link__column">
                            <a href="#">
                                <p class="footer-link">FAQ</p>
                            </a>
                            <a href="#">
                                <p class="footer-link">Terms</p>
                            </a>
                            <a href="#">
                                <p class="footer-link">Careers</p>
                            </a>
                        </div>
                        <div class="footer__links-column3 link__column">
                            <a href="#">
                                <p class="footer-link">Blog</p>
                            </a>
                            <a href="#">
                                <p class="footer-link">Partners</p>
                            </a>
                            <a href="#">
                                <p class="footer-link">News</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="footer__box-item3">
                    <h4>
                        <?= CFS()->get('3rd_column_title'); ?>
                    </h4>
                    <p class="footer__text-tiny">
                        <?= CFS()->get('company_adress'); ?>
                    </p>
                    <p class="footer__text-tiny">
                        <?= CFS()->get('company_tel'); ?>
                    </p>
                    <p class="footer__text-tiny"><?= CFS()->get('company_email'); ?></p>
                </div>
                <div class="footer__box-item4">
                    <?php
                    if (!empty(CFS()->get('footer_instagram')['url'])) {
                        ?>
                        <a href="<?= CFS()->get('footer_instagram')['url'] ?>"
                            target="<?= CFS()->get('footer_instagram')['target'] ?>">
                            <i class="icon-instagram"></i></a>
                        <?php
                    }
                    ?>
                    <?php
                    if (!empty(CFS()->get('footer_twitter')['url'])) {
                        ?>
                        <a href="<?= CFS()->get('footer_twitter')['url'] ?>"
                            target="<?= CFS()->get('footer_twitter')['target'] ?>">
                            <i class="icon-twitter"></i></a>
                        <?php
                    }
                    ?>
                    <?php
                    if (!empty(CFS()->get('footer_goggle')['url'])) {
                        ?>
                        <a href="<?= CFS()->get('footer_goggle')['url'] ?>"
                            target="<?= CFS()->get('footer_goggle')['target'] ?>">
                            <i class="icon-google"></i></a>
                        <?php
                    }
                    ?>
                    <?php
                    if (!empty(CFS()->get('footer_facebook')['url'])) {
                        ?>
                        <a href="<?= CFS()->get('footer_facebook')['url'] ?>"
                            target="<?= CFS()->get('footer_facebook')['target'] ?>">
                            <i class="icon-facebook-official"></i></a>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="footer__copyright">
        <p class="footer__copyright-text">
            © 2017 Konstruct Inc. Designed by Jane Kathryn Teo
        </p>
    </div>
</footer>