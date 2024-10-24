export const initHorizontalScroll = () => {

    const widthWindow = window.innerWidth;


        // if(widthWindow >= 480) {

    
        const pinSection = document.querySelector('#all_for_comfort');
        const pinWrapper = document.querySelector('.comfort-wrapper');

        gsap.registerPlugin(ScrollTrigger, ScrollToPlugin);


        if (pinSection) {
            const timelineScroll = gsap.timeline({
                scrollTrigger: {
                    trigger: "#all_for_comfort",
                    start: "top-=-140 top",
                    end: () => "+=" + pinWrapper.scrollWidth + "px",
                    pin: true,
                    // markers: true,
                    scrub: true,
                }
            });

            timelineScroll.to(".comfort-wrapper", {
                x: () => -(pinWrapper.scrollWidth - pinWrapper.offsetWidth),
            }, "start");
        }
    // }

}


