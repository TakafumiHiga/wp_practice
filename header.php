<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" />
  <title>practice</title>
  <!-- ゲットヘッダー -->
  <?php wp_head(); ?>
</head>

<body>
  <header>
    <nav class="globalmenu">


      <a href="/" class="logo globalmenu__logo"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png"
          alt="ロゴイメージ画像" /></a>
      <?php 
            wp_nav_menu(array(
            'container_class' => 'globalmenu__list-container', 
            'menu_class' => 'globalmenu__list',//ulのclass
            'menu_id'         => 'globalmenu__list', //ulのid
            'theme_location' => 'global',
            'container' => 'nav',
            'depth' => 3,
            
           
            ));
            ?>

      <!-- <ul class="globalmenu__list">
        <li class="menu-item"><a href="/">ホーム</a></li>
        <li class="menu-item"><a href="/">News</a></li>
      </ul> -->
    </nav>

    <div class="key__visual">
      <!-- 条件分岐 -->

      <?php if (is_home() || is_front_page() ): ?>

      <h1 class="key__visual-header">Practice-Blog</h1>
      <img src="<?php echo get_template_directory_uri(); ?>/img/img4-hill.jpg" alt="丘と太陽が登る画像" />

      <?php elseif ( is_archive()) : ?>
      <h1 class="key__visual-header">Archive</h1>
      <img src="<?php echo get_template_directory_uri(); ?>/img/img3-cat.jpg" alt="子猫が木に登っている画像" />

    </div>
    <?php endif; ?>
    <!-- ここまでheader.phpへ -->