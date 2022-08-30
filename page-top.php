<?php get_header(); ?>
<div class="opening">
    <div class="opening__logo">
        <img src="<?php echo get_template_directory_uri(); ?>/img/logo.PNG" alt="" class="opening__picture">
    </div>
</div>
<div class="opening2">
    <div id="word">
        <p id="text">WELCOME ENGLISH EXPLORERS</p>
    </div>
</div>
<!-- トップ画面ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー -->
<div class="top">
    <div class="top__background">
    </div>
    <div class="top__text">
        <h1 class="top__text__title">
            Online English Lesson <br><span>with Philipine Teachers</span>
        </h1>
        <p class="top__text__subtitle">オンライン英会話 with フィリピン人教師</p>
        <a href="/contact" class="top__text__button">\無料体験受付中/</a>
    </div>
    <div class="top__image">
        <img src="<?php echo get_template_directory_uri(); ?>/img/main.PNG" alt="Sunglishのロゴ">
    </div>
    <div class="top__button">
        <a href="contact.html" class="top__button__free">\無料体験受付中/</a>
    </div>
    <!-- <div class="top__button">
        <a href="contact.html" class="top__button__free">\無料体験受付中/</a>
    </div> -->
    <ul class="top__illust">
        <li><img src="<?php echo get_template_directory_uri(); ?>/img/kumo.png" alt="" class="top__illust__1"></li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/img/kumo.png" alt="" class="top__illust__2"></li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/img/kumo.png" alt="" class="top__illust__3"></li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/img/kumo.png" alt="" class="top__illust__4"></li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/img/kumo.png" alt="" class="top__illust__5"></li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/img/kumo.png" alt="" class="top__illust__6"></li>
    </ul>
    <h2 href="#" id="js-scroll-top" class="top__up">
        TOP
    </h2>
</div>
<!-- トップ画面終了ーーーーーーーーーーーーーーーーーーーーーーーーーーーーー -->
<!-- メインーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー -->
<main class="main">
    <div class="news wrapper">
        <h1 class="wrapper__title">News<span class="wrapper__title__sub">ニュース</span></h1>
        <ul class="news__boxs"> 
        <?php
            $limit = 1;
            $num = $wp_query->current_post;
        ?>
        <?php if ( $limit > $num ): ?>
            <p class="new">New</p>
        <?php endif; ?>
        <?php
        $args = array(
            'post_type' =>'post',
        //投稿タイプを選びます
            'category' =>'news',
        //カテゴリーを選択して出力が出来ます
            'posts_per_page' => 5
        //投稿件数を設定ができます
            );
        $the_query = new WP_Query( $args );
            if ( $the_query->have_posts() ) :
            while ( $the_query->have_posts() ) :
                $the_query->the_post();
        ?>
        <li>
            <a href="<?php the_permalink(); ?>" class="news__box">
                <?php if (has_post_thumbnail() ) : ?>
                    <div class="news__post">
                        <?php the_post_thumbnail( 'post-thumbnails' ); ?>
                    </div>
                    <?php else: ?>
                    <div class="news__post">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/m1.jpeg" alt="">
                    </div>
                <?php endif; ?>
                <div class="news__words">
                    <p class="top__date"><?php echo get_the_date( $format, $post ); ?></p>
                    <p class="top__article__new"><?php the_title(); ?></p>
                </div>
            </a>
        </li>
        <?php endwhile; else: ?>
            <li>まだ記事はありません。</li>
        <?php  endif; wp_reset_postdata(); ?>
        </ul>
    </div>
    <div class="future wrapper">
        <h1 class="wrapper__title">Our Features<span class="wrapper__title__sub">Sunglish英会話の特徴</span></h1>
        <div class="future__contents">
            <div class="future__content">
                <h2 class="future__content__title">完全個別レッスン<img src="<?php echo get_template_directory_uri(); ?>/img/suport.png" alt="" class="miniIcon1"></h2>
                <div class="future__content__textBox">
                    <div class="future__content__text">
                        <p><img src="<?php echo get_template_directory_uri(); ?>/img/check.png" alt="" class="miniIcon2">&nbsp;生徒の習得度に合わせたレッスン</p>
                        <p><img src="<?php echo get_template_directory_uri(); ?>/img/check.png" alt="" class="miniIcon2">&nbsp;生徒の目的に沿ったレッスン</p>
                        <p><img src="<?php echo get_template_directory_uri(); ?>/img/check.png" alt="" class="miniIcon2">&nbsp;好きな日時の選択が可能</p>
                    </div>
                    <!-- <div class="future__content__image">
                        <img src="img/lesson.png" alt="">
                    </div> -->
                </div>
            </div>
            <div class="future__content">
                <h2 class="future__content__title">講師の質<img src="<?php echo get_template_directory_uri(); ?>/img/language.png" alt="" class="miniIcon1"></h2>
                <div class="future__content__textBox">
                    <div class="future__content__text">
                        <p><img src="<?php echo get_template_directory_uri(); ?>/img/check.png" alt="" class="miniIcon2">&nbsp;キャリアが長い先生が多数在籍</p>
                        <p><img src="<?php echo get_template_directory_uri(); ?>/img/check.png" alt="" class="miniIcon2">&nbsp;文法に沿った正しい英語</p>
                        <p><img src="<?php echo get_template_directory_uri(); ?>/img/check.png" alt="" class="miniIcon2">&nbsp;日本人が聞き取りやすい発音</p>
                    </div>
                    <!-- <div class="future__content__image">
                        <img src="img/teacher.png" alt="">
                    </div> -->
                </div>
            </div>
            <div class="future__content">
                <h2 class="future__content__title">実践的な英語力<img src="<?php echo get_template_directory_uri(); ?>/img/grow.png" alt="" class="miniIcon1"></h2>
                <div class="future__content__textBox">
                    <div class="future__content__text">
                        <p><img src="<?php echo get_template_directory_uri(); ?>/img/check.png" alt="" class="miniIcon2">『話す』会話に重視したレッスン</p>
                        <p><img src="<?php echo get_template_directory_uri(); ?>/img/check.png" alt="" class="miniIcon2">『聞く』生きた英語で耳が成長</p>
                        <p><img src="<?php echo get_template_directory_uri(); ?>/img/check.png" alt="" class="miniIcon2">『考え』積極的に英語で表現</p>
                    </div>
                    <!-- <div class="future__content__image">
                        <img src="img/hangout.png" alt="">
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <div class="service wrapper">
        <h1 class="wrapper__title">Service<br><span class="wrapper__title__sub">サービスについて</span></h1>   
        <div class="service__contents">
            <div class="service__content">
                <h2 class="service__content__englishTitle">Online English Lesson<span>オンライン個別英会話レッスン</span></h2>
                <div class="service__content__box">
                    <div class="service__content__box__money">
                        <h2 class="service__content__price">月額&nbsp;<span>800</span>&nbsp;円〜</h2>
                        <p class="service__content__priceDetill">1レッスン<span>800</span>円</p>
                    </div>
                    <h2 class="service__content__time">1回&nbsp;40分</h2>
                </div>
                <div class="service__content__free">
                    <a href="/contact" class="service__content__free__button">無料で体験レッスン</a>
                </div>
                <p class="service__content__explain">少しでも多くの方に英語身近に感じて頂きたい、そしてフィリピン人の先生方を少しでも支援するためこの活動を行っています。<br>毎週日曜の午後9時から行っていますので是非お気軽にご参加ください。</p>
                <p class="service__content__additional">※表示価格は税込価格です</p>
            </div>
            <div class="service__content">
                <h2 class="service__content__englishTitle">Language Exchange<span>オンライングループ英会話</span></h2>
                <div class="service__content__box">
                    <div class="service__content__box__money">
                        <h2 class="service__content__price">月額&nbsp;<span>0</span>&nbsp;円〜</h2>
                        <p class="service__content__priceDetill">1レッスン<span>0</span>円</p>
                    </div>
                    <h2 class="service__content__time">1回&nbsp;40分</h2>
                </div>
                <div class="service__content__free">
                    <a href="/contact" class="service__content__free__button">参加者募集</a>
                </div>
                <p class="service__content__explain">少しでも多くの方に英語身近に感じて頂きたい、そしてフィリピン人の先生方を少しでも支援するためこの活動を行っています。<br>毎週日曜の午後9時から行っていますので是非お気軽にご参加ください。</p>
                <p class="service__content__additional">※表示価格は税込価格です</p>
            </div>
        </div>
    </div>
    <div class="question wrapper">
        <h1 class="wrapper__title">Q&A<span class="wrapper__title__sub">よくあるご質問</span></h1>
        <div class="question__content">
            <div class="question__content__accordion">
                <h2 class="question__content__accordion__text js-accordion-title">
                    パソコンは必要ですか？
                </h2>
                <div class="question__content__accordion__answer">
                    画面上での対面式授業ですのでパソコン（タブレット）が良いと思われます。
                </div>
                <h2 class="question__content__accordion__text js-accordion-title">
                    先生の変更は可能ですか？
                </h2>
                <div class="question__content__accordion__answer">
                    基本的には固定とさせて頂いています。
                    しかし生徒様からの希望があれば変更可能です。
                </div>
                <h2 class="question__content__accordion__text js-accordion-title">
                    支払い方法は？
                </h2>
                <div class="question__content__accordion__answer">
                    PayPay、LINEPay、楽天Payでのお支払いが可能です。
                </div>
                <h2 class="question__content__accordion__text js-accordion-title">
                    レッスンを始めるまでの流れは？
                </h2>
                <div class="question__content__accordion__answer">
                    レッスンを始めるにあたって、まずお一人おひとりのご希望やご予算、目的などについてお聞かせいただきます。
                    その後、授業の日程等を決定していきます。
                </div>
                <h2 class="question__content__accordion__text js-accordion-title">
                    初心者でも大丈夫ですか？
                </h2>
                <div class="question__content__accordion__answer">
                    安心してください。大丈夫です。
                    本校のフィリピン人英語教師の方々はキャリアが5年から10年以上とベテランです。中には日本人の生徒を担当した経験が有る教師も在籍していますので全く英語を話したことがない方にも安心して授業を受けて頂けます。
                </div>
                <h2 class="question__content__accordion__text js-accordion-title">
                    授業料以外の費用は掛かりますか？
                </h2>
                <div class="question__content__accordion__answer">
                    掛かりません。
                    会員登録、教材等は全て無料となっています。
                </div>
            </div>
        </div>
    </div>
</main>
<!-- メインーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー -->
<?php get_footer(); ?>