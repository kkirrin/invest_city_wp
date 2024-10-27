export const initCounterAnimation = () => {
    const counterAnimation = (el, initialNum, finalNum) => {

            if (Number.isInteger(finalNum)) {
                let interval = setInterval(function () {
                    el.innerHTML = initialNum;
                    (initialNum >= finalNum) ? clearInterval(interval) : '';
                    initialNum++;
                }, 100);
            }
            else {
                let intInitialNum = Math.floor(initialNum);
                let intFinalNum = Math.floor(finalNum);
                let interval = setInterval(function () {
                    el.innerHTML = intInitialNum;
                    if (intInitialNum >= intFinalNum) {
                        clearInterval(interval);
                        el.innerHTML = `${finalNum.toString().replace('.', ',')}`;
                    }
                    intInitialNum++;
                }, 100);
            }
        }


     const callback = (entries, observer) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                counterAnimation(document.querySelector('.counter-stage'), 0, 22);
                counterAnimation(document.querySelector('.counter-home'), 600, 630);
                counterAnimation(document.querySelector('.counter-ceil'), 0, 3);
                counterAnimation(document.querySelector('.counter-place'), 500, 518);
                counterAnimation(document.querySelector('.counter-blocks'), 0, 12);
                counterAnimation(document.querySelector('.counter-type'), 0, 7);
                observer.unobserve(entry.target)
            }
        })
    }

   

    const target = document.querySelector('.info-section-list');
    const observer = new IntersectionObserver(callback, { threshold: [.5] });


    if (target) {
        observer.observe(target);
    }   



}