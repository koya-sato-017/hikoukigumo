<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords" content="共通のキーワード" />
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <title><?php bloginfo('name'); ?></title>
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <header>
      <div class="site-introduction">
        <a href="index.php">
          <img src="<?php echo get_template_directory_uri(); ?>/images/hikouki_gumo.png" alt="飛行機雲の画像" />
          <p>おひるねアート</p>
          <h1 class="title"><?php echo get_main_title(); ?></h1>
        </a>
<?php if(is_front_page()): ?>
        <p class="site-introduction_description">愛知県安城市のおひるねアート&reg;認定講師　佐藤智加のブログです</p>
<?php else: ?>
        <p class="site-introduction_description"></p>
<?php endif; ?>
      </div>
      <input id="my-parts-checkbox" class="my-parts-hidden" type="checkbox">
      <label id="my-parts-icon" for="my-parts-checkbox"><span></span></label>
      <nav id="global-nav" class="global-nav">
<?php
wp_nav_menu(
  array(
    'theme_location' => 'place_global',
    'container' => false,
  )
);
?>
      </nav>
    </header>