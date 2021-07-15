<?php
$submitted = 'no';
 //sending mail
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name=$_POST['uname']; 
    $email=$_POST['email'];
    $content=$_POST['message'];
	 
	$to = 'info@password-inc.site';
	$subject = 'プロモーション募集';
	$body = 'お名前: '.$name.'<br>'.'メールアドレス: '.$email.'<br>'.'備考欄
: '.$content;
	$headers = array('Content-Type: text/html; charset=UTF-8');
 
	wp_mail( $to, $subject, $body, $headers );
	 
	$to1 = $email;
	$subject1 = 'プロモーション募集を受け付けました。';
	$body1 = 'プロモーション募集を受け付けました。<br>
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
    <section class="work-banner work-banner--pro">
        <figure class="banner__logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/work/promotion.png" alt="">
        </figure>
        <div class="banner__text">
            様々な業種の企業様の商品・サービス宣伝に関する手助けを行わせていただいております。<br>
            <span class="text-underline">SNSのマネジメントを中心とした宣伝戦略</span>を弊社所属（業務提携先含む）ライバーやモデル<br>
            も協力し、<span class="text-underline">より細やかなSNS宣伝戦略と実行</span>をお約束します。
        </div>
    </section>
    <div class="container__inner">
        <section class="work work--liver">
            <h1 class="section__title">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/pw.png" alt="">
                <span>PROMOTION</span>
            </h1>
            <div class="work__content">
                既存のメディアによるプロモーション・宣伝の影響力は薄れ現在はSNSを中心とした個人ソーシャル<br>
                メディアでの影響力が大きくなっています。企業が提供するサービスや商品の売れ行きにもSNS活用は<br>
                欠く事のできない重要なアイテムです。弊社は長年にわたる経験とSNS発信者のマネジメント実績から<br>
                「情報発信者と企業のWin・Winの関係」を実現することができます。
            </div>
            <a href="#" class="work__btn">メールフォームはこちら</a>
        </section>
    </div>
</main>
<div class="work-modal">
    <div class="modal__main">
        <div class="form-before">
            <h2 class="modal__title">プロモーション募集メールフォーム</h2>
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