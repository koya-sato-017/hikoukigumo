<?php
function my_enqueue_scripts() {
    
  wp_enqueue_style( 'normalize_style', get_template_directory_uri() . '/css/normalize.css', array() );
  wp_enqueue_style( 'common_style', get_template_directory_uri() . '/css/common.css', array() );
  wp_enqueue_style( 'home_style', get_template_directory_uri() . '/css/home.css', array() );
  
  
  wp_enqueue_style( 'slick-theme_style', '//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css', array() );
  wp_enqueue_style( 'slick_style', '//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css', array() );
  wp_enqueue_style( 'my-fa5', '//use.fontawesome.com/releases/v5.6.1/css/all.css', array(), NULL );
  wp_enqueue_style( 'my-googleapis', '//fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@300&display=swap', array(), NULL );
  wp_enqueue_script( 'js_script', get_template_directory_uri() . '/js/script.js', array( 'jquery' ), '3.3.2', true );
  wp_enqueue_script( 'slick', '//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js', array( 'jquery' ), '1.9.0', true );

}
add_action( 'wp_enqueue_scripts', 'my_enqueue_scripts' );

function my_styles() {
// photo-gallery用のCSS
if(is_page('photogallery')) {
  wp_enqueue_style( 'photo-gallery_style', get_template_directory_uri() . '/css/photo_gallery.css', array() );
  }
}
add_action( 'wp_enqueue_scripts', 'my_styles' );

// ヘッダー、フッターのカスタムメニュー化
register_nav_menus(
  array(
    'place_global' => 'グローバル',
    'place_footer' => 'フッターナビ',
  )
);

function get_main_title() {
  if(is_singular('post')):
    $category_obj = get_the_category();
    return $category_obj[0]->name;
  elseif (is_page()):
    return get_the_title();
  elseif (is_category()):
    return single_cat_title();
  endif;
}

// アイキャッチ画像を利用できるようにする
add_theme_support('post-thumbnails');

// トップページのメイン画像用のサイズ設定
add_image_size('top', 1077, 622, true);

// プロフィール画像用のサイズ設定
add_image_size('profile', 577, 280, true);

