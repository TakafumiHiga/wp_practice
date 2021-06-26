<?php get_header(); ?>

</header>
<main>
  <section id="news" class="news">
    <h2 class="section__header news__header">News</h2>
    <div class="post__item-wrap">
      <ul class="post__item-list">
        <?php if (have_posts()): while (have_posts()): the_post(); ?>

        <li class="post__item">
          <a href="<?php the_permalink(); ?>/">
            <figure class="post__item-img">

              <?php if (has_post_thumbnail()): the_post_thumbnail('');
            
else: ?>

              <img src="<?php echo get_template_directory_uri(); ?>/img/img1-sunset.jpg" alt="" />

              <?php 
                endif;
              ?>
            </figure>
            <div class="post__item-text-wrap">
              <span class="post__item-date"><?php the_time('Y.m.j'); ?></span><span class="post__item-cat">自然</span>
              <h3 class="post__item-title"><?php the_title(); ?></h3>
              <div class="post__item-desc"><?php the_content(); ?>
              </div>
            </div>
          </a>
        </li>
        <?php endwhile; else: ?>
        <?php endif; ?>
      </ul>
    </div>
  </section>
</main>



<footer class="footer">
  <h2 class="footer__heading">やんばるエキスパート<br />WordPress勉強会</h2>
</footer>
<?php wp_footer(); ?>
</body>

</html>