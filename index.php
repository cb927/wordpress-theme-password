<?php get_header(); ?>
<!-- main -->
<main>
    <div class="container__inner">
        <section class="carousel pc">
            <?php
            query_posts('post_type=banner_img');
            ?>
            <?php while (have_posts()) : the_post(); ?>
                <figure class="carousel__item">
                    <?php the_post_thumbnail(); ?>
                </figure>
            <?php endwhile; ?>
        </section>
        <section class="carousel sp">
            <?php
            query_posts('post_type=banner_img_sp');
            ?>
            <?php while (have_posts()) : the_post(); ?>
                <figure class="carousel__item">
                    <?php the_post_thumbnail(); ?>
                </figure>
            <?php endwhile; ?>
        </section>
        <section class="work-top">
            <a href="<?php home_url(); ?>/work-liver" class="work__item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/liver.png" alt="">
            </a>
            <a href="<?php home_url(); ?>/work-model" class="work__item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/model.png" alt="">
            </a>
            <a href="<?php home_url(); ?>/work-pro" class="work__item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/promotion.png" alt="">
            </a>
        </section>
        <section class="info-top">
            <h1 class="section__title">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/pw.png" alt="">
                <span>INFO</span>
            </h1>
            <div class="info-list__main">
                <?php
                query_posts('posts_per_page=5&post_type=info');
                ?>
                <?php while (have_posts()) : the_post(); ?>
                    <a href="<?php the_guid(); ?>" class="info-list__item">
                        <p class="date text-center"><?php the_modified_time(get_option('date_format')); ?></p>
                        <p class="title text-left"><?php the_title(); ?></p>
                    </a>
                <?php endwhile; ?>
            </div>
        </section>
        <section class="model-top">
            <h1 class="section__title">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/pw.png" alt="">
                <span>MODEL</span>
                <a href="<?php home_url(); ?>/model" class="more">
                    READ MORE
                </a>
            </h1>
            <div class="model-carousel">
                <?php
                query_posts('post_type=model');
                ?>
                <?php while (have_posts()) : the_post(); ?>
                    <a href="<?php the_guid(); ?>" class="carousel__item">
                        <?php the_post_thumbnail(); ?>
                    </a>
                <?php endwhile; ?>

            </div>
        </section>
        <section class="model-top">
            <h1 class="section__title">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/pw.png" alt="">
                <span>LIVER</span>
                <a href="<?php home_url(); ?>/liver" class="more">
                    READ MORE
                </a>
            </h1>
            <div class="model-carousel">
                <?php
                query_posts('post_type=liver');
                ?>
                <?php while (have_posts()) : the_post(); ?>
                    <a href="<?php the_guid(); ?>" class="carousel__item">
                        <?php the_post_thumbnail(); ?>
                    </a>
                <?php endwhile; ?>
            </div>
        </section>
    </div>
</main>
<?php get_footer(); ?>