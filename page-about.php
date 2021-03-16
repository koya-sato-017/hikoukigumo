<?php get_header(); ?>
<main id="page-main">
    <div class="page-container">
        <ul class="commons">
<?php
$common_pages = get_child_pages();
if($common_pages->have_posts()):
    while($common_pages->have_posts()): $common_pages->the_post();
        get_template_part('content-common');
    endwhile;
    wp_reset_postdata();
    endif;
?>
        </ul>
    </div>
    
<?php get_footer(); ?>