<?php require_once 'header.php'; ?>
    <body>
<div class="preload" id="preload">
    <p>
        <span class="loading-txt">L</span>
        <span class="loading-txt">O</span>
        <span class="loading-txt">A</span>
        <span class="loading-txt">D</span>
        <span class="loading-txt">I</span>
        <span class="loading-txt">N</span>
        <span class="loading-txt">G</span>
    </p>
    <div class="loading-bar"></div>
</div>
<div class="swiper-container swiper-container-h">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide slide-1" data-hash="intro">
            <div class="content">
                <div class="kidney-bg">
                    <img src="img/kidney.svg">
                </div>
                <p class="nav-nbm">01 / <span>06</span></p>
                <h1 class="txt-trn"><span class="underline"><?php echo constant('Slider_1_Title'); ?></span></h1>
                <div class="scrl-dwn">
                    <span></span><span></span><span></span>
                </div>
            </div>
            <div class="video-section">
                <div class="white-overlay"></div>
                <div class="overlay-bg"></div>
                <video autoplay loop id="video-background" class="desktop-video" muted playsinline data-vid="0">
                    <source class="video-one" src="videos/video-1.mp4" type="video/mp4">

                </video>
                <video autoplay loop id="video-background" class="mobile-video" muted playsinline data-vid="0">
                    <source class="video-one " src="videos/mobile/clock.mp4" type="video/mp4">
                </video>
            </div>

        </div>
        <div class="swiper-slide slide-2" data-hash="intro">
            <div class="content">
                <div class="kidney-bg">
                    <img src="img/kidney.svg">
                </div>
                <p class="nav-nbm">02 / <span>06</span></p>
                <h1 class="heading"><?php echo constant('Slider_2_Title'); ?></h1>


                <p class="content-p "><?php echo constant('Slider_2_Description'); ?></p>
                <div class="scrl-dwn">
                    <span></span><span></span><span></span>
                </div>

                <a href="#intro-three" class="btn-def blue-btn bluee-btn"><?php echo constant('Slider_2_Link'); ?></a>
            </div>
            <div class="video-section">
                <div class="white-overlay"></div>
                <div class="overlay-bg"></div>
                <video autoplay loop id="video-background" class="desktop-video" muted playsinline data-vid="0">
                    <source class="video-one" src="videos/video-1.mp4" type="video/mp4">
                </video>
                <video autoplay loop id="video-background" class="mobile-video" muted playsinline data-vid="0">
                    <source class="video-one " src="videos/mobile/clock.mp4" type="video/mp4">
                </video>
            </div>
            <!-- Scroll Down -->
            <div class="scroll-down">
                <span></span>
            </div>
        </div>
        <div class="swiper-slide slide-3" data-hash="intro-three">
            <div class="swiper-container swiper-container-v" data-slide="3">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="content three">
                            <div class="kidney-bg">
                                <img src="img/kidney.svg">
                            </div>
                            <p class="nav-nbm">03 / <span>06</span></p>
                            <!--<h2 class="h-medium">Што всушност прават бубрезите?</h2>-->
                            <p class="content-p"><?php echo constant('Slider_3_Description'); ?></p>
                            <!--<p class="content-p">Дали сте во ризичната популација на бубрежни заболувања?</p>-->
                            <a href="#learn-more"
                               class=" mrg-t btn-def blue-btn bluee-btn"><?php echo constant('Slider_3_Link'); ?></a>
                        </div>
                    </div>
                </div>
                <div class="video-section">
                    <div class="white-overlay"></div>
                    <div class="overlay-bg"></div>
                    <video autoplay loop id="video-background" class="desktop-video" muted playsinline data-vid="2">
                        <source class="video-one" src="videos/kidney-3d.mp4" type="video/mp4">
                    </video>
                    <video autoplay loop id="video-background" class="mobile-video" muted playsinline data-vid="0">
                        <source class="video-one " src="videos/mobile/video4.mp4" type="video/mp4">
                    </video>

                </div>


            </div>
        </div>
        <div class="swiper-slide slide-4" data-hash="learn-more">
            <div class="swiper-container swiper-container-v" data-slide="4">
                <div class="kidney-two">
                    <img src="img/kidney.svg">
                </div>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="content three cont-four">
                            <p class="nav-nbm">04 / <span>06</span></p>
                            <h1 class="heading "><?php echo constant('Slider_4_Title'); ?></h1>
                            <a href="#" class="scroll-down-text-button first-text-button up"
                               style="transform: rotate(180deg);"></a>
                            <div class="big-text-scrollable first-text">
                                <div class="text-scroll first-text-scroll">
                                    <?php echo constant('Slider_4_Description'); ?>
                                </div>
                            </div>
                            <a href="#" class="scroll-down-text-button first-text-button down">

                            </a>
                            <div class="buttons">
                                <a class="btn-def blue-btn next-btn bluee-btn"><?php echo constant('Slider_4_Link'); ?></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="video-section">
                    <div class="white-overlay"></div>
                    <div class="overlay-bg"></div>
                    <video autoplay loop id="video-background" class="desktop-video" muted playsinline data-vid="3">
                        <source class="video-one" src="videos/video-2.mp4" type="video/mp4">
                    </video>
                    <video autoplay loop id="video-background" class="mobile-video" muted playsinline data-vid="0">
                        <source class="video-one " src="videos/mobile/video3.mp4" type="video/mp4">
                    </video>


                </div>
            </div>
        </div>

        <div class="swiper-slide slide-6" data-hash="hemodialysis">
            <div class="swiper-container swiper-container-v" data-slide="5">
                <div class="kidney-two">
                    <img src="img/kidney.svg">
                </div>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="content six">
                            <p class="nav-nbm">05 /<span>06</span></p>
                            <h1><?php echo constant('Slider_5_Title'); ?></h1>
                            <p class="content-p sml"><?php echo constant('Slider_5_Description'); ?>
                            </p>
                            <div class="buttons">
                                <a href="#intro-three"
                                   class="btn-def blue-btn next-btn bluee-btn"><?php echo constant('Slider_5_Link'); ?></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="content four">
                            <p class="nav-nbm">06 / <span>06</span></p>
                            <h6 class="hemo-heading"><?php echo constant('Slider_6_Title'); ?></h6>
                            <div class="buttons">
                                <a class="btn-def blue-btn bluee-btn mrg-top"
                                   onclick="mySwiper.slideTo(6);"><?php echo constant('Slider_6_Link'); ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="video-section">
                <div class="white-overlay"></div>
                <div class="overlay-bg"></div>
                <video autoplay loop id="video-background" class="desktop-video" muted playsinline data-vid="4">
                    <source class="video-one" src="videos/video-6.mp4" type="video/mp4">
                </video>
                <video autoplay loop id="video-background" class="mobile-video" muted playsinline data-vid="0">
                    <source class="video-one " src="videos/mobile/video5.mp4" type="video/mp4">
                </video>
            </div>

        </div>
        <div class="swiper-slide slide-4" data-hash="diseases">
            <div class="swiper-container swiper-container-v" data-slider="6">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="content four">
                            <div class="kidney-bg">
                                <img src="img/kidney.svg">
                            </div>
                            <p class="nav-nbm">06 / <span>06</span></p>
                            <h1 class="heading blue-underline"><span class="underline">Современите медицински</span>
                            </h1>
                            <h1 class="heading">третмани влијаат мошне</h1>
                            <h1 class="heading">позитивно на пациентите</h1>
                            <h1 class="heading">со бубрежни заболувања.</h1>
                            <p class="content-p">Доколку во минатото хроничната бубрежна болест претставувала „смртна
                                казна“, денес современата хемодијализна терапија го спасува човечкиот живот и им
                                овозможува на луѓето да поминат многу среќни моменти и да доживеат длабока старост.
                                Пациентите имаат пристоен и квалитетен начин на живот и ги исполнуваат секојдневните
                                обврски.</p>
                            <p class="content-p">Систина Нефроплус инвестираше во создавање на дијализни центри следејќи
                                ги нај развиените светски примери. Со тоа, позитивно влијаевме врз перцепцијата за
                                хемодијализата во нашата земја и регионот и им овозможивме на своите пациенти
                                достоинствен третман по највисоки стандарди.</p>

                        </div>
                    </div>

                </div>
            </div>
            <div class="video-section">
                <div class="white-overlay"></div>
                <div class="overlay-bg"></div>
                <video autoplay loop id="video-background" class="desktop-video" muted playsinline data-vid="5">
                    <source class="video-one" src="videos/video-4.mp4" type="video/mp4">
                </video>
                <video autoplay loop id="video-background" class="mobile-video" muted playsinline data-vid="0">
                    <source class="video-one " src="videos/mobile/video6.mp4" type="video/mp4">
                </video>
            </div>

        </div>
    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination pag-nav bg_no_click"></div>
</div>
<div class="logo-sis">
    <a href="http://test.digitalpresent.mk/sistina"><img src="img/logo.png" class="logo"></a>
</div>
<div class="right-section">
    <div class="right-section-content">
        <div class="about">
            <div id="three-sixty" class="three-sixty">
                <a href="three-sixty.html" class="three-sixty-icon">Виртуелна прошетка</a>
            </div>
            <button type="text" class="toggle-btn">
                <span>За нас</span>
            </button>
            <span class="close-btn">Затвори</span>
        </div>
        <div class="social">
            <!-- <a href=""><span>Fb</span></a>
               <a href="#"><span>Tw</span></a>-->
            <a href="#"><span>In</span></a>
        </div>
        <video class="about-video" id="video-about" muted playsinline>
            <source class="video-one" src="videos/about.mp4" type="video/mp4">
        </video>
        <div class="about-contenct">
            <div class="about-content-inner">
                <div class="about-text_inner">
                    <h1>Систина</h1>
                    <h1>Нефроплус</h1>
                    <p>
                        Основана во 2014 година, како резултат на потребата за подобрување на условите во центрите за
                        дијализа и дијализниот третман во Р Македонија, Систина Нефроплус обезбедува здравствена грижа
                        за повеќе од 600 пациенти во 10 центри, со повеќе од 80.000 дијализни третмани годишно.
                        <br><br>
                        ПЗУ Систина Нефроплус, најсофистицираниот центар за хемодијализа во земјата и регионот,
                        применува најсовремени стандарди и процедури кои се засновани на препораките на највисоките
                        европски и светски водичи за добра клиничка пракса во хемодијализата. Со помош на својот успешен
                        модел на раководење, посветеност и стручност на специјализираниот тим професионалци, Систина
                        Нефроплус на своите пациенти освен подобрување на здравствената состојба, им овозможува и
                        продолжување и подобрување на квалитетот на животот на секој пациент.
                        Систина Нефроплус центрите за дијализа се опремени со најсофистицирана опрема. Во нив за првпат
                        се воведени врвните најефикасни европски и светски модалитети на хемодијализа High FLUX
                        хемодијализа и On Line-HDF хемодијафилтрација.
                        Компанијата, исто така, инвестира и во последна генерација на најсовремена и најефикасна
                        технологија за хемодијализа, апарати CORDIAX 5008 S на производителот Фрезениус Медикал Кеaр, 80
                        столови и 79 кревети исклучиво за намена – Хемодијализа, како и обнова и набавка на нови системи
                        за обработка на водата (реверзни осмози). Хемодијалнизните третмани се изведуваат исклучиво со
                        ултра чиста вода.
                        Преку своите дијализни центри, ПЗУ Систина Нефроплус е присутна во 10 градови, и тоа во Тетово,
                        Гостивар, Дебар, Струга, Битола, Прилеп, Кавадарци и Велес, а за првпат во нашата држава
                        инвестираше во отворање на уште два нови центри, во Кичево и во Охрид.
                        Центрите на Систина Нефроплус нудат „холидеј-хемодијализа“, додека за првпат во Р Македонија, во
                        дијализниот центар Систина Нефроплус - Охрид се изведуваат и долги ноќни хемодијализни третмани.
                        <br><br>
                        Квалитет индикатори и контрола на квалитет
                        <br><br>
                        Дијализниот третман кој се нуди во Систина Нефроплус не претставува само опслужување и
                        подобрување на здравствената состојба туку и продолжување на животот на пациентот воедно и
                        подобрување на квалитетот на животот на секој пациент.
                        Како новина која за првпат се воведува во Р Македонија од областа на хемодијализа Систина
                        Нефроплус за осигурените лица со хронична бубрежна инсуфиенција, воспостави политика на квалитет
                        со цел подобрување и унапредување на квалитетот на услугите со создавање подобри услови за
                        вршење дијализа.
                        Контролата на адекватноста и успешноста на хемодијализниот третман се извршува преку квалитет
                        индикатори согласно европските протоколи за добра медицинска грижа за хемодијализа, EBPG
                        (European Best Practice Guidelines). За таа цел компанијата изготви повеќе од 300 процедури,
                        протоколи и упатства за стандардизација на процесите за правилно водење како на дијализен
                        третман така и воопшто на дијализните центри.
                    </p>
                </div>
                <?php
                $img_p = "img/slajder/";
                $img = glob($img_p . "*.jpg");

                ?>
                <div class="about__slider">
                    <?php foreach ($img as $i) { ?>
                        <div class="about-image">
                            <img src="<?php echo $i; ?>">
                        </div>
                    <?php } ?>
                </div>
            </div>
            <!--<div class="images-right image-1">
               <img src="img/about-2.jpg">
               </div>


               <div class="images-right image-2">

               <img src="img/about-1.jpg">
               </div>

               <div class="images-right image-4">
               <img src="img/about-3.jpg">
               </div>

               <div class="images-right image-5">
               <img src="img/ohrid-3.jpg">
               </div>

               <div class="images-right image-6">
               <img src="img/ohrid-1.jpg">
               </div>-->
        </div>


    </div>
</div>
<?php require_once 'footer.php'; ?>