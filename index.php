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
			<div class="work__item work__item--model">
				<div class="work__item__content">
					<h1 class="item__title">MODEL</h1>
					<p class="item__content">
						WEB媒体・雑誌・映像など様々な出演に関して
						モデルマネジメントを行っています。
					</p>
					<p class="item__detail">
						細かなマネジメントとともにコンプライアンスチェックにも注力し、
						モデル活動される皆さんの「安心な活動」とクライアント様の
						「安心なモデル起用」を行っています。
					</p>
				</div>
				<div class="work__item__btn">
					<a href="<?php echo home_url(); ?>/model" class="work__link work__link--model">
						詳しくはこちら
					</a>
				</div>
			</div>
			<div class="work__item work__item--liver">
				<div class="work__item__content">
					<h1 class="item__title">LIVER</h1>
					<p class="item__content">
						SNS時代に欠かせない「LIVE配信」によって
						多くの個人メディアが立ち上がっています。
					</p>
					<p class="item__detail">
						弊社は配信者である「ライバー」をマネジメントし配信に関する
						アドバイスや相談を行っています。未経験者でもOK！副業で
						ライバーをされる方急増中！
					</p>
				</div>
				<div class="work__item__btn">
					<a href="<?php echo home_url(); ?>/liver" class="work__link work__link--liver">
						詳しくはこちら
					</a>
				</div>
			</div>
			<div class="work__item work__item--pro">
				<div class="work__item__content">
					<h1 class="item__title">PROMOTION</h1>
					<p class="item__content">
						様々な業種の企業様の商品・サービス宣伝に
						関する手助けを行わせていただいております。
					</p>
					<p class="item__detail">
						SNSのマネジメントを中心とした宣伝戦略を弊社所属（業務提携先含
						む）ライバーやモデルも協力し、より細やかなSNS宣伝戦略と実行を
						お約束します。
					</p>
				</div>
				<div class="work__item__btn">
					<a href="<?php echo home_url(); ?>/pro" class="work__link work__link--pro">
						詳しくはこちら
					</a>
				</div>
			</div>
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