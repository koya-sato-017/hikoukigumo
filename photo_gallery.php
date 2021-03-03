<?php get_header(); ?>
    <main id="page-main">
      <section class="page-title">
        <h2>ひこうきぐものフォトギャラリー</h2>
      </section>

      <ol class="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <a itemprop="item" href="home.html">
            <span itemprop="name">ホーム</span>
          </a>
          <meta itemprop="position" content="1" />
        </li>
        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <a itemprop="item" href="photo_gallery.html">
            <span itemprop="name">フォトギャラリー</span>
          </a>
          <meta itemprop="position" content="2" />
        </li>
      </ol>

      <article class="gallery">
        <div>
          <p>ひこうきぐものフォトギャラリーです</p>
        </div>
        <div class="container">
          <div class="grid">
            
              <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/img1.jpg" alt=""></a>
            
          </div>
          <div class="grid">
            
              <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/img2.jpg" alt=""></a>
            
          </div>
          <div class="grid">
            
              <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/img3.jpg" alt=""></a>
            
          </div>
          <div class="grid">
            
              <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/img4.jpg" alt=""></a>
            
          </div>
          <div class="grid">
            
              <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/img5.jpg" alt=""></a>
            
          </div>
          <div class="grid">
            
              <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/img6.jpg" alt=""></a>
            
          </div>
        </div>
      </article>
      <?php get_footer(); ?>