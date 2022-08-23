<footer class="footer">
        <div class="footer__inner inner">
            <div class="footer-info">
            <div class="footer-info__left">
                <div class="footer-info__logo">
                <img src="<?php echo esc_url(get_theme_file_uri('/src/images/common/logo.svg')); ?>" alt="">
                </div>
                <div class="footer-info__address">〒166-0001 東京都杉並区阿佐谷北7-3-1</div>
                <div class="footer-info__tel">03-1234-5678</div>
                <div class="footer-info__time">(年中無休 AM9:00〜PM22:00)</div>
                <div class="footer-info__contact">
                <div class="footer-info__contact-web">
                <a href="<?php echo esc_url(home_url('/'))?>reservation">WEB予約</a>
                </div>
                <div class="footer-info__contact-mail">
                <a href="<?php echo esc_url(home_url('/'))?>contact">お問い合わせ</a>
                </div>
            </div>
            <div class="footer-info__medical-time">
                <img src="<?php echo esc_url(get_theme_file_uri('/src/images/top/medical-time-pc.jpg')); ?>" alt="">
            </div>
            </div>
            <div class="footer-info__right">
            <div class="footer-info-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3239.865606084968!2d139.6339344152595!3d35.70492468018874!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018f2767eb9e92b%3A0xc2d0573363890acc!2z6Zi_5L2Q44O26LC36aeF!5e0!3m2!1sja!2sjp!4v1655384440199!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            </div>
        </div>
        <nav class="footer-nav">
            <div class="footer-nav__item">
            <ul>
                <li><a href="<?php echo esc_url(home_url('/'))?>">TOP</a></li>
            </ul>
            </div>
            <div class="footer-nav__item">
            <dt><a href="<?php echo esc_url(home_url('/'))?>about">当院について</a></dt>
            <dd>
                <ul class="footer-nav__item-list">
                <li><a href="<?php echo esc_url(home_url('/'))?>about#policy">ポリシーと特徴</a></li>
                <li><a href="<?php echo esc_url(home_url('/'))?>about#about-img">当院の様子</a></li>
                </ul>
            </dd>
            </div>
            <div class="footer-nav__item">
            <dt><a href="<?php echo esc_url(home_url('/'))?>staff">スタッフ紹介</a></dt>
            <dd>
                <ul class="footer-nav__item-list">
                <li><a href="<?php echo esc_url(home_url('/'))?>staff#boss">院長のあいさつ</a></li>
                <li><a href="<?php echo esc_url(home_url('/'))?>staff#staff">スタッフ</a></li>
                <li><a href="<?php echo esc_url(home_url('/'))?>blog#blog">スタッフブログ</a></li>
                </ul>
            </dd>
            </div>
            <div class="footer-nav__item">
            <dt><a href="<?php echo esc_url(home_url('/'))?>medical">治療内容</a></dt>
            <div class="footer-nav__item-flex">
                <dd>
                <?php
                $args = array(
                    'post_type' => 'plan', // カスタム投稿名を指定
                    'taxonomy' => 'plan_category' ,//タクソノミー名を指定
                    'post__in' => array(2185, 2192, 2193, 2194),
                    'order' => 'ASC', //最新順'DESC'・古い順'ASC'
                    'posts_per_page' => -1 // 表示件数(−1で全ての記事表示)
                );
                $the_query = new WP_Query($args); if($the_query->have_posts()):
                    ?>
                <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
                <ul class="footer-nav__item-list">
                    <li>
                        <a href="<?php echo esc_url(home_url('/'))?>medical#medical_<?php echo the_ID(); ?>"><?php the_title();?></a>
                    </li>
                </ul>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
                <?php endif; ?>
                </dd>
                <dd>
                    <?php
                $args = array(
                    'post_type' => 'plan', // カスタム投稿名を指定
                    'taxonomy' => 'plan_category' ,//タクソノミー名を指定
                    'post__in' => array(2195, 2196, 2197, 2198),
                    'order' => 'ASC', //最新順'DESC'・古い順'ASC'
                    'posts_per_page' => -1 // 表示件数(−1で全ての記事表示)
                );
                $the_query = new WP_Query($args); if($the_query->have_posts()):
                    ?>
                <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
                <ul class="footer-nav__item-list footer-nav__sub">
                    <li>
                        <a href="<?php echo esc_url(home_url('/'))?>medical#specail_<?php echo the_ID(); ?>"><?php the_title();?></a>
                    </li>
                </ul>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
                <?php endif; ?>
                </dd>
            </div>
            </div>
            <div class="footer-nav__item">
            <dt><a href="<?php echo esc_url(home_url('/'))?>contact">お問い合わせ</a></dt>
            <dd>
                <ul class="footer-nav__item-list">
                <li><a href="<?php echo esc_url(home_url('/'))?>contact">お問い合わせフォーム</a></li>
                <li><a href="<?php echo esc_url(home_url('/'))?>reservation">WEB予約</a></li>
                </ul>
            </dd>
            </div>
        </nav>
        </div>
        <div class="footer__copyright">
            <small>&copy;2020-2021 みなみ歯科クリニック</small>
        </div>

        <div class="footer-bottom footer-bottom--fixed">
            <a href="0312345678" class="footer-bottom__tel">
            <img src="<?php echo esc_url(get_theme_file_uri('/src/images/common/footer-bottom.png')); ?>" alt="電話番号">
            </a>
            <a href="<?php echo esc_url(home_url('/'))?>reservation" class="footer-bottom__link">
            <img src="<?php echo esc_url(get_theme_file_uri('/src/images/common/footer.bottom2.png')); ?>" alt="WEB予約はこちら">
            </a>
        </div>
    </footer>
    <a href="#" class="back-to-top js-to-top">
        <img src="<?php echo esc_url(get_theme_file_uri('/src/images/common/totop.svg')); ?>" alt="トップに戻るボタン">
    </a>

        <?php wp_footer(); ?>
    </body>
    </html>
