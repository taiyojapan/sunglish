// スクロールするとtopボタンが出てくるーーーーーーーーーーーーーーーーーー
window.addEventListener('scroll', () => {
    let fadeInTarget = document.querySelector('.top__up');
    // let addBorder = document.querySelector('.header');
    // 要素の位置座標を取得
    let rect =  fadeInTarget.getBoundingClientRect();
    // topからの距離
    let scrollTop = rect.top + window.pageYOffset;

    if(scrollTop > window.innerHeight){
        fadeInTarget.classList.add('scrollIn');
        // addBorder.classList.add('borderIn');
    } else {
        fadeInTarget.classList.remove('scrollIn');
        // addBorder.classList.remove('borderIn');
    }
});
// スクロールするとtopボタンが出てくる終了ーーーーーーーーーーーーーーーーーー

// topボタンをタッチするとトップへーーーーーーーーーーーーーーーーーーーーーー
const PageTopBtn = document.getElementById('js-scroll-top');
PageTopBtn.addEventListener('click', () =>{
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
});
// topボタンをタッチするとトップへ終了ーーーーーーーーーーーーーーーーーーーー

// // スクロールトップボタン
// scrollTop('js-scroll-top', 200); // 遅すぎるとガクガクになるので注意

// function scrollTop(el, duration) {
//   const target = document.getElementById(el);
//   target.addEventListener('click', function() {
//     let currentY = window.pageYOffset; // 現在のスクロール位置を取得
//     let step = duration/currentY > 1 ? 10 : 100; // 三項演算子
//     let timeStep = duration/currentY * step; // スクロール時間
//     let intervalId = setInterval(scrollUp, timeStep);
//     // timeStepの間隔でscrollUpを繰り返す。
//     // clearItervalのために返り値intervalIdを定義する。

//     function scrollUp(){
//       currentY = window.pageYOffset;
//       if(currentY === 0) {
//           clearInterval(intervalId); // ページ最上部に来たら終了
//       } else {
//           scrollBy( 0, -step ); // step分上へスクロール
//       }
//     }
//   });
// }