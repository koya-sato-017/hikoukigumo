<?php get_header(); ?>    
    <main id="page-main">
      <section class="page-title">
        <h2>お問い合わせ</h2>
      </section>

      <ol class="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <a itemprop="item" href="home.html">
            <span itemprop="name">ホーム</span>
          </a>
          <meta itemprop="position" content="1" />
        </li>
        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <a itemprop="item" href="contact.html">
            <span itemprop="name">お問い合わせ</span>
          </a>
          <meta itemprop="position" content="2" />
        </li>
      </ol>

      <div class="form">
        <div class="form-item">
          <p class="form-item-label">
            <span class="form-item-label-required">必須</span>氏名
          </p>
          <input type="text" class="form-item-input" placeholder="例）山田太郎">
        </div>
        <div class="form-item">
          <p class="form-item-label">
            <span class="form-item-label-required">必須</span>メールアドレス
          </p>
          <input type="email" class="form-item-input" placeholder="例）example@gmail.com">
        </div>
        <div class="form-item">
          <p class="form-item-label isMsg"><span class="form-item-label-required">必須</span>お問い合わせ内容</p>
          <textarea class="form-item-textarea"></textarea>
        </div>
        <input type="submit" class="form-btn" value="送信する">
      </div>
<?php get_footer(); ?>