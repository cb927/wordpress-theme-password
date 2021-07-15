<!-- footer -->
<footer>
    <div class="footer-logo">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="">
    </div>
    <div class="footer-main">
        <div class="footer__sitemap">
            <p class="main__title">SITEMAP</p>
            <div class="main__content">
                <div class="content__item">
                    <a href="<?php echo home_url(); ?>/" class="footer__link">TOP</a>
                    <a href="<?php echo home_url(); ?>/info" class="footer__link">INFO</a>
                    <a href="<?php echo home_url(); ?>/model" class="footer__link">MODEL</a>
                    <a href="<?php echo home_url(); ?>/liver" class="footer__link">LIVER</a>
                </div>
                <div class="content__item">
                    <a href="<?php echo home_url(); ?>/work" class="footer__link">WORK</a>
                    <a href="<?php echo home_url(); ?>/work-model" class="footer__link footer__link--sub">- MODELDIVISION</a>
                    <a href="<?php echo home_url(); ?>/work-liver" class="footer__link footer__link--sub">- LIVER DIVISION</a>
                    <a href="<?php echo home_url(); ?>/work-pro" class="footer__link footer__link--sub">- PROMOTION</a>
                </div>
                <div class="content__item">
                    <a href="<?php echo home_url(); ?>/company" class="footer__link">COMPANY</a>
                    <a href="#!" class="footer__link footer__link--sub">- ABOUT US</a>
                </div>
            </div>
        </div>
        <div class="footer__company">
            <p class="main__title">COMPANY</p>
            <div class="main__content">
                <div class="content__item">
                    <a href="#!" class="footer__link">プライバシーポリシー</a>
                    <a href="<?php echo home_url(); ?>/contact" class="footer__link">お問い合わせ</a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright">copyright PASSWORD CO;ltd ALL RIGHT RESERVED</div>
</footer>
</div>
<?php wp_footer(); ?>
</body>

</html>