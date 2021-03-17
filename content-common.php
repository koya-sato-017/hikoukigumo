<li class="common-item">
    <a class="common-link" href="<?php the_permalink(); ?>">
        <div class="common-image"><?php the_post_thumbnail('common'); ?></div>
        <div class="common-body">
            <p class="name"><?php the_title(); ?></p>
            <time class="release"><?php the_time('Y.m.d'); ?></time>
            <!-- <p class="caption"><?php get_the_excerpt(); ?></p> -->
            <div class="buttonBox">
                <button type="button" class="seeDetail">続きを読む</button>
            </div>
        </div>
    </a>
</li>