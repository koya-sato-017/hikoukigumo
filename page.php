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
<?php if(is_page(21)): ?>
            <a itemprop="item" href="<?php echo get_permalink(21); ?>">
                <span itemprop="name">フォトギャラリー</span>
            </a>
<?php elseif(is_page(31)): ?>
            <a itemprop="item" href="<?php echo get_permalink(31); ?>">
                <span itemprop="name">お問い合わせ</span>
            </a>
<?php endif; ?>
            <meta itemprop="position" content="2">
        </li>
    </ol>

<?php
if(have_posts()):
    while(have_posts()): the_post();
        the_content();
    endwhile;
endif;
?>
<?php get_footer(); ?>