<?php
/*
    Template Name: главная
    */
?>

<?php get_header(); ?>

<main>
    <h1 class="visually-hidden">Атриум</h1>

    <section id="main-section" class="main-bg">
        <div class="container">
            <div class="main-section__wrapper">
                <div>
                    <div>
                        <h2 class="title">Атриум</h2>
                    </div>

                    <div>
                        <p class="main__desc">
                            Первый в городе проект ЖК бизнес-класса. Новый жилой квартал в концепции well-being в Уссурийске, который заботится о вашем всестороннем благополучии
                        </p>
                    </div>

                    <div class="circle__wrapper">
                        <a href="#popup1" class="popup-link">
                            <button class="circle__btn">
                                ВЫБРАТЬ <br> КВАРТИРУ
                            </button>
                        </a>
                    </div>
                </div>

                <div>
                    <h2 class="main__title floating ff2">ЖК бизнес-класса</h2>
                </div>

            </div>
        </div>
    </section>

    <section id="info-section-1" class="info-bg relative">
        <img src="<?php echo get_template_directory_uri(); ?>/src/img/img/pattern_1.webp" class="pattern_1 wow fadeInRight floating ff5" alt="" data-wow-delay="1s">

        <div class="container">
            <div class="flex justify-between md:gap-[75] gap-[30px] md:flex-row flex-col">

                <div class="flex flex-col max-w-[771px] w-full order-1">
                    <div class="md:pb-[110px] sm:pb-[75px] pb-[75px]">
                        <h2 class="font-bold md:text-[80px] sm:tex-[40px] text-[30px]">Жилой комплекс «Атриум»</h2>
                    </div>

                    <div class="flex flex-col gap-[40px] max-w-[666px]">
                        <div>
                            <p class="font-medium md:text-[24px] sm:text-[16px] text-[16px]">Расположен в центральной части <br>
                                г. Уссурийска по адресу ул. Советская 128</p>
                        </div>

                        <div>
                            <p class=" md:text-[24px] sm:text-[16px] text-[14px]">Въезды на территорию комплекса осуществляются
                                с улиц Советская и Ермакова. Проект создается с заботой
                                о каждом аспекте жизни современного человека</p>
                        </div>

                        <div>
                            <a href="https://2gis.ru/ussuriysk/search/%D1%81%D0%BE%D0%B2%D0%B5%D1%82%D1%81%D0%BA%D0%B0%D1%8F%20128%20%D1%83%D1%81%D1%81%D1%83%D1%80%D0%B8%D0%B9%D1%81%D0%BA/firm/70000001094160199/131.945548%2C43.808573?m=131.946581%2C43.808362%2F17.98" target="_blank">
                                <button class="button_main">Посмотреть на карте</button>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="md:order-2 order-0">
                    <div class="relative w-full">
                        <img src="<?php echo get_template_directory_uri(); ?>/src/img/img/info_1.webp" class="relative z-[2]" style="z-index: 1;" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="map_img">
    </section>

    <section id="info-section-2" class="relative">
        <img src="<?php echo get_template_directory_uri(); ?>/src/img/img/pattern_3.webp" class="pattern_3 wow fadeInLeft" alt="" data-wow-delay="1s">
        <div class="container relative" style="z-index: 2;">

            <div class="flex md:flex-row flex-col justify-between md:items-center items-baseline md:pb-[80px] sm:pb-[40px] pb-[30px] md:pt-[55px] sm:pt-[50px] pt-[0px]">
                <div class="md:max-w-[466px] max-w-[260px]">
                    <p class="md:text-[20px] sm:text-[14px] text-[14px] font-normal md:pb-[0] pb-[30px]">Объект предусматривает наличие всех
                        сфер, необходимых для комфортной жизни. Проект обладает высоким уровнем транспортной доступности, привлекательной архитектурой
                        и широким выбором планировок. <span class="font-medium">Варианты отделки </span> - черновая с бетонной стяжкой пола</p>
                </div>

                <div class="max-w-[750px]">
                    <p class="md:text-[30px] sm:text-[20px] text-[20px] font-bold font-Bahnschrift uppercase text-end">Полноценная внутренняя инфраструктура ЖК «Атриум» стремится обеспечить жителей
                        и гостей дома торговыми, общественными
                        и спортивными объектами </p>
                </div>
            </div>

            <ul class="info-section-list counter-list">
                <li>
                    <div>
                        <p class="counter-stage">6-22</p>
                        <p>Этаж</p>
                    </div>
                </li>
                <li>
                    <div>
                        <p class="counter-home">630</p>
                        <p>Квартир в ЖК</p>
                    </div>
                </li>
                <li>
                    <div>
                        <p class="counter-ceil">3 м</p>
                        <p>Высота <br> потолков</p>
                    </div>
                </li>
                <li>
                    <div>
                        <p class="counter-place">518</p>
                        <p>Парковочных <br> мест</p>
                    </div>
                </li>
                <li>
                    <div>
                        <p class="counter-blocks">12</p>
                        <p>Блоков</p>
                    </div>
                </li>
                <li>
                    <div>
                        <p class="counter-type">7</p>
                        <p>Типов <br> планировок <br> квартир</p>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <section id="info-section-3">
        <div class="container">
            <h2 class="md:text-[80px] sm:text-[40px] text-[31px] uppercase md:pt-[60px] md:pb-[80px] sm:pt-[30px] sm:pb-[30px] pt-[30px] pb-[30px]">Генплан</h2>
        </div>

        <div class="relative flex justify-center">
            <div class="svg__main__wrapper">
                <svg class="" viewBox="0 0 1920 1200" width="100%" height="auto">

                    <use href="#image_svg--main__svg" x="0" y="0" />


                    <a href="?page_id=10&block=05" target="_blank">
                        <g id="g_05_info">
                            <path class="use_hover" href="#g_05" d="M436 1100 l-48 -765 l91 -95 l152 11 l38 634 l-60 84 h-59 l-39 78 10 21 0 -29 0 0 z" fill="#54453EB2" opacity="1" />
                            <use class="use_hover" href="#g_05" x="550" y="400" />
                            <g id="g_05_info__inner">
                                <rect x="550" y="500" width="367" height="454" fill="#fff" />
                                <text class="g_05_info__title" x="570" y="550" width="100" height="50" fill="#000">Блок 5</text>
                                <text class="g_05_info__text" x="570" y="590" width="100" height="50" fill="#000">3-20 этажей</text>

                                <text class="g_05_info__text" x="570" y="630" width="100" height="50" fill="#000">Объектов в продаже: 108</text>

                                <path d="M 1L274 2.01859" x="570" y="630" stroke="#D7CDC9" />

                                <text class="g_05_info__subtitle" x="570" y="680" width="100" height="50" fill="#000">ДВУХКОМНАТНАЯ</text>
                                <text class="g_05_info__text" x="570" y="710" width="100" height="50" fill="#000">80,6 - 94,4 м², 36 кв</text>

                                <!-- <text class="g_05_info__subtitle" x="570" y="760" width="100" height="50" fill="#000">ТРЕХКОМНАТНАЯ</text>
                                <text class="g_05_info__text" x="570" y="790" width="100" height="50" fill="#000">88.3 м², 10 кв</text> -->

                                <text class="g_05_info__subtitle" x="570" y="760" width="100" height="50" fill="#000">ОДНОКОМНАТНАЯ </text>
                                <text class="g_05_info__text" x="570" y="790" width="760" height="50" fill="#000">46,6 - 69,9 м², 72 кв</text>
                            </g>
                        </g>
                    </a>

                    <a href="?page_id=10&block=08" target="_blank">
                        <g id="g_08_info">
                            <path class="use_hover" href="#g_08" d="M819 275 l29 -20 200 18 -10 290 -197 -17 0 -24 -20 43 z" fill="#54453EB2" opacity="1" />
                            <use class="use_hover" href="#g_08" x="912" y="369" />

                            <g id="g_08_info__inner">
                                <rect x="750" y="500" width="367" height="454" fill="#fff" />
                                <text class="g_08_info__title" x="770" y="550" width="100" height="50" fill="#000">Блок 8</text>
                                <text class="g_08_info__text" x="770" y="590" width="100" height="50" fill="#000">3-8 этажей</text>

                                <text class="g_08_info__text" x="770" y="630" width="100" height="50" fill="#000">Объектов в продаже: 36</text>

                                <path d="M 1L274 2.01859" x="770" y="630" stroke="#D7CDC9" />

                                <text class="g_08_info__subtitle" x="770" y="680" width="100" height="50" fill="#000">ДВУХКОМНАТНАЯ</text>
                                <text class="g_08_info__text" x="770" y="710" width="100" height="50" fill="#000">84,5 - 98,8 м², 18 кв</text>

                                <text class="g_08_info__subtitle" x="770" y="760" width="100" height="50" fill="#000">ТРЕХКОМНАТНАЯ</text>
                                <text class="g_08_info__text" x="770" y="790" width="100" height="50" fill="#000">88,1 - 123,83 м², 12 кв</text>

                                <text class="g_08_info__subtitle" x="770" y="840" width="100" height="50" fill="#000">ОДНОКОМНАТНАЯ</text>
                                <text class="g_08_info__text" x="770" y="870" width="760" height="50" fill="#000">64,4 м², 6 кв</text>
                            </g>


                        </g>
                    </a>

                    <a href="?page_id=10&block=07" target="_blank">
                        <g id="g_07_info">

                            <path class="use_hover" href="#g_07" d="M764 151 l 56 0 -9 190 20 -4 0 213 -43 55 -4 0 z" fill="#54453EB2" opacity="1" />
                            <use class="use_hover" href="#g_07" x="760" y="190" />

                            <g id="g_07_info__inner">
                                <rect x="750" y="400" width="367" height="454" fill="#fff" />
                                <text class="g_07_info__title" x="770" y="450" width="100" height="50" fill="#000">Блок 7</text>
                                <text class="g_07_info__text" x="770" y="490" width="100" height="50" fill="#000">3-15 этажей</text>

                                <text class="g_07_info__text" x="770" y="530" width="100" height="50" fill="#000">Объектов в продаже: 78</text>

                                <path d="M 1L274 2.01859" x="770" y="530" stroke="#D7CDC9" />

                                <text class="g_07_info__subtitle" x="770" y="580" width="100" height="50" fill="#000">ДВУХКОМНАТНАЯ</text>
                                <text class="g_07_info__text" x="770" y="610" width="100" height="50" fill="#000">75,8 - 90,2 м², 26 кв</text>

                                <text class="g_07_info__subtitle" x="770" y="660" width="100" height="50" fill="#000">ОДНОКОМНАТНАЯ</text>
                                <text class="g_07_info__text" x="770" y="690" width="100" height="50" fill="#000">37,8 - 55,3 м², 52 кв</text>

                                <!-- <text class="g_07_info__subtitle" x="770" y="740" width="100" height="50" fill="#000">ОДНОКОМНАТНАЯ КВАРТИРА </text>
                                <text class="g_07_info__text" x="770" y="770" width="760" height="50" fill="#000">48.9 м², 10 кв</text> -->
                            </g>
                        </g>
                    </a>

                    <a href="?page_id=10&block=06" target="_blank">
                        <g id="g_06_info">
                            <path class="use_hover" href="#g_06" d="M474 240 l 134 -159 157 12 21 579 -115 199 -39 -620 z" fill="#54453EB2" opacity="1" />
                            <use class="use_hover" href="#g_06" x="656" y="291" />
                            <g id="g_06_info__inner">
                                <rect x="550" y="400" width="367" height="454" fill="#fff" />
                                <text class="g_06_info__title" x="570" y="450" width="100" height="50" fill="#000">Блок 6</text>
                                <text class="g_06_info__text" x="570" y="490" width="100" height="50" fill="#000">3-20 этажей</text>

                                <text class="g_06_info__text" x="570" y="530" width="100" height="50" fill="#000">Объектов в продаже: 108</text>

                                <path d="M 1L274 2.01859" x="570" y="530" stroke="#D7CDC9" />

                                <text class="g_06_info__subtitle" x="570" y="580" width="100" height="50" fill="#000">ДВУХКОМНАТНАЯ</text>
                                <text class="g_06_info__text" x="570" y="610" width="100" height="50" fill="#000">77,1 - 102,1 м², 48 кв</text>

                                <!-- <text class="g_06_info__subtitle" x="570" y="660" width="100" height="50" fill="#000">ТРЕХКОМНАТНАЯ</text>
                                <text class="g_06_info__text" x="570" y="690" width="100" height="50" fill="#000">88.3 м², 10 кв</text> -->

                                <text class="g_06_info__subtitle" x="570" y="660" width="100" height="50" fill="#000">ОДНОКОМНАТНАЯ КВАРТИРА </text>
                                <text class="g_06_info__text" x="570" y="690" width="760" height="50" fill="#000">39,1 - 75,1 м², 60 кв</text>
                            </g>
                        </g>
                    </a>

                    <a href="?page_id=10&block=09" target="_blank">
                        <g id="g_09_info">
                            <path class="use_hover" href="#g_09" d="M1050 270 l187 18 -4 288 -188 -18 z" fill="#54453EB2" opacity="1" />
                            <use class="use_hover" href="#g_09" x="1094" y="384" />
                            <g id="g_09_info__inner">
                                <rect x="950" y="500" width="367" height="454" fill="#fff" />
                                <text class="g_09_info__title" x="970" y="550" width="100" height="50" fill="#000">Блок 9</text>
                                <text class="g_09_info__text" x="970" y="590" width="100" height="50" fill="#000">3-8 этажей</text>

                                <text class="g_09_info__text" x="970" y="630" width="100" height="50" fill="#000">Объектов в продаже: 24</text>

                                <path d="M 1L274 2.01859" x="970" y="630" stroke="#D7CDC9" />

                                <text class="g_09_info__subtitle" x="970" y="680" width="100" height="50" fill="#000">ДВУХКОМНАТНАЯ</text>
                                <text class="g_09_info__text" x="970" y="710" width="100" height="50" fill="#000">103,9 м², 12 кв</text>

                                <!-- <text class="g_09_info__subtitle" x="970" y="760" width="100" height="50" fill="#000">ТРЕХКОМНАТНАЯ</text>
                                <text class="g_09_info__text" x="970" y="790" width="100" height="50" fill="#000">63,6 м², 10 кв</text> -->

                                <text class="g_09_info__subtitle" x="970" y="760" width="100" height="50" fill="#000">ОДНОКОМНАТНАЯ КВАРТИРА </text>
                                <text class="g_09_info__text" x="970" y="790" width="760" height="50" fill="#000">63,6 м², 12 кв</text>

                                <!-- <text class="g_09_info__subtitle" x="970" y="840" width="100" height="50" fill="#000">ОДНОКОМНАТНАЯ КВАРТИРА </text>
                                <text class="g_09_info__text" x="970" y="870" width="760" height="50" fill="#000">48.9 м², 10 кв</text> -->
                            </g>
                        </g>
                    </a>

                    <a href="?page_id=10&block=10" target="_blank">
                        <g id="g_10_info">
                            <path class="use_hover" href="#g_10" d="M 1240 287 l237 17 -1 10 -12 41 -12 -1 -11 55 -83 -5 -15 66 0 146 -119 -17 z" fill="#54453EB2" opacity="1" />
                            <use class="use_hover" href="#g_10" x="1272" y="392" />
                            <g id="g_10_info__inner">
                                <rect x="1150" y="500" width="367" height="454" fill="#fff" />
                                <text class="g_10_info__title" x="1170" y="550" width="100" height="50" fill="#000">Блок 10</text>
                                <text class="g_10_info__text" x="1170" y="590" width="100" height="50" fill="#000">3-8 этажей</text>

                                <text class="g_10_info__text" x="1170" y="630" width="100" height="50" fill="#000">Объектов в продаже: 36</text>

                                <path d="M 1L274 2.01859" x="1170" y="630" stroke="#D7CDC9" />

                                <text class="g_10_info__subtitle" x="1170" y="680" width="100" height="50" fill="#000">ДВУХКОМНАТНАЯ</text>
                                <text class="g_10_info__text" x="1170" y="710" width="100" height="50" fill="#000">84,5 - 98,8 м², 18 кв</text>

                                <text class="g_10_info__subtitle" x="1170" y="760" width="100" height="50" fill="#000">ТРЕХКОМНАТНАЯ</text>
                                <text class="g_10_info__text" x="1170" y="790" width="100" height="50" fill="#000">88,1 - 123,83 м², 12 кв</text>

                                <text class="g_10_info__subtitle" x="1170" y="840" width="100" height="50" fill="#000">ОДНОКОМНАТНАЯ</text>
                                <text class="g_10_info__text" x="1170" y="870" width="760" height="50" fill="#000">64,4 м², 6 кв</text>
                            </g>
                        </g>
                    </a>

                    <a href="?page_id=10&block=12" target="_blank">
                        <g id="g_12_info">
                            <path class="use_hover" href="#g_12" d="M1343 469 l23 -68 77 10 17 -68 88 7 0 14 120 9 -12 120 -70 643 -280 -46 z" fill="#54453EB2" opacity="1" />
                            <use class="use_hover" href="#g_12" x="1540" y="443" />

                            <g id="g_12_info__inner">
                                <rect x="1350" y="500" width="367" height="454" fill="#fff" />
                                <text class="g_12_info__title" x="1370" y="550" width="100" height="50" fill="#000">Блок 12</text>
                                <text class="g_12_info__text" x="1370" y="590" width="100" height="50" fill="#000">3-18 этажей</text>

                                <text class="g_12_info__text" x="1370" y="630" width="100" height="50" fill="#000">Объектов в продаже: 144</text>

                                <path d="M 1L274 2.01859" x="1370" y="630" stroke="#D7CDC9" />

                                <text class="g_12_info__subtitle" x="1370" y="680" width="100" height="50" fill="#000">ДВУХКОМНАТНАЯ</text>
                                <text class="g_12_info__text" x="1370" y="710" width="100" height="50" fill="#000">66,4 - 97,9 м², 48 кв</text>

                                <text class="g_12_info__subtitle" x="1370" y="760" width="100" height="50" fill="#000">ОДНОКОМНАТНАЯ</text>
                                <text class="g_12_info__text" x="1370" y="790" width="100" height="50" fill="#000">37,8 - 57,2 м², 96 кв</text>

                                <!-- <text class="g_12_info__subtitle" x="1370" y="1040" width="100" height="50" fill="#000">ОДНОКОМНАТНАЯ КВАРТИРА </text>
                                <text class="g_12_info__text" x="1370" y="1070" width="760" height="50" fill="#000">48.9 м², 10 кв</text> -->
                            </g>

                        </g>
                    </a>

                    <a href="?page_id=10&block=11" target="_blank">
                        <g id="g_11_info">
                            <path class="use_hover" href="#g_11" d=" M 1520 283 l-17 5 15 -70 166 10 -3 60 -11 89 -121 -12 1 -16 -75 -3 0 0 -5 0 15 -66 z" fill="#54453EB2" opacity="1" />
                            <use class="use_hover" href="#g_11" x="1546" y="264" />

                            <g id="g_11_info__inner">
                                <rect x="1550" y="400" width="367" height="454" fill="#fff" />
                                <text class="g_11_info__title" x="1570" y="450" width="100" height="50" fill="#000">Блок 11</text>
                                <text class="g_11_info__text" x="1570" y="490" width="100" height="50" fill="#000">3-14 этажей</text>

                                <text class="g_11_info__text" x="1570" y="530" width="100" height="50" fill="#000">Объектов в продаже: 96</text>

                                <path d="M 1L274 2.01859" x="1570" y="530" stroke="#D7CDC9" />

                                <text class="g_11_info__subtitle" x="1570" y="580" width="100" height="50" fill="#000">ДВУХКОМНАТНАЯ</text>
                                <text class="g_11_info__text" x="1570" y="610" width="100" height="50" fill="#000">76,5 - 98,4 м², 48 кв</text>

                                <text class="g_11_info__subtitle" x="1570" y="660" width="100" height="50" fill="#000">ОДНОКОМНАТНАЯ</text>
                                <text class="g_11_info__text" x="1570" y="690" width="100" height="50" fill="#000">51,9 - 55,1 м², 48 кв</text>


                                <!-- <text class="g_11_info__subtitle" x="1370" y="740" width="100" height="50" fill="#000">ОДНОКОМНАТНАЯ КВАРТИРА </text>
                                <text class="g_11_info__text" x="1370" y="770" width="760" height="50" fill="#000">48.9 м², 10 кв</text> -->
                            </g>
                        </g>
                    </a>



                    <defs>
                        <image id="image_svg--main__svg" href="<?php echo get_template_directory_uri(); ?>/src/img/img/main__map.webp" width="1920" height="1200"></image>

                        <circle id="circle--main__svg" cx="40" cy="40" r="40" />

                        <path id="num_0" d="M 10.6201 29.8584 c -1.3835 0 -2.3845 -0.472 -3.003 -1.416 c -0.6184 -0.9603 -0.9277 -2.2705 -0.9277 -3.9307 v -12.7197 c 0 -1.6764 0.3093 -2.9867 0.9277 -3.9307 c 0.6185 -0.944 1.6195 -1.416 3.003 -1.416 c 1.3997 0 2.4007 0.472 3.0029 1.416 c 0.6185 0.944 0.9277 2.2543 0.9277 3.9307 v 12.7197 c 0 1.6602 -0.3092 2.9704 -0.9277 3.9307 c -0.6022 0.944 -1.6032 1.416 -3.0029 1.416 z m 0 6.4453 c 3.4993 0 6.1442 -0.8952 7.9345 -2.6855 c 1.7904 -1.7904 2.6856 -4.2562 2.6856 -7.3975 v -16.1377 c 0 -3.1575 -0.8952 -5.6234 -2.6856 -7.3975 c -1.774 -1.7903 -4.4189 -2.6855 -7.9345 -2.6855 c -3.4994 0 -6.1442 0.8952 -7.9346 2.6855 c -1.7904 1.7904 -2.6855 4.2562 -2.6855 7.3975 v 16.1377 c 0 3.0925 0.887 5.5501 2.6611 7.373 c 1.7741 1.8067 4.4271 2.71 7.959 2.71 z" />

                        <path id="num_5" d="M 10.4003 35.8642 c 3.3366 0 5.9164 -0.944 7.7393 -2.832 c 1.8229 -1.9043 2.7344 -4.5899 2.7344 -8.0567 v -2.9785 c 0 -3.4505 -0.765 -6.1198 -2.2949 -8.0078 c -1.5137 -1.9043 -3.6622 -2.8564 -6.4454 -2.8564 c -0.8463 0 -1.7089 0.1383 -2.5879 0.415 c -0.8626 0.2767 -1.5543 0.6673 -2.0751 1.1719 v -6.2744 h 12.3779 v -6.4453 h -19.0674 v 20.4101 h 6.25 c 0.2604 -0.8789 0.7243 -1.5625 1.3916 -2.0508 c 0.6836 -0.4883 1.5055 -0.7324 2.4658 -0.7324 c 1.058 0 1.8718 0.3825 2.4414 1.1475 c 0.5697 0.7487 0.8545 1.8229 0.8545 3.2226 v 2.9785 c 0 1.3835 -0.3255 2.4659 -0.9765 3.2471 c -0.6348 0.765 -1.5381 1.1475 -2.71 1.1475 c -1.0742 0 -1.945 -0.3581 -2.6123 -1.0742 c -0.6673 -0.7325 -1.0661 -1.7497 -1.1963 -3.0518 v -0.0244 h -6.6894 v 0.0244 c 0.2278 3.3691 1.302 5.9814 3.2226 7.8369 c 1.9369 1.8555 4.3294 2.7832 7.1777 2.7832 z" />

                        <path id="num_6" d="M 10.3759 35.8642 c -3.2877 0 -5.8431 -0.9359 -7.666 -2.8076 c -1.8066 -1.8718 -2.7099 -4.5085 -2.7099 -7.9102 v 0.3516 c 0 -1.9059 0.2197 -3.5173 0.6591 -5.21 c 0.4395 -1.7089 1.0417 -3.3772 1.8067 -5.0048 l 7.2021 -15.2832 h 7.5684 l -8.5449 17.7001 l -1.6846 -0.8789 c 0.8464 -1.6113 2.3519 -2.417 4.5166 -2.417 c 2.946 0 5.2246 0.9278 6.8359 2.7833 c 1.6114 1.8391 2.417 4.4433 2.417 7.8125 v 0.0244 c 0 3.4342 -0.9114 6.1035 -2.7343 8.0078 c -1.8067 1.888 -4.362 2.832 -7.6661 2.832 z m 0 -6.4453 c 1.2045 0 2.1241 -0.3418 2.7588 -1.0254 c 0.6348 -0.6999 0.9522 -1.6846 0.9522 -2.9541 v -0.0244 c 0 -1.4486 -0.3174 -2.5716 -0.9522 -3.3691 c -0.6347 -0.7976 -1.5543 -1.1963 -2.7588 -1.1963 c -1.1718 0 -2.0833 0.4069 -2.7343 1.2207 c -0.6348 0.7975 -0.9522 1.9205 -0.9522 3.3691 v 0.0244 c 0 1.2696 0.3174 2.2461 0.9522 2.9297 c 0.651 0.6836 1.5625 1.0254 2.7343 1.0254 z" />

                        <path id="num_7" d="M 20.2881 0 h -20.2881 v 11.7919 h 6.6894 v -5.3466 h 6.1035 l -7.7148 29.0527 h 7.251 l 7.959 -31.0547 v -4.4433 z" />

                        <path id="num_8" d="M 11.2549 36.2305 c -2.2624 0 -4.24 -0.4069 -5.9327 -1.2207 c -1.6764 -0.8138 -2.9866 -1.9613 -3.9306 -3.4424 c -0.9278 -1.4811 -1.3916 -3.2145 -1.3916 -5.2002 v -0.5859 c 0 -1.7741 0.4883 -3.4424 1.4648 -5.0049 c 0.9766 -1.5625 2.2787 -2.7425 3.9063 -3.54 c -1.3835 -0.6836 -2.5065 -1.6602 -3.3692 -2.9297 c -0.8463 -1.2695 -1.2695 -2.6205 -1.2695 -4.0528 v -0.9277 c 0 -2.8157 0.9603 -5.07 2.8809 -6.7627 c 1.9205 -1.709 4.4677 -2.5635 7.6416 -2.5635 c 3.1738 0 5.721 0.8545 7.6416 2.5635 c 1.9205 1.6927 2.8808 3.947 2.8808 6.7627 v 0.9277 c 0 1.4649 -0.4313 2.8321 -1.2939 4.1016 c -0.8627 1.2533 -2.002 2.2136 -3.418 2.8809 c 1.6439 0.7975 2.9622 1.9775 3.9551 3.54 c 0.9928 1.5625 1.4892 3.2308 1.4892 5.0049 v 0.5859 c 0 1.9857 -0.472 3.7191 -1.416 5.2002 c -0.9277 1.4811 -2.2379 2.6286 -3.9306 3.4424 c -1.6765 0.8138 -3.6459 1.2207 -5.9082 1.2207 z m 0 -6.4453 c 1.3671 0 2.4658 -0.3988 3.2959 -1.1963 c 0.8463 -0.8138 1.2695 -1.8799 1.2695 -3.1982 v -0.3418 c 0 -1.2045 -0.4232 -2.1729 -1.2695 -2.9053 c -0.8301 -0.7324 -1.9288 -1.0986 -3.2959 -1.0986 c -1.3672 0 -2.474 0.3662 -3.3204 1.0986 c -0.83 0.7324 -1.2451 1.709 -1.2451 2.9297 v 0.3662 c 0 1.3021 0.4151 2.3519 1.2451 3.1494 c 0.8464 0.7975 1.9532 1.1963 3.3204 1.1963 z m 0 -15.2344 c 1.1556 0 2.0833 -0.3662 2.7832 -1.0986 c 0.6998 -0.7324 1.0498 -1.709 1.0498 -2.9297 v -0.3418 c 0 -1.123 -0.35 -2.0264 -1.0498 -2.71 c -0.6999 -0.6835 -1.6276 -1.0253 -2.7832 -1.0253 c -1.1394 0 -2.0671 0.3418 -2.7832 1.0253 c -0.6999 0.6836 -1.0499 1.5951 -1.0499 2.7344 v 0.3662 c 0 1.1882 0.35 2.1485 1.0499 2.8809 c 0.7161 0.7324 1.6438 1.0986 2.7832 1.0986 z" />

                        <path id="num_9" d="M 4.8584 35.8643 l 7.7148 -17.627 l 1.1963 0.879 c -0.4232 0.7649 -1.0498 1.3183 -1.8799 1.6601 c -0.8301 0.3418 -1.7903 0.5127 -2.8808 0.5127 c -2.7019 0 -4.8829 -0.944 -6.543 -2.832 c -1.6439 -1.9043 -2.4658 -4.4271 -2.4658 -7.5684 v -0.0244 c 0 -3.4505 0.9033 -6.1198 2.7099 -8.0078 c 1.8229 -1.9043 4.3864 -2.8565 7.6905 -2.8565 c 3.304 0 5.8593 0.9603 7.666 2.8809 c 1.8066 1.9043 2.7099 4.6061 2.7099 8.1055 v 0.0244 c 0 1.4486 -0.2441 3.0029 -0.7324 4.6631 c -0.472 1.6439 -1.0579 3.304 -1.7578 4.9804 l -6.3477 15.21 h -7.08 z m 5.542 -20.8252 c 1.1718 0 2.0752 -0.3743 2.7099 -1.123 c 0.6511 -0.765 0.9766 -1.8392 0.9766 -3.2227 v -0.0244 c 0 -1.3346 -0.3255 -2.36 -0.9766 -3.0762 c -0.6347 -0.7324 -1.5381 -1.0986 -2.7099 -1.0986 c -1.1882 0 -2.1078 0.3662 -2.7588 1.0986 c -0.6348 0.7324 -0.9522 1.766 -0.9522 3.1006 v 0.0244 c 0 1.3835 0.3174 2.4496 0.9522 3.1983 c 0.651 0.7487 1.5706 1.123 2.7588 1.123 z" />

                        <path id="num_1" d="M 11.0107 0 v 35.498 h -6.6895 v -27.6367 l -4.3212 1.6357 v -7.1045 l 5.2978 -2.3925 h 5.7129 z" />

                        <path id="num_2" d="M 0.4395 35.8643 h 20.9961 v -6.4453 h -12.1338 l 8.7402 -11.0352 c 1.0091 -1.2858 1.7904 -2.7181 2.3438 -4.2968 c 0.5696 -1.5951 0.8545 -3.1983 0.8545 -4.8096 v -0.0244 c 0 -2.946 -0.9196 -5.2246 -2.7588 -6.836 c -1.8229 -1.6113 -4.4027 -2.417 -7.7393 -2.417 c -3.0761 0 -5.5827 0.9278 -7.5195 2.7832 c -1.9206 1.8555 -2.9948 4.4678 -3.2227 7.837 v 0.0244 h 6.8604 v -0.0244 c 0.1465 -1.3347 0.5615 -2.3601 1.2451 -3.0762 c 0.6999 -0.7324 1.5951 -1.0986 2.6856 -1.0986 c 1.1393 0 2.0182 0.2604 2.6367 0.7812 c 0.6185 0.5208 0.9277 1.2614 0.9277 2.2217 v 0.0488 c 0 0.6511 -0.1546 1.3591 -0.4639 2.124 c -0.2929 0.7487 -0.7161 1.4812 -1.2695 2.1973 l -12.1826 16.0156 v 6.0303 z" />

                        <g id="g_05" class="main">
                            <use class="use" href="#circle--main__svg" x="0" y="0" fill="#94765B" />
                            <use href="#num_0" x="17" y="20" fill="#ffffff" />
                            <use href="#num_5" x="44.4854" y="20" fill="#ffffff" />
                        </g>

                        <g id="g_06" class="main">
                            <use class="use" href="#circle--main__svg" x="0" y="0" fill="#94765B" />
                            <use href="#num_0" x="17" y="20" fill="#ffffff" />
                            <use href="#num_6" x="44.4854" y="20" fill="#ffffff" />
                        </g>

                        <g id="g_07" class="main">
                            <use class="use" href="#circle--main__svg" x="0" y="0" fill="#94765B" />
                            <use href="#num_0" x="17" y="20" fill="#ffffff" />
                            <use href="#num_7" x="44.4854" y="20" fill="#ffffff" />
                        </g>

                        <g id="g_08" class="main">
                            <use class="use" href="#circle--main__svg" x="0" y="0" fill="#94765B" />
                            <use href="#num_0" x="17" y="20" fill="#ffffff" />
                            <use href="#num_8" x="44.4854" y="20" fill="#ffffff" />
                        </g>

                        <g id="g_09" class="main">
                            <use class="use" href="#circle--main__svg" x="0" y="0" fill="#94765B" />
                            <use href="#num_0" x="17" y="20" fill="#ffffff" />
                            <use href="#num_9" x="44.4854" y="20" fill="#ffffff" />
                        </g>

                        <g id="g_10" class="main">
                            <use class="use" href="#circle--main__svg" x="0" y="0" fill="#94765B" />
                            <use href="#num_1" x="20.9102" y="20" fill="#ffffff" />
                            <use href="#num_0" x="39.0254" y="20" fill="#ffffff" />
                        </g>

                        <g id="g_11" class="main">
                            <use class="use" href="#circle--main__svg" x="0" y="0" fill="#94765B" />
                            <use href="#num_1" x="24.9102" y="20" fill="#ffffff" />
                            <use href="#num_1" x="43.0254" y="20" fill="#ffffff" />
                        </g>

                        <g id="g_12" class="main">
                            <use class="use" href="#circle--main__svg" x="0" y="0" fill="#94765B" />
                            <use href="#num_1" x="20.9102" y="20" fill="#ffffff" />
                            <use href="#num_2" x="39.0254" y="20" fill="#ffffff" />
                        </g>

                    </defs>

                </svg>
            </div>

            <div id="click__on__image__map" class="absolute font-medium bottom-[20px] md:hidden flex flex-col items-center text-center max-w-[250px] w-full text-white text-[18px]">
                <svg width="104" height="39" viewBox="0 0 104 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M103.354 23.3536C103.549 23.1583 103.549 22.8417 103.354 22.6464L100.172 19.4645C99.9763 19.2692 99.6597 19.2692 99.4645 19.4645C99.2692 19.6597 99.2692 19.9763 99.4645 20.1716L102.293 23L99.4645 25.8284C99.2692 26.0237 99.2692 26.3403 99.4645 26.5355C99.6597 26.7308 99.9763 26.7308 100.172 26.5355L103.354 23.3536ZM77.5 23.5H103V22.5H77.5V23.5Z" fill="white" />
                    <path d="M0.646446 23.3536C0.451185 23.1583 0.451185 22.8417 0.646446 22.6464L3.82843 19.4645C4.02369 19.2692 4.34027 19.2692 4.53553 19.4645C4.7308 19.6597 4.7308 19.9763 4.53553 20.1716L1.70711 23L4.53553 25.8284C4.7308 26.0237 4.7308 26.3403 4.53553 26.5355C4.34027 26.7308 4.02369 26.7308 3.82843 26.5355L0.646446 23.3536ZM26.5 23.5H1V22.5H26.5V23.5Z" fill="white" />
                    <g clip-path="url(#clip0_192_536)">
                        <path d="M62.594 17.1346H62.5374C61.4519 17.1346 60.5381 18.0572 60.5381 19.2431V20.8867C60.5355 21.0423 60.4718 21.1906 60.3609 21.2998C60.2499 21.4089 60.1005 21.47 59.9449 21.47C59.7893 21.47 59.6399 21.4089 59.5289 21.2998C59.4179 21.1906 59.3543 21.0423 59.3516 20.8867V17.8517C59.3516 16.6658 58.4906 15.7011 57.4055 15.7011C56.3143 15.7011 55.4533 16.6658 55.4533 17.8517V21.0685C55.4506 21.2241 55.387 21.3724 55.276 21.4815C55.165 21.5906 55.0156 21.6518 54.86 21.6518C54.7044 21.6518 54.555 21.5906 54.444 21.4815C54.3331 21.3724 54.2694 21.2241 54.2668 21.0685V16.9683C54.2668 15.7828 53.3716 14.8464 52.2863 14.8464H52.2262C51.1681 14.8464 50.2835 15.7345 50.2835 16.879V21.4959C50.2809 21.6515 50.2173 21.7998 50.1063 21.9089C49.9953 22.018 49.8459 22.0792 49.6903 22.0792C49.5347 22.0792 49.3853 22.018 49.2743 21.9089C49.1633 21.7998 49.0997 21.6515 49.0971 21.4959V17.0127C49.0971 16.9982 49.0954 16.983 49.0954 16.9681C49.0954 16.9316 49.0971 16.8952 49.0971 16.8592V6.37771C49.0971 5.1919 48.2021 4.22754 47.1173 4.22754C46.0321 4.22754 45.1376 5.19156 45.1367 6.37636L45.1247 23.7576C45.1246 23.8799 45.0867 23.9992 45.0163 24.0991C44.9459 24.1991 44.8463 24.2749 44.7311 24.3161C44.616 24.3573 44.491 24.3619 44.3732 24.3293C44.2554 24.2968 44.1505 24.2285 44.073 24.134L41.9976 21.6077C41.7268 21.2685 41.3891 20.9888 41.0054 20.7859C40.6218 20.583 40.2004 20.4614 39.7677 20.4285C39.344 20.4005 38.9191 20.4601 38.5194 20.6035C38.1198 20.7469 37.7539 20.9711 37.4447 21.2621C37.4373 21.2688 37.4298 21.2767 37.4218 21.2833L37.0156 21.6229L44.211 35.4506C45.3469 37.6332 47.4947 38.9998 49.8157 38.9998H58.1334C61.673 38.9998 64.5555 35.8856 64.5591 32.0709C64.5611 30.0508 64.5631 28.5356 64.5647 27.315C64.5691 24.0522 64.5704 22.8521 64.5621 19.2579C64.5595 18.0753 63.6765 17.1346 62.594 17.1346Z" fill="white" />
                        <path d="M41.7203 6.58531C42.0481 6.58531 42.3136 6.31979 42.3136 5.99206C42.3101 5.15021 42.5289 4.32236 42.9479 3.59213C43.3668 2.8619 43.971 2.25515 44.6994 1.83316C45.4279 1.41116 46.2549 1.18892 47.0968 1.1889C47.9386 1.18888 48.7656 1.41108 49.4941 1.83305C50.2226 2.25502 50.8268 2.8618 51.2457 3.59208C51.6646 4.32236 51.8832 5.15027 51.8796 5.99215C51.8823 6.14775 51.9459 6.29609 52.0569 6.4052C52.1679 6.5143 52.3173 6.57545 52.4729 6.57545C52.6285 6.57545 52.7779 6.5143 52.8889 6.4052C52.9998 6.29609 53.0635 6.14775 53.0661 5.99215C53.0744 3.85426 51.9382 1.87486 50.088 0.803541C49.179 0.277183 48.1472 6.24702e-06 47.0967 1.05595e-10C46.0463 -6.24681e-06 45.0145 0.277158 44.1054 0.803506C43.1964 1.32985 42.4423 2.08675 41.9193 2.99776C41.3964 3.90877 41.1231 4.94163 41.127 5.99206C41.127 6.31979 41.3928 6.58531 41.7202 6.58531H41.7203Z" fill="white" />
                    </g>
                    <defs>
                        <clipPath id="clip0_192_536">
                            <rect width="39" height="39" fill="white" transform="translate(37)" />
                        </clipPath>
                    </defs>
                </svg>

                <p>Для выбора квартиры нажмите по генплану и выберите блок</p>

            </div>

        </div>
    </section>


    <section id="ticker" class="after relative">
        <img src="<?php echo get_template_directory_uri(); ?>/src/img/img/pattern_2.webp" class="pattern_2 wow fadeInRight" alt="" data-wow-delay="1s">
        <div class="ticker">
            <div class="ticker__in">
                <div class="ticker__item">
                    <a href="#popup2" class="popup-link">Выбрать квартиру</a>
                </div>
                <div class="ticker__item">
                    <a href="#popup1" class="popup-link">Выбрать квартиру</a>
                </div>
                <div class="ticker__item">
                    <a href="#popup1" class="popup-link">Выбрать квартиру</a>
                </div>

                <div class="ticker__item">
                    <a href="#popup1" class="popup-link">Выбрать квартиру</a>
                </div>
                <div class="ticker__item">
                    <a href="#popup1" class="popup-link">Выбрать квартиру</a>
                </div>

            </div>
        </div>

        <div class="container" style="height: 1px;"></div>
    </section>

    <section id="architecture" class="relative">
        <div class="container">


            <img src="<?php echo get_template_directory_uri(); ?>/src/img/img/pattern_4.webp" class="pattern_4 wow fadeInLeft" alt="" data-wow-delay="1s">

            <div class="grid md:grid-cols-3 grid-col-1 gap-[30px] relative z-[2]">
                <div class=" md:order-0 order-0 flex flex-col md:gap-[76px] gap-[30px] floating ff5">
                    <h2 class="md:text-[80px] sm:text-[40px] text-[31px] uppercase relative z-[2]">АРХИТЕКТУРА</h2>
                    <div class="img-wrapper">
                        <img class="md:block hidden" src="<?php echo get_template_directory_uri(); ?>/src/img/img/comfort4.webp" alt="">
                        <img class="md:hidden block" src="<?php echo get_template_directory_uri(); ?>/src/img/img/Крыша 2-s.webp" alt="">

                    </div>
                    <p class="md:text-[24px] text-[14px] w-full md:max-w-[560px] max-w-[260px]">На эксплуатируемой кровле здания предусмотрено открытое южному солнцу, <span class="font-bold">благоустроенное пространство</span> внутреннего двора с детскими и спортивными площадками и озеленением</p>
                </div>

                <div class="md:order-1 order-1 circle__wrapper floating reverse" style="display: flex; justify-content: center; align-items: center;">
                    <a href="#popup1" class="popup-link">
                        <button class="circle__btn">
                            ВЫБРАТЬ <br> квартиру
                        </button>
                    </a>
                </div>


                <div class="md:order-0 order-2 flex flex-col items-end md:gap-[76px] gap-[30px] floating ff5">
                    <p class="md:order-0 order-2 text-end md:text-[24px] text-[14px] font-normal w-full md:max-w-[560px] max-w-[260px]">Светлые оттенки на фасаде здания подчеркивают легкость и динамичность архитектуры. Сочетание прозрачного структурного остекления и фасадных плит создают пластичность фасада. Использование витражного остекления в интерьерных решениях играет роль связующего звена между внутренним и внешним пространством. <span class="font-bold">Видовые квартиры с панорамным остеклением</span></p>
                    <div class="img-wrapper md:order-3 md:order-0">
                        <img class="md:block hidden" src="<?php echo get_template_directory_uri(); ?>/src/img/img/Атриум.webp" alt="">
                        <img class="md:hidden block" src="<?php echo get_template_directory_uri(); ?>/src/img/img/Атриум-s.webp" alt="">

                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="all_for_comfort" class=" overflow-hidden relative md:block hidden">
        <div class="container">
            <h2 class="md:text-[60px] sm:text-[40px] text-[31px] uppercase md:pt-[60px] md:pb-[60px] sm:pt-[30px] sm:pb-[30px] pt-[30px] pb-[30px] relative z-[2]">Все необходимое для комфортной жизни в одном месте</h2>

            <div class="comfort-wrapper">
                <div class="relative">
                    <div style="width: -webkit-fill-available;">
                        <div class="w-full md:h-[389px] h-[250px]">
                            <img src="<?php echo get_template_directory_uri(); ?>/src/img/img/comfort3.webp" class="object-cover h-full w-full" alt="">
                        </div>

                        <div class="p-[30px] h-[311px]">
                            <div class="bg-biege p-[30px] h-full">
                                <p>В жилом комплексе предусмотрено <span class="font-bold">наличие супермаркета, магазинов, офисных помещений, фитнес центра, спортивных площадок и зон для отдыха</span></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="relative">
                    <div style="width: -webkit-fill-available;">
                        <div class="w-full md:h-[389px] h-[250px]">
                            <img src="<?php echo get_template_directory_uri(); ?>/src/img/img/comfort5.webp" class="object-cover h-full w-full" alt="">
                        </div>

                        <div class="p-[30px] h-[311px]">
                            <div class="bg-biege p-[30px] h-full">
                                <p>А так же на территории комплекса будет расположен <span class="font-bold">центр развития детей дошкольного возраста</span></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="relative">
                    <div style="width: -webkit-fill-available;">
                        <div class="w-full md:h-[389px] h-[250px]">
                            <img src="<?php echo get_template_directory_uri(); ?>/src/img/img/comfort6.webp" class="object-cover h-full w-full" alt="">
                        </div>

                        <div class="p-[30px] h-[311px]">
                            <div class="bg-biege p-[30px] h-full">
                                <p class="font-bold">Подземный двухуровневый паркинг</p>
                                <p class="pt-[10px]"><span class="font-bold">Кладовые помещения</span> «сити-боксы» под ваши вещи, которые позволяют освободить пространство для жизни</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="relative">
                    <div style="width: -webkit-fill-available;">
                        <div class="w-full md:h-[389px] h-[250px]">
                            <img src="<?php echo get_template_directory_uri(); ?>/src/img/img/comfort1.webp" class="object-cover h-full w-full" alt="">
                        </div>

                        <div class="p-[30px] h-[311px]">
                            <div class="bg-biege p-[30px] h-full">
                                <p class="pt-[10px]">Собственный <span class="font-bold">центральный парк 1 Га с променадом</span></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="relative">
                    <div style="width: -webkit-fill-available;">
                        <div class="w-full md:h-[389px] h-[250px]">
                            <img src="<?php echo get_template_directory_uri(); ?>/src/img/img/comfort7.webp" class="object-cover h-full w-full" alt="">
                        </div>

                        <div class="p-[30px] h-[311px]">
                            <div class="bg-biege p-[30px] h-full">
                                <p class="pt-[10px]">Одним из удобств, которое доступно жильцам ЖК Атриум является <span class="font-bold">фитнес-центр</span>. Который позволит вам постоянно находится в тонусе и хорошей форме</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="all_for_comfort" class=" overflow-hidden relative md:hidden block ">
        <div class="container">
            <h2 class="md:text-[60px] sm:text-[40px] text-[31px] uppercase md:pt-[60px] md:pb-[60px] sm:pt-[30px] sm:pb-[30px] pt-[30px] pb-[30px] relative z-[2]">Все необходимое для комфортной жизни в одном месте</h2>
            <div class="comfort-swiper">
                <div class="swiper-wrapper">
                    <div class="relative comfort-item">
                        <div style="width: -webkit-fill-available;">
                            <div class="w-full md:h-[389px] h-[250px]">
                                <img src="<?php echo get_template_directory_uri(); ?>/src/img/img/comfort3.webp" class="object-cover h-full w-full" alt="">
                            </div>

                            <div class="p-[30px] h-[311px]">
                                <div class="bg-biege p-[30px] h-full">
                                    <p>В жилом комплексе предусмотрено <span class="font-bold">наличие супермаркета, магазинов, офисных помещений, фитнес центра, спортивных площадок и зон для отдыха</span></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="relative comfort-item">
                        <div style="width: -webkit-fill-available;">
                            <div class="w-full md:h-[389px] h-[250px]">
                                <img src="<?php echo get_template_directory_uri(); ?>/src/img/img/comfort5.webp" class="object-cover h-full w-full" alt="">
                            </div>

                            <div class="p-[30px] h-[311px]">
                                <div class="bg-biege p-[30px] h-full">
                                    <p>А так же на территории комплекса будет расположен <span class="font-bold">центр развития детей дошкольного возраста</span></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="relative comfort-item">
                        <div style="width: -webkit-fill-available;">
                            <div class="w-full md:h-[389px] h-[250px]">
                                <img src="<?php echo get_template_directory_uri(); ?>/src/img/img/comfort6.webp" class="object-cover h-full w-full" alt="">
                            </div>

                            <div class="p-[30px] h-[311px]">
                                <div class="bg-biege p-[30px] h-full">
                                    <p class="font-bold">Подземный двухуровневый паркинг</p>
                                    <p class="pt-[10px]"><span class="font-bold">Кладовые помещения</span> «сити-боксы» под ваши вещи, которые позволяют освободить пространство для жизни</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="relative comfort-item">
                        <div style="width: -webkit-fill-available;">
                            <div class="w-full md:h-[389px] h-[250px]">
                                <img src="<?php echo get_template_directory_uri(); ?>/src/img/img/comfort1.webp" class="object-cover h-full w-full" alt="">
                            </div>

                            <div class="p-[30px] h-[311px]">
                                <div class="bg-biege p-[30px] h-full">
                                    <p class="pt-[10px]">Собственный <span class="font-bold">центральный парк 1 Га с променадом</span></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="relative comfort-item">
                        <div style="width: -webkit-fill-available;">
                            <div class="w-full md:h-[389px] h-[250px]">
                                <img src="<?php echo get_template_directory_uri(); ?>/src/img/img/comfort7.webp" class="object-cover h-full w-full" alt="">
                            </div>

                            <div class="p-[30px] h-[311px]">
                                <div class="bg-biege p-[30px] h-full">
                                    <p class="pt-[10px]">Одним из удобств, которое доступно жильцам ЖК Атриум является <span class="font-bold">фитнес-центр</span>. Который позволит вам постоянно находится в тонусе и хорошей форме</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- <section id="variants">
        <div class="container">
            <div class="flex md:flex-row flex-col gap-[20px]">

                <div class="flex flex-col ">
                    <div>
                        <h2 class="md:text-[70px] sm:text-[40px] text-[31px] uppercase md:pt-[60px] md:pb-[110px] sm:pt-[30px] sm:pb-[30px] pt-[30px] pb-[30px] relative z-[2]"><span class="text-brown-dark">Варианты</span> <span class="text-white">отделки</span></h2>
                    </div>

                    <div>
                        <p class="uppercase text-white md:text-[30px] text-[14px] custom__text--type">Черновая с бетонной стяжкой пола</p>
                    </div>
                </div>

                <div class="relative z-[2] floating ff5">
                    <img src="<?php echo get_template_directory_uri(); ?>/src/img/img/Bitmap.webp" alt="">
                </div>
            </div>

            <img src="<?php echo get_template_directory_uri(); ?>/src/img/img/pattern_5.webp" class="pattern_5 wow fadeInRight" alt="" data-wow-delay="1s">

        </div>
    </section> -->

    <?php @include 'templates/ticker_buy.php'; ?>

    <section id="type" class="relative">
        <div class="container">
            <h2 class="md:text-[80px] sm:text-[40px] text-[31px] uppercase md:pb-[60px] sm:pb-[30px] pb-[30px] relative z-[2]">Типы планировок</h2>

            <div class="flex md:flex-row flex-col gap-[20px] justify-between">
                <div class="flex flex-col gap-[30px] w-full max-w-[400px]">
                    <div class="relative">
                        <button data-target-id="0" class="button_main_variant tab_btn">
                            <div class="uppercase font-bold">
                                ОДНОКОМНАТНАЯ КВАРТИРА
                            </div>
                            <div>
                                от 36 м² до 74 м², 352 кв
                            </div>
                        </button>
                    </div>


                    <div class="relative">
                        <button data-target-id="1" class="button_main_variant tab_btn">
                            <div class="uppercase font-bold">
                                ДВУХКОМНАТНАЯ квартира
                            </div>
                            <div>
                                от 65 м² до 101 м², 254 кв
                            </div>
                        </button>
                    </div>


                    <div class="relative">
                        <button data-target-id="2" class="button_main_variant tab_btn">
                            <div class="uppercase font-bold">
                                ТРЕХКОМНАТНАЯ квартира
                            </div>
                            <div>
                                от 86 м² до 123 м², 24 кв
                            </div>
                        </button>
                    </div>

                </div>

                <div class="md:p-[110px] p-[20px] bg-white tab-content active" id="content-0" data-id="0">

                    <img src="<?php echo get_template_directory_uri(); ?>/src/img/img/map__type.webp" alt="">
                    <div class="text-center pt-[20px]">
                        <a href="?page_id=10&block=05"><button class="button_main button_main--watch w-full">Посмотреть квартиры данного типа</button></a>
                    </div>
                </div>

                <div class="md:p-[110px] p-[20px] bg-white tab-content" id="content-1" data-id="1">

                    <!-- <img src="<?php echo get_template_directory_uri(); ?>/src/img/img/map__type.webp" alt=""> -->
                    <div class="text-center pt-[20px]">
                        <a href="?page_id=10&block=05"><button class="button_main button_main--watch w-full">Посмотреть квартиры данного типа</button></a>
                    </div>
                </div>

                <div class="md:p-[110px] p-[20px] bg-white tab-content" id="content-2" data-id="2">

                    <!-- <img src="<?php echo get_template_directory_uri(); ?>/src/img/img/map__type.webp" alt=""> -->
                    <div class="text-center pt-[20px]">
                        <a href="?page_id=10&block=05"><button class="button_main button_main--watch w-full">Посмотреть квартиры данного типа</button></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="programs" class="relative">
        <div class="container overflow-hidden">
            <div class="flex justify-between items-center">
                <div>
                    <h2 class="md:text-[80px] sm:text-[40px] text-[31px] uppercase md:pt-[60px] md:pb-[60px] sm:pt-[30px] sm:pb-[30px] pt-[30px] pb-[30px] relative z-[2]">программы для вас</h2>
                </div>

                <div class="gap-[10px] md:flex hidden">
                    <button class="program-slide-prev">
                        <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="30" cy="30" r="29" transform="matrix(-1 0 0 1 60 0)" stroke="#94765B" stroke-width="2" />
                            <path d="M39 31H40V29H39V31ZM20.2929 29.2929C19.9024 29.6834 19.9024 30.3166 20.2929 30.7071L26.6569 37.0711C27.0474 37.4616 27.6805 37.4616 28.0711 37.0711C28.4616 36.6805 28.4616 36.0474 28.0711 35.6569L22.4142 30L28.0711 24.3431C28.4616 23.9526 28.4616 23.3195 28.0711 22.9289C27.6805 22.5384 27.0474 22.5384 26.6569 22.9289L20.2929 29.2929ZM39 29L21 29V31L39 31V29Z" fill="#94765B" />
                        </svg>
                    </button>

                    <button class="program-slide-next">
                        <svg width="82" height="60" viewBox="0 0 82 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="30" cy="30" r="29" stroke="#94765B" stroke-width="2" />
                            <path d="M30 29H29V31H30V29ZM81.7071 30.7071C82.0976 30.3166 82.0976 29.6834 81.7071 29.2929L75.3431 22.9289C74.9526 22.5384 74.3195 22.5384 73.9289 22.9289C73.5384 23.3195 73.5384 23.9526 73.9289 24.3431L79.5858 30L73.9289 35.6569C73.5384 36.0474 73.5384 36.6805 73.9289 37.0711C74.3195 37.4616 74.9526 37.4616 75.3431 37.0711L81.7071 30.7071ZM30 31H81V29H30V31Z" fill="#94765B" />
                        </svg>

                    </button>
                </div>
            </div>

            <div class="swiper-program">
                <div class="program-item">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide ">
                            <div style="background-image: url('<?php echo get_template_directory_uri(); ?>/src/img/img/swiper1.webp'); background-position: center; background-repeat: no-repeat; background-size: cover;" class="md:h-[430px] h-[250px] md:py-[50px] md:px-[30px] py-[44px] px-[30px] flex flex-col justify-between gap-[20px]">
                                <p>Проектное финансирование <br> от сбербанка</p>
                                <a><button class="button_main button_main__podrobnee">Узнать подробнее</button></a>
                            </div>
                        </div>

                        <div class="swiper-slide program-item--bank">
                            <div style="background-image: url('<?php echo get_template_directory_uri(); ?>/src/img/img/swiper2.webp'); background-position: center; background-repeat: no-repeat; background-size: cover;" class="md:h-[430px] h-[250px] md:py-[50px] md:px-[30px] py-[44px] px-[30px] flex flex-col justify-between gap-[20px]">
                                <p>Ипотека <br> по госпрограммам</p>
                                <!-- <a href="#popup4" class="popup-link"><button class="button_main button_main__podrobnee">Узнать подробнее</button></a> -->
                                <ul class="grid md:grid-cols-4 grid-cols-2 gap-[12px]" style="width: 506px;">
                                    <li style="width: 110px;">
                                        <a href="http://www.sberbank.ru/ru/person/credits/home/ipotechniy-kalkulyator">
                                            <img style="background-color: #e8e4e2; border-radius: 50%; width: -webkit-fill-available;" src="<?php echo get_template_directory_uri(); ?>/src/img/img/cber.webp" alt="">
                                        </a>
                                    </li>
                                    <li style="width: 110px;">
                                        <a href="https://pskb.com/mortgage/">
                                            <img style="background-color: #e8e4e2; border-radius: 50%; width: -webkit-fill-available;" src="<?php echo get_template_directory_uri(); ?>/src/img/img/prim.webp" alt="">
                                        </a>
                                    </li>
                                    <li style="width: 110px;">
                                        <a href="https://www.vtb.ru/personal/ipoteka/">
                                            <img style="background-color: #e8e4e2; border-radius: 50%; width: -webkit-fill-available;" src="<?php echo get_template_directory_uri(); ?>/src/img/img/vtb.webp" alt="">
                                        </a>
                                    </li>
                                    <li style="width: 110px;">
                                        <a href="https://www.dvbank.ru/credit-products/ipoteka/">
                                            <img style="background-color: #e8e4e2; border-radius: 50%; width: -webkit-fill-available;" src="<?php echo get_template_directory_uri(); ?>/src/img/img/dvb.webp" alt="">
                                        </a>
                                    </li>
                                    <li style="width: 110px;">
                                        <a href="https://sovcombank.ru/credits/ipoteka/ipotechnyj-kalkulyator/">
                                            <img style="object-fit: none; background-color: #e8e4e2; border-radius: 50%; width: -webkit-fill-available;" src="<?php echo get_template_directory_uri(); ?>/src/img/img/sov.webp" alt="">
                                        </a>
                                    </li>
                                    <li style="width: 110px;">
                                        <a href="https://www.primbank.ru/ipoteka/novostroyka//">
                                            <img style="object-fit: none; background-color: #e8e4e2; border-radius: 50%; width: -webkit-fill-available;" src="<?php echo get_template_directory_uri(); ?>/src/img/img/primore.webp" alt="">
                                        </a>
                                    </li>
                                    <li style="width: 110px;">
                                        <a href="https://www.psbank.ru/personal/mortgage">
                                            <img style="background-color: #e8e4e2; border-radius: 50%; width: -webkit-fill-available;" src="<?php echo get_template_directory_uri(); ?>/src/img/img/psb.webp" alt="">
                                        </a>
                                    </li>
                                </ul>

                            </div>
                        </div>

                        <!-- <div class="swiper-slide ">
                            <div style="background-image: url('<?php echo get_template_directory_uri(); ?>/src/img/img/swiper1.webp'); background-position: center; background-repeat: no-repeat; background-size: cover;" class="md:h-[430px] h-[250px] md:py-[116px] md:px-[30px] py-[44px] px-[30px] flex flex-col justify-between gap-[40px]">
                                <p>Проектное финансирование <br> от сбербанка</p>
                                <button class="button_main button_main__podrobnee">Узнать подробнее</button>
                            </div>
                        </div> -->



                    </div>


                    <div class="gap-[10px] md:hidden flex justify-center items-center pt-[25px]">
                        <button class="program-slide-prev">
                            <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="30" cy="30" r="29" transform="matrix(-1 0 0 1 60 0)" stroke="#94765B" stroke-width="2" />
                                <path d="M39 31H40V29H39V31ZM20.2929 29.2929C19.9024 29.6834 19.9024 30.3166 20.2929 30.7071L26.6569 37.0711C27.0474 37.4616 27.6805 37.4616 28.0711 37.0711C28.4616 36.6805 28.4616 36.0474 28.0711 35.6569L22.4142 30L28.0711 24.3431C28.4616 23.9526 28.4616 23.3195 28.0711 22.9289C27.6805 22.5384 27.0474 22.5384 26.6569 22.9289L20.2929 29.2929ZM39 29L21 29V31L39 31V29Z" fill="#94765B" />
                            </svg>
                        </button>

                        <button class="program-slide-next">
                            <svg width="82" height="60" viewBox="0 0 82 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="30" cy="30" r="29" stroke="#94765B" stroke-width="2" />
                                <path d="M30 29H29V31H30V29ZM81.7071 30.7071C82.0976 30.3166 82.0976 29.6834 81.7071 29.2929L75.3431 22.9289C74.9526 22.5384 74.3195 22.5384 73.9289 22.9289C73.5384 23.3195 73.5384 23.9526 73.9289 24.3431L79.5858 30L73.9289 35.6569C73.5384 36.0474 73.5384 36.6805 73.9289 37.0711C74.3195 37.4616 74.9526 37.4616 75.3431 37.0711L81.7071 30.7071ZM30 31H81V29H30V31Z" fill="#94765B" />
                            </svg>

                        </button>
                    </div>

                </div>
            </div>

        </div>
        <img src="<?php echo get_template_directory_uri(); ?>/src/img/img/pattern_7.webp" class="pattern_7 wow fadeInRight" alt="" data-wow-delay="1s">
    </section>

    <?php @include 'templates/location.php'; ?>

    <?php @include 'templates/contacts.php'; ?>


</main>


<?php get_footer(); ?>