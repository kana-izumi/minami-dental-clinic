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
                <li><a href="">TOP</a></li>
            </ul>
            </div>
            <div class="footer-nav__item">
            <dt>当院について</dt>
            <dd>
                <ul class="footer-nav__item-list">
                <li><a href="">ポリシーと特徴</a></li>
                <li><a href="">当院の様子</a></li>
                </ul>
            </dd>
            </div>
            <div class="footer-nav__item">
            <dt>スタッフ紹介</dt>
            <dd>
                <ul class="footer-nav__item-list">
                <li><a href="">院長のあいさつ</a></li>
                <li><a href="">スタッフ</a></li>
                <li><a href="">スタッフブログ</a></li>
                </ul>
            </dd>
            </div>
            <div class="footer-nav__item">
            <dt>治療内容</dt>
            <div class="footer-nav__item-flex">
                <dd>
                <ul class="footer-nav__item-list">
                    <li><a href="">一般歯科</a></li>
                    <li><a href="">小児歯科</a></li>
                    <li><a href="">予防歯科</a></li>
                    <li><a href="">入れ歯</a></li>
                </ul>
                </dd>
                <dd>
                <ul class="footer-nav__item-list footer-nav__sub">
                    <li><a href="">矯正歯科</a></li>
                    <li><a href="">ホワイトニング</a></li>
                    <li><a href="">口腔外科</a></li>
                    <li><a href="">レーザー治療</a></li>
                </ul>
                </dd>
            </div>
            </div>
            <div class="footer-nav__item">
            <dt>お問い合わせ</dt>
            <dd>
                <ul class="footer-nav__item-list">
                <li><a href="">お問い合わせフォーム</a></li>
                <li><a href="">WEB予約</a></li>
                </ul>
            </dd>
            </div>
        </nav>
        </div>
        <div class="footer__copyright">
            <small>&copy;2020-2021 みなみ歯科クリニック</small>
        </div>
        <div class="footer-bottom">
            <div class="footer-bottom__tel">
            <img src="<?php echo esc_url(get_theme_file_uri('/src/images/common/footer-bottom.png')); ?>" alt="電話番号">
            </div>
            <div class="footer-bottom__link">
            <a href=""><img src="<?php echo esc_url(get_theme_file_uri('/src/images/common/footer.bottom2.png')); ?>" alt="WEB予約はこちら"></a>
            </div>
        </div>
    </footer>

        <?php wp_footer(); ?>
    </body>
    </html>
