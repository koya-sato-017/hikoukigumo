<?php get_header(); ?>
    <main id="page-main">
<?php
if(have_posts()):
    while(have_posts()): the_post();
        get_template_part('content-archive');
    endwhile;
endif;
?>
<?php get_footer(); ?>