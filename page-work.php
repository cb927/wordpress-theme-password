<?php get_header(); ?>
<!-- main -->
<main>
    <div class="container__inner">
        <h1 class="section__title">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/pw.png" alt="">
            <span>WORK</span>
        </h1>
    </div>
    <section class="work-banner">
        <figure class="banner__logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/work/top.png" alt="">
        </figure>
        <div class="banner__text">
            株式会社PASSWORDは<span class="text-underline">モデルマネジメント・映像配信ライバーマネジメント・SNS</span>を <br>
            利用したプロモーション事業を行っています。時代にマッチした新しいエンターテイメントを <br>
            追求するとともに、弊社のブランドアイコンである「鍵」は、<span class="text-underline">閉ざされている未来のドアを <br>
                皆さんと一緒に開けるお手伝いをすること</span>を意味しています。
        </div>
    </section>
    <div class="container__inner">
        <section class="work">
            <a href="<?php echo home_url(); ?>/work-liver" class="work__item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/liver.png" alt="">
            </a>
            <a href="<?php echo home_url(); ?>/work-model" class="work__item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/model.png" alt="">
            </a>
            <a href="<?php echo home_url(); ?>/work-pro" class="work__item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/promotion.png" alt="">
            </a>
        </section>
    </div>
</main>
<?php get_footer(); ?>