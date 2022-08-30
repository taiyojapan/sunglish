<?php get_header(); ?>
<main class="main">
    <div class="main__background"></div>
    <div class="single_content">
        <?php if(have_posts()): ?>
            <?php while(have_posts()):the_post(); ?>
                <h1 class="single_title"><?php the_title(); ?></h1>
                <?php if(has_post_thumbnail()) : ?>
                    <div class="single_thumbnail">
                        <?php the_post_thumbnail(); ?>
                    </div>
                <?php endif; ?>
        <?php the_content(); ?>
        <?php endwhile; endif; ?>
        <h2 class="another"><a href="https://sunglish.jp.net/news/">その他の投稿</a></h2>
        <ul class="another__posts">
        <?php
        $args = array(
        'posts_per_page' => 5 // 表示件数
        );
        $posts = get_posts( $args );
        foreach ( $posts as $post ): // ループの開始
        setup_postdata( $post ); // 記事データの取得
        ?>
        <li class="another__post">
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </li>
        <?php
        endforeach; // ループの終了
        ?>
        </ul>
    </div>
</main>
<?php get_footer(); ?>