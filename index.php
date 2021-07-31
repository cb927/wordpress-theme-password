<?php
$submitted_liver = 'no';
$submitted_model = 'no';
$submitted_pro = 'no';
 //sending mail
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$form_name = $_POST['form_name'];
    $name=$_POST['uname']; 
    $email=$_POST['email'];
    $content=$_POST['message'];
	 
	$to = 'info@password-inc.site';
	$to1 = $email;
	$body = 'お名前: '.$name.'<br>'.'メールアドレス: '.$email.'<br>'.'備考欄: '.$content;
	$headers = array('Content-Type: text/html; charset=UTF-8');
	 
	if($form_name == 'liver') {
		$subject = 'ライバー募集';
		wp_mail( $to, $subject, $body, $headers );
		$subject1 = 'ライバー募集を受け付けました。';
		$body1 = 'ライバー募集を受け付けました。<br>
		運営からの返信まで少々お待ちいただけますと幸いです。<br><br>お名前: '.$name.'<br>'.'Eメールアドレス: '.$email.'<br>'.'備考欄 : '.$content;
		wp_mail( $to1, $subject1, $body1, $headers );

		$submitted_liver = 'yes';
	}
	 
	if($form_name == 'model') {
		$subject = 'モデル募集';
		wp_mail( $to, $subject, $body, $headers );
		$subject1 = 'モデル募集を受け付けました。';
		$body1 = 'モデル募集を受け付けました。<br>
		運営からの返信まで少々お待ちいただけますと幸いです。<br><br>お名前: '.$name.'<br>'.'Eメールアドレス: '.$email.'<br>'.'備考欄 : '.$content;
		wp_mail( $to1, $subject1, $body1, $headers );

		$submitted_model = 'yes';
	}
	 
	if($form_name == 'pro') {
		$subject = 'プロモーション募集';
		wp_mail( $to, $subject, $body, $headers );
		$subject1 = 'プロモーション募集を受け付けました。';
		$body1 = 'プロモーション募集を受け付けました。<br>
		運営からの返信まで少々お待ちいただけますと幸いです。<br><br>お名前: '.$name.'<br>'.'Eメールアドレス: '.$email.'<br>'.'備考欄 : '.$content;
		wp_mail( $to1, $subject1, $body1, $headers );

		$submitted_model = 'yes';
	}
 }
?>
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
					<a href="javascript:;" class="work__link work__link--model">
						メールフォームはこちら
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
					<a href="javascript:;" class="work__link work__link--liver">
						メールフォームはこちら
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
					<a href="javascript:;" class="work__link work__link--pro">
						メールフォームはこちら
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

<div class="work-modal work-modal--liver">
	<div class="modal__main">
		<div class="form-before">
			<h2 class="modal__title">ライバー募集メールフォーム</h2>
			<p class="modal__intro">下記に情報の入力をお願い致します。</p>
			<form action="" method="POST" name="form" class="form">
				<input type='hidden' name='form_name' value='liver'>
				<div class="form-group">
					<div class="form-label">お名前<span style="color: red;">*</span></div>
					<input type="text" name="uname" class="form-control" required>
				</div>
				<div class="form-group">
					<div class="form-label">メールアドレス<span style="color: red;">*</span></div>
					<input type="text" name="email" class="form-control" required>
				</div>
				<div class="form-group">
					<div class="form-label">備考欄<span style="color: red;">*</span></div>
					<textarea class="form-control" name="message" rows="5" required></textarea>
				</div>
				<button type="submit" class="btn btn--submit">送信する</button>
				<button type="button" class="btn btn--cancel">戻る</button>
			</form>
		</div>
		<div class="form-success">
			<p class="text-bg">送信が完了致しました。</p>
			<p class="text-sm">運営からの返信まで少々お待ちください。</p>
			<button type="button" class="btn btn--cancel">戻る</button>
		</div>
	</div>
</div>
<div class="work-modal work-modal--model">
	<div class="modal__main">
		<div class="form-before">
			<h2 class="modal__title">モデル募集メールフォーム</h2>
			<p class="modal__intro">下記に情報の入力をお願い致します。</p>
			<form action="" method="POST" class="form">
				<input type='hidden' name='form_name' value='model'>
				<div class="form-group">
					<div class="form-label">お名前<span style="color: red;">*</span></div>
					<input type="text" name="uname" class="form-control" required>
				</div>
				<div class="form-group">
					<div class="form-label">メールアドレス<span style="color: red;">*</span></div>
					<input type="text" name="email" class="form-control" required>
				</div>
				<div class="form-group">
					<div class="form-label">備考欄<span style="color: red;">*</span></div>
					<textarea class="form-control" name="message" rows="5" required></textarea>
				</div>
				<button type="submit" class="btn btn--submit">送信する</button>
				<button type="button" class="btn btn--cancel">戻る</button>
			</form>
		</div>
		<div class="form-success">
			<p class="text-bg">送信が完了致しました。</p>
			<p class="text-sm">運営からの返信まで少々お待ちください。</p>
			<button type="button" class="btn btn--cancel">戻る</button>
		</div>
	</div>
</div>
<div class="work-modal work-modal--pro">
	<div class="modal__main">
		<div class="form-before">
			<h2 class="modal__title">プロモーション募集メールフォーム</h2>
			<p class="modal__intro">下記に情報の入力をお願い致します。</p>
			<form action="" method="POST" class="form">
				<input type='hidden' name='form_name' value='pro'>
				<div class="form-group">
					<div class="form-label">お名前<span style="color: red;">*</span></div>
					<input type="text" name="uname" class="form-control" required>
				</div>
				<div class="form-group">
					<div class="form-label">メールアドレス<span style="color: red;">*</span></div>
					<input type="text" name="email" class="form-control" required>
				</div>
				<div class="form-group">
					<div class="form-label">備考欄<span style="color: red;">*</span></div>
					<textarea class="form-control" name="message" rows="5" required></textarea>
				</div>
				<button type="submit" class="btn btn--submit">送信する</button>
				<button type="button" class="btn btn--cancel">戻る</button>
			</form>
		</div>
		<div class="form-success">
			<p class="text-bg">送信が完了致しました。</p>
			<p class="text-sm">運営からの返信まで少々お待ちください。</p>
			<button type="button" class="btn btn--cancel">戻る</button>
		</div>
	</div>
</div>

<script>
    $(document).ready(function() {
        var submitted_liver = '<?php echo $submitted_liver; ?>';
        var submitted_model = '<?php echo $submitted_model; ?>';
        var submitted_pro = '<?php echo $submitted_pro; ?>';
        if (submitted_liver == 'no') {
            $('.work-modal--liver .form-success').css('display', 'none');
        }
        if (submitted_model == 'no') {
            $('.work-modal--model .form-success').css('display', 'none');
        }
        if (submitted_pro == 'no') {
            $('.work-modal--pro .form-success').css('display', 'none');
        }
		
        if (submitted_liver == 'yes') {
            $('.work-modal--liver').addClass('active');
            $('.work-modal--liver .form-before').css('display', 'none');
            $('.work-modal--liver .form-success').css('display', 'block');
        }
        if (submitted_model == 'yes') {
            $('.work-modal--model').addClass('active');
            $('.work-modal--model .form-before').css('display', 'none');
            $('.work-modal--model .form-success').css('display', 'block');
        }
        if (submitted_pro == 'yes') {
            $('.work-modal--pro').addClass('active');
            $('.work-modal--pro .form-before').css('display', 'none');
            $('.work-modal--pro .form-success').css('display', 'block');
        }
    })
</script>
<?php get_footer(); ?>