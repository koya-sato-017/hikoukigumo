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
    <ul>
      <?php
      $common_posts = get_new_posts();
      if ($common_posts->have_posts()) :
        while ($common_posts->have_posts()) : $common_posts->the_post();
          get_template_part('content-common');
        endwhile;
        wp_reset_postdata();
      endif;
      ?>
    </ul>
  </article>
  <?php get_footer(); ?>