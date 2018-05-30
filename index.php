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
                    <img src="img/kidney.svg" alt="image">
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
                                <img src="img/kidney.svg" alt="image">
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
                    <img src="img/kidney.svg" alt="image">
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
                    <img src="img/kidney.svg" alt="image">
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
                            <h1 class="heading blue-underline"><span
                                        class="underline"><?php echo constant('Slider_6_Title'); ?></span>
                            </h1>
                            <?php echo constant('Slider_6_Description'); ?>

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
        <div class="kocki">
            <ul>
                <form action="" method="post" class="hide-large">
                    <input type="hidden" value="mk" name="lang"/><input type="image" src="img/mkflag.png"
                                                                        alt="English"/>
                </form>

                <form action="" method="post" class="hide-large">
                    <input type="hidden" value="en" name="lang"/><input type="image" src="img/enflag.png"
                                                                        alt="Македонски"/>
                </form>
            </ul>
        </div>
        <video class="about-video" id="video-about" muted playsinline>
            <source class="video-one" src="videos/about.mp4" type="video/mp4">
        </video>
        <div class="about-contenct">
            <div class="about-content-inner">
                <div class="about-text_inner">
                    <?php echo constant('ABOUTUS'); ?>
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

        </div>


    </div>
</div>
<?php require_once 'footer.php'; ?>