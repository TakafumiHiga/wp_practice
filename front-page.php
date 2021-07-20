<?php get_header(); ?>
</header>
<main>
  <section id="news" class="news">
    <h2 class="section__header news__header">News</h2>
    <div class="post__item-wrap">
      <ul class="post__item-list">
        <!-- メインループをここに記入 -->
        <?php if (have_posts()): while (have_posts()): the_post(); ?>
        <li class="post__item">
          <!-- パーマリンクを追記 -->
          <a href="<?php the_permalink(); ?>/">
            <figure class="post__item-img">
              <!-- アイキャッチ画像を表示する -->
              <?php if (has_post_thumbnail()): the_post_thumbnail('');
            
          else: ?>
              <!-- アイキャッチ画像がない場合 -->
              <img src="<?php echo get_template_directory_uri(); ?>/img/img2-bill.jpg" alt="" />
              <!-- アイキャッチ画像のphp閉じ -->
              <?php 
                endif;
              ?>
            </figure>
            <div class="post__item-text-wrap">
              <span class="post__item-date"><?php the_time('Y.m.j'); ?></span><span class="post__item-cat">自然</span>
              <h3 class="post__item-title">
                <?php the_title(); ?>
              </h3>
              <div class="post__item-desc">
                <?php the_content(); ?>
              </div>
            </div>
            <?php endwhile; else: ?>
            <?php endif; ?>
          </a>
        </li>
      </ul>
    </div>
  </section>
  <section id="news" class="news">
    <h2 class="section__header news__header">商品一覧</h2>
    <div class="post__item-wrap">
      <ul class="post__item-list">

        <!-- サブループをここに記入 -->
        <?php
        $args = array(
        'post_type' => 'item',//投稿タイプを指定
        'posts_per_page' => 5,
        ); ?>

        <?php $the_query = new WP_Query($args); ?>
        <?php if ($the_query->have_posts() ) : 
        while($the_query->have_posts()): $the_query->the_post(); ?>

        <li class="post__item">
          <!-- パーマリンクを追記 -->
          <a href="<?php the_permalink(); ?>/">

            <div class="post__item-text-wrap">
              <span class="post__item-date"><?php the_time('Y.m.j'); ?></span><span class="post__item-cat">自然</span>
              <h3 class="post__item-title">
                <?php the_title(); ?>
              </h3>
              <div class="post__item-desc">
                <?php the_content(); ?>
              </div>
            </div>
            <?php wp_reset_postdata(); ?>
            <?php endwhile; else: ?>
            <?php endif; ?>
          </a>
        </li>
      </ul>
    </div>
  </section>
</main>
<footer class="footer">
  <h2 class="footer__heading">やんばるエキスパート<br />WordPress勉強会</h2>
</footer>
<!-- ゲットフッター -->
<?php wp_footer(); ?>
</body>

</html>