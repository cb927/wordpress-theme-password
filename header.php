<!-- HTMLコード -->
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Script-Type" content="text/javascript" />
    <meta http-equiv="Content-Style-Type" content="text/css" />
    <?php wp_head(); ?>
    <title>PASSWORD</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.png" />

    <!-- css -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/theme.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/slick/slick.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/slick/slick-theme.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- javascript -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-3.4.1.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/libs/slick/slick.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/theme.js"></script>
</head>

<body>
    <div class="container">
        <!-- header -->
        <header>
            <nav class="navbar">
                <div class="nav-logo">
                    <a href="<?php echo home_url(); ?>/">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="">
                    </a>
                    <a class="hamburger">
                        <i class="fa fa-bars" aria-hidden="true"></i>
                        <i class="fa fa-close" aria-hidden="true"></i>
                    </a>
                </div>
                <div class="container__inner">
                    <div class="nav-link">
                        <?php
                        global $wp;
                        ?>
                        <a href="<?php echo home_url(); ?>/" class="nav-item <?php if ($wp->request == '') echo 'active'; ?>">HOME</a>
                        <a href="<?php echo home_url(); ?>/info" class="nav-item <?php if ($wp->request == 'info' || strpos($wp->request, 'info/') !== false) echo 'active'; ?>">INFO</a>
                        <a href="<?php echo home_url(); ?>/model" class="nav-item <?php if ($wp->request == 'model' || strpos($wp->request, 'model/') !== false) echo 'active'; ?>">MODEL</a>
                        <a href="<?php echo home_url(); ?>/liver" class="nav-item <?php if ($wp->request == 'liver' || strpos($wp->request, 'liver/') !== false) echo 'active'; ?>">LIVER</a>
                        <a href="<?php echo home_url(); ?>/work" class="nav-item <?php if ($wp->request == 'work') echo 'active'; ?>">WORK</a>
                        <a href="<?php echo home_url(); ?>/company" class="nav-item <?php if ($wp->request == 'company') echo 'active'; ?>">COMPANY</a>
                        <a href="<?php echo home_url(); ?>/contact" class="nav-item <?php if ($wp->request == 'contact') echo 'active'; ?>">CONTACT</a>
                    </div>
                </div>
            </nav>
        </header>