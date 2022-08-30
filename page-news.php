<?php get_header(); ?>
<main class="main">
    <div class="main__background"></div>
    <div class="vlogPage contents">
        <div class="vlogPage__content">
            <h1 class="vlogPage__content__title">News</h1>
        </div>
        <div class="articles">
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?> 
                    <article class="article" id="article">
                        <?php if (has_post_thumbnail() ) : ?>
                            <figure>
                                <?php the_post_thumbnail( 'post-thumbnails' ); ?>
                            </figure>
                        <?php else: ?>
                            <figure>
                                <img src="<?php echo get_template_directory_uri(); ?>/img/m1.jpeg" alt="">
                            </figure>
                        <?php endif; ?>
                        <?php
                            $days = 3;
                            $today = date_i18n('U');
                            // 1行目　「$days = 3」で「New」をつける期間を3日以内にします。
                            // 2行目　「date_i18n(‘U’);」はWordpressの日付取得関数です。
                            $entry_day = get_the_time('U');
                            $keika = date('U',($today - $entry_day)) / 86400;
                        ?>
                        <?php if ( $days > $keika ): ?>
                            <p class="article__new">New</p>
                        <?php endif; ?> 
                        <p class="article__date"><?php echo get_the_date( $format, $post ); ?></p>
                        <h2 class="article__title"><?php the_title(); ?></h2>
                        <div class="article__more">
                            <a href="<?php the_permalink(); ?>">more</a>
                        </div>
                    </article>
                <?php endwhile; else : ?>
                    <p>投稿がありません</p>
            <?php endif; ?>
            <?php the_posts_pagination(
            array(
                'mid_size'      => 2, // 現在ページの左右に表示するページ番号の数
                'prev_next'     => true, // 「前へ」「次へ」のリンクを表示する場合はtrue
                'prev_text'     => __( '前へ'), // 「前へ」リンクのテキスト
                'next_text'     => __( '次へ'), // 「次へ」リンクのテキスト
                'type'          => 'list', // 戻り値の指定 (plain/list)
            )
            ); ?>
        </div>
    </div> 
</main>
<!-- メインーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー -->
<?php get_footer(); ?>

