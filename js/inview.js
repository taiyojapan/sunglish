const elementsArray1 = document.querySelectorAll('.future__content');
window.addEventListener('scroll', fadeIn1);
function fadeIn1() {
    for (var i = 0; i < elementsArray1.length; i++) {
        var elem = elementsArray1[i]
        var distInView = elem.getBoundingClientRect().top - window.innerHeight + 20;
        if (distInView < 0) {
            elem.classList.add('inView');
        } else {
            elem.classList.remove('inView')
        }
    }
}
fadeIn1();

const elementsArray2 = document.querySelectorAll('.recomend__content__box__text');
window.addEventListener('scroll', fadeIn2);
function fadeIn2() {
    for (var i = 0; i < elementsArray2.length; i++) {
        var elem = elementsArray2[i]
        var distInView = elem.getBoundingClientRect().top - window.innerHeight + 20;
        if (distInView < 0) {
            elem.classList.add('inView');
        } else {
            elem.classList.remove('inView')
        }
    }
}
fadeIn2();

const elementsArray3 = document.querySelectorAll('.point__box');
window.addEventListener('scroll', fadeIn3);
function fadeIn3() {
    for (var i = 0; i < elementsArray3.length; i++) {
        var elem = elementsArray3[i]
        var distInView = elem.getBoundingClientRect().top - window.innerHeight + 20;
        if (distInView < 0) {
            elem.classList.add('inView');
        } else {
            elem.classList.remove('inView')
        }
    }
}
fadeIn3();

const elementsArray4 = document.querySelectorAll('.balloon__chatting');
window.addEventListener('scroll', fadeIn4);
function fadeIn4() {
    for (var i = 0; i < elementsArray4.length; i++) {
        var elem = elementsArray4[i]
        var distInView = elem.getBoundingClientRect().top - window.innerHeight + 20;
        if (distInView < 0) {
            elem.classList.add('inView2');
        } else {
            elem.classList.remove('inView2')
        }
    }
}
fadeIn4();

const elementsArray5 = document.querySelectorAll('.balloon__chatting2');
window.addEventListener('scroll', fadeIn5);
function fadeIn5() {
    for (var i = 0; i < elementsArray5.length; i++) {
        var elem = elementsArray5[i]
        var distInView = elem.getBoundingClientRect().top - window.innerHeight + 20;
        if (distInView < 0) {
            elem.classList.add('inView3');
        } else {
            elem.classList.remove('inView3')
        }
    }
}
fadeIn5();

const elementsArray6 = document.querySelectorAll('.service__content');
window.addEventListener('scroll', fadeIn6);
function fadeIn6() {
    for (var i = 0; i < elementsArray6.length; i++) {
        var elem = elementsArray6[i]
        var distInView = elem.getBoundingClientRect().top - window.innerHeight + 20;
        if (distInView < 0) {
            elem.classList.add('inView');
        } else {
            elem.classList.remove('inView')
        }
    }
}
fadeIn6();

const elementsArray7 = document.querySelectorAll('.news__box');
window.addEventListener('scroll', fadeIn7);
function fadeIn7() {
    for (var i = 0; i < elementsArray7.length; i++) {
        var elem = elementsArray7[i]
        var distInView = elem.getBoundingClientRect().top - window.innerHeight + 20;
        if (distInView < 0) {
            elem.classList.add('inView');
        } else {
            elem.classList.remove('inView')
        }
    }
}
fadeIn7();