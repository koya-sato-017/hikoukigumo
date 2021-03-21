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
            <a itemprop="item" href="<?php echo get_category_link(1); ?>">
                <span itemprop="name">イベント情報</span>
            </a>
            <meta itemprop="position" content="2">
        </li>
    </ol>

<?php
if(have_posts()):
    while(have_posts()): the_post();
        get_template_part('content-archive');
    endwhile;
endif;
?>
<?php get_footer(); ?>