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
                        <button class="circle__btn">
                            ВЫБРАТЬ <br> КВАРТИРУ
                        </button>
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
                    <div class="md:pb-[100px] sm:pb-[75px] pb-[75px]">
                        <h2 class="font-bold md:text-[80px] sm:tex-[40px] text-[30px]">Жилой комплекс «Атриум»</h2>
                    </div>

                    <div class="flex flex-col gap-[40px] max-w-[666px]">
                        <div>
                            <p class="font-medium md:text-[24px] sm:text-[16px] text-[16px]">Расположен в центральной части <br>
                                г. Уссурийска по адресу ул. Советская 149</p>
                        </div>

                        <div>
                            <p class=" md:text-[24px] sm:text-[16px] text-[14px]">Въезды на территорию комплекса осуществляются
                                с улиц Советская и Ермакова. Проект создается с заботой
                                о каждом аспекте жизни современного человека</p>
                        </div>

                        <div>
                            <button class="button_main">Посмотреть на карте</button>
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
                        и широким выбором планировок.</p>
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
                <svg class="" viewBox="0 0 1920 1200" height="1200">

                    <use href="#image_svg--main__svg" x="0" y="0" />


                    <a href="?page_id=10&block=05">
                        <g id="g_05_info">
                            <path class="use_hover" href="#g_05" d="M 439 1046 l-56 -718 l85 -83 l188 8 l10 637 l-60 82 h-58 l-43 79 с10 20 10 40 10 50  z" fill="#54453EB2" opacity="1" />
                            <use class="use_hover" href="#g_05" x="550" y="400" />
                            <g id="g_05_info__inner">
                                <rect x="550" y="500" width="367" height="454" fill="#fff" />
                                <text class="g_05_info__title" x="570" y="550" width="100" height="50" fill="#000">Блок 5</text>
                                <text class="g_05_info__text" x="570" y="590" width="100" height="50" fill="#000">20 этажей</text>

                                <text class="g_05_info__text" x="570" y="630" width="100" height="50" fill="#000">Объектов в продаже: 89</text>

                                <path d="M 1L274 2.01859" x="570" y="630" stroke="#D7CDC9" />

                                <text class="g_05_info__subtitle" x="570" y="680" width="100" height="50" fill="#000">ДВУХКОМНАТНАЯ</text>
                                <text class="g_05_info__text" x="570" y="710" width="100" height="50" fill="#000">66.8 м², 15 кв</text>

                                <text class="g_05_info__subtitle" x="570" y="760" width="100" height="50" fill="#000">ТРЕХКОМНАТНАЯ</text>
                                <text class="g_05_info__text" x="570" y="790" width="100" height="50" fill="#000">88.3 м², 10 кв</text>

                                <text class="g_05_info__subtitle" x="570" y="840" width="100" height="50" fill="#000">ОДНОКОМНАТНАЯ КВАРТИРА </text>
                                <text class="g_05_info__text" x="570" y="870" width="760" height="50" fill="#000">48.9 м², 10 кв</text>
                            </g>
                        </g>
                    </a>

                    <a href="?page_id=10&block=08">
                        <g id="g_08_info">
                            <path class="use_hover" href="#g_08" d="M819 275 l29 -20 200 18 -10 290 -197 -17 0 -24 -20 43 z" fill="#54453EB2" opacity="1" />
                            <use class="use_hover" href="#g_08" x="912" y="369" />

                            <g id="g_08_info__inner">
                                <rect x="750" y="500" width="367" height="454" fill="#fff" />
                                <text class="g_08_info__title" x="770" y="550" width="100" height="50" fill="#000">Блок 8</text>
                                <text class="g_08_info__text" x="770" y="590" width="100" height="50" fill="#000">20 этажей</text>

                                <text class="g_08_info__text" x="770" y="630" width="100" height="50" fill="#000">Объектов в продаже: 89</text>

                                <path d="M 1L274 2.01859" x="770" y="630" stroke="#D7CDC9" />

                                <text class="g_08_info__subtitle" x="770" y="680" width="100" height="50" fill="#000">ДВУХКОМНАТНАЯ</text>
                                <text class="g_08_info__text" x="770" y="710" width="100" height="50" fill="#000">66.8 м², 15 кв</text>

                                <text class="g_08_info__subtitle" x="770" y="760" width="100" height="50" fill="#000">ТРЕХКОМНАТНАЯ</text>
                                <text class="g_08_info__text" x="770" y="790" width="100" height="50" fill="#000">88.3 м², 10 кв</text>

                                <text class="g_08_info__subtitle" x="770" y="840" width="100" height="50" fill="#000">ОДНОКОМНАТНАЯ КВАРТИРА </text>
                                <text class="g_08_info__text" x="770" y="870" width="760" height="50" fill="#000">48.9 м², 10 кв</text>
                            </g>


                        </g>
                    </a>

                    <a href="?page_id=10&block=07">
                        <g id="g_07_info">

                            <path class="use_hover" href="#g_07" d="M571 123 l 40 -39 160 12 0 10 2 38 41 12 2 384 -48 125 -20 -532 z" fill="#54453EB2" opacity="1" />
                            <use class="use_hover" href="#g_07" x="760" y="190" />

                            <g id="g_07_info__inner">
                                <rect x="750" y="400" width="367" height="454" fill="#fff" />
                                <text class="g_07_info__title" x="770" y="450" width="100" height="50" fill="#000">Блок 7</text>
                                <text class="g_07_info__text" x="770" y="490" width="100" height="50" fill="#000">20 этажей</text>

                                <text class="g_07_info__text" x="770" y="530" width="100" height="50" fill="#000">Объектов в продаже: 89</text>

                                <path d="M 1L274 2.01859" x="770" y="530" stroke="#D7CDC9" />

                                <text class="g_07_info__subtitle" x="770" y="580" width="100" height="50" fill="#000">ДВУХКОМНАТНАЯ</text>
                                <text class="g_07_info__text" x="770" y="610" width="100" height="50" fill="#000">66.8 м², 15 кв</text>

                                <text class="g_07_info__subtitle" x="770" y="660" width="100" height="50" fill="#000">ТРЕХКОМНАТНАЯ</text>
                                <text class="g_07_info__text" x="770" y="690" width="100" height="50" fill="#000">88.3 м², 10 кв</text>

                                <text class="g_07_info__subtitle" x="770" y="740" width="100" height="50" fill="#000">ОДНОКОМНАТНАЯ КВАРТИРА </text>
                                <text class="g_07_info__text" x="770" y="770" width="760" height="50" fill="#000">48.9 м², 10 кв</text>
                            </g>
                        </g>
                    </a>

                    <a href="?page_id=10&block=06">
                        <g id="g_06_info">
                            <path class="use_hover" href="#g_06" d="M474 240 l 101 -122 179 9 21 579 -115 199 -39 -657 z" fill="#54453EB2" opacity="1" />
                            <use class="use_hover" href="#g_06" x="656" y="291" />
                            <g id="g_06_info__inner">
                                <rect x="550" y="400" width="367" height="454" fill="#fff" />
                                <text class="g_06_info__title" x="570" y="450" width="100" height="50" fill="#000">Блок 6</text>
                                <text class="g_06_info__text" x="570" y="490" width="100" height="50" fill="#000">20 этажей</text>

                                <text class="g_06_info__text" x="570" y="530" width="100" height="50" fill="#000">Объектов в продаже: 89</text>

                                <path d="M 1L274 2.01859" x="570" y="530" stroke="#D7CDC9" />

                                <text class="g_06_info__subtitle" x="570" y="580" width="100" height="50" fill="#000">ДВУХКОМНАТНАЯ</text>
                                <text class="g_06_info__text" x="570" y="610" width="100" height="50" fill="#000">66.8 м², 15 кв</text>

                                <text class="g_06_info__subtitle" x="570" y="660" width="100" height="50" fill="#000">ТРЕХКОМНАТНАЯ</text>
                                <text class="g_06_info__text" x="570" y="690" width="100" height="50" fill="#000">88.3 м², 10 кв</text>

                                <text class="g_06_info__subtitle" x="570" y="740" width="100" height="50" fill="#000">ОДНОКОМНАТНАЯ КВАРТИРА </text>
                                <text class="g_06_info__text" x="570" y="770" width="760" height="50" fill="#000">48.9 м², 10 кв</text>
                            </g>
                        </g>
                    </a>

                    <a href="?page_id=10&block=09">
                        <g id="g_09_info">
                            <path class="use_hover" href="#g_09" d="M1050 270 l187 18 -4 288 -188 -18 z" fill="#54453EB2" opacity="1" />
                            <use class="use_hover" href="#g_09" x="1094" y="384" />
                            <g id="g_09_info__inner">
                                <rect x="950" y="500" width="367" height="454" fill="#fff" />
                                <text class="g_09_info__title" x="970" y="550" width="100" height="50" fill="#000">Блок 9</text>
                                <text class="g_09_info__text" x="970" y="590" width="100" height="50" fill="#000">20 этажей</text>

                                <text class="g_09_info__text" x="970" y="630" width="100" height="50" fill="#000">Объектов в продаже: 89</text>

                                <path d="M 1L274 2.01859" x="970" y="630" stroke="#D7CDC9" />

                                <text class="g_09_info__subtitle" x="970" y="680" width="100" height="50" fill="#000">ДВУХКОМНАТНАЯ</text>
                                <text class="g_09_info__text" x="970" y="710" width="100" height="50" fill="#000">66.8 м², 15 кв</text>

                                <text class="g_09_info__subtitle" x="970" y="760" width="100" height="50" fill="#000">ТРЕХКОМНАТНАЯ</text>
                                <text class="g_09_info__text" x="970" y="790" width="100" height="50" fill="#000">88.3 м², 10 кв</text>

                                <text class="g_09_info__subtitle" x="970" y="840" width="100" height="50" fill="#000">ОДНОКОМНАТНАЯ КВАРТИРА </text>
                                <text class="g_09_info__text" x="970" y="870" width="760" height="50" fill="#000">48.9 м², 10 кв</text>
                            </g>
                        </g>
                    </a>

                    <a href="?page_id=10&block=10">
                        <g id="g_10_info">
                            <path class="use_hover" href="#g_10" d="M 1240 287 l237 17 -1 10 -12 41 -12 -1 -11 55 -83 -5 -15 66 0 146 -119 -17 z" fill="#54453EB2" opacity="1" />
                            <use class="use_hover" href="#g_10" x="1272" y="392" />
                            <g id="g_10_info__inner">
                                <rect x="1150" y="500" width="367" height="454" fill="#fff" />
                                <text class="g_10_info__title" x="1170" y="550" width="100" height="50" fill="#000">Блок 10</text>
                                <text class="g_10_info__text" x="1170" y="590" width="100" height="50" fill="#000">20 этажей</text>

                                <text class="g_10_info__text" x="1170" y="630" width="100" height="50" fill="#000">Объектов в продаже: 89</text>

                                <path d="M 1L274 2.01859" x="1170" y="630" stroke="#D7CDC9" />

                                <text class="g_10_info__subtitle" x="1170" y="680" width="100" height="50" fill="#000">ДВУХКОМНАТНАЯ</text>
                                <text class="g_10_info__text" x="1170" y="710" width="100" height="50" fill="#000">66.8 м², 15 кв</text>

                                <text class="g_10_info__subtitle" x="1170" y="760" width="100" height="50" fill="#000">ТРЕХКОМНАТНАЯ</text>
                                <text class="g_10_info__text" x="1170" y="790" width="100" height="50" fill="#000">88.3 м², 10 кв</text>

                                <text class="g_10_info__subtitle" x="1170" y="840" width="100" height="50" fill="#000">ОДНОКОМНАТНАЯ КВАРТИРА </text>
                                <text class="g_10_info__text" x="1170" y="870" width="760" height="50" fill="#000">48.9 м², 10 кв</text>
                            </g>
                        </g>
                    </a>

                    <a href="?page_id=10&block=11">
                        <g id="g_11_info">
                            <path class="use_hover" href="#g_11" d="M 1521 280 l-19 5 17 -70 164 10 -3 60 57 7 -11 162 -67 -7 4 -73 -113 -10 0 -12 -80 -10 15 -66 z" fill="#54453EB2" opacity="1" />
                            <use class="use_hover" href="#g_11" x="1546" y="264" />

                            <g id="g_11_info__inner">
                                <rect x="1350" y="400" width="367" height="454" fill="#fff" />
                                <text class="g_11_info__title" x="1370" y="450" width="100" height="50" fill="#000">Блок 11</text>
                                <text class="g_11_info__text" x="1370" y="490" width="100" height="50" fill="#000">20 этажей</text>

                                <text class="g_11_info__text" x="1370" y="530" width="100" height="50" fill="#000">Объектов в продаже: 89</text>

                                <path d="M 1L274 2.01859" x="1370" y="530" stroke="#D7CDC9" />

                                <text class="g_11_info__subtitle" x="1370" y="580" width="100" height="50" fill="#000">ДВУХКОМНАТНАЯ</text>
                                <text class="g_11_info__text" x="1370" y="610" width="100" height="50" fill="#000">66.8 м², 15 кв</text>

                                <text class="g_11_info__subtitle" x="1370" y="660" width="100" height="50" fill="#000">ТРЕХКОМНАТНАЯ</text>
                                <text class="g_11_info__text" x="1370" y="690" width="100" height="50" fill="#000">88.3 м², 10 кв</text>

                                <text class="g_11_info__subtitle" x="1370" y="740" width="100" height="50" fill="#000">ОДНОКОМНАТНАЯ КВАРТИРА </text>
                                <text class="g_11_info__text" x="1370" y="770" width="760" height="50" fill="#000">48.9 м², 10 кв</text>
                            </g>
                        </g>
                    </a>

                    <a href="?page_id=10&block=12">
                        <g id="g_12_info">
                            <path class="use_hover" href="#g_12" d="M1343 469 l23 -68 77 10 17 -68 88 7 0 14 120 9 -12 120 -70 643 -280 -46 z" fill="#54453EB2" opacity="1" />
                            <use class="use_hover" href="#g_12" x="1540" y="443" />

                            <g id="g_12_info__inner">
                                <rect x="1350" y="700" width="367" height="454" fill="#fff" />
                                <text class="g_12_info__title" x="1370" y="750" width="100" height="50" fill="#000">Блок 12</text>
                                <text class="g_12_info__text" x="1370" y="790" width="100" height="50" fill="#000">20 этажей</text>

                                <text class="g_12_info__text" x="1370" y="830" width="100" height="50" fill="#000">Объектов в продаже: 89</text>

                                <path d="M 1L274 2.01859" x="1370" y="830" stroke="#D7CDC9" />

                                <text class="g_12_info__subtitle" x="1370" y="880" width="100" height="50" fill="#000">ДВУХКОМНАТНАЯ</text>
                                <text class="g_12_info__text" x="1370" y="910" width="100" height="50" fill="#000">66.8 м², 15 кв</text>

                                <text class="g_12_info__subtitle" x="1370" y="960" width="100" height="50" fill="#000">ТРЕХКОМНАТНАЯ</text>
                                <text class="g_12_info__text" x="1370" y="990" width="100" height="50" fill="#000">88.3 м², 10 кв</text>

                                <text class="g_12_info__subtitle" x="1370" y="1040" width="100" height="50" fill="#000">ОДНОКОМНАТНАЯ КВАРТИРА </text>
                                <text class="g_12_info__text" x="1370" y="1070" width="760" height="50" fill="#000">48.9 м², 10 кв</text>
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

            <div class="grid md:grid-cols-3 grid-col-1 md:gap-[30px] gap-[15px] relative z-[2]">
                <div class=" md:order-0 order-0 flex flex-col md:gap-[76px] gap-[30px] floating ff5">
                    <h2 class="md:text-[80px] sm:text-[40px] text-[31px] uppercase relative z-[2]">АРХИТЕКТУРА</h2>
                    <div class="img-wrapper">
                        <img class="md:block hidden" src="<?php echo get_template_directory_uri(); ?>/src/img/img/comfort4.webp" alt="">
                        <img class="md:hidden block" src="<?php echo get_template_directory_uri(); ?>/src/img/img/Крыша 2-s.webp" alt="">

                    </div>
                    <p class="md:text-[24px] text-[14px] w-full md:max-w-[560px] max-w-[260px]">На эксплуатируемой кровле здания предусмотрено открытое южному солнцу, <span class="font-bold">благоустроенное пространство</span> внутреннего двора с детскими и спортивными площадками и озеленением</p>
                </div>

                <div class="md:order-1 order-1 circle__wrapper floating reverse" style="display: flex; justify-content: center; align-items: center;">
                    <button class="circle__btn">
                        ВЫБРАТЬ <br> квартиру
                    </button>
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

    <section id="all_for_comfort" class=" overflow-hidden relative">
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

    <section id="variants">
        <div class="container">
            <div class="flex md:flex-row flex-col gap-[20px]">

                <div class="flex flex-col ">
                    <div>
                        <h2 class="md:text-[70px] sm:text-[40px] text-[31px] uppercase md:pt-[60px] md:pb-[100px] sm:pt-[30px] sm:pb-[30px] pt-[30px] pb-[30px] relative z-[2]"><span class="text-brown-dark">Варианты</span> <span class="text-white">отделки</span></h2>
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
    </section>

    <section id="ticker" class="relative z-[2]">
        <img src="<?php echo get_template_directory_uri(); ?>/src/img/img/pattern_8.webp" class="pattern_8 wow fadeInLeft" alt="" data-wow-delay="1s">
        <img src="<?php echo get_template_directory_uri(); ?>/src/img/img/pattern_6.webp" class="pattern_6 wow fadeInLeft" alt="" data-wow-delay="1s">
        <div class="ticker">
            <div class="ticker__in">
                <div class="ticker__item">
                    <a href="#popup2" class="popup-link">Успейте купить</a>
                </div>
                <div class="ticker__item">
                    <a href="#popup1" class="popup-link">Успейте купить</a>
                </div>
                <div class="ticker__item">
                    <a href="#popup1" class="popup-link">Успейте купить</a>
                </div>
            </div>
        </div>

        <div class="container" style="height: 1px;"></div>
    </section>

    <section id="type" class="relative">
        <div class="container">
            <h2 class="md:text-[80px] sm:text-[40px] text-[31px] uppercase md:pt-[60px] md:pb-[60px] sm:pt-[30px] sm:pb-[30px] pt-[30px] pb-[30px] relative z-[2]">Типы планировок</h2>

            <div class="flex md:flex-row flex-col gap-[20px] justify-between">
                <div class="flex flex-col gap-[30px] w-full max-w-[400px]">
                    <div class="relative">
                        <button class="button_main_variant">
                            <div class="uppercase font-bold">
                                ОДНОКОМНАТНАЯ КВАРТИРА
                            </div>
                            <div>
                                от 36 м² до 74 м², 147 кв
                            </div>
                        </button>
                    </div>


                    <div class="relative">
                        <button class="button_main_variant">
                            <div class="uppercase font-bold">
                                ДВУХКОМНАТНАЯ квартира
                            </div>
                            <div>
                                от 65 м² до 101 м², 86 кв
                            </div>
                        </button>
                    </div>


                    <div class="relative">
                        <button class="button_main_variant">
                            <div class="uppercase font-bold">
                                ТРЕХКОМНАТНАЯ квартира
                            </div>
                            <div>
                                от 86 м² до 123 м², 3 кв
                            </div>
                        </button>
                    </div>

                </div>

                <div class="md:p-[110px] p-[20px] bg-white">
                    <img src="<?php echo get_template_directory_uri(); ?>/src/img/img/map__type.webp" alt="">
                    <div class="text-center pt-[20px]">
                        <button class="button_main button_main--watch w-full">Посмотреть квартиры данного типа</button>
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
                            <div style="background-image: url('<?php echo get_template_directory_uri(); ?>/src/img/img/swiper1.webp'); background-position: center; background-repeat: no-repeat; background-size: cover;" class="md:h-[430px] h-[250px] md:py-[116px] md:px-[30px] py-[44px] px-[30px] flex flex-col justify-between gap-[40px]">
                                <p>Проектное финансирование <br> от сбербанка</p>
                                <button class="button_main button_main__podrobnee">Узнать подробнее</button>
                            </div>
                        </div>

                        <div class="swiper-slide ">
                            <div style="background-image: url('<?php echo get_template_directory_uri(); ?>/src/img/img/swiper1.webp'); background-position: center; background-repeat: no-repeat; background-size: cover;" class="md:h-[430px] h-[250px] md:py-[116px] md:px-[30px] py-[44px] px-[30px] flex flex-col justify-between gap-[40px]">
                                <p>Проектное финансирование <br> от сбербанка</p>
                                <button class="button_main button_main__podrobnee">Узнать подробнее</button>
                            </div>
                        </div>

                        <div class="swiper-slide ">
                            <div style="background-image: url('<?php echo get_template_directory_uri(); ?>/src/img/img/swiper1.webp'); background-position: center; background-repeat: no-repeat; background-size: cover;" class="md:h-[430px] h-[250px] md:py-[116px] md:px-[30px] py-[44px] px-[30px] flex flex-col justify-between gap-[40px]">
                                <p>Проектное финансирование <br> от сбербанка</p>
                                <button class="button_main button_main__podrobnee">Узнать подробнее</button>
                            </div>
                        </div>



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

    <section id="location" class="relative">
        <div class="container overflow-hidden">
            <h2 class="md:text-[60px] sm:text-[40px] text-[31px] uppercase md:pt-[60px] md:pb-[60px] sm:pt-[30px] sm:pb-[30px] pt-[30px] pb-[30px] relative z-[2]"><span class="text-white">Расположение</span><span class="text-brown-custom"> и инфраструктура</span></h2>

            <div class="relative overflow-hidden">
                <iframe class="z-[2] relative" src="https://yandex.ru/map-widget/v1/?um=constructor%3A87cca2237e2aee8abbe959bfc5e5774f84883a7e01c3d97d7d37182acecb8b52&amp;source=constructor" width="100%" height="630" frameborder="0"></iframe>
                <div class="info__map">
                    <ul>
                        <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M3.47396 0.604329C3.47396 0.466196 3.41909 0.33372 3.32141 0.236045C3.22373 0.13837 3.09126 0.0834961 2.95313 0.0834961H2.80521C2.09437 0.0834961 1.41265 0.365874 0.910015 0.868511C0.407378 1.37115 0.125 2.05287 0.125 2.7637V16.4064C0.125 17.1173 0.407378 17.799 0.910015 18.3016C1.1589 18.5505 1.45436 18.7479 1.77954 18.8826C2.10471 19.0173 2.45324 19.0866 2.80521 19.0866H7.58021C7.76771 19.0866 7.91354 18.922 7.91354 18.7335V18.3585C7.91357 18.2516 7.8807 18.1472 7.81939 18.0597C7.75808 17.9721 7.6713 17.9055 7.57083 17.8689L7.19271 17.7304C7.14292 17.7122 7.0936 17.6927 7.04479 17.672C6.97472 17.6417 6.89927 17.6258 6.82292 17.6252H2.80521C2.64516 17.6252 2.48668 17.5936 2.33881 17.5324C2.19095 17.4711 2.05659 17.3814 1.94342 17.2682C1.83025 17.155 1.74048 17.0207 1.67923 16.8728C1.61798 16.7249 1.58646 16.5665 1.58646 16.4064C1.58646 16.2464 1.61798 16.0879 1.67923 15.94C1.74048 15.7922 1.83025 15.6578 1.94342 15.5446C2.05659 15.4315 2.19095 15.3417 2.33881 15.2804C2.48668 15.2192 2.64516 15.1877 2.80521 15.1877H4.76979C5.06667 15.1877 5.3 14.9377 5.33958 14.6418C5.40523 14.1255 5.61337 13.6376 5.94067 13.2328C6.26797 12.828 6.7015 12.5224 7.19271 12.3502L12.3885 10.447C13.0248 10.2139 13.7231 10.2139 14.3594 10.447L14.5313 10.5095C14.6099 10.5384 14.6944 10.5478 14.7775 10.537C14.8605 10.5262 14.9398 10.4955 15.0085 10.4476C15.0772 10.3996 15.1333 10.3358 15.1721 10.2616C15.2109 10.1873 15.2312 10.1048 15.2313 10.021V1.7887C15.2313 0.847038 14.4677 0.0834961 13.526 0.0834961H5.55729C5.41916 0.0834961 5.28668 0.13837 5.18901 0.236045C5.09133 0.33372 5.03646 0.466196 5.03646 0.604329V11.5522C5.03646 11.7594 4.95415 11.9582 4.80764 12.1047C4.66112 12.2512 4.46241 12.3335 4.25521 12.3335C4.04801 12.3335 3.84929 12.2512 3.70278 12.1047C3.55627 11.9582 3.47396 11.7594 3.47396 11.5522V0.604329Z" fill="#9E918C" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M13.3776 11.8364C13.5286 11.8364 13.6797 11.8625 13.8224 11.9156L19.0193 13.8187C19.9672 14.1656 20.1255 15.3406 19.4953 15.9646V17.6562C19.4953 17.8634 19.413 18.0621 19.2665 18.2087C19.12 18.3552 18.9213 18.4375 18.7141 18.4375C18.5069 18.4375 18.3082 18.3552 18.1616 18.2087C18.0151 18.0621 17.9328 17.8634 17.9328 17.6562V16.6614L17.2745 16.9031V18.7344C17.2745 19.1802 17.0682 19.5458 16.8141 19.8125C16.5513 20.0752 16.24 20.2843 15.8974 20.4281C15.2109 20.7333 14.3193 20.9021 13.3745 20.9021C12.4307 20.9021 11.538 20.7333 10.8526 20.4281C10.5101 20.2845 10.1988 20.0758 9.93594 19.8135C9.68177 19.5458 9.47552 19.1802 9.47552 18.7344V16.9031L7.72969 16.2635C6.5901 15.8469 6.5901 14.2354 7.72969 13.8187L12.9255 11.9156C13.0703 11.8627 13.2234 11.8358 13.3776 11.8364ZM13.8224 18.1666L15.712 17.475V18.7C15.7027 18.7125 15.6927 18.7243 15.6818 18.7354C15.6161 18.8041 15.4839 18.9021 15.262 19.001C14.8193 19.1979 14.1526 19.3396 13.3745 19.3396C12.5964 19.3396 11.9297 19.1979 11.487 19.001C11.3318 18.9393 11.1894 18.8492 11.0672 18.7354C11.0567 18.7246 11.047 18.7131 11.038 18.701V17.476L12.9255 18.1666C13.2151 18.2727 13.5328 18.2727 13.8224 18.1666ZM11.0307 18.6896L11.0297 18.6875V18.6896H11.0307Z" fill="#9E918C" />
                        </svg>
                        <ul>
                            <li>Образование</li>
                            <li>8</li>
                        </ul>
                    </ul>

                    <ul>
                        <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.3812 11.4334C15.5898 11.1278 13.7334 11.2701 11.9638 11.8734C11.7087 13.3661 11.1837 14.7871 10.3991 16.1025C10.0562 16.6781 9.66744 17.2252 9.23674 17.7385C8.30971 18.912 7.03258 19.8727 5.70703 20.6157C7.31826 21.6419 9.21986 22.2525 11.2611 22.2967C13.1272 20.5768 14.7134 18.3775 15.8651 15.9074C16.5436 14.4522 17.0523 12.9499 17.3812 11.4334ZM7.60028 2.2997C7.60028 3.25453 7.72129 4.1908 7.95442 5.09046C9.50985 4.56894 11.1477 4.21801 12.8331 4.04625C15.1452 3.81063 17.454 3.92739 19.6171 4.38171C17.638 2.12719 14.7352 0.703613 11.4996 0.703613C10.1379 0.703613 8.83544 0.956356 7.63558 1.41637C7.61239 1.7099 7.60028 2.0052 7.60028 2.2997Z" fill="#9E918C" />
                            <path d="M12.961 5.30502C11.3636 5.4678 9.81289 5.8006 8.34199 6.29503C8.99401 7.9813 10.0598 9.49569 11.4736 10.7033C14.9289 9.49864 18.6896 9.87653 21.8406 11.7562C21.9904 11.8457 22.1383 11.9384 22.2842 12.0341C22.2928 11.8576 22.2974 11.6801 22.2974 11.5016C22.2974 9.48257 21.7427 7.59341 20.7783 5.97704C18.3526 5.26221 15.6617 5.02972 12.961 5.30502ZM21.1922 12.8429C20.3723 12.3537 19.5062 11.978 18.6141 11.7173C18.2652 13.3203 17.7275 14.9067 17.0115 16.4421C16.0147 18.58 14.7077 20.529 13.1804 22.1692C17.7045 21.4619 21.2973 17.9459 22.1195 13.4609C21.8208 13.2397 21.5114 13.0334 21.1922 12.8429ZM4.56262 19.7764C5.73987 19.2198 6.79462 18.4702 7.69465 17.5539C6.51167 16.4388 5.43815 15.1732 4.49724 13.7833C3.14369 11.7839 2.1266 9.60725 1.50736 7.40213C0.988164 8.6663 0.701172 10.0503 0.701172 11.5016C0.701172 14.8241 2.20223 17.7956 4.56262 19.7764ZM5.54516 13.0739C6.42495 14.3736 7.42664 15.557 8.52864 16.6006C8.81311 16.2349 9.07473 15.852 9.312 15.4541C10.0069 14.2892 10.4747 13.0324 10.7068 11.7132C7.92344 9.36388 6.33452 5.9535 6.33452 2.29962C6.33452 2.20471 6.336 2.10968 6.33819 2.01465C4.73484 2.88874 3.37758 4.15735 2.39689 5.69021C2.90162 8.22493 3.98619 10.7711 5.54516 13.0739Z" fill="#9E918C" />
                        </svg>
                        <ul>
                            <li>Спорт</li>
                            <li>16</li>
                        </ul>


                    </ul>

                    <ul>
                        <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.95474 21.2139C10.804 22.8239 11.9772 23.8879 12.0449 23.9486C12.1697 24.0605 12.3315 24.1224 12.4991 24.1222C12.6616 24.1222 12.8242 24.0644 12.9535 23.9486C13.0213 23.8879 14.1942 22.8239 15.0433 21.2139C14.0439 20.8163 13.18 20.2707 12.4991 19.7541C11.8181 20.2708 10.9544 20.8163 9.95474 21.2139ZM22.5351 15.3159C22.4092 15.459 22.2788 15.5981 22.1442 15.733C20.806 17.071 19.0302 18.0279 16.8655 18.5769C15.7159 18.8685 14.6507 18.9925 13.8481 19.0423C14.9124 19.7535 16.3559 20.4382 17.9697 20.4382C21.2576 20.4382 23.8394 17.5969 23.9477 17.4759C24.0595 17.351 24.1213 17.1893 24.1213 17.0217C24.1213 16.8541 24.0595 16.6924 23.9477 16.5675C23.9123 16.5279 23.3894 15.9505 22.5351 15.3159H22.5351ZM8.13297 18.5771C5.96831 18.0281 4.19226 17.0712 2.85408 15.733C2.71939 15.5981 2.58897 15.459 2.46302 15.3159C1.60889 15.9505 1.08602 16.5281 1.05052 16.5675C0.819098 16.8261 0.819098 17.2175 1.05052 17.4761C1.1589 17.597 3.74068 20.4382 7.02834 20.4382C8.64235 20.4382 10.0857 19.7535 11.1502 19.0423C10.3476 18.9925 9.2824 18.8685 8.13297 18.5771ZM12.0449 17.5291C12.1697 17.6411 12.3315 17.703 12.4991 17.7029C12.6616 17.7029 12.8241 17.6449 12.9535 17.5291C13.1206 17.3796 17.0459 13.8128 17.0459 9.29033C17.0459 4.7681 13.1206 1.20125 12.9535 1.05155C12.8287 0.939589 12.6668 0.877749 12.4991 0.87793C12.3315 0.877751 12.1697 0.939594 12.0449 1.05155C11.8777 1.20125 7.9524 4.7681 7.9524 9.29033C7.9524 13.8126 11.8778 17.3796 12.0449 17.5291ZM19.7385 4.37931C19.4083 3.23591 19.0529 2.48762 19.0303 2.44117C18.8801 2.12812 18.5185 1.97842 18.1909 2.09338C18.1423 2.11054 17.3621 2.38796 16.3203 2.96295C16.7712 3.64827 17.1532 4.34562 17.4614 5.04529C18.2398 4.74308 19.0142 4.52919 19.7385 4.37931ZM8.67799 2.96295C7.63634 2.38796 6.85617 2.11054 6.80737 2.09338C6.47982 1.97824 6.11814 2.12812 5.96795 2.44099C5.94561 2.48762 5.59001 3.23591 5.25979 4.37931C5.98393 4.52901 6.75842 4.7429 7.53686 5.04511C7.84515 4.3458 8.22713 3.64831 8.67799 2.96295Z" fill="#9E918C" />
                            <path d="M18.4089 9.29051C18.4089 10.4903 18.1718 11.7215 17.7037 12.9496C17.3371 13.9119 16.8279 14.8759 16.1902 15.815C15.7039 16.5311 15.2119 17.1301 14.8054 17.5838C16.6805 17.3413 19.2964 16.6558 21.1823 14.7701C24.38 11.5724 24.1265 6.27453 24.1141 6.05056C24.1049 5.88319 24.0343 5.7251 23.9157 5.60657C23.7972 5.48804 23.6391 5.41739 23.4718 5.40814C23.4411 5.40655 23.2911 5.39893 23.0473 5.39893C22.1651 5.39893 20.0562 5.49686 17.9419 6.32016C18.2521 7.31868 18.4089 8.31487 18.4089 9.29051ZM10.1953 17.5839C9.78879 17.1301 9.2968 16.5311 8.81048 15.815C8.1727 14.8759 7.66336 13.9119 7.29673 12.9496C6.82889 11.7215 6.59161 10.4903 6.59161 9.29051C6.59161 8.31487 6.74835 7.31863 7.05872 6.32012C4.94447 5.49686 2.8357 5.39893 1.95351 5.39893C1.70947 5.39893 1.55941 5.40637 1.52872 5.40814C1.36135 5.41739 1.20327 5.48804 1.08474 5.60657C0.966221 5.7251 0.89558 5.88319 0.886347 6.05056C0.873952 6.27453 0.620509 11.5724 3.81823 14.7702C5.70429 16.656 8.32012 17.3413 10.1953 17.5839Z" fill="#9E918C" />
                        </svg>
                        <ul>
                            <li>Услуги</li>
                            <li>19</li>
                        </ul>

                    </ul>

                    <ul>
                        <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M21.7943 9.00242C21.51 8.7181 21.1646 8.576 20.7586 8.576H14.423V2.24023C14.423 1.83424 14.2808 1.48895 13.9966 1.20463C13.7123 0.920532 13.3673 0.77832 12.9607 0.77832H10.0369C9.63083 0.77832 9.2856 0.920372 9.00128 1.20469C8.71697 1.489 8.57486 1.83429 8.57486 2.24028V8.57605H2.2393C1.83331 8.57605 1.48803 8.71815 1.20371 9.00247C0.919395 9.28679 0.777344 9.63175 0.777344 10.038V12.9622C0.777344 13.3686 0.919342 13.7136 1.20366 13.9976C1.48797 14.2821 1.83326 14.4241 2.23925 14.4241H8.57481V20.7599C8.57481 21.1659 8.71691 21.5115 9.00123 21.7957C9.28555 22.0797 9.63078 22.2217 10.0368 22.2217H12.9609C13.3672 22.2217 13.7122 22.0797 13.9966 21.7957C14.281 21.5113 14.423 21.1659 14.423 20.7599V14.4241H20.7585C21.1649 14.4241 21.5101 14.2821 21.7943 13.9976C22.0785 13.7136 22.2207 13.3686 22.2207 12.9622V10.038C22.2206 9.63175 22.0788 9.28657 21.7943 9.00242Z" fill="#9E918C" />
                        </svg>
                        <ul>
                            <li>Поликлиника</li>
                            <li>4</li>
                        </ul>

                    </ul>

                    <ul>
                        <svg width="19" height="25" viewBox="0 0 19 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.5 8.33344C9.5 3.73126 7.39935 0 4.8125 0C2.22467 0 0.125 3.73126 0.125 8.33344C0.125 10.3362 1.38751 12.0331 3.15436 12.7034L2.72906 22.9166C2.72906 24.0672 3.66187 25 4.8125 25C5.96313 25 6.89593 24.0672 6.89593 22.9166L6.47064 12.7043C8.23877 12.0331 9.5 10.3362 9.5 8.33344ZM18.875 7.55219L18.6147 0H17.3125L17.0522 7.55219H16.0103L15.75 0H14.1875L13.9272 7.55219H12.8853L12.625 0H11.3228L11.0625 7.55219C11.0625 9.14093 12.0147 10.5019 13.3778 11.1125L12.8853 22.9166C12.8853 24.0672 13.8181 25 14.9687 25C16.1194 25 17.0522 24.0672 17.0522 22.9166L16.5597 11.1125C17.9228 10.5019 18.875 9.14093 18.875 7.55219Z" fill="#9E918C" />
                        </svg>
                        <ul>
                            <li>Питание</li>
                            <li>23</li>
                        </ul>

                    </ul>

                    <ul>
                        <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19.8725 4.20635C19.2674 4.20534 18.6681 4.3238 18.1088 4.55493C17.5496 4.78605 17.0415 5.12531 16.6137 5.55323C16.5768 5.58984 16.5475 5.63337 16.5275 5.68133C16.5074 5.72929 16.4971 5.78073 16.497 5.8327C16.4969 5.88467 16.5071 5.93615 16.5269 5.98418C16.5467 6.03221 16.5759 6.07585 16.6126 6.1126L18.9189 8.41885H8.00585L6.24335 4.89333L11.0741 2.85896C11.1509 2.82644 11.2155 2.77045 11.2585 2.69901C11.3016 2.62757 11.321 2.54434 11.3138 2.46123C11.3067 2.37811 11.2735 2.29938 11.2189 2.23629C11.1644 2.1732 11.0912 2.129 11.01 2.11L4.16471 0.530309C4.08071 0.511287 3.9928 0.520105 3.91426 0.555432C3.83571 0.590759 3.77079 0.650677 3.72929 0.726143L0.569913 6.51833C0.530588 6.59023 0.514609 6.67258 0.524195 6.75396C0.53378 6.83535 0.568454 6.91173 0.623407 6.97253C0.67836 7.03332 0.750868 7.0755 0.830876 7.09323C0.910884 7.11096 0.994425 7.10335 1.06991 7.07146L5.51366 5.20062L7.12304 8.41937H5.15741C5.09938 8.41926 5.04203 8.43194 4.98946 8.45652C4.93689 8.4811 4.89038 8.51696 4.85325 8.56156C3.87229 9.7493 3.18943 11.1543 2.86158 12.6595C4.13559 11.7166 5.65315 11.1586 7.2345 11.0517C8.34752 11.0517 8.96314 11.6803 9.55846 12.2881C10.2314 12.9746 10.9267 13.6845 12.5001 13.6845C14.0736 13.6845 14.7689 12.9746 15.4418 12.2881C16.0376 11.6803 16.6527 11.0517 17.7657 11.0517C19.3439 11.0517 20.8413 11.8152 22.1355 12.6454C22.0246 12.1492 21.8753 11.6623 21.6892 11.1892L22.573 12.0735C22.6097 12.1102 22.6532 12.1393 22.7011 12.1591C22.749 12.179 22.8004 12.1892 22.8522 12.1892C22.9042 12.1891 22.9562 12.1788 23.0042 12.1587C23.0522 12.1387 23.0958 12.1094 23.1324 12.0725C23.776 11.4276 24.214 10.6064 24.3912 9.71268C24.5684 8.81897 24.4767 7.89279 24.1279 7.05112C23.779 6.20945 23.1886 5.49003 22.4311 4.98371C21.6736 4.47739 20.7836 4.20689 19.8725 4.20635Z" fill="#9E918C" />
                            <path d="M17.7655 11.8418C16.9848 11.8418 16.553 12.2825 16.0061 12.8408C15.5838 13.3612 15.0487 13.7787 14.4413 14.0617C13.8338 14.3448 13.1699 14.486 12.4999 14.4746C11.8299 14.4859 11.1661 14.3447 10.5588 14.0616C9.95142 13.7785 9.41639 13.3611 8.99414 12.8408C8.44727 12.2825 8.01497 11.8418 7.23425 11.8418C5.55925 11.8418 3.96654 12.8184 2.67747 13.7819C2.64622 14.0944 2.62695 14.409 2.62695 14.7246C2.65367 17.3255 3.70561 19.8108 5.55424 21.6406C7.40287 23.4703 9.89884 24.4967 12.4999 24.4967C15.1009 24.4967 17.5969 23.4703 19.4455 21.6406C21.2941 19.8108 22.3461 17.3255 22.3728 14.7246C22.3706 14.3807 22.3499 14.0372 22.3108 13.6955C21.2967 13.0455 19.5978 11.8418 17.7655 11.8418ZM10.2374 21.6397C10.2002 21.7376 10.1258 21.8168 10.0305 21.8599C9.9351 21.903 9.82654 21.9067 9.72852 21.87C7.84966 21.1575 6.31764 19.7484 5.45091 17.9356C5.4278 17.8885 5.41429 17.8373 5.41117 17.7849C5.40804 17.7326 5.41536 17.6801 5.43271 17.6307C5.45005 17.5812 5.47707 17.5356 5.51219 17.4967C5.54731 17.4577 5.58983 17.4261 5.63727 17.4038C5.68471 17.3814 5.73612 17.3687 5.78851 17.3665C5.84091 17.3642 5.89323 17.3723 5.94244 17.3905C5.99165 17.4086 6.03676 17.4363 6.07515 17.4721C6.11353 17.5078 6.14442 17.5508 6.16602 17.5986C6.94405 19.2265 8.31988 20.4917 10.0072 21.1309C10.105 21.168 10.1842 21.2424 10.2273 21.3378C10.2705 21.4332 10.2741 21.5417 10.2374 21.6397Z" fill="#9E918C" />
                        </svg>
                        <ul>
                            <li>Отдых</li>
                            <li>16</li>
                        </ul>
                    </ul>

                    <ul>
                        <svg width="25" height="21" viewBox="0 0 25 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M23.0859 7.85167H20.8281L16.1875 0.804791C16.019 0.55942 15.761 0.389925 15.4689 0.332719C15.1768 0.275513 14.8739 0.335161 14.6253 0.498848C14.3767 0.662535 14.2022 0.917201 14.1394 1.20813C14.0765 1.49907 14.1302 1.80306 14.2891 2.05479L18.1172 7.85167H6.88281L10.7109 2.05479C10.8698 1.80306 10.9235 1.49907 10.8606 1.20813C10.7978 0.917201 10.6233 0.662535 10.3747 0.498848C10.1261 0.335161 9.8232 0.275513 9.5311 0.332719C9.239 0.389925 8.98099 0.55942 8.8125 0.804791L4.17188 7.85167H1.91406C1.28906 7.85167 0.78125 8.35948 0.78125 8.98448C0.78125 9.61729 1.28906 10.1251 1.91406 10.1251H2.42187L4.17188 18.0392C4.52344 19.6095 5.89063 20.7032 7.5 20.7032H17.5C19.1094 20.7032 20.4766 19.6095 20.8281 18.0392L22.5781 10.1251H23.0859C23.7109 10.1251 24.2188 9.61729 24.2188 8.98448C24.2188 8.35948 23.7109 7.85167 23.0859 7.85167ZM9.85156 16.086C9.84067 16.3792 9.71656 16.6567 9.5053 16.8603C9.29405 17.0638 9.01211 17.1776 8.71875 17.1776C8.42539 17.1776 8.14345 17.0638 7.9322 16.8603C7.72094 16.6567 7.59683 16.3792 7.58594 16.086V12.4767C7.59683 12.1835 7.72094 11.906 7.9322 11.7024C8.14345 11.4989 8.42539 11.3851 8.71875 11.3851C9.01211 11.3851 9.29405 11.4989 9.5053 11.7024C9.71656 11.906 9.84067 12.1835 9.85156 12.4767V16.086ZM13.6328 16.086C13.6219 16.3792 13.4978 16.6567 13.2866 16.8603C13.0753 17.0638 12.7934 17.1776 12.5 17.1776C12.2066 17.1776 11.9247 17.0638 11.7134 16.8603C11.5022 16.6567 11.3781 16.3792 11.3672 16.086V12.4767C11.3781 12.1835 11.5022 11.906 11.7134 11.7024C11.9247 11.4989 12.2066 11.3851 12.5 11.3851C12.7934 11.3851 13.0753 11.4989 13.2866 11.7024C13.4978 11.906 13.6219 12.1835 13.6328 12.4767V16.086ZM17.4141 16.086C17.4032 16.3792 17.2791 16.6567 17.0678 16.8603C16.8566 17.0638 16.5746 17.1776 16.2812 17.1776C15.9879 17.1776 15.7059 17.0638 15.4947 16.8603C15.2834 16.6567 15.1593 16.3792 15.1484 16.086V12.4767C15.1593 12.1835 15.2834 11.906 15.4947 11.7024C15.7059 11.4989 15.9879 11.3851 16.2812 11.3851C16.5746 11.3851 16.8566 11.4989 17.0678 11.7024C17.2791 11.906 17.4032 12.1835 17.4141 12.4767V16.086Z" fill="#9E918C" />
                        </svg>
                        <ul>
                            <li>Продукты</li>
                            <li>20</li>
                        </ul>
                    </ul>
                </div>
            </div>
        </div>
        <img src="<?php echo get_template_directory_uri(); ?>/src/img/img/pattern_9.webp" class="pattern_9 wow fadeInRight" alt="" data-wow-delay="1s">
    </section>

    <section id="contacts" class="relative">
        <div class="container overflow-hidden">
            <div class="flex md:flex-row flex-col justify-between md:items-center items-start md:gap-[40px] gap-[20px]">
                <div>
                    <h2 class="md:text-[60px] sm:text-[40px] text-[31px] uppercase md:pt-[60px] md:pb-[60px] sm:pt-[30px] sm:pb-[30px] pt-[30px] pb-[30px] relative z-[2] flex flex-col">
                        <span class="text-white">
                            Получите
                        </span>

                        <span class="text-brown-custom">
                            бесплатную
                        </span>
                        <span class="text-white">
                            консультацию
                        </span>
                    </h2>
                </div>

                <div class="circle__wrapper md:block hidden">
                    <button class="circle__btn circle__btn--contacts">
                        ОСТАВИТЬ <br> ЗАЯВКУ
                    </button>
                </div>

                <div class="flex flex-col md:gap-[50px] gap-[20px] md:max-w-[467px] max-w-[280px] w-full">
                    <div class="custom__text--contacts relative">
                        <p class="text-white uppercase font-bold md:text-[30px] text-[14px]">
                            Напишите нам
                        </p>
                        <p class="text-white md:text-[18px] text-[12px]">
                            на почту invest-sity21@bk.ru
                        </p>
                    </div>
                    <div class="custom__text--contacts relative">
                        <p class="text-white uppercase font-bold md:text-[30px] text-[14px]">
                            Закажите звонок
                        </p>
                        <p class="text-white md:text-[18px] text-[12px]">
                            или позвоните по номерам:
                        </p>
                        <p class="text-white md:text-[18px] text-[12px]">
                            +7 (914) 650 44 55, +7 (924) 120 40 50
                        </p>
                    </div>

                    <div class="md:hidden block circle__wrapper absolute top-[56%] right-[0%]">
                        <button class="circle__btn circle__btn--contacts">
                            ОСТАВИТЬ <br> ЗАЯВКУ
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>


<?php get_footer(); ?>