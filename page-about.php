<?php get_header(); ?>
<main id="page-main">

    <ol class="breadcrumb" itemscope="" itemtype="https://schema.org/BreadcrumbList">
        <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
            <a itemprop="item" href="<?php echo get_permalink(17); ?>">
                <span itemprop="name">ホーム</span>
            </a>
            <meta itemprop="position" content="1">
        </li>
        <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
            <a itemprop="item" href="<?php echo get_permalink(101); ?>">
                <span itemprop="name">ひこうきぐもについて</span>
            </a>
            <meta itemprop="position" content="2">
        </li>
    </ol>

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