<?php get_header(); ?>
<?php
$userName1=$_POST["userName1"];
$userName2=$_POST["userName2"];
$userMail=$_POST["userMail"];
$inq=$_POST["inq"];
$message=$_POST["message"];
$to="sunglish.jp@gmail.com"; 

foreach($inq as $value) {
  $str.=$value;
}

echo <<<EOF
<div class="result">
  <h1 class="result__title">送信内容の確認</h1>
  <h2 class="result__subtitle">まだ送信されていません</h2>
  <h2 class="result__subtitle">入力された内容</h2>
  <form action="/submit" method="post" class="result__box">
    <input type="hidden" name="userName1" value="{$userName1}">
    <input type="hidden" name="userName2" value="{$userName2}">
    <input type="hidden" name="userMail" value="{$userMail}">
    <input type="hidden" name="inq[]" value="{$str}">
    <input type="hidden" name="message" value="{$message}"></textarea>
    <p class="result__box__text">お名前<span>{$userName1}</span></p>
    <p class="result__box__text">フリガナ<span>{$userName2}</span></p>
    <p class="result__box__text">メールアドレス<span>{$userMail}</span></p>
    <p class="result__box__text">お問い合わせ種類<span>{$str}</span></p>
    <p class="result__box__text">お問い合せ内容<span>{$message}</span></p>
    <button type="button" onclick="history.back()" class="result__box__back">修正する</button>
    <button type="submit" class="result__box__button">送信する</button>
  </form>
</div>
EOF;
?>
<?php get_footer(); ?>
<!-- <p>性別は<span>{$gender}</span>です</p> -->
<!-- $to="darak.x@gmail.com"; メールの送信先 -->
<!-- $gender=$_POST["gender"]; -->