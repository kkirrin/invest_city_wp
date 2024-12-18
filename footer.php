 <footer class="footer bg-bg-dark md:py-[60px] sm:py-[30px] py-[30px]">
     <div class="container flex md:justify-between items-start justify-start md:flex-nowrap gap-[30px] flex-wrap text-white">
         <a class="md:w-auto w-full" href="/">
             <img class="" src="<?php echo get_template_directory_uri(); ?>/src/img/img/logo-footer.svg" alt="Logo">
         </a>
         <div class="md:order-1 order-3">
             <ul class="flex flex-col">
                 <li class="md:text-[18px] text-[12px] md:pb-[18px] pb-[9px] flex items-center gap-4">
                     Отдел продаж - г. Уссурийск, ул. Советская, 149
                 </li>

                 <li class="md:text-[18px] text-[12px] md:pb-[18px] pb-[9px] flex items-center gap-4">
                     Адрес ЖК - г. Уссурийск, ул. Советская, 128
                 </li>

                 <li class="md:pb-[18px] pb-[9px] flex items-center gap-4">
                     <a class="" href="https://наш.дом.рф/сервисы/единый-реестр-застройщиков/застройщик/16828">Проектная декларация</a>
                 </li>

                 <li class="md:text-[18px] text-[12px] md:pb-[18px] pb-[9px] flex items-center gap-4">
                     Пн-пт: с 9:00 до 18:00, СБ-ВС: ВЫХОДНОЙ
                 </li>

                 <li class="md:pb-[18px] pb-[9px] flex items-center gap-4">
                     <a href="tel:+tel:+79143424684" class="md:text-[18px] text-[12px] font-bold">
                         +7 (914) 342 46 84,
                     </a>
                     <a href="tel:+84234384455" class="md:text-[18px] text-[12px] font-bold">
                         8 (4234) 38-44-55
                     </a>
                 </li>

                 <li class="md:pb-[18px] pb-[9px] flex items-center gap-4">
                     <a class="font-bold" href="mailto:invest-city21@bk.ru">invest-city21@bk.ru</a>
                 </li>

             </ul>
         </div>
         <div class="md:order-0 order-1">

             <ul class="text-gray md:text-base text-xs">
                 <li class="md:pb-[18px] pb-[9px]">
                     <a href="" class="nav-link" data-goto="#info-section-1">О жилом комплексе</a>
                 </li>
                 <li class="md:pb-[18px] pb-[9px]">
                     <a href="" class="nav-link" data-goto="#info-section-3">Генплан</a>
                 </li>
                 <li class="md:pb-[18px] pb-[9px]">
                     <a href="" class="nav-link" data-goto="#architecture">Архитектура</a>
                 </li>
                 <li class="md:pb-[18px] pb-[9px]">
                     <a href="" class="nav-link" data-goto="#all_for_comfort">Инфраструктура</a>
                 </li>
             </ul>
         </div>
         <div class="md:order-1 order-2">
             <ul class="text-gray md:text-base text-xs">
                 <li class="md:pb-[18px] pb-[9px]">
                     <a href="" class="nav-link" data-goto="#variants">Дизайн</a>
                 </li>
                 <li class="md:pb-[18px] pb-[9px]">
                     <a href="" class="nav-link" data-goto="#type">Типы планировок</a>
                 </li>
                 <li class="md:pb-[18px] pb-[9px]">
                     <a href="" class="nav-link" data-goto="#programs">Программы</a>
                 </li>
                 <!-- <li class="md:pb-[18px] pb-[9px]" data-goto="info-section-1">
                     Расположение
                 </li> -->
             </ul>
         </div>
     </div>

     <div class="container">
         <div class="flex md:flex-row flex-col md:items-center items-start gap-[10px] justify-between text-gray pt-10">
             <div class="md:text-sm text-xs text-brown-dark">
                 © С3 Инвест Сити .Все права защищены
             </div>
             <div class="md:text-sm text-xs">
                 <a href="" class="text-brown-dark">Политика конфиденциальности</a>
             </div>
             <a href="https://inside360.ru" class="md:text-sm text-xs text-brown-dark">
                 Разработка сайта inside360
             </a>
         </div>
     </div>

 </footer>

 <section id="popup1" class="popup">
     <div class="popup__body">
         <div class="popup__content">
             <button class="popup__btn close-popup" aria-label="Закрыть" tabindex="4">
                 <svg xmlns="http://www.w3.org/2000/svg" width="23" height="18" viewBox="0 0 23 18" fill="none">
                     <path d="M4 1.45508L19.9099 17.365" stroke="#fff" />
                     <path d="M4.54492 16.9099L20.4548 1.00001" stroke="#fff" />
                 </svg>
             </button>

             <h2 class="text-white uppercase md:text-[34px] sm:text-[30px] text-[30px] text-start">Получить консультацию</h2>

             <?php echo do_shortcode('[contact-form-7 id="315b61a" title="Консультация"]'); ?>
         </div>
     </div>
 </section>

 <section id="popup2" class="popup">
     <div class="popup__body">
         <div class="popup__content">
             <button class="popup__btn close-popup" aria-label="Закрыть" tabindex="4">
                 <svg xmlns="http://www.w3.org/2000/svg" width="23" height="18" viewBox="0 0 23 18" fill="none">
                     <path d="M4 1.45508L19.9099 17.365" stroke="#fff" />
                     <path d="M4.54492 16.9099L20.4548 1.00001" stroke="#fff" />
                 </svg>
             </button>

             <h2 class="text-white uppercase md:text-[34px] sm:text-[30px] text-[30px] text-start">Забронируйте квартиру</h2>
             <?php echo do_shortcode('[contact-form-7 id="7cb082e" title="Забронировать"]'); ?>
         </div>
     </div>
 </section>

 <section id="popup3" class="popup">
     <div class="popup__body">
         <div class="popup__content">
             <button class="popup__btn close-popup" aria-label="Закрыть" tabindex="4">
                 <svg xmlns="http://www.w3.org/2000/svg" width="23" height="18" viewBox="0 0 23 18" fill="none">
                     <path d="M4 1.45508L19.9099 17.365" stroke="#fff" />
                     <path d="M4.54492 16.9099L20.4548 1.00001" stroke="#fff" />
                 </svg>
             </button>

             <h2 class="text-white uppercase md:text-[34px] sm:text-[30px] text-[30px] text-start">Получите расчет стоимости</h2>
             <?php echo do_shortcode('[contact-form-7 id="09867a3" title="Расчет стоимости"]'); ?>

         </div>
     </div>
 </section>
 <!-- 
 <section id="popup4" class="popup">
     <div class="popup__body">
         <div class="popup__content popup__content--white">
             <button class="popup__btn close-popup" aria-label="Закрыть" tabindex="4">
                 <svg xmlns="http://www.w3.org/2000/svg" width="23" height="18" viewBox="0 0 23 18" fill="none">
                     <path d="M4 1.45508L19.9099 17.365" stroke="#000" />
                     <path d="M4.54492 16.9099L20.4548 1.00001" stroke="#000" />
                 </svg>
             </button>

             <h2 class="text-black uppercase md:text-[32px] sm:text-[30px] text-[30px] text-start">Ипотека по госпрограммам</h2>

             <p class="text-black pt-[15px] text-start">Рассчитайте ипотеку от банков-партнеров</p>

             <ul class="grid md:grid-cols-5 grid-cols-2 md:pt-[50px] pt-[22px] gap-[12px]">
                 <li>
                     <a href="http://www.sberbank.ru/ru/person/credits/home/ipotechniy-kalkulyator">
                         <img src="<?php echo get_template_directory_uri(); ?>/src/img/img/cber.webp" alt="">
                     </a>
                 </li>
                 <li>
                     <a href="https://pskb.com/mortgage/">
                         <img src="<?php echo get_template_directory_uri(); ?>/src/img/img/prim.webp" alt="">
                     </a>
                 </li>
                 <li>
                     <a href="https://www.vtb.ru/personal/ipoteka/">
                         <img src="<?php echo get_template_directory_uri(); ?>/src/img/img/vtb.webp" alt="">
                     </a>
                 </li>
                 <li>
                     <a href="https://www.dvbank.ru/credit-products/ipoteka/">
                         <img src="<?php echo get_template_directory_uri(); ?>/src/img/img/dvb.webp" alt="">
                     </a>
                 </li>
                 <li>
                     <a href="https://www.psbank.ru/personal/mortgage">
                         <img src="<?php echo get_template_directory_uri(); ?>/src/img/img/psb.webp" alt="">
                     </a>
                 </li>
             </ul>
         </div>
     </div>
 </section> -->


 <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/gsap.min.js"></script>
 <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/ScrollTrigger.min.js"></script>
 <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/ScrollToPlugin.min.js"></script>

 <script src="<?php echo get_template_directory_uri(); ?>/js/swiper-bundle.min.js"></script>
 <script src="<?php echo get_template_directory_uri(); ?>/js/smoothscroll.js"></script>
 <script src="<?php echo get_template_directory_uri(); ?>/js/wow.js"></script>
 <script src="<?php echo get_template_directory_uri(); ?>/js/baguettebox.js"></script>
 <script type="module" src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
 </body>

 </html>