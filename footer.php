<footer>
        <container class="footer-main">
          <section class="info-nav">
            <div class="instagram">
              <p class="info-title">Instagram</p>
              <ul class="content">
                <li>
                  <p class="instagram-title">あんじょうおひるねアート</p>
                </li>
                <li>
                  <p class="instagram-introduction">
                    愛知県安城市を拠点に活動中の佐藤智加です<br />
                    赤ちゃんとこどもの写真を撮ることが大好きです❤️<br />
                    ニューボーンフォト撮影、おひるねアート®︎などのイベント主催♪<br />
                    ご質問や企業イベントに関しては、お気軽にDMください☻
                  </p>
                </li>
                <li>
                  <a href="https://www.instagram.com/ko_yay_ok/?hl=ja" class="flowbtn insta_btn1">
                    <i class="fab fa-instagram"></i>
                    <div>フォロー</div>
                  </a>
                </li>
              </ul>
            </div>
          </section>
          <section class="info-nav">
            <div class="photo-gallery">
              <p class="info-title">フォトギャラリー</p>
              <a href="<?php echo get_permalink('photogallery'); ?>">
                <div class="content">
                  <p>ひこうきぐものフォトギャラリー</p>
                  <p>こちらをタップ</p>
                </div>
              </a>
            </div>
          </section>
          <section class="info-nav">
            <div class="twitter">
              <p class="info-title">Twitter</p>
              <a href="">
                <div class="content"></div>
              </a>
            </div>
            <nav class="footer-nav">
              <p class="info-title">カテゴリー</p>
<?php
wp_nav_menu(
  array(
    'theme_location' => 'place_footer',
    'container' => false,
  )
);
?>
            </nav>
            <!-- <div class="category">
              <p class="info-title">カテゴリー</p>
              <div class="content">
                <ul>
                  <li><a href="#">おひるねアート</a></li>
                  <li><a href="#">ご予約受付中</a></li>
                  <li><a href="#">イベント</a></li>
                  <li><a href="#">ニューボーンフォト</a></li>
                  <li><a href="#">ファミリーフォト</a></li>
                  <li><a href="#">ブログ</a></li>
                  <li><a href="#">未分類</a></li>
                </ul>
              </div>
            </div> -->
          </section>
        </container>
        
        <div id="copyright">
          <p>
            <small>Copyright &copy; おひるねアート&reg; ひこうきぐも 2021</small>
          </p>
        </div>
      </footer>
    </main>

    <div id="page_top"><a href="#"></a></div>

    <div class="fix-nav">
      <aside class="mobile-fix-nav">
        <p>
          <a href="line.php">
            <img src="<?php echo get_template_directory_uri(); ?>/images/logo-line.png" alt="LINE登録してね！">
          </a>
        </p>
      </aside>  
    </div>

    <?php wp_footer(); ?>
  </body>
</html>