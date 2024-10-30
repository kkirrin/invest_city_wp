import { initNav } from './module/nav.js';
import { initPopup } from './module/popup.js';
import { initProgramSlider } from './module/sliders.js';
import { initHorizontalScroll } from './module/horizontalScroll.js';
import { initCounterAnimation } from './module/counter-animation.js';
import { initAllComfortSlider } from './module/sliders.js';
import { initBtnOpenCardApart } from './module/btn-apart.js';
import { initTabs } from './module/tabs.js';

window.addEventListener('DOMContentLoaded', () => {
    console.log('подключен скрипт main.js');

    initNav();
    initPopup();
    initProgramSlider();
    initHorizontalScroll();
    initCounterAnimation();
    initAllComfortSlider();
    initBtnOpenCardApart();
    initTabs();

    const wow = new WOW({
        boxClass: 'wow',
        animateClass: 'animated',
        offset: 0,
        mobile: true,
        live: true
    })
    
    wow.init();

});
