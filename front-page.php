<?php get_header(); ?>
    <main id="page-main">
      <section class="slider">
        <img src="<?php echo get_template_directory_uri(); ?>/images/img1.jpg" alt="" />
        <img src="<?php echo get_template_directory_uri(); ?>/images/img2.jpg" alt="" />
        <img src="<?php echo get_template_directory_uri(); ?>/images/img3.jpg" alt="" />
        <img src="<?php echo get_template_directory_uri(); ?>/images/img4.jpg" alt="" />
        <img src="<?php echo get_template_directory_uri(); ?>/images/img5.jpg" alt="" />
        <img src="<?php echo get_template_directory_uri(); ?>/images/img6.jpg" alt="" />
      </section>

      <article class="blog">
<?php
if(have_posts()):
  while(have_posts()): the_post(); ?>
  <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
  <time datetime="<?php the_time('Y-m-d'); ?>"<?php the_time('Y.m.d'); ?></time>
  <p><?php the_category(', '); ?></p>
  <p><?php the_content('Read more'); ?></p>
<?php
  endwhile;
endif;
?>
        <ul>
          <li>
            <a href="">
              <time class="time"><?php the_time('Y.m.d'); ?></time>
              <p class="title"><?php the_title(); ?></p>
              <div class="news-body"><?php the_content(); ?></div>
            </a>
          </li>
          <li><a href="">記事</a></li>
          <li><a href="">記事</a></li>
          <li><a href="">記事</a></li>
          <li><a href="">記事</a></li>
          <li><a href="">記事</a></li>
          <li><a href="">記事</a></li>
          <li><a href="">記事</a></li>
          <li><a href="">記事</a></li>
        </ul>
      </article>
      <?php get_footer(); ?>