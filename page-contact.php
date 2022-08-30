<?php get_header(); ?>
<!-- メインーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー -->
<main class="main">
    <div class="main__background"></div>
    <div class="contactPage contents">
        <div class="contactPage__content">
            <h1 class="contactPage__content__title">お問い合わせ</h1>
        </div>
        <form action="/result" method="post">
            <dl class="contactForm">
                <dt class="contactForm__title">お名前</dt>
                <dd class="contactForm__input1"><input type="text" name="userName1" placeholder="全角漢字" required></dd>
                <dt class="contactForm__title">フリガナ</dt>
                <dd class="contactForm__input1"><input type="text" name="userName2" placeholder="全角カタカナ" required></dd>
                <dt class="contactForm__title">メールアドレス</dt>
                <dd class="contactForm__input1"><input type="email" name="userMail" placeholder="例：abcd@example.jp"></dd>
                <!-- <dt class="contactForm__title">郵便番号</dt>
                <dd class="contactForm__input1"><input type="text" name="zip11" maxlength="8" onKeyUp="AjaxZip3.zip2addr(this,'','addr11','addr11');" placeholder="半角数字ハイフンなし"></dd>
                <dt class="contactForm__title">都道府県</dt>
                <dd class="contactForm__input1"><input type="text" name="addr11"></dd> -->
                <!-- <dt class="contactForm__title">性別</dt>
                <dd class="contactForm__input2">
                    <input type="radio" name="gender" value="男性" id="male"><label for="male">男性</label>
                    <input type="radio" name="gender" value="女性" id="female"><label for="female">女性</label>
                </dd>         -->
                <dt class="contactForm__title">お問い合わせ種類</dt>
                <dd class="contactForm__input2">
                    <input type="checkbox" name="inq[]" value="コースについて " id="course"><label for="course">コースについて</label>
                    <input type="checkbox" name="inq[]" value="Sunglishについて " id="com"><label for="com">Sunglishについて</label>
                    <input type="checkbox" name="inq[]" value="その他について" id="oth"><label for="oth">その他</label>
                </dd>
                <dt class="contactForm__title">お問い合わせ内容</dt>
                <dd class="contactForm__input1"><textarea name="message" cols="40" rows="8" placeholder="ご自由にお書きください"></textarea></dd>
            </dl>
            <p class="submitBox">
                <button type="submit">内容を確認する</button>
            </p>
        </form>
    </div>
</main>
<!-- メイン終了ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー -->
<?php get_footer(); ?>
