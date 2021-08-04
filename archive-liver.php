<?php
$submitted_liver = 'no';
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

    $subject = 'ライバー募集';
    wp_mail($to, $subject, $body, $headers);
    $subject1 = 'ライバー募集を受け付けました。';
    $body1 = 'ライバー募集を受け付けました。<br>
		運営からの返信まで少々お待ちいただけますと幸いです。<br><br>お名前: ' . $name . '<br>' . 'Eメールアドレス: ' . $email . '<br>' . '電話番号: ' . $phone . '<br>' . '備考欄 : ' . $content;
    wp_mail($to1, $subject1, $body1, $headers);

    $submitted_liver = 'yes';
}
?>

<?php get_header(); ?>
<!-- main -->
<main>
    <div class="main__top main__top--liver">
        <h2 class="main__top__title">
            LIVER MANAGEMENT
        </h2>
        <div class="main__top__content">
            <p class="content__title">
                LIVE配信で、あなたも有名になりませんか？
            </p>
            <p class="content__detail">
                学生から大人まで携帯1つで、いつでも自分のタイミングで稼げるLIVE配信<br>
                夢や目標など、弊社のノウハウを提供し、あなたのスキルをUP！！<br>
                また、弊社での各提供でも所属事務所ライバー様にもチャンスがあり、サポート致します。<br>
                ​※18歳以上(18歳は6時～22時まで可能)​<br>
                <br>
                所属ライバーには各企業からの「案件」や各種オーディションや配信イベントなどの情報をいち早くお伝え<br>
                しています。多方面の弊社取引先からの案件がありますので配信を収益化する事にも繋がります。<br>
                プロフィール写真のアドバイスや配信機材のアドバイスなど細かなサポートをしておりますのでご興味のあ<br>
                る方は是非お問い合わせください。
            </p>
            <a href="#" class="btn btn--yellow work__link--liver">メールフォームはこちら</a>
        </div>
    </div>
    <div class="container__inner">
        <section class="model">
            <h1 class="model__title">
                株式会社PASSWORDでは、下記のライバーマネジメントを行なっております。
            </h1>
            <div class="model__main">
                <div class="tabs">
                    <div class="categories">
                        <a href="#!" class="tab-link active" id="tab-all">ALL</a>
                        <a href="#!" class="tab-link" id="tab-woman">WOMAN</a>
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
                    <div class="panel active" id="panel-all">
                        <?php
                        wp_reset_query();
                        $args = array(
                            'post_type' => 'liver'
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
                    <div class="panel" id="panel-woman">
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
        var submitted_liver = '<?php echo $submitted_liver; ?>';
        if (submitted_liver == 'no') {
            $('.work-modal--liver .form-success').css('display', 'none');
        }

        if (submitted_liver == 'yes') {
            $('.work-modal--liver').addClass('active');
            $('.work-modal--liver .form-before').css('display', 'none');
            $('.work-modal--liver .form-success').css('display', 'block');
        }
    })
</script>
<?php get_footer(); ?>