<?php
$submitted_pro = 'no';
//sending mail
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['uname'];
    $email = $_POST['email'];
    $content = $_POST['message'];
    $phone = $_POST['phon'];

    $to = 'info@password-inc.site';
    $to1 = $email;
    $body = 'お名前: ' . $name . '<br>' . 'メールアドレス: ' . $email . '<br>' . '電話番号: ' . $phone . '<br>' . '備考欄: ' . $content;
    $headers = array('Content-Type: text/html; charset=UTF-8');

    $subject = 'プロモーション募集';
    wp_mail($to, $subject, $body, $headers);
    $subject1 = 'プロモーション募集を受け付けました。';
    $body1 = 'プロモーション募集を受け付けました。<br>
		運営からの返信まで少々お待ちいただけますと幸いです。<br><br>お名前: ' . $name . '<br>' . 'Eメールアドレス: ' . $email . '<br>' . '電話番号: ' . $phone . '<br>' . '備考欄 : ' . $content;
    wp_mail($to1, $subject1, $body1, $headers);

    $submitted_model = 'yes';
}
?>


<?php get_header(); ?>
<!-- main -->
<main class="main--pro">
    <div class="main__top main__top--pro">
        <h2 class="main__top__title">
            PROMOTION BUSINESS
        </h2>
        <div class="main__top__content">
            <p class="content__title">
                雑誌,TV,ラジオ,歌,ネットショップ,ファッションショー出演などの夢を現実にしたい！！<br>
                そんなあなたをお待ちしております。
            </p>
            <p class="content__detail">
                様々な業種の企業様の商品・サービス宣伝に関する手助けを行わせていただいております。<br>
                SNSのマネジメントを中心とした宣伝戦略を弊社所属（業務提携先含む）ライバーやモデル<br>
                も協力し、より細やかなSNS宣伝戦略と実行をお約束します。<br>
                <br>
                既存のメディアによるプロモーション・宣伝の影響力は薄れ現在はSNSを中心とした個人ソーシャル<br>
                メディアでの影響力が大きくなっています。企業が提供するサービスや商品の売れ行きにもSNS活用は<br>
                欠く事のできない重要なアイテムです。弊社は長年にわたる経験とSNS発信者のマネジメント実績から<br>
                「情報発信者と企業のWin・Winの関係」を実現することができます。
            </p>
            <a href="#" class="btn btn--yellow work__link--pro">メールフォームはこちら</a>
        </div>
    </div>
    <div class="bg-gray">
        <div class="container__inner">
            <section class="pro">
                <h1 class="pro__title">
                    株式会社PASSWORDでは、下記のモデルマネジメントを行なっております。
                </h1>
                <div class="pro__main">

                    <?php
                    query_posts('post_type=video');
                    while (have_posts()) : the_post(); ?>
                        <div class="video">
                            <?php the_content(); ?>
                            <div class="video__title">
                                <?php the_title(); ?>
                            </div>
                        </div>

                    <?php endwhile; ?>
                </div>
            </section>
        </div>
    </div>
</main>

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
                    <div class="form-label">電話番号<span style="color: red;">*</span></div>
                    <input type="text" name="phon" class="form-control" required>
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
        var submitted_pro = '<?php echo $submitted_pro; ?>';
        if (submitted_pro == 'no') {
            $('.work-modal--pro .form-success').css('display', 'none');
        }

        if (submitted_pro == 'yes') {
            $('.work-modal--pro').addClass('active');
            $('.work-modal--pro .form-before').css('display', 'none');
            $('.work-modal--pro .form-success').css('display', 'block');
        }
    })
</script>
<?php get_footer(); ?>