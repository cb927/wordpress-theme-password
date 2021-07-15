<?php
$key = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $key = $_POST['key'];
}
?>


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
                    <div class="categories">
                        <a href="#!" class="tab-link active" id="tab-woman">WOMAN</a>
                        <a href="#!" class="tab-link" id="tab-man">MAN</a>
                        <a href="#!" class="tab-link" id="tab-group">GROUP</a>
                    </div>
                    <form action="" class="search" method="POST">
                        <input type="text" name="key" class="form-control" placeholder="名前で検索" value="<?php echo $key; ?>">
                        <button class="btn-search" type="submit">
                            <i class="fa fa-search"></i>
                        </button>
                    </form>
                </div>
                <div class="tab-panels">
                    <div class="panel active" id="panel-woman">
                        <?php
                        wp_reset_query();
                        $args = array(
                            'post_type' => 'liver',
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'category',
                                    'field' => 'slug',
                                    'terms' => 'woman'
                                )
                            )
                        );
                        query_posts($args);
                        ?>
                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                                <?php
                                $release_name = get_post_meta($post->ID, 'Name', true);
                                if ($key == '') {
                                ?>
                                    <a href="<?php the_guid(); ?>" class="model__item">
                                        <figure class="item__img">
                                            <?php the_post_thumbnail(); ?>
                                        </figure>

                                        <p class="item__name"><?php echo $release_name; ?></p>
                                    </a>
                                <?php
                                } else if (strpos(strtolower($release_name), strtolower($key)) !== false) {
                                ?>
                                    <a href="<?php the_guid(); ?>" class="model__item">
                                        <figure class="item__img">
                                            <?php the_post_thumbnail(); ?>
                                        </figure>

                                        <p class="item__name"><?php echo $release_name; ?></p>
                                    </a>
                            <?php
                                }
                            endwhile;
                        else : ?>
                            <div class="preparing">準備中</div>
                        <?php endif; ?>
                    </div>
                    <div class="panel" id="panel-man">
                        <?php
                        wp_reset_query();
                        $args = array(
                            'post_type' => 'liver',
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'category',
                                    'field' => 'slug',
                                    'terms' => 'man'
                                )
                            )
                        );
                        query_posts($args);
                        ?>
                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                                <?php
                                $release_name = get_post_meta($post->ID, 'Name', true);
                                if ($key == '') {
                                ?>
                                    <a href="<?php the_guid(); ?>" class="model__item">
                                        <figure class="item__img">
                                            <?php the_post_thumbnail(); ?>
                                        </figure>

                                        <p class="item__name"><?php echo $release_name; ?></p>
                                    </a>
                                <?php
                                } else if (strpos(strtolower($release_name), strtolower($key)) !== false) {
                                ?>
                                    <a href="<?php the_guid(); ?>" class="model__item">
                                        <figure class="item__img">
                                            <?php the_post_thumbnail(); ?>
                                        </figure>

                                        <p class="item__name"><?php echo $release_name; ?></p>
                                    </a>
                            <?php
                                }
                            endwhile;
                        else : ?>
                            <div class="preparing">準備中</div>
                        <?php endif; ?>
                    </div>
                    <div class="panel" id="panel-group">
                        <?php
                        wp_reset_query();
                        $args = array(
                            'post_type' => 'liver',
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'category',
                                    'field' => 'slug',
                                    'terms' => 'group'
                                )
                            )
                        );
                        query_posts($args);
                        ?>
                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                                <?php
                                $release_name = get_post_meta($post->ID, 'Name', true);
                                if ($key == '') {
                                ?>
                                    <a href="<?php the_guid(); ?>" class="model__item">
                                        <figure class="item__img">
                                            <?php the_post_thumbnail(); ?>
                                        </figure>

                                        <p class="item__name"><?php echo $release_name; ?></p>
                                    </a>
                                <?php
                                } else if (strpos(strtolower($release_name), strtolower($key)) !== false) {
                                ?>
                                    <a href="<?php the_guid(); ?>" class="model__item">
                                        <figure class="item__img">
                                            <?php the_post_thumbnail(); ?>
                                        </figure>

                                        <p class="item__name"><?php echo $release_name; ?></p>
                                    </a>
                            <?php
                                }
                            endwhile;
                        else : ?>
                            <div class="preparing">準備中</div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>
<?php get_footer(); ?>