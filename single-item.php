<?php get_header(); ?>
</header>

<body>
  <main>
    <section id="news" class="news">
      <h2 class="section__header news__header">商品</h2>
      <div class="single__item-wrap">

        <!-- メインループ開始 -->
        <?php if (have_posts()): while (have_posts()): the_post(); ?>
        <!-- ここに投稿を記述 -->

        <article class="single__item">
          <span class="post__item-date"><?php the_time('Y.m.j'); ?></span>
          <!-- カテゴリーを取得し、classをつけて表示する -->
          <span class="post__item-cat">自然</span>

          <h2 class="single__item-title"><?php the_title(); ?></h2>

          <figure class="single__item-img">
            <?php if (has_post_thumbnail()): the_post_thumbnail(''); ?>
            <!-- アイキャッチ画像があれば出力 -->
            <?php 
          endif;
        ?>

            <!-- なければ以下の画像を出力 -->

            <!-- 画像のphpを閉める -->
          </figure>
          <div class="post__item-desc"><?php the_content(); ?></div>
      </div>
      </article>

      <?php endwhile; else: ?>
      <?php endif; ?>
      <!-- php閉じ -->

      </div>
    </section>


  </main>
  <footer class="footer">
    <h2 class="footer__heading">やんばるエキスパート<br />WordPress勉強会</h2>
  </footer>
</body>

</html>