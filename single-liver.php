<?php get_header(); ?>
<!-- main -->
<main>
    <div class="container__inner">
        <section class="model">
            <h1 class="section__title">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/pw.png" alt="">
                <span>LIVER</span>
            </h1>
            <div class="model__main">
                <div class="tabs">
                    <div class="categories"><a href="<?php echo home_url(); ?>/liver" class="tab-link active">◂ BACK</a>
                    </div>
                    <form action="<?php echo home_url(); ?>/liver" class="search" method="POST" style='display:none;'>
                        <input type="text" name="key" class="form-control" placeholder="名前で検索">
                        <button class="btn-search" type="submit">
                            <i class="fa fa-search"></i>
                        </button>
                    </form>
                </div>
                <?php while (have_posts()) : the_post(); ?>
                    <?php
                    $name = get_post_meta($post->ID, 'Name', true);
                    $cname = get_post_meta($post->ID, 'name-confirm', true);
                    $twitter = get_post_meta($post->ID, 'twitter', true);
                    $instagram = get_post_meta($post->ID, 'instagram', true);
                    $tiktok = get_post_meta($post->ID, 'tiktok', true);
                    $bigo = get_post_meta($post->ID, 'bigo', true);
                    $mico = get_post_meta($post->ID, 'mico', true);
                    $pokocha = get_post_meta($post->ID, 'pokocha', true);
                    $bigo_rank = get_post_meta($post->ID, 'bigo_rank', true);
                    $mico_rank = get_post_meta($post->ID, 'mico_rank', true);
                    $pokocha_rank = get_post_meta($post->ID, 'pokocha_rank', true);
                    $id = get_the_ID();
                    $banner_img = get_post_meta($id, 'post_banner_img', true);
                    $banner_img = explode(',', $banner_img);
                    ?>
                    <div class="model__breadcrumb">
                        <a href="#">HOME</a> >
                        <a href="#">LIVER</a> >
                        <a href="#"><?php echo $name; ?></a>
                    </div>
                    <div class="main__content">
                        <div class="name sp">
                            <?php echo $name; ?>
                            <p class="name__en"><?php echo $cname; ?></p>
                        </div>
                        <div class="content__img">
                            <figure class="img__main">
                                <?php the_post_thumbnail(); ?>
                            </figure>
                            <?php
                            if (!empty($banner_img)) {
                            ?>
                                <figure class="img__sub">
                                    <?php foreach ($banner_img as $attachment_id) {
                                        if ($attachment_id != '') {
                                    ?>
                                            <img src="<?php echo wp_get_attachment_url($attachment_id); ?>" alt="">
                                        <?php
                                        }
                                        ?>
                                    <?php
                                    }
                                    ?>
                                </figure>
                            <?php
                            }
                            ?>
                        </div>
                        <div class="content__text">
                            <div class="name pc tb">
                                <?php echo $name; ?>
                                <p class="name__en"><?php echo $cname; ?></p>
                            </div>
                            <div class="liver__history">
                                <p class="history__title text-black">【経歴】</p>
                                <div class="history__content">
                                    <?php the_content(); ?>
                                </div>
                            </div>
                            <hr>
                            <div class="social">
                                <?php if ($twitter) { ?>
                                    <a href="<?php echo $twitter; ?>">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/twitter.png" alt="">
                                    </a>
                                <?php } ?>
                                <?php if ($instagram) { ?>
                                    <a href="<?php echo $instagram; ?>">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram.png" alt="">
                                    </a>
                                <?php } ?>
                                <?php if ($tiktok) { ?>
                                    <a href="<?php echo $tiktok; ?>">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/tiktok.png" alt="">
                                    </a>
                                <?php } ?>
                                <?php if ($bigo) { ?>
                                    <a href="<?php echo $bigo; ?>">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bigo.png" alt="">
                                    </a>
                                <?php } ?>
                                <?php if ($mico) { ?>
                                    <a href="<?php echo $mico; ?>">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mico.png" alt="">
                                    </a>
                                <?php } ?>
                                <?php if ($pokocha) { ?>
                                    <a href="<?php echo $pokocha; ?>">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/pokocha.png" alt="">
                                    </a>
                                <?php } ?>
                            </div>
                            <div class="badge">
                                <?php
                                if ($pokocha_rank == '0') {
                                ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/medal/pokocha0.png" alt="">
                                <?php
                                }
                                ?>
                                <?php
                                if ($pokocha_rank == '3') {
                                ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/medal/pokocha0.png" alt="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/medal/pokocha3.png" alt="">
                                <?php
                                }
                                ?>
                                <?php
                                if ($pokocha_rank == '2') {
                                ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/medal/pokocha0.png" alt="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/medal/pokocha3.png" alt="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/medal/pokocha2.png" alt="">
                                <?php
                                }
                                ?>
                                <?php
                                if ($pokocha_rank == '1') {
                                ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/medal/pokocha0.png" alt="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/medal/pokocha3.png" alt="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/medal/pokocha2.png" alt="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/medal/pokocha1.png" alt="">
                                <?php
                                }
                                ?>
                                <?php
                                if ($bigo_rank == '1') {
                                ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/medal/bigo3.png" alt="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/medal/bigo2.png" alt="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/medal/bigo1.png" alt="">
                                <?php
                                }
                                ?>
                                <?php
                                if ($bigo_rank == '2') {
                                ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/medal/bigo3.png" alt="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/medal/bigo2.png" alt="">
                                <?php
                                }
                                ?>
                                <?php
                                if ($bigo_rank == '3') {
                                ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/medal/bigo3.png" alt="">
                                <?php
                                }
                                ?>
                            </div>
                            <div class="badge">
                                <?php
                                if ($mico_rank == '1') {
                                ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/medal/mico3.png" alt="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/medal/mico2.png" alt="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/medal/mico1.png" alt="">
                                <?php
                                }
                                ?>
                                <?php
                                if ($mico_rank == '2') {
                                ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/medal/mico3.png" alt="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/medal/mico2.png" alt="">
                                <?php
                                }
                                ?>
                                <?php
                                if ($mico_rank == '3') {
                                ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/medal/mico3.png" alt="">
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </section>
    </div>
</main>
<?php get_footer(); ?>