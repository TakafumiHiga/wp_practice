<?php get_header(); ?>

</header>

<body>
  <main>
    <section id="news" class="news">
      <h2 class="section__header news__header">NEWS</h2>
      <div class="single__item-wrap">

        <!-- メインループ開始 -->
        <?php if(have_posts()): while (have_posts()): the_post(); ?>

        <!-- ここに投稿を記述 -->
        <article class="single__item">
          <span class="post__item-date"><?php the_date(); ?></span>

          <!-- カテゴリーを取得し、classをつけて表示する -->
          <span class="post__item-cat">自然</span>

          <h2 class="single__item-title"><?php the_title(); ?></h2>

          <figure class="single__item-img">

            <!-- アイキャッチ画像があれば出力 -->

            <?php if (has_post_thumbnail()): the_post_thumbnail(); else: ?>

            <!-- なければ以下の画像を出力 -->
            <img src="img/img1-sunset.jpg" alt="" />

            <!-- 画像のphpを閉める -->

            <?php endif; ?>
          </figure>
          <div class="post__item-desc">〇〇に行ったときの写真です。夕日を見ました</div>
      </div>
      </article>


      <!-- php閉じ -->
      <?php endwhile; else: ?>
      <?php endif; ?>
    </section>

  </main>
  <footer class="footer">
    <h2 class="footer__heading">やんばるエキスパート<br />WordPress勉強会</h2>
  </footer>
</body>

</html>