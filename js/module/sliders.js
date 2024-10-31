export const initProgramSlider = () => {
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


export const initSertificateSlider = () => {
    // слайдер "сертификаты"
    const exclusiveSlider = document.querySelector('.comfort-swiper');

    if (exclusiveSlider) {
        const sliderItems = document.querySelectorAll('.comfort-item');
        console.log(window.innerWidth)
        if (window.innerWidth < 769) {
            sliderItems.forEach((slide) => {
                slide.classList.add('swiper-slide');
            });

        }

        let breakpoint = window.matchMedia('(min-width:1023px)');
        let swiper;

        const breakpointChecker = function () {
            if (breakpoint.matches === true) {

                if (swiper !== undefined) {
                    swiper.destroy(true, true);
                } return;

            } else if (breakpoint.matches === false) {
                // eslint-disable-next-line consistent-return
                return exclusiveSliderInit();
            }
        };

        const exclusiveSliderInit = function () {
            swiper = new Swiper(exclusiveSlider, {
                loop: true,
                speed: 1500,
                init: true,
                slidesPerView: 1,
                breakpoints: {
                    320: {
                        slidesPerView: 1,
                        spaceBetween: 20,
                    },

                    480: {
                        slidesPerView: 1,
                        spaceBetween: 20,
                    },
                },

            });
        };

        breakpoint.addEventListener('change', breakpointChecker);
        breakpointChecker();
    }
}