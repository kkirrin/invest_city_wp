export const initPathOnSVGMobile = () => {
    const links = document.querySelectorAll('.svg__main__wrapper a');
    // const use_hover = document.querySelectorAll('use[href^="#g_"]');
    // const g_info__inner = document.querySelectorAll('[id^="g_info__inner"]');

    const widthWindow = window.innerWidth;

    if (widthWindow < 480) {
        links.forEach(link => {
            let isInfoTouched = false;

            link.addEventListener('touchstart', (e) => {
                e.preventDefault();
                const currentLink = e.currentTarget;
                const path = currentLink.querySelector('path.use_hover');
                const info = currentLink.querySelector('[id$="_info__inner"]');

                path.classList.add('active');
                info.classList.add('active');

                // Проверяем, не касались ли уже info
                info.addEventListener('touchstart', () => {
                    isInfoTouched = true;
                });
            });

            link.addEventListener('touchend', (e) => {
                e.preventDefault();
                const currentLink = e.currentTarget;
                const path = currentLink.querySelector('path.use_hover');
                const info = currentLink.querySelector('[id$="_info__inner"]');
                const infoId = info.getAttribute('id').replace('g_', '').replace('_info__inner', '');

                console.log(infoId);

                path.classList.remove('active');
                info.classList.remove('active');

                if (isInfoTouched) {
                    window.location.href = `https://cz-invest-city.ru/?page_id=10&block='${infoId}'`;
                }
                isInfoTouched = false; 
            });
        });
    }
};

