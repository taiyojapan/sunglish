<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php titles(); ?></title>
    <meta name="keywords" content="英会話,オンライン英会話,英会話教室,英会話スクール,オンライン,和歌山,大阪,梅田,京都">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style/oa.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style/normal.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <!-- オープンアニメーションの実装ーーーーーーーーーーーーーーーーーーーーーー -->

    <!-- オープンアニメーションの実装終了ーーーーーーーーーーーーーーーーーーーー -->
    <!-- ヘッダーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー -->
    <div id="global-container">
        <div id="container"><!-- ヘッダーの見える部分 -->
            <header class="header">
                <a href="<?php echo home_url(); ?>" class="mobile-menu__title">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo.PNG" alt="" class="logo-picture">
                </a>
                <button class="mobile-menu__btn"><!-- ハンバーガーの作成 -->
                    <span></span>
                    <span></span>
                    <span></span>
                </button><!-- ハンバーガーの作成終了 -->
                <ul class="laptop-menu">
                    <li class="laptop-menu__item">
                        <a class="laptop-menu__link" href="<?php echo home_url(); ?>">
                            <p class="laptop-menu__title">Home</p>
                        </a>
                    </li>
                    <li class="laptop-menu__item">
                        <a class="laptop-menu__link" href="/service">
                            <p class="laptop-menu__title">Service</p>
                        </a>
                    </li>
                    <li class="laptop-menu__item">
                        <a class="laptop-menu__link" href="/about">
                            <p class="laptop-menu__title">About</p>
                        </a>
                    </li>
                    <li class="laptop-menu__item">
                        <a class="laptop-menu__link" href="/news">
                            <p class="laptop-menu__title">News</p>
                        </a>
                    </li>
                    <li class="laptop-menu__item">
                        <a class="laptop-menu__link" href="/contact">
                            <p class="laptop-menu__title">Contact</p>
                        </a>
                    </li>
                </ul>
            </header>
        </div><!-- ヘッダーの見える部分終了 -->
        <nav class="mobile-menu"><!-- ボタンを押した時に出てくるメニュー部分 -->
            <div class="mobile-menu__cover"><!-- メニューの背景色 -->
            </div><!-- メニューの背景色終了 -->
            <ul class="mobile-menu__main">
                <li class="mobile-menu__item">
                    <a class="mobile-menu__link" href="<?php echo home_url(); ?>">
                        <span class="main-title">Home</span><br>
                        <span class="sub-title">メインページ</span>
                    </a>
                </li>
                <li class="mobile-menu__item">
                    <a class="mobile-menu__link" href="/service">
                        <span class="main-title">Our Service</span><br>
                        <span class="sub-title">サービスについて</span>
                    </a>
                </li>
                <li class="mobile-menu__item">
                    <a class="mobile-menu__link" href="/about">
                        <span class="main-title">About Us</span><br>
                        <span class="sub-title">私たちについて</span>
                    </a>
                </li>
                <li class="mobile-menu__item">
                    <a class="mobile-menu__link" href="/news">
                        <span class="main-title">News</span><br>
                        <span class="sub-title">新着情報</span>
                    </a>
                </li>
                <li class="mobile-menu__item">
                    <a class="mobile-menu__link" href="/contact">
                        <span class="main-title">Contact Us</span><br>
                        <span class="sub-title">コンタクト方法</span>
                    </a>
                </li>
            </ul>
        </nav><!-- ボタンを押した時に出てくるメニュー部分終了 -->
    </div>
    <!-- ヘッダー終了ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー -->