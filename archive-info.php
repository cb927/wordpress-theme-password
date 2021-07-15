<?php get_header();?>
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
        <section class="info">
            <div class="info__main">
                <h1 class="section__title">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/pw.png" alt="">
                    <span>INFO</span>
                </h1>
                <?php
query_posts('post_type=info');
while (have_posts()): the_post();?>
	                        <div class="info__content">
	                            <p class="content__date"><?php the_modified_time(get_option('date_format'));?></p>
	                            <h2 class="content__title"><?php the_title();?></h2>
	                            <div class="content__detail">
	                                <?php the_content();?>
	                            </div>
	                            <p class="content__sender">
	                                <!-- （株）PASSWORD　運営係 -->
	                                <?php the_author();?>
	                            </p>
	                        </div>
							<?php break; ?>

	                    <?php endwhile;?>
            </div>
            <div class="info__list">
                <div class="list__title">PICKUP</div>
                <div class="list__main">
                    <?php
query_posts('post_type=info');
?>
                    <?php while (have_posts()): the_post();?>
	                        <div class="list__item">
	                            <p class="item__date"><?php the_modified_time(get_option('date_format'));?></p>
	                            <a href="<?php the_guid();?>" class="item__title"><?php the_title();?></a>
	                        </div>
	                    <?php endwhile;?>
                </div>
            </div>
        </section>
    </div>
</main>
<?php get_footer();?>