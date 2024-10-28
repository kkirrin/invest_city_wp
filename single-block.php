<?php
/*
    Template Name: карточка блока
    */
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
                <div>
                    <input type="checkbox" />
                    <label for="checkbox-1">Свободна</label>
                </div>
                <div>
                    <input type="checkbox" />
                    <label for="checkbox-2">Забронирована</label>
                </div>
                <div>
                    <input type="checkbox" />
                    <label for="checkbox-3">Продана</label>
                </div>
                <div>
                    <input type="checkbox" />
                    <label for="checkbox-4">Акция</label>
                </div>
                <div>
                    <input type="checkbox" />
                    <label for="checkbox-5">Квартира + машина</label>
                </div>
            </nav>
        </div>
    </section>

    <section id="">
        <div class="container">

            <div class="grid md:grid-cols-3 grid-cols-1 gap-[20px]">                
                <?php

                    foreach ($all_child_cat_of_current as $child_cat) {
                        $child_cat_name = $child_cat->name;
                        
                        echo '<div class="flex flex-col gap-[20px]">';
                        echo '   <div class="p-[10px] text-center bg-[#BBA590] text-white uppercase font-medium">';
                        echo '    <span>';
                        echo        $child_cat_name;
                        echo '    </span>';
                        echo '   </div>';
                        
                        
                        echo '   <div class="bg-white p-[40px]">';
                        echo '      <div class="flex flex-col">';
                        
                        
                        
                        $args = array(
                            'post_type' => 'apartments',
                            'order' => 'DESC',
                            'limit' => -1, 
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'category',
                                    'field' => 'term_id',
                                    'terms' => array($child_cat->term_id)
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
                                    'post_title' => get_the_title(),
                                    'post_link' => get_the_permalink(),
                                    'area' => get_field('area'),
                                    'price' => get_field('price'),
                                    'status' => get_field('status'),
                                    'name_of_the_apart' => get_field('name_of_apartment'),
                                    'number' => get_field('number'),
                                    'date' => get_field('date'),
                                    'area' => get_field('area'),
                                    'floor' => get_field('number_of_floor'),
                                    'rooms' => get_field('number_of_rooms'),
                                    'entrance' => get_field('number_of_entrance'),
                                    'ceilings' => get_field('ceilings'),
                                    'price' => get_field('price')
                                );

                            }

                            foreach ($apartments_by_floor as $floor => $apartments_on_floor) {
                                echo '         <div class="flex gap-[10px] text-black pb-[8px]">';
                                echo '<div class="flex flex-row gap-[10px]">';
                                echo '  <div>';
                                echo '    <div class="flex gap-[4px] font-Bahnschrift">';
                                echo '      <span class="font-medium ">';
                                echo          $floor;
                                echo '      </span>';
                                echo '      <span class="font-normal">';
                                echo '          этаж';
                                echo '      </span>';
                                echo '    </div>';
                                echo '  </div>';
                                
                                foreach($apartments_on_floor as $apartment) {
                                   
                                    switch ($apartment['status']):
                                        case 'Свободна':
                                            echo '  <button style="background-color: green;" class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">'; 
                                            echo '      <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">'; 
                                            echo '          <span class="items-center justify-center pointer-events-none flex h-full w-full">'; 
                                            echo '              <span class="text-xs font-medium">'. $rooms.'</span>'; 
                                            echo '          </span>'; 
                                            echo '      </div>'; 
                                            echo '  </button>'; 
                                                break;

                                        case 'Забронирована':
                                            echo '  <button style="background-color: yellow;" class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">'; 
                                            echo '      <div class="bg-red flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">'; 
                                            echo '          <span class="items-center justify-center pointer-events-none flex h-full w-full">'; 
                                            echo '              <span class="text-xs font-medium">'. $rooms .'</span>'; 
                                            echo '          </span>'; 
                                            echo '      </div>'; 
                                            echo '  </button>'; 

                                            break;

                                        case 'Продана':
                                            echo '  <button style="background-color: red;" class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">'; 
                                            echo '      <div class="bg-red flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">'; 
                                            echo '          <span class="items-center justify-center pointer-events-none flex h-full w-full">'; 
                                            echo '              <span class="text-xs font-medium">'. $rooms .'</span>'; 
                                            echo '          </span>'; 
                                            echo '      </div>'; 
                                            echo '  </button>'; 
                                            break;

                                        case 'Акция':
                                            echo '  <button style="background-color: blue;" class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">'; 
                                            echo '      <div class="bg-red flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">'; 
                                            echo '          <span class="items-center justify-center pointer-events-none flex h-full w-full">'; 
                                            echo '              <span class="text-xs font-medium">'. $rooms .'</span>'; 
                                            echo '          </span>'; 
                                            echo '      </div>'; 
                                            echo '  </button>'; 
                                            break;

                                        case 'Квартира + машина': 
                                            echo '  <button style="background-color: orange;" class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">'; 
                                            echo '      <div class="bg-red flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">'; 
                                            echo '          <span class="items-center justify-center pointer-events-none flex h-full w-full">'; 
                                            echo '              <span class="text-xs font-medium">'. $rooms .'</span>'; 
                                            echo '          </span>'; 
                                            echo '      </div>'; 
                                            echo '  </button>'; 
                                                break;
                                                                        
                                    endswitch;
                                }
                                                      echo '     </div>';
                                                      echo ' </div>';
                                
                            }

                            wp_reset_postdata(); 
                        echo '      </div>';
                        echo '          </div>';
                        } 


                        

                        // Далее идет flex flex-col


                        // Закрылся flex flex-col


                        // Закрылся bg-white

                        echo '   </div>';
                        echo '</div>';
                        
                    }

                    ?>

<!-- 
                <div class="flex flex-col gap-[20px]">
                    <div class="p-[10px] text-center bg-[#BBA590] text-white uppercase font-medium">
                        2 Подъезд
                    </div>

                    <div class="bg-white p-[40px]">
                        <div class="flex flex-col">

                            <div class="flex gap-[10px] text-whites pb-[8px]">
                                <div class="flex flex-row gap-[10px]">
                                    <div>
                                        <div class="flex gap-[4px] font-Bahnschrift">
                                            <span class="font-medium ">
                                                20
                                            </span>
                                            <span class="font-normal">
                                                этаж
                                            </span>
                                        </div>
                                    </div>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                </div>
                            </div>
                            <div class="flex gap-[10px] text-whites pb-[8px]">
                                <div class="flex flex-row gap-[10px]">
                                    <div>
                                        <div class="flex gap-[4px] font-Bahnschrift">
                                            <span class="font-medium ">
                                                19
                                            </span>
                                            <span class="font-normal">
                                                этаж
                                            </span>
                                        </div>
                                    </div>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                </div>
                            </div>
                            <div class="flex gap-[10px] text-whites pb-[8px]">
                                <div class="flex flex-row gap-[10px]">
                                    <div>
                                        <div class="flex gap-[4px] font-Bahnschrift">
                                            <span class="font-medium ">
                                                18
                                            </span>
                                            <span class="font-normal">
                                                этаж
                                            </span>
                                        </div>
                                    </div>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                </div>
                            </div>

                            <div class="flex gap-[10px] text-whites pb-[8px]">
                                <div class="flex flex-row gap-[10px]">
                                    <div>
                                        <div class="flex gap-[4px] font-Bahnschrift">
                                            <span class="font-medium ">
                                                17
                                            </span>
                                            <span class="font-normal">
                                                этаж
                                            </span>
                                        </div>
                                    </div>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                </div>
                            </div>

                            <div class="flex gap-[10px] text-whites pb-[8px]">
                                <div class="flex flex-row gap-[10px]">
                                    <div>
                                        <div class="flex gap-[4px] font-Bahnschrift">
                                            <span class="font-medium ">
                                                16
                                            </span>
                                            <span class="font-normal">
                                                этаж
                                            </span>
                                        </div>
                                    </div>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                </div>
                            </div>

                            <div class="flex gap-[10px] text-whites pb-[8px]">
                                <div class="flex flex-row gap-[10px]">
                                    <div>
                                        <div class="flex gap-[4px] font-Bahnschrift">
                                            <span class="font-medium ">
                                                15
                                            </span>
                                            <span class="font-normal">
                                                этаж
                                            </span>
                                        </div>
                                    </div>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                </div>
                            </div>

                            <div class="flex gap-[10px] text-whites pb-[8px]">
                                <div class="flex flex-row gap-[10px]">
                                    <div>
                                        <div class="flex gap-[4px] font-Bahnschrift">
                                            <span class="font-medium ">
                                                14
                                            </span>
                                            <span class="font-normal">
                                                этаж
                                            </span>
                                        </div>
                                    </div>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                </div>
                            </div>

                            <div class="flex gap-[10px] text-whites pb-[8px]">
                                <div class="flex flex-row gap-[10px]">
                                    <div>
                                        <div class="flex gap-[4px] font-Bahnschrift">
                                            <span class="font-medium ">
                                                13
                                            </span>
                                            <span class="font-normal">
                                                этаж
                                            </span>
                                        </div>
                                    </div>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                </div>
                            </div>

                            <div class="flex gap-[10px] text-whites pb-[8px]">
                                <div class="flex flex-row gap-[10px]">
                                    <div>
                                        <div class="flex gap-[4px] font-Bahnschrift">
                                            <span class="font-medium ">
                                                12
                                            </span>
                                            <span class="font-normal">
                                                этаж
                                            </span>
                                        </div>
                                    </div>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                </div>
                            </div>

                            <div class="flex gap-[10px] text-whites pb-[8px]">
                                <div class="flex flex-row gap-[10px]">
                                    <div>
                                        <div class="flex gap-[4px] font-Bahnschrift">
                                            <span class="font-medium ">
                                                11
                                            </span>
                                            <span class="font-normal">
                                                этаж
                                            </span>
                                        </div>
                                    </div>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                </div>
                            </div>

                            <div class="flex gap-[10px] text-whites pb-[8px]">
                                <div class="flex flex-row gap-[10px]">
                                    <div>
                                        <div class="flex gap-[4px] font-Bahnschrift">
                                            <span class="font-medium ">
                                                10
                                            </span>
                                            <span class="font-normal">
                                                этаж
                                            </span>
                                        </div>
                                    </div>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                </div>
                            </div>

                            <div class="flex gap-[10px] text-whites pb-[8px]">
                                <div class="flex flex-row gap-[10px]">
                                    <div>
                                        <div class="flex gap-[4px] font-Bahnschrift">
                                            <span class="font-medium ">
                                                9
                                            </span>
                                            <span class="font-normal">
                                                этаж
                                            </span>
                                        </div>
                                    </div>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                </div>
                            </div>

                            <div class="flex gap-[10px] text-whites pb-[8px]">
                                <div class="flex flex-row gap-[10px]">
                                    <div>
                                        <div class="flex gap-[4px] font-Bahnschrift">
                                            <span class="font-medium ">
                                                8
                                            </span>
                                            <span class="font-normal">
                                                этаж
                                            </span>
                                        </div>
                                    </div>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                </div>
                            </div>

                            <div class="flex gap-[10px] text-whites pb-[8px]">
                                <div class="flex flex-row gap-[10px]">
                                    <div>
                                        <div class="flex gap-[4px] font-Bahnschrift">
                                            <span class="font-medium ">
                                                7
                                            </span>
                                            <span class="font-normal">
                                                этаж
                                            </span>
                                        </div>
                                    </div>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                </div>
                            </div>

                            <div class="flex gap-[10px] text-whites pb-[8px]">
                                <div class="flex flex-row gap-[10px]">
                                    <div>
                                        <div class="flex gap-[4px] font-Bahnschrift">
                                            <span class="font-medium ">
                                                6
                                            </span>
                                            <span class="font-normal">
                                                этаж
                                            </span>
                                        </div>
                                    </div>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                </div>
                            </div>

                            <div class="flex gap-[10px] text-whites pb-[8px]">
                                <div class="flex flex-row gap-[10px]">
                                    <div>
                                        <div class="flex gap-[4px] font-Bahnschrift">
                                            <span class="font-medium ">
                                                5
                                            </span>
                                            <span class="font-normal">
                                                этаж
                                            </span>
                                        </div>
                                    </div>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                    <button class="w-5 h-5 relative rounded leading-none overflow-hidden room text-white">
                                        <div class="bg-[#86BD8E] flex cursor-pointer room__bg py-[3px] px-1 w-full h-full ds:hover:bg-blue ds:hover:text-white transition duration-300 group">
                                            <span class="items-center justify-center pointer-events-none flex h-full w-full">
                                                <span class="text-xs font-medium">1</span>
                                            </span>
                                        </div>
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div> -->

                <div class="flex flex-col bg-white p-[30px]">
                    <div class="flex justify-between items-center">
                        <div>
                            <h3 class="">2-х комнатная квартира</h3>
                        </div>

                        <div>
                            № 13
                        </div>
                    </div>

                    <ul class="single-apart-list columns-2 pt-[20px]">
                        <li>

                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3 9V20C3 20.2652 3.10536 20.5196 3.29289 20.7071C3.48043 20.8946 3.73478 21 4 21H20C20.2652 21 20.5196 20.8946 20.7071 20.7071C20.8946 20.5196 21 20.2652 21 20V9M3 9H21M3 9V5C3 4.73478 3.10536 4.48043 3.29289 4.29289C3.48043 4.10536 3.73478 4 4 4H20C20.2652 4 20.5196 4.10536 20.7071 4.29289C20.8946 4.48043 21 4.73478 21 5V9" stroke="#BBA590" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M16 3V6M8 3V6" stroke="#BBA590" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <p></p>
                            <p>1кв. 2026 г</p>
                        </li>
                        <li>
                            <svg width="22" height="24" viewBox="0 0 22 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.0068 0.600142C10.901 0.598851 10.7967 0.625532 10.7045 0.677486L1.10449 6.07749C1.01203 6.12989 0.935115 6.20587 0.88159 6.29768C0.828065 6.3895 0.799844 6.49386 0.799805 6.60014V17.4001C0.799844 17.5064 0.828065 17.6108 0.88159 17.7026C0.935115 17.7944 1.01203 17.8704 1.10449 17.9228L10.7045 23.3228C10.7946 23.3736 10.8963 23.4004 10.9998 23.4004C11.1033 23.4004 11.205 23.3736 11.2951 23.3228L20.8951 17.9228C20.9876 17.8704 21.0645 17.7944 21.118 17.7026C21.1715 17.6108 21.1998 17.5064 21.1998 17.4001V6.60014C21.1998 6.49386 21.1715 6.3895 21.118 6.29768C21.0645 6.20587 20.9876 6.12989 20.8951 6.07749L11.2951 0.677486C11.2071 0.627874 11.1079 0.601272 11.0068 0.600142ZM10.9998 1.8892L19.374 6.60014L10.9998 11.3111L2.62559 6.60014L10.9998 1.8892ZM1.9998 7.62671L10.3998 12.3517V21.7736L1.9998 17.0486V7.62671ZM19.9998 7.62671V17.0486L11.5998 21.7736V12.3517L19.9998 7.62671Z" fill="#BBA590" />
                            </svg>

                            <p></p>
                            <p>66.8 м²</p>

                        </li>
                    </ul>

                    <ul class="single-apart-list columns-2">
                        <li>
                            <p>Комнат:</p>
                            <p>2</p>
                        </li>
                        <li>
                            <p>Площадь:</p>
                            <p>66.8 м²</p>
                        </li>
                        <li>
                            <p>Этаж: </p>
                            <p>4</p>
                        </li>
                        <li>
                            <p>Потолки: </p>
                            <p>3 м</p>
                        </li>
                        <li>
                            <p>Корпус: </p>
                            <p>1</p>
                        </li>
                        <li>
                            <p>Отделка: </p>
                            <p>без отделки</p>
                        </li>
                        <li>
                            <p> Цена: </p>
                            <p>по запросу</p>
                        </li>
                    </ul>


                    <div class="flex justify-between items-center pb-[30px]">
                        <p class="md:text-[18px] text-[16px] font-medium text-black">
                            Доступна в ипотеку
                        </p>

                        <div>
                            <a href="#popup3" class="popup-link uppercase underline font-bold text-brown-dark">
                                Рассчитать стоимость
                            </a>
                        </div>
                    </div>
                </div> 
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
            </div>
        </div>

        <div class="container" style="height: 1px;"></div>
    </section>

    <section id="location" class="relative">
        <div class="container overflow-hidden">
            <h2 class="md:text-[60px] sm:text-[40px] text-[31px] uppercase md:pt-[60px] md:pb-[60px] sm:pt-[30px] sm:pb-[30px] pt-[30px] pb-[30px] relative z-[2]"><span class="text-white">Расположение</span><span class="text-brown-custom"> и инфраструктура</span></h2>

            <div class="relative">
                <iframe class="z-[2] relative" src="https://yandex.ru/map-widget/v1/?ll=131.943102%2C43.813264&mode=search&ol=geo&ouri=ymapsbm1%3A%2F%2Fgeo%3Fdata%3DCgo0NjAzNzQyNTAzEmPQoNC-0YHRgdC40Y8sINCf0YDQuNC80L7RgNGB0LrQuNC5INC60YDQsNC5LCDQo9GB0YHRg9GA0LjQudGB0LosINCh0L7QstC10YLRgdC60LDRjyDRg9C70LjRhtCwLCAxNDkiCg1v8QNDFchAL0I%2C&z=17" width="100%" height="630"></iframe>
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