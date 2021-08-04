<?php
$submitted = 'no';
//sending mail
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['uname'];
    $furigana = $_POST['furigana'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $content = $_POST['message'];
    $to1 = 'info@password-inc.site';
    $to2 = $email;
    $subject = 'お問い合わせを受け付けました。';
    $body1 = 'お名前: ' . $name . '<br>' . 'フリガナ: ' . $furigana . '<br>' . '電話番号: ' . $phone . '<br>' . 'メールアドレス: ' . $email . '<br>' . 'お問い合わせ内容: ' . $content;
    $body2 = 'お問い合わせを受け付けました。<br>
    お問い合わせの回答まで、３営業日ほど頂いております。<br>
    回答まで少々お待ちいただけますと幸いです。<br><br>お名前: ' . $name . '<br>' . 'フリガナ: ' . $furigana . '<br>' . '電話番号: ' . $phone . '<br>' . 'メールアドレス: ' . $email . '<br>' . 'お問い合わせ内容: ' . $content;

    $headers = array('Content-Type: text/html; charset=UTF-8');

    wp_mail($to1, $subject, $body1, $headers);
    wp_mail($to2, $subject, $body2, $headers);

    $submitted = 'yes';
}
?>
<?php get_header(); ?>
<!-- main -->
<main>
    <div class="container__inner">
        <section class="contact">
            <h1 class="section__title">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/pw.png" alt="">
                <span>CONTACT</span>
            </h1>
            <div class="contact__main">
                <h2 class="contact__title">お問い合わせフォーム</h2>
                <p class="contact__intro">下記に情報の入力をお願い致します。</p>
                <form action="" method="POST" class="form">
                    <div class="form-group">
                        <div class="form-label">お名前<span style="color: red;">*</span></div>
                        <input type="text" name="uname" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <div class="form-label">フリガナ<span style="color: red;">*</span></div><input type="text" name='furigana' class="form-control" required>
                    </div>
                    <div class="form-group">
                        <div class="form-label">電話番号<span style="color: red;">*</span></div>
                        <input type="text" name='phone' class="form-control" required>
                    </div>
                    <div class="form-group">
                        <div class="form-label">メールアドレス<span style="color: red;">*</span></div>
                        <input type="text" name='email' class="form-control" required>
                    </div>
                    <div class="form-group" style='display:none;'>
                        <div class="form-label">質問種類<span style="color: red;">*</span></div>
                        <select name="" id="" class="form-control">
                            <option value="">選択してください</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <div class="form-label">質問内容<span style="color: red;">*</span></div>
                        <textarea class="form-control" name='message' rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn--submit">送信する</button>
                </form>
            </div>

            <div class="form-success" style="margin: auto;">
                <p class="text-bg">お問い合わせを受け付けました。</p>
                <p class="text-sm">
                    お問い合わせの回答まで、３営業日ほど頂いております。<br>
                    回答まで少々お待ちいただけますと幸いです。
                </p>
                <a href="<?php echo home_url(); ?>/" class="btn btn--cancel">TOP</a>
            </div>
        </section>
    </div>
</main>
<section class="qrcode">
    <div class="container__inner">
        <figure class="qr__img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/qrcode.png" alt="">
        </figure>
        <div class="qr__text">
            <p class="qr__text__title">下記の公式LINEからのお問い合わせも可能です。</p>
            <p class="qr__text__content">
                公式LINEからのお問い合わせ回答も行なっております。公式LINEからのお問い合わせの<br>
                返信はメールフォームからのお問い合わせより比較的対応が早くなっております。
            </p>
        </div>
    </div>
</section>
<script>
    $(document).ready(function() {
        var submitted = '<?php echo $submitted; ?>';
        console.log(submitted)
        if (submitted == 'no') {
            $('.form-success').css('display', 'none');
        }
        if (submitted == 'yes') {
            $('.contact__main').css('display', 'none');
            $('.form-success').css('display', 'block');
        }
    })
</script>
<?php get_footer(); ?>