export const initProgrammSlider = () => {
    const generalSlider = document.querySelector('.program-item');

    if (generalSlider) {

        const swiper = new Swiper(generalSlider, {
            slidesPerView: 2,
            spaceBetween: 20,
            speed: 3000,
            navigation: {
                nextEl: '.program-slide-next',
                prevEl: '.program-slide-prev',
            },

            breakpoints: {
                320: {
                    slidesPerView: 1,
                },
                460: {
                    slidesPerView: 1,
                },
                460: {
                    slidesPerView: 1,
                    spaceBetween: 10
                },
                769: {
                    slidesPerView: 2,
                    spaceBetween: 20
                },
                1047: {
                    slidesPerView: 2,
                }
            },
        })
    }
}



export const initAllComfortSlider = () => {
    // слайдер "initAllComfort"
    // const exclusiveSlider = document.querySelector('.all_comfort_swiper');

    // if (exclusiveSlider) {
    //     const sliderItems = document.querySelectorAll('.all_comfort_item');
    //     console.log(window.innerWidth)
    //     if (window.innerWidth < 769 ) {
    //         sliderItems.forEach((slide) => {
    //             slide.classList.add('swiper-slide');
    //         });

    //         console.log('количество items', sliderItems);
    //     }

    //     let breakpoint = window.matchMedia('(min-width:1023px)');
    //     let swiper;

    //     const breakpointChecker = function () {
    //         if (breakpoint.matches === true) {

    //             if (swiper !== undefined) {
    //                 swiper.destroy(true, true);
    //             } return;

    //         } else if (breakpoint.matches === false) {
    //             // eslint-disable-next-line consistent-return
    //             return exclusiveSliderInit();
    //         }
    //     };

    //     const exclusiveSliderInit = function () {
    //         swiper = new Swiper(exclusiveSlider, {
    //             loop: true,
    //             init: true,
    //             autoplay: {
    //                 delay: 3000
    //             },
    //             breakpoints: {
    //                 320: {
    //                     slidesPerView: 1,
    //                 },

    //                 500: {
    //                     slidesPerView: 2,
    //                 },

    //                 767: {
    //                     slidesPerView: 2,
    //                 },
    //             },

    //             pagination: {
    //                 el: '.swiper-pagination',
    //                 type: 'bullets',
    //             },

    //         });
    //     };

    //     breakpoint.addEventListener('change', breakpointChecker);
    //     breakpointChecker();
    // }
}

