    <!-- フッターーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー -->
    <footer class="footer">
        <div class="footer__information">
            <p class="footer__information__text">会社概要</p>
            <p class="footer__information__text">sunglish.en:&nbsp;オンライン英会話教室</p>
            <p class="footer__information__text">sunglish.web:&nbsp;Webサイト制作</p>
            <p class="footer__information__text">代表:&nbsp;西川 太陽</p>
            <p class="footer__information__text">住所:&nbsp;和歌山県和歌山市有本692-29</p>
            <p class="footer__information__text">電話番号:&nbsp;090-6753-6346</p>
            <p class="footer__information__text">メール:&nbsp;sunglish.jp@gmail.com</p>
        </div>
        <p class="footer__last">&copy; Sunglish 2022</p>
    </footer>
    <!-- フッター終了ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー -->
    <?php if(is_front_page()) : ?>
        <script src="<?php echo get_template_directory_uri(); ?>/js/oa.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/back.js"></script>
    <?php endif; ?>
    <script src="<?php echo get_template_directory_uri(); ?>/js/humberger.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/inview.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/acc.js"></script>
    <?php wp_footer(); ?>
</body>
</html>