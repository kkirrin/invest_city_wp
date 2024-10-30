<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Инвест Сити</title>

    <?php wp_head(); ?>

</head>

<body class="wrapper">

    <div>
        <header>
            <div class="container md:gap-5 items-center justify-between flex md:pt-[30px] pt-[12px]">

                <div>
                    <a href="/">
                        <img class="m-auto md:w-[140px] sm:w-[70x] w-[94px]" src="<?php echo get_template_directory_uri(); ?>/src/img/icons/dark-logo.svg" alt="Logo">
                    </a>
                </div>



                <!-- Мобильная кнопка -->
                <div class="btn__menu--mobile btn__menu--dark md:hidden flex">
                    <button class="flex items-center gap-2 pl-10 pr-2 py-1 rounded">
                        <svg class="h-3 w-3" viewBox="0 0 64 48">
                            <path d="M19,15 L45,15 C70,15 58,-2 49.0177126,7 L19,37"></path>
                            <path d="M19,24 L45,24 C61.2371586,24 57,49 41,33 L32,24"></path>
                            <path d="M45,33 L19,33 C-8,33 6,-2 22,14 L45,37"></path>
                        </svg>
                    </button>
                </div>

                <div class="mobile-menu">
                    <div class=" max-h-[500px]">
                        <ul class="flex flex-col text-white mt-[30px]">
                            <li class="px-4 mb-4"><a class="md:text-[24px] sm:text-[16px] text-[16px] font-medium hover:text-green transition-colors">О жилом комплексе</a></li>

                            <li class="px-4 mb-4"><a class="md:text-[24px] sm:text-[16px] text-[16px] font-medium hover:text-green transition-colors">Генплан</a></li>

                            <li class="px-4 mb-4"><a class="md:text-[24px] sm:text-[16px] text-[16px] font-medium hover:text-green transition-colors">Архитектура</a></li>

                            <li class="px-4 mb-4"><a class="md:text-[24px] sm:text-[16px] text-[16px] font-medium hover:text-green transition-colors">Инфраструктура</a></li>

                            <li class="px-4 mb-4"><a class="md:text-[24px] sm:text-[16px] text-[16px] font-medium hover:text-green transition-colors">Отделка</a></li>

                            <li class="px-4 mb-4"><a class="md:text-[24px] sm:text-[16px] text-[16px] font-medium hover:text-green transition-colors">Типы планировок</a></li>

                            <li class="px-4 mb-4"><a class="md:text-[24px] sm:text-[16px] text-[16px] font-medium hover:text-green transition-colors">Типы планировок</a></li>
                        </ul>
                    </div>

                    <div class="flex flex-col justify-between max-h-[300px] vertical__line">
                        <ul class="gap-2 mt-[30px]">
                            <li class="px-4 mb-[18px]"><a class="text-white ">г. Уссурийск, ул. Советская, 149</a></li>
                            <li class="px-4 mb-[18px]"><a class="text-white font-medium" href="tel:+79143424684">+7 (914) 342 46 84,</a> <a class="text-white font-medium" href="tel:+84234384455">+8 (4234) 38-44-55</a></li>
                            <li class="px-4 mb-[18px]"><a class="text-white font-medium" href='mailto:invest-sity21@bk.ru'>invest-sity21@bk.ru</a></li>
                        </ul>

                        <button class="button_main">Выбрать квартиру</button>
                    </div>
                </div>


                <ul class="gap-2 pl-36 hidden md:flex">
                    <li class="mr-2"><a class="text-black">г. Уссурийск, ул. Советская, 149</a></li>
                    <li class="mr-2"><a class="text-black font-medium" href="tel:+79143424684">+7 (914) 342 46 84,</a></li>
                    <li class="mr-2"><a class="text-black font-medium" href="tel:+84234384455">8 (4234) 38-44-55</a></li>
                    <li class="mr-2"><a class="text-black font-medium" href='mailto:invest-sity21@bk.ru'>invest-sity21@bk.ru</a></li>

                    <div class="btn__menu btn__menu--dark up md:flex hidden">
                        <button class="flex up items-center gap-2 bg-red pl-10 pr-2 py-1 rounded">
                            <svg class="h-6 w-6" viewBox="0 0 64 48" stroke="#000">
                                <path d="M19,15 L45,15 C70,15 58,-2 49.0177126,7 L19,37"> stroke="#000"</path>
                                <path d="M19,24 L45,24 C61.2371586,24 57,49 41,33 L32,24" stroke="#000"></path>
                                <path d="M45,33 L19,33 C-8,33 6,-2 22,14 L45,37" stroke="#000"></path>
                            </svg>
                        </button>
                    </div>

                </ul>



                <!-- Меню кнопка -->

                <div class="menu overflow-hidden line__horizontal">
                    <ul class="flex flex-col text-white mt-[30px]">
                        <li class="px-4 mb-4"><a class="md:text-[24px] sm:text-[16px] text-[16px] font-medium hover:text-green transition-colors">О жилом комплексе</a></li>

                        <li class="px-4 mb-4"><a class="md:text-[24px] sm:text-[16px] text-[16px] font-medium hover:text-green transition-colors">Генплан</a></li>

                        <li class="px-4 mb-4"><a class="md:text-[24px] sm:text-[16px] text-[16px] font-medium hover:text-green transition-colors">Архитектура</a></li>

                        <li class="px-4 mb-4"><a class="md:text-[24px] sm:text-[16px] text-[16px] font-medium hover:text-green transition-colors">Инфраструктура</a></li>

                        <li class="px-4 mb-4"><a class="md:text-[24px] sm:text-[16px] text-[16px] font-medium hover:text-green transition-colors">Отделка</a></li>

                        <li class="px-4 mb-4"><a class="md:text-[24px] sm:text-[16px] text-[16px] font-medium hover:text-green transition-colors">Типы планировок</a></li>

                        <li class="px-4 mb-4"><a class="md:text-[24px] sm:text-[16px] text-[16px] font-medium hover:text-green transition-colors">Типы планировок</a></li>
                    </ul>

                    <ul class="gap-2 mt-[30px]">
                        <li class="px-4 mb-[18px]"><a class="text-white">г. Уссурийск, ул. Советская, 149</a></li>
                        <li class="px-4 mb-[18px]"><a class="text-white font-medium" href="tel:+79143424684">+7 914 342 46 84,</a> <a class="text-white font-medium" href="tel:+84234384455">8 (4234) 38-44-55</a></li>
                        <li class="px-4 mb-[18px]"><a class="text-white font-medium" href='mailto:invest-sity21@bk.ru'>invest-sity21@bk.ru</a></li>
                    </ul>

                    <button class="button_main">Выбрать квартиру</button>
                </div>

                <div class="mask">

                </div>


            </div>
        </header>