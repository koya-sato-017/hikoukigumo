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

  <section class="section-contents" id="about">
    <div class="wrapper">
<?php
$about_obj = get_page_by_path('about');
$post = $about_obj;
setup_postdata($post);
$about_title = get_the_title();
?>

    <h2 class="section-title"><?php the_title(); ?></h2>
    <p class="section-lead"><?php echo get_the_excerpt(); ?></p>
<?php wp_reset_postdata(); ?>
    <ul class="about-info">
<?php
$about_pages = get_child_pages(-1, $about_obj->ID);
if($about_pages->have_posts()):
  while($about_pages->have_posts()): $about_pages->the_post();
?>
      <li class="about-item">
        <a class="about-link" href="<?php the_permalink(); ?>">
          <div class="about-image"><?php the_post_thumbnail('common'); ?></div>
          <div class="about-body">
            <p class="name"><?php the_title(); ?></p>
            <p class="location"></p>
            <div class="buttonBox">
              <button type="button" class="seeDerail">MORE</button>
            </div>
          </div>
        </a>
      </li>
<?php
  endwhile;
  wp_reset_postdata();
endif;
?>
    </ul>


    </div>
  </section>


  <?php get_footer(); ?>