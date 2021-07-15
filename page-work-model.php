<?php
$submitted = 'no';
 //sending mail
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name=$_POST['uname']; 
    $email=$_POST['email'];
    $content=$_POST['message'];
	 
	$to = 'info@password-inc.site';
	$subject = 'モデル募集';
	$body = 'お名前: '.$name.'<br>'.'メールアドレス: '.$email.'<br>'.'備考欄
: '.$content;
	$headers = array('Content-Type: text/html; charset=UTF-8');
 
	wp_mail( $to, $subject, $body, $headers );

	$to1 = $email;
	$subject1 = 'モデル募集を受け付けました。。';
	$body1 = 'モデル募集を受け付けました。<br>
    運営からの返信まで少々お待ちいただけますと幸いです。<br><br>お名前: '.$name.'<br>'.'Eメールアドレス: '.$email.'<br>'.'備考欄 : '.$content;
    
	wp_mail( $to1, $subject1, $body1, $headers );
   
    $submitted = 'yes';
 }
?>


<?php get_header(); ?>
<!-- main -->
<main>
    <div class="container__inner">
        <h1 class="section__title">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/pw.png" alt="">
            <span>WORK</span>
        </h1>
    </div>
    <section class="work-banner work-banner--model">
        <figure class="banner__logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/work/model.png" alt="">
        </figure>
        <div class="banner__text">
            WEB媒体・雑誌・映像など様々な出演に関してモデルマネジメントを行っています。<br>
            細かなマネジメントとともにコンプライアンスチェックにも注力し、モデル活動される<br>
            皆さんの<span class="text-underline">「安心な活動」</span>とクライアント様の<span class="text-underline">「安心なモデル起用」</span>を行っています。
        </div>
    </section>
    <div class="container__inner">
        <section class="work work--liver">
            <h1 class="section__title">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/pw.png" alt="">
                <span>MODEL</span>
            </h1>
            <div class="work__content">
                現在のモデルには様々な要素が求められています。SNSでの発信力であったりそフォロワー数であったり<br>
                モデル自身のブランディングやPRが必要です。各企業の宣伝やイベントへの出演など様々なオファーが<br>
                弊社には届きます。クライアント様はモデルの起用に関してそのモデル自身の発信力にも期待しています<br>
                ので弊社ではモデルのマネジメントに加えて発信力の向上に力を注いでいます。
            </div>
            <a href="#" class="work__btn">メールフォームはこちら</a>
        </section>
    </div>
</main>
<div class="work-modal">
    <div class="modal__main">
        <div class="form-before">
            <h2 class="modal__title">モデル募集メールフォーム</h2>
            <p class="modal__intro">下記に情報の入力をお願い致します。</p>
            <form action="" method="POST" class="form">
                <div class="form-group">
                    <div class="form-label">お名前</div>
                    <input type="text" name="uname" class="form-control" required>
                </div>
                <div class="form-group">
                    <div class="form-label">メールアドレス</div>
                    <input type="email" name="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <div class="form-label">備考欄</div>
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
        var submitted = '<?php echo $submitted; ?>';
        console.log(submitted)
        if (submitted == 'no') {
            $('.form-success').css('display', 'none');
        }
        if (submitted == 'yes') {
            $('.work-modal').addClass('active');
            $('.form-before').css('display', 'none');
            $('.form-success').css('display', 'block');
        }
    })
</script>
<?php get_footer(); ?>