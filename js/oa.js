// setTimeout関数は処理を一時停止させたり、待ちを発生させたい場合に使用する
// Promiseは連続した非同期処理を書く時によく使用する言語機能

const timer = (time) => new Promise((resolve) => {//タイマー
    setTimeout(() => {
        resolve(); 
    }, time);        
})        

async function openingAnimation() {
    const opening = document.querySelector(".opening"),
         opening2 = document.querySelector(".opening2"),
      openingLogo = document.querySelector(".opening__picture");
    contentLoadWait = () => new Promise(resolve => {
        if (document.readyState === 'complete') {
            resolve();
        } else {
            // ここがわからない
            // window.onload = () => resolve();
        }
    });
    await timer(1000);
    /*ここで、ロゴをフェードインさせる。   */
    openingLogo.classList.add("opening__picture__visible");

    await timer(2000);
    /*画像などのロードが全て完了するまで待機*/
    // ビデオ容量が重いため止めた
    // await contentLoadWait();

    /*ロゴをフェードアウト*/
    openingLogo.classList.remove("opening__picture__visible");
    await timer(1000);
    

    /*背景をフェードアウトさせると同時に文字アニメーション*/
    opening.classList.add("opening__out")
    

    // textのid要素を取得、のち<span>〜に書き換える
    let spanText  = document.getElementById('text');
    // 要素の中身を取得、文字を区切るため
    let text = document.getElementById('text').innerHTML;
    // 変数に空白を設定(spanで上書きする)
    let newText ="";
    // splitで<span>に区切る
    text.split("").forEach(function(value,i) {
        newText += '<span style ="animation:showtext 1s ease ' + [i]*0.1 + 's forwards;">' + value + '</span>';
    });
    // spanTextを書き換える
    spanText.innerHTML = newText;

    await timer(3600);
    opening2.classList.add("opening2__out2")
  
}
openingAnimation();

