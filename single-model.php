<?php get_header(); ?>
<!-- main -->
<main>
    <div class="container__inner">
        <section class="model">
            <h1 class="section__title">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/pw.png" alt="">
                <span>MODEL</span>
            </h1>
            <div class="model__main">
                <div class="tabs">
                    <div class="categories"><a href="<?php echo home_url(); ?>/model" class="tab-link">◂ BACK</a>
                    </div>
                    <form action="<?php echo home_url(); ?>/model" class="search" method="POST" style='display:none;'>
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
                    $blood = get_post_meta($post->ID, 'blood-type', true);
                    $size = get_post_meta($post->ID, 'size', true);
                    $hobby = get_post_meta($post->ID, 'hobby', true);
                    $special_skill = get_post_meta($post->ID, 'special-skill', true);
                    $birth_place = get_post_meta($post->ID, 'birth-place', true);
                    $twitter = get_post_meta($post->ID, 'twitter', true);
                    $instagram = get_post_meta($post->ID, 'instagram', true);
                    $tiktok = get_post_meta($post->ID, 'tiktok', true);
                    $id = get_the_ID();
                    $banner_img = get_post_meta($id, 'post_banner_img', true);
                    $banner_img = explode(',', $banner_img);
                    ?>
                    <div class="model__breadcrumb">
                        <a href="#">HOME</a> >
                        <a href="#">MODEL</a> >
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
                            <div class="item">
                                <p>
                                    ・BLOOD TYPE（血液型）
                                </p>
                                <p>
                                    <?php echo $blood; ?>型
                                </p>
                            </div>
                            <div class="item">
                                <p>
                                    ・SIZE(身長)
                                </p>
                                <p>
                                    <?php echo $size; ?>cm
                                </p>
                            </div>
                            <div class="item">
                                <p>
                                    ・HOBBY(趣味・数点)
                                </p>
                                <p>
                                    <?php echo $hobby; ?>
                                </p>
                            </div>
                            <div class="item">
                                <p>
                                    ・SPECIAL SKILL(特技)
                                </p>
                                <p>
                                    <?php echo $special_skill; ?>
                                </p>
                            </div>
                            <div class="item">
                                <p>
                                    ・BIRTHPLACE(出身地)
                                </p>
                                <p>
                                    <?php echo $birth_place; ?>
                                </p>
                            </div>
                            <hr>
                            <div class="social">
                                <a href="<?php echo $twitter; ?>">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/twitter.png" alt="">
                                </a><a href="<?php echo $instagram; ?>">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram.png" alt="">
                                </a><a href="<?php echo $tiktok; ?>">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/tiktok.png" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </section>
    </div>
</main>
<?php get_footer(); ?>