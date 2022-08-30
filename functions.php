<?php
// サムネイル（アイアキャッチ）
add_theme_support( 'post-thumbnails' );

function titles() {
    $title = wp_title(' | ', true, 'right');
    if (is_home()) {
        echo '【Sunglish】'.' | '.'オンライン英会話 with フィリピン人先生';
    } else {
        echo $title.'オンライン英会話 with フィリピン人先生';
    }
};
?>