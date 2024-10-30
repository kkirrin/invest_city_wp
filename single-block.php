<?php
/*
    Template Name: карточка блока
    */

    ini_set('display_errors', 0);
    ini_set('display_startup_errors', 0);
    error_reporting(E_ALL);
?>

<?php get_header(2); ?>


<main>
    <h1 class="visually-hidden">Атриум</h1>

    <section id="single-block-section">
        <div class="container">
            <nav class="single-block">
                <ul>
                    <li>
                        <a href="/">
                            <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="30" cy="30" r="29" transform="matrix(-1 0 0 1 60 0)" stroke="#94765B" stroke-width="2" />
                                <path d="M39 31H40V29H39V31ZM20.2929 29.2929C19.9024 29.6834 19.9024 30.3166 20.2929 30.7071L26.6569 37.0711C27.0474 37.4616 27.6805 37.4616 28.0711 37.0711C28.4616 36.6805 28.4616 36.0474 28.0711 35.6569L22.4142 30L28.0711 24.3431C28.4616 23.9526 28.4616 23.3195 28.0711 22.9289C27.6805 22.5384 27.0474 22.5384 26.6569 22.9289L20.2929 29.2929ZM39 29L21 29V31L39 31V29Z" fill="#94765B" />
                            </svg>
                        </a>
                    </li>

                    <?php
                    $block = $_GET['block'];

                    $current_cat_name = 'Блок ' . $block;
                    $current_cat_id = get_cat_ID($current_cat_name);

                    $all_parent_cat = get_categories(array(
                        'hide_empty' => false,
                        'parent' => 0,
                    ));

                    if (is_array($all_parent_cat)) {
                        foreach ($all_parent_cat as $category) {
                            $category_id = $category->term_id;
                            $category_name = get_cat_name($category_id);

                            if ($category_name != 'Без рубрики') {
                                echo '<li>';
                                // echo '    <a href="?page_id=10&' . 'block=' . preg_replace('/[^0-9]/', '',  $category_name) . '" class="block_link ' . ($category_name == 'Блок ' . $block ? 'active' : '') . '">' . $category_name . '</a>';
                                echo '    <a href="?page_id=10&' . 'block=' . end(explode(' ', $category_name)) . '" class="block_link ' . ($category_name == 'Блок ' . $block ? 'active' : '') . '">' . $category_name . '</a>';
                                echo '</li>';
                            }
                        }
                    } else {
                        echo "Ошибка: Невозможно получить категории.";
                    }

                    $all_child_cat_of_current = get_categories(array(
                        'parent' => $current_cat_id,
                        'hide_empty' => false,
                    ));




                    ?>


                </ul>
            </nav>

            <nav class="single-block-checkbox">
                <div class="flex gap-[5px] items-center">
                    <div style="border-radius: 5px; background-color: #fff; width: 20px; height: 18px; "></div>
                    <span>Свободна</span>
                </div>
                <div class="flex gap-[5px] items-center">
                    <div style="border-radius: 5px; background-color: #CDBFB9; width: 20px; height: 18px; "></div>
                    <span>Забронирована</span>
                </div>
                <div class="flex gap-[5px] items-center">
                    <div style="border-radius: 5px; background-color: #E8E4E2; width: 20px; height: 18px; border: 1px solid #000;"></div>
                    <span>Продана</span>
                </div>
                <div class="flex gap-[5px] items-center">
                    <div style="border-radius: 5px; background-color: #86BD8E; width: 20px; height: 18px; "></div>
                    <span>Акция</span>
                </div>
                <div class="flex gap-[5px] items-center">
                    <div style="border-radius: 5px; background-color: #E16E61; width: 20px; height: 18px; "></div>
                    <span>Квартира + машина</span>
                </div>
            </nav>
        </div>
    </section>

    <section id="">
        <div class="container">
            <div class="flex justify-between my-auto flex-1 pb-2 gap-[10px]">
                <div class="grid md:grid-cols-2 grid-cols-1 gap-[20px]">                
                    <?php

                        foreach ($all_child_cat_of_current as $child_cat) {
                            $child_cat_name = $child_cat->name;
                            
                            echo '<div class="flex flex-col gap-[20px]">';
                            echo '   <div class="p-[10px] text-center bg-[#BBA590] text-white uppercase font-medium">';
                            echo '    <span>';
                            echo        $child_cat_name;
                            echo '    </span>';
                            echo '   </div>';
                        
                            echo '   <div class="bg-white md:p-[40px] p-[20px]">';
                            echo '      <div class="flex flex-col">';

                            // НЕ ТРОГАТЬ 3 ЭТИ DIV           
                            
                            $args = array(
                                'post_type'         => 'apartments',
                                'order'             => 'DESC',
                                'limit'             => -1, 
                                'posts_per_page'    => -1,
                                'tax_query'         => array(
                                    array(
                                        'taxonomy'  => 'category',
                                        'field'     => 'term_id',
                                        'terms'     => array($child_cat->term_id)
                                    )
                                )
                            );

                            $apartments = new WP_Query($args);
                            
                            if ($apartments->have_posts()) { 
                                while ($apartments->have_posts()) { 
                                    $apartments->the_post();
                                    
                                    $floor = get_field('number_of_floor');
                                        
                                    // Тут записываю в массив, чтобы сделать отображение квартир по этажам
                                    $apartments_by_floor[$floor][] = array(
                                        'post_id'           =>          get_the_ID(),
                                        'post_title'        =>          get_the_title(),
                                        'post_link'         =>          get_the_permalink(),
                                        'area'              =>          get_field('area'),
                                        'price'             =>          get_field('price'),
                                        'status'            =>          get_field('status'),
                                        'name_of_the_apart' =>          get_field('name_of_apartment'),
                                        'number'            =>          get_field('number'),
                                        'date'              =>          get_field('date'),
                                        'floor'             =>          get_field('number_of_floor'),
                                        'rooms'             =>          get_field('number_of_room'),
                                        'entrance'          =>          get_field('number_of_entrance'),
                                        'ceilings'          =>          get_field('ceilings'),
                                        'photo'             =>          get_field('photo'),
                                        'finishing'         =>          get_field('finishing'),
                                        'corpus'            =>          get_field('corpus')
                                       

                                    );

                                }

                                //         // Сортировка по убыванию
                                krsort($apartments_by_floor);

                                foreach ($apartments_by_floor as $floor => $apartments_on_floor) {
                                    echo '<div class="flex gap-[10px] text-black pb-[8px]">';
                                    echo '   <div class="flex flex-row md:gap-[10px] gap-[5px] relative">';
                                    echo '       <div>';
                                    echo '           <div class="flex gap-[4px] font-Bahnschrift" style="min-width:70px; width: 100%;">';
                                    echo '               <span class="font-medium ">';
                                    echo                     $floor;
                                    echo '               </span>';
                                    echo '               <span class="font-normal">';
                                    echo '                   этаж';
                                    echo '               </span>';
                                    echo '           </div>';
                                    echo '       </div>';

                                    
                                    foreach($apartments_on_floor as $apartment) {
                                        // var_dump ($apartment['photo']);

                                        if($apartment['photo'] == '' || $apartment['photo'] == false || $apartment['photo'] == NULL) {
                                            $apartment['photo'] = 'https://cz-invest-city.ru/wp-content/themes/invest_city/src/img/img/map__type.webp';
                                        }
                                    
                                        switch ($apartment['status']):
                                            case 'Свободна':
                                                $color_of_status = '#FFFFFF';
                                                $color_of_text_status = '#000';

                                                echo '  <button id="'. $apartment['post_id'] .'" style="background-color:'. $color_of_status .';" class="btn__apart w-5 h-5 relative rounded leading-none overflow-hidden room text-white">'; 
                                                echo '      <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">'; 
                                                echo '          <span class="items-center justify-center pointer-events-none flex h-full w-full">'; 
                                                echo '              <span class="text-xs font-medium">'. $apartment['rooms'] .'</span>'; 
                                                echo '          </span>'; 
                                                echo '      </div>'; 
                                                echo '  </button>'; 

                                                break;

                                            case 'Забронирована':
                                                $color_of_status = '#CDBFB9';
                                                $color_of_text_status = '#fff';

                                                echo '  <button id="'. $apartment['post_id'] .'" style="background-color:'. $color_of_status .';" class="btn__apart w-5 h-5 relative rounded leading-none overflow-hidden room text-white">'; 
                                                echo '      <div class="bg-red flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">'; 
                                                echo '          <span class="items-center justify-center pointer-events-none flex h-full w-full">'; 
                                                echo '              <span class="text-xs font-medium">'. $apartment['rooms'] .'</span>'; 
                                                echo '          </span>'; 
                                                echo '      </div>'; 
                                                echo '  </button>'; 

                                                break;

                                            case 'Продана':
                                                $color_of_status = '#E8E4E2';
                                                $color_of_text_status = '#fff';

                                                echo '  <button id="'. $apartment['post_id'] .'" style="background-color:'. $color_of_status .';" class="btn__apart w-5 h-5 relative rounded leading-none overflow-hidden room text-white">'; 
                                                echo '      <div class="bg-red flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">'; 
                                                echo '          <span class="items-center justify-center pointer-events-none flex h-full w-full">'; 
                                                echo '              <span class="text-xs font-medium">'. $apartment['rooms'] .'</span>'; 
                                                echo '          </span>'; 
                                                echo '      </div>'; 
                                                echo '  </button>';
                                                
                                                break;

                                            case 'Акция':
                                                $color_of_status = '#86BD8E';
                                                $color_of_text_status = '#fff';


                                                echo '  <button id="'. $apartment['post_id'] .'" style="background-color:'. $color_of_status .';" class="btn__apart w-5 h-5 relative rounded leading-none overflow-hidden room text-white">'; 
                                                echo '      <div class="bg-red flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">'; 
                                                echo '          <span class="items-center justify-center pointer-events-none flex h-full w-full">'; 
                                                echo '              <span class="text-xs font-medium">'. $apartment['rooms'] .'</span>'; 
                                                echo '          </span>'; 
                                                echo '      </div>'; 
                                                echo '  </button>'; 

                                                break;

                                            case 'Квартира + машина': 
                                                $color_of_status = '#E16E61';
                                                $color_of_text_status = '#fff';

                                                echo '  <button id="'. $apartment['post_id'] .'" style="background-color:'. $color_of_status .';" class="btn__apart w-5 h-5 relative rounded leading-none overflow-hidden room text-white">'; 
                                                echo '      <div class="bg-red flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">'; 
                                                echo '          <span class="items-center justify-center pointer-events-none flex h-full w-full">'; 
                                                echo '              <span class="text-xs font-medium">'. $apartment['rooms'] .'</span>'; 
                                                echo '          </span>'; 
                                                echo '      </div>'; 
                                                echo '  </button>'; 

                                                break;
                                                                
                                                    
                                                    
                                                    
                                        endswitch;

                                        echo '      <div class="apartment-item">';
                                        echo '           <div class="wrapper">';
                                        echo '              <div class="flex gap-[5px]">';
                                        echo '              <div style="color: '. $color_of_text_status .'; text-align: center; background-color: '. $color_of_status .'; width: 20px; height: 23px; border-radius: 5px;">'. $apartment['rooms'] .'</div>';
                                        echo '              <p>Квартира</p>';
                                        echo '              </div>';

                                        echo '              <p>№ ' . $apartment['number'] . '</p>';
                                        echo '          </div>';
                                        
                                        echo '          <div class="flex justify-between items-center pt-[40px]">';
                                        echo '              <div style="width: 180px; height: 80px;">';
                                        echo '                  <img style="object-fit: cover; width: 100%; height: 100%;" src="'. $apartment['photo'] .'">';
                                        echo '              </div>';
                                        echo '              <div class="flex flex-col gap-[10px]">';
                                        echo '                  <p style="font-weight: 500;">' . $apartment['name_of_the_apart'] . '</p>';
                                        echo '                  <p style="font-weight: 500;">' . $apartment['area'] . '</p>';
                                        echo '              </div>';
                                        echo '           </div>';
                                        echo '      </div>'; 

                                    }
                                    echo '     </div>';
                                    echo ' </div>';
                                }

                            } 

                                // НЕ ТРОГАТЬ ЭТИ  3 DIV
                            echo '   </div>';
                            echo '  </div>';
                            echo '</div>';

                                
                        }

                        ?>

                
                </div>


                <?php 

                if($apartments_by_floor) {

                
                    foreach($apartments_by_floor as $floor => $apartments_on_floor) {
                        foreach($apartments_on_floor as $apartment) {
                            
                            if($apartment['photo'] == '' || $apartment['photo'] == false || $apartment['photo'] == NULL) {
                                $apartment['photo'] = 'https://cz-invest-city.ru/wp-content/themes/invest_city/src/img/img/map__type.webp';
                            }

                            echo ' <div id="'. $apartment['post_id'] .'" class="flex flex-col bg-white p-[30px] detail__apart">    '; 
                            echo '      <div>';
                            echo '          <img style="object-fit: cover; width: 100%; height: 100%;" src="'. $apartment['photo'] .'">';
                            echo '      </div>';
                            echo '     <div class="flex justify-between items-center">';
                            echo '         <div>';
                            echo '             <h3 class="">'. $apartment['name_of_the_apart'] .'</h3>';
                            echo '         </div>';

                            echo '         <div>';
                            echo '             № '. $apartment['number'] .'';
                            echo '         </div>';
                            echo '     </div>';

                            echo '     <ul class="single-apart-list columns-2 pt-[20px]"> ';
                            echo '         <li> ';

                            echo '             <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"> ';
                            echo '                 <path d="M3 9V20C3 20.2652 3.10536 20.5196 3.29289 20.7071C3.48043 20.8946 3.73478 21 4 21H20C20.2652 21 20.5196 20.8946 20.7071 20.7071C20.8946 20.5196 21 20.2652 21 20V9M3 9H21M3 9V5C3 4.73478 3.10536 4.48043 3.29289 4.29289C3.48043 4.10536 3.73478 4 4 4H20C20.2652 4 20.5196 4.10536 20.7071 4.29289C20.8946 4.48043 21 4.73478 21 5V9" stroke="#BBA590" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" /> ';
                            echo '                 <path d="M16 3V6M8 3V6" stroke="#BBA590" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" /> ';
                            echo '             </svg> ';
                            echo '             <p></p> ';
                            echo '             <p>'. $apartment['date'] .'</p> ';
                            echo '         </li> ';
                            echo '        <li> ';
                            echo '            <svg width="22" height="24" viewBox="0 0 22 24" fill="none" xmlns="http://www.w3.org/2000/svg">';
                            echo '                <path d="M11.0068 0.600142C10.901 0.598851 10.7967 0.625532 10.7045 0.677486L1.10449 6.07749C1.01203 6.12989 0.935115 6.20587 0.88159 6.29768C0.828065 6.3895 0.799844 6.49386 0.799805 6.60014V17.4001C0.799844 17.5064 0.828065 17.6108 0.88159 17.7026C0.935115 17.7944 1.01203 17.8704 1.10449 17.9228L10.7045 23.3228C10.7946 23.3736 10.8963 23.4004 10.9998 23.4004C11.1033 23.4004 11.205 23.3736 11.2951 23.3228L20.8951 17.9228C20.9876 17.8704 21.0645 17.7944 21.118 17.7026C21.1715 17.6108 21.1998 17.5064 21.1998 17.4001V6.60014C21.1998 6.49386 21.1715 6.3895 21.118 6.29768C21.0645 6.20587 20.9876 6.12989 20.8951 6.07749L11.2951 0.677486C11.2071 0.627874 11.1079 0.601272 11.0068 0.600142ZM10.9998 1.8892L19.374 6.60014L10.9998 11.3111L2.62559 6.60014L10.9998 1.8892ZM1.9998 7.62671L10.3998 12.3517V21.7736L1.9998 17.0486V7.62671ZM19.9998 7.62671V17.0486L11.5998 21.7736V12.3517L19.9998 7.62671Z" fill="#BBA590" />';
                            echo '            </svg>';

                            echo '            <p></p>';
                            echo '            <p>'. $apartment['area'] .' м²</p>'; 

                            echo '        </li>';
                            echo '    </ul>';

                            echo '     <ul class="single-apart-list columns-2"> ';
                            echo '         <li> ';
                            echo '             <p>Комнат:</p> ';
                            echo '             <p>'. $apartment['rooms'] .'</p> ';
                            echo '         </li> ';
                            echo '         <li> ';
                            echo '             <p>Площадь:</p> ';
                            echo '             <p>'. $apartment['area'] .' м²</p> ';
                            echo '         </li> ';
                            echo '         <li>';
                            echo '             <p>Подъезд:</p> ';
                            echo '             <p>'. $apartment['entrance'] .' м²</p> ';
                            echo '         </li> ';
                            echo '         <li> ';
                            echo '             <p>Этаж: </p> ';
                            echo '             <p>'. $apartment['floor'] .'</p> ';
                            echo '         </li> ';
                            echo '         <li> ';
                            echo '             <p>Потолки: </p> ';
                            echo '             <p>'. $apartment['ceilings'] .' м</p> ';
                            echo '         </li> ';
                            echo '         <li> ';
                            echo '             <p>Корпус: </p> ';
                            echo '             <p>'. $apartment['corpus'] .'</p> ';
                            echo '         </li> ';
                            echo '         <li> ';
                            echo '             <p>Отделка: </p> ';
                            echo '             <p>'. $apartment['finishing'] .'</p> ';
                            echo '         </li> ';
                            echo '         <li> ';
                            echo '             <p> Цена: </p> ';
                            echo '             <p>'. $apartment['price'] .'</p> ';
                            echo '         </li> ';
                            echo '     </ul> ';


                            echo '     <div class="flex flex-col pb-[30px] gap-[30px] items-center">';
                            echo '         <a href="/?page_id=12&apart_id='. $apartment['post_id'] .'" class="link__watch md:text-[18px] text-[16px] font-medium text-black">';
                            echo '             СМОТРЕТЬ';
                            echo '         </a>';

                            echo '         <div>';
                            echo '             <a href="#popup3" class="popup-link uppercase font-bold text-brown-dark">';
                            echo '                 Рассчитать стоимость';
                            echo '             </a>';
                            echo '         </div>';
                            echo '     </div>';
                            echo ' </div>';
                        }
                    }
                } else {
                    echo '<div>Квартиры еще не добавили в данный дом.</div>';
                }
                ?>
            </div>
        </div>
    </section>

    <section id="ticker" class="after relative">
        <img src="<?php echo get_template_directory_uri(); ?>/src/img/img/pattern_2.webp" class="pattern_2 wow fadeInRight" alt="" data-wow-delay="1s">
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

    <?php @include 'templates/location.php'; ?>

    <?php @include 'templates/contacts.php'; ?>

</main>



<?php get_footer(); ?>