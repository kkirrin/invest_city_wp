<?php
/*
    Template Name: карточка квартиры
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
                        <a href="/?page_id=10&block=05">
                            <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="30" cy="30" r="29" transform="matrix(-1 0 0 1 60 0)" stroke="#94765B" stroke-width="2" />
                                <path d="M39 31H40V29H39V31ZM20.2929 29.2929C19.9024 29.6834 19.9024 30.3166 20.2929 30.7071L26.6569 37.0711C27.0474 37.4616 27.6805 37.4616 28.0711 37.0711C28.4616 36.6805 28.4616 36.0474 28.0711 35.6569L22.4142 30L28.0711 24.3431C28.4616 23.9526 28.4616 23.3195 28.0711 22.9289C27.6805 22.5384 27.0474 22.5384 26.6569 22.9289L20.2929 29.2929ZM39 29L21 29V31L39 31V29Z" fill="#94765B" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <button data-target-id="0" class="tab_btn active">Планировка</button>
                    </li>
                    <li>
                        <button data-target-id="1" class="tab_btn">План этажа</button>
                    </li>
                </ul>
            </nav>

        </div>
    </section>

    <section>
        <div class="container">
            
            <?php
                        $apart_id = $_GET['apart_id'];
                        $args = array(
                            'post_type' => 'apartments',
                            'post_id'   => $apart_id
                        );

                        $apartment = new WP_Query($args);

                        if ($apartment->have_posts()) { 
                            while ($apartment->have_posts()) { 
                                $apartment->the_post();
                                
                                $apart_data = array(
                                    'post_id'           =>  get_the_ID(),
                                    'post_title'        =>  get_the_title(),
                                    'post_link'         =>  get_the_permalink(),
                                    'area'              =>  get_field('area'),
                                    'price'             =>  get_field('price'),
                                    'status'            =>  get_field('status'),
                                    'name' =>  get_field('name_of_apartment'),
                                    'number'            =>  get_field('number'),
                                    'date'              =>  get_field('date'),
                                    'floor'             =>  get_field('number_of_floor'),
                                    'rooms'             =>  get_field('number_of_room'),
                                    'entrance'          =>  get_field('number_of_entrance'),
                                    'ceilings'          =>  get_field('ceilings'),
                                    'photo'             =>  get_field('photo'),
                                    'finishing'         =>  get_field('finishing'),
                                    'corpus'            =>  get_field('corpus') 
                                );
                                
                            }
                            
                            
                            if($apart_data['photo'] == '' || $apart_data['photo'] == false || $apart_data['photo'] == NULL) {
                                $apart_data['photo'] = 'https://cz-invest-city.ru/wp-content/themes/invest_city/src/img/img/map__type.webp';
                            }
                            
                        }
                    
                        
                        
                    echo '<div id="content-0" class="tab-content active" data-id="0">';
                    echo '  <div class="flex md:flex-row flex-col justify-between items-start gap-[40px]">';

                
                    echo '      <div class="md:w-[50%] w-full p-[30px] bg-white">';    
                    echo '         <img src="'. $apart_data['photo'] .'" alt="">'; 
                    echo '      </div>';   

                    echo '      <div class="flex flex-col md:w-1/2 w-full">'; 
                    
                    echo '         <div class="flex justify-between items-center">'; 
                    echo '             <div>'; 
                    echo '                 <h3 class="single-apart-title">'. $apart_data['name'] .'квартира</h3>'; 
                    echo '             </div>'; 
                    
                    echo '              <div>'; 
                    echo '                  № '. $apart_data['name'] .''; 
                    echo '              </div>'; 
                    echo '          </div>'; 
                    
                    
                    echo '          <div class="flex justify-between items-center pt-[10px] pb-[30px]">'; 
                    echo '              <p class="md:text-[18px] text-[14px] font-medium text-black access_to_ipoteka">'; 
                    echo '                  Доступна в ипотеку'; 
                    echo '              </p>'; 

                    echo '              <div>'; 
                    echo '                  <a href="#popup3" class="popup-link md:text-[18px] text-[14px] uppercase underline font-bold text-brown-dark">'; 
                    echo '                      Рассчитать стоимость'; 
                    echo '                  </a>'; 
                    echo '              </div>'; 
                    
                    echo '          </div>'; 
                    echo '          <ul class="single-apart-list columns-2 pt-[20px]">'; 
                    echo '              <li>'; 
                    
                    echo '                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">'; 
                    echo '                      <path d="M3 9V20C3 20.2652 3.10536 20.5196 3.29289 20.7071C3.48043 20.8946 3.73478 21 4 21H20C20.2652 21 20.5196 20.8946 20.7071 20.7071C20.8946 20.5196 21 20.2652 21 20V9M3 9H21M3 9V5C3 4.73478 3.10536 4.48043 3.29289 4.29289C3.48043 4.10536 3.73478 4 4 4H20C20.2652 4 20.5196 4.10536 20.7071 4.29289C20.8946 4.48043 21 4.73478 21 5V9" stroke="#BBA590" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />';
                    echo '                      <path d="M16 3V6M8 3V6" stroke="#BBA590" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />'; 
                    echo '                  </svg>'; 
                    echo '                  <p></p>'; 
                    echo '                  <p>'. $apart_data['date'] .'</p>'; 
                    echo '              </li>'; 
                    echo '              <li>'; 
                    echo '                  <svg width="22" height="24" viewBox="0 0 22 24" fill="none" xmlns="http://www.w3.org/2000/svg">';
                    echo '                      <path d="M11.0068 0.600142C10.901 0.598851 10.7967 0.625532 10.7045 0.677486L1.10449 6.07749C1.01203 6.12989 0.935115 6.20587 0.88159 6.29768C0.828065 6.3895 0.799844 6.49386 0.799805 6.60014V17.4001C0.799844 17.5064 0.828065 17.6108 0.88159 17.7026C0.935115 17.7944 1.01203 17.8704 1.10449 17.9228L10.7045 23.3228C10.7946 23.3736 10.8963 23.4004 10.9998 23.4004C11.1033 23.4004 11.205 23.3736 11.2951 23.3228L20.8951 17.9228C20.9876 17.8704 21.0645 17.7944 21.118 17.7026C21.1715 17.6108 21.1998 17.5064 21.1998 17.4001V6.60014C21.1998 6.49386 21.1715 6.3895 21.118 6.29768C21.0645 6.20587 20.9876 6.12989 20.8951 6.07749L11.2951 0.677486C11.2071 0.627874 11.1079 0.601272 11.0068 0.600142ZM10.9998 1.8892L19.374 6.60014L10.9998 11.3111L2.62559 6.60014L10.9998 1.8892ZM1.9998 7.62671L10.3998 12.3517V21.7736L1.9998 17.0486V7.62671ZM19.9998 7.62671V17.0486L11.5998 21.7736V12.3517L19.9998 7.62671Z" fill="#BBA590" />';
                    echo '                  </svg>';
                    
                    echo '                  <p></p>'; 
                    echo '                  <p>'. $apart_data['area'] .' м²</p>'; 
                    
                    echo '              </li>'; 
                    echo '          </ul>'; 
                    
                    echo '          <ul class="single-apart-list columns-2"> ';
                    echo '              <li> ';
                    echo '                  <p>Комнат:</p> ';
                    echo '             <p>'. $apart_data['rooms'] .'</p> ';
                    echo '              </li> ';
                    echo '              <li> ';
                    echo '                  <p>Подъезд:</p> ';
                    echo '                  <p>'. $apart_data['entrance'] .'</p> ';
                    echo '              </li> ';
                    echo '              <li> ';
                    echo '                  <p>Площадь:</p> ';
                    echo '                  <p>'. $apart_data['area'] .' м²</p> ';
                    echo '              </li> ';
                    
                    echo '              <li> ';
                    echo '                  <p>Этаж: </p> ';
                    echo '                  <p>'. $apart_data['floor'] .'</p> ';
                    echo '              </li> ';
                    echo '              <li> ';
                    echo '                  <p>Потолки: </p> ';
                    echo '                  <p>'. $apart_data['ceilings'] .' м</p> ';
                    echo '              </li> ';
                    echo '              <li> ';
                    echo '                  <p>Корпус: </p> ';
                    echo '                  <p>'. $apart_data['corpus'] .'</p> ';
                    echo '              </li> ';
                    echo '              <li> ';
                    echo '                  <p>Отделка: </p> ';
                    echo '                  <p>'. $apart_data['finishing'] .'</p> ';
                    echo '              </li> ';
                    echo '              <li> ';
                    echo '                  <p> Цена: </p> ';
                    echo '                  <p>'. $apart_data['price'] .'</p> ';
                    echo '              </li> ';
                    echo '          </ul> ';
                    
                    echo '          <div class="number__agent"> ';
                    echo '              <input type="number" placeholder="Укажите номер агента" /> ';
                    echo '          </div> ';

                    echo '          <div class="grid grid-cols-2 gap-[20px]"> ';
                    echo '              <a href="#popup2" class="button_main button_main--bron popup-link">Забронировать</a> ';
                    echo '              <button class="button_main button_main--pdf"> ';
                    echo '                  <svg width="27" height="26" viewBox="0 0 27 26" fill="none" xmlns="http://www.w3.org/2000/svg"> ';
                    echo '                      <g clip-path="url(#clip0_80_15302)"> ';
                    echo '                          <path d="M23.7578 7.36328H3.24219C1.98215 7.36328 0.957031 8.3884 0.957031 9.64844V18.7891C0.957031 20.0491 1.98215 21.0742 3.24219 21.0742H23.7578C25.0178 21.0742 26.043 20.0491 26.043 18.7891V9.64844C26.043 8.3884 25.0178 7.36328 23.7578 7.36328ZM6.98685 15.4039C6.7921 15.4039 6.45938 15.4053 6.14794 15.4068V17.1637C6.14794 17.5844 5.80689 17.9254 5.38622 17.9254C4.96555 17.9254 4.6245 17.5844 4.6245 17.1637L4.61328 11.3774C4.61295 11.2772 4.63241 11.1779 4.67055 11.0852C4.70868 10.9925 4.76474 10.9082 4.83551 10.8372C4.90627 10.7662 4.99035 10.7099 5.08293 10.6715C5.17551 10.6331 5.27476 10.6133 5.375 10.6133H6.98685C8.32524 10.6133 9.41414 11.6878 9.41414 13.0086C9.41414 14.3294 8.32524 15.4039 6.98685 15.4039ZM13.5258 17.7418C13.0722 17.7497 11.9374 17.754 11.8893 17.7542H11.8864C11.6848 17.7542 11.4915 17.6744 11.3487 17.5321C11.2059 17.3898 11.1253 17.1968 11.1247 16.9952L11.1133 11.3765C11.1131 11.2763 11.1327 11.1771 11.1709 11.0845C11.2091 10.9919 11.2651 10.9078 11.3359 10.8369C11.4066 10.766 11.4907 10.7098 11.5832 10.6714C11.6757 10.633 11.7748 10.6133 11.875 10.6133H13.466C15.2785 10.6133 16.4962 12.0482 16.4962 14.1838C16.4962 16.2153 15.247 17.7117 13.5258 17.7418ZM21.3315 13.3732C21.7522 13.3732 22.0932 13.7143 22.0932 14.135C22.0932 14.5556 21.7522 14.8967 21.3315 14.8967H19.9492V17.0625C19.9492 17.4832 19.6082 17.8242 19.1875 17.8242C18.7668 17.8242 18.4258 17.4832 18.4258 17.0625V11.3162C18.4258 10.8955 18.7668 10.5545 19.1875 10.5545H21.5165C21.9372 10.5545 22.2782 10.8955 22.2782 11.3162C22.2782 11.7369 21.9372 12.0779 21.5165 12.0779H19.9492V13.3732H21.3315Z" fill="#94765B" /> ';
                    echo '                          <path d="M13.466 12.1367H12.6381C12.6393 12.8243 12.6434 15.5652 12.6456 16.2268C12.9625 16.2248 13.302 16.222 13.4992 16.2185C14.5171 16.2007 14.9728 15.1837 14.9728 14.1838C14.9728 13.7035 14.8641 12.1367 13.466 12.1367ZM6.98685 12.1367H6.139C6.13992 12.4757 6.14078 12.8363 6.14078 13.0086C6.14078 13.2099 6.1422 13.5592 6.14383 13.8834C6.45644 13.8819 6.79037 13.8804 6.9869 13.8804C7.47684 13.8804 7.89075 13.4812 7.89075 13.0086C7.89075 12.536 7.47678 12.1367 6.98685 12.1367ZM22.9684 5.83984C22.79 5.35066 22.513 4.90334 22.1545 4.52563L18.9906 1.18823C18.2747 0.433113 17.2673 0 16.2267 0H6.08594C4.8259 0 3.80078 1.02512 3.80078 2.28516V5.83984H22.9684ZM3.80078 22.5977V23.7148C3.80078 24.9749 4.8259 26 6.08594 26H20.9141C22.1741 26 23.1992 24.9749 23.1992 23.7148V22.5977H3.80078Z" fill="#94765B" /> ';
                    echo '                      </g> ';
                    echo '                      <defs> ';
                    echo '                          <clipPath id="clip0_80_15302"> ';
                    echo '                              <rect width="26" height="26" fill="white" transform="translate(0.5)" /> ';
                    echo '                          </clipPath> ';
                    echo '                      </defs> ';
                    echo '                  </svg> ';
                    echo '                  <a href=""> Скачать </a> ';
                    echo '              </button> ';
                    echo '          </div> ';
                    echo '      </div> ';
                    echo '  </div> ';
                    
                    echo '</div>';
                    
                    echo '<div id="content-1" class="tab-content" data-id="1" > ';
                    echo '  <div class="flex md:flex-row flex-col justify-between items-start gap-[40px]"> ';
                    echo '  </div> ';
                    echo '</div> ';
                ?>
            </div>
    </section>

    <section id="ticker" class="after relative">
        <img src="<?php echo get_template_directory_uri(); ?>src/img/img/pattern_2.webp" class="pattern_2 wow fadeInRight" alt="" data-wow-delay="1s">
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