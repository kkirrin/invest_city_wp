import { initNav } from './module/nav.js';
import { initPopup } from './module/popup.js';
import { initProgramSlider } from './module/sliders.js';
import { initHorizontalScroll } from './module/horizontalScroll.js';
import { initCounterAnimation } from './module/counter-animation.js';
import { initSertificateSlider } from './module/sliders.js';
import { initBtnOpenCardApart } from './module/btn-apart.js';
import { initTabs } from './module/tabs.js';
import { initHeaderFix } from './module/header-fix.js';
import { initPathOnSVGMobile } from './module/path-on-mobile.js';
import { initScroll } from './module/scroll.js';

window.addEventListener('DOMContentLoaded', () => {
    console.log('подключен скрипт main.js');

    initNav();
    initPopup();
    initProgramSlider();
    initHorizontalScroll();
    initCounterAnimation();
    initSertificateSlider();
    initPathOnSVGMobile();
    initBtnOpenCardApart();
    initTabs();
    initHeaderFix();
    initScroll();

    const wow = new WOW({
        boxClass: 'wow',
        animateClass: 'animated',
        offset: 0,
        mobile: true,
        live: true
    })
    
    wow.init();

    const widthWindow = window.innerWidth;
    console.log(widthWindow);
    if (widthWindow < 480) {
        const element = document.querySelectorAll('.floating.ff5');

        element.forEach(item => {
            item.classList.remove('floating', 'ff5');
        })
    }


});
