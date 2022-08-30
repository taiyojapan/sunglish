<?php get_header(); ?>
<?php
$userName1=$_POST["userName1"];
$userName2=$_POST["userName2"];
$userMail=$_POST["userMail"];
$inq=$_POST["inq"];
$message=$_POST["message"];
$first="----------------------------------------------------------------------------------------";
$firstPhrase="お客様からのお問い合わせです。";
$secondPhrase="お問い合わせ内容↓↓↓";
$last="----------------------------------------------------------------------------------------";

foreach($inq as $value) {
  $str.=$value;
}

mb_language("ja"); //マルチバイト言語の定義
mb_internal_encoding("UTF-8"); //マルチバイト文字の文字コードを定義
$to="sunglish.jp@gmail.com"; 
$header="From: "."sunglish.form";//ヘッダー
$subject="SunglishWebサイトからのお問い合わせ";  //件名
$body=$first."\n".$firstPhrase."\n".$secondPhrase."\n".'◆名前： '.$userName1."\n".'◆フリガナ： '.$userName2."\n".'◆メールアドレス： '.$userMail."\n".'◆問合せ種別： '.$str."\n".'◆問合せ内容： '.$message."\n".$last;
mb_send_mail('sunglish.jp@gmail.com',$subject,$body,$header);
?>
</html><div class="submit">
    <h1 class="submit__title">Thank you so much!<span class="submit__subtitle">送信完了です</span></h1>
</div>
</body>
<?php get_footer(); ?>
<!-- if(mb_send_mail('sunglish.jp@gmail.com',$subject,$body,$header)){
    echo "メール送信成功しました。";
}else{
    echo "メール送信失敗しました。";
} -->