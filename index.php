<?php require_once 'header.php';?>
<body>
   <div id="loading-mask">
      <div class="loading-icon"></div>
   </div>
   </div>
   <div class="swiper-container swiper-container-h">
      <a href="http://sistinanefroplus.mk/" class="text-center"><img src="img/logo.png" class="logo-header small-logo" alt="image"></a>
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
         <!-- Slides -->
         <div class="swiper-slide slide-1" data-hash="intro">
            <div class="content">
               <div class="kidney-bg">
                  <img src="img/kidney.svg" alt="image">
               </div>
               <p class="nav-nbm">01 / <span>06</span></p>
               <h1 class="txt-trn"><span class="underline"><?php echo constant('Slider_1_Title');?></span></h1>
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
         <div class="swiper-slide slide-2" data-hash="intro-two">
            <div class="content">
               <div class="kidney-bg">
                  <img src="img/kidney.svg" alt="image">
               </div>
               <p class="nav-nbm">02 / <span>06</span></p>
               <h1 class="heading"><?php echo constant('Slider_2_Title');?></h1>
               <p class="content-p "><?php echo constant('Slider_2_Description');?></p>
               <div class="scrl-dwn">
                  <span></span><span></span><span></span>
               </div>
               <div><a href="/#intro-three" class="btn-def blue-btn bluee-btn"><?php echo constant('Slider_2_Link1');?></a></div>
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
                        <p class="content-p"><?php echo constant('Slider_3_Description');?></p>
                        <!--<p class="content-p">Дали сте во ризичната популација на бубрежни заболувања?</p>-->
                        <a href="/#learn-more"
                           class=" mrg-t btn-def blue-btn bluee-btn"><?php echo constant('Slider_3_Link');?></a>
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
                        <h1 class="heading "><?php echo constant('Slider_4_Title');?></h1>
                        <a href="#" class="scroll-down-text-button first-text-button up"
                           style="transform: rotate(180deg);"></a>
                        <div class="big-text-scrollable first-text">
                           <div class="text-scroll first-text-scroll">
                              <?php echo constant('Slider_4_Description');?>
                           </div>
                        </div>
                        <a href="#" class="scroll-down-text-button first-text-button down">
                        </a>
                        <div class="buttons">
                           <a href="#" class="btn-def blue-btn next-btn bluee-btn"><?php echo constant('Slider_4_Link4');?></a>
                        </div>
                     </div>
                  </div>
                  <div class="swiper-slide">
                     <div class="content three ">
                        <p class="nav-nbm">04 / <span>06</span></p>
                        <a href="#" class="scroll-down-text-button first-text-button up"
                           style="transform: rotate(180deg);"></a>
                        <div class="big-text-scrollable second-text">
                           <div class="text-scroll second-text-scroll">
                              <?php echo constant('Slider_4_Description4');?>
                           </div>
                        </div>
                        <a href="#" class="scroll-down-text-button second-text-button down">
                        </a>
                        <div class="buttons">
                           <a href="#" class="btn-def blue-btn next-btn bluee-btn"><?php echo constant('Slider_4_Link1');?></a>
                        </div>
                     </div>
                  </div>
                  <div class="swiper-slide">
                     <div class="content three ">
                        <p class="nav-nbm">04 / <span>06</span></p>
                        <h1 class="heading mrg-btm"> <?php echo constant('Slider_4_Title3');?></h1>
                        <?php echo constant('Slider_4_Description3');?>
                        <div class="buttons">
                           <a  href="#" class="btn-def blue-btn bluee-btn prev-btn"
                              ><?php echo constant('Slider_4_Link3-1');?></a>
                           <a  class="btn-def blue-btn bluee-btn btn-end-point"
                              onclick="mySwiper.slideTo(4);"><?php echo constant('Slider_4_Link3');
                              ?></a>
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
         <div class="swiper-slide slide-5" data-hash="hemodialysis">
            <div class="swiper-container swiper-container-v" data-slide="5">
               <div class="kidney-two">
                  <img src="img/kidney.svg" alt="image">
               </div>
               <div class="swiper-wrapper">
                  <div class="swiper-slide">
                     <div class="content six">
                        <p class="nav-nbm">05 /<span>06</span></p>
                        <h1 class="heading"><?php echo constant('Slider_5_Title');?></h1>
                        <p class="content-p sml"><?php echo constant('Slider_5_Description');?>
                        </p>
                        <div class="buttons">
                           <a href="/#intro-three"
                              class="btn-def blue-btn next-btn bluee-btn"><?php echo constant('Slider_5_Link');?></a>
                        </div>
                     </div>
                  </div>
                  <div class="swiper-slide">
                     <div class="content four">
                        <h1 class="heading"><?php echo constant('Slider_5_Title1');?></h1>
                        <p class="content-p sml"><?php echo constant('Slider_5_Description2');?></p>
                        <div class="buttons">
                           <a  class="btn-def blue-btn bluee-btn mrg-top"
                              onclick="mySwiper.slideTo(6);"><?php echo constant('Slider_5_Link1');
                              ?></a>
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
         <div class="swiper-slide slide-6" data-hash="diseases">
            <div class="swiper-container swiper-container-v" data-slider="6">
               <div class="swiper-wrapper">
                  <div class="swiper-slide">
                     <div class="content four">
                        <div class="kidney-bg">
                           <img src="img/kidney.svg" alt="image">
                        </div>
                        <p class="nav-nbm">06 / <span>06</span></p>
                        <h1 class="heading blue-underline"><span
                           class="underline"><?php echo constant('Slider_6_Title');?></span>
                        </h1>
                        <?php echo constant('Slider_6_Description');?>
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
      <a href="http://sistinanefroplus.mk/"><img src="img/logo.png" alt="image" class="logo"></a>
   </div>
   <div class="collapsible-menu-icon"> Menu </div>
   <div class="collapsible-menu">
      <a href="http://sistinanefroplus.mk/" class="text-center"><img src="img/logo.png" class="logo-collapse small-logo" alt="image"></a>
      <a href="http://sistinanefroplus.mk/" class="menu-links">Почетна</a>
      <a href="#" class="about-us-mobile menu-links about-btn">
      <?php echo constant('ABOUTUS_Title');?>
      </a>
      <a href="#" class="menu-links  contact-us-mobile"><?php echo constant('CONTACT_Title');?></a>
      <a href="three-sixty.html" class=" menu-links"><?php echo constant('VirtualTour');?></a>
      <a href="#" class="close-btn  menu-links"><?php echo constant('Close');?> </a>
      <div class="znamenca">
         <ul>
            <form action="" method="post" class="hide-large">
               <input type="hidden" value="mk" name="lang"/><input type="image"  class="flag" src="img/mk.png"
                  alt="English"/>
            </form>
            <form action="" method="post" class="hide-large">
               <input type="hidden" value="en" name="lang"/><input type="image"  class="flag" src="img/en.png"
                  alt="Македонски"/>
            </form>
         </ul>
      </div>
   </div>
   <div class="right-section">
      <div class="right-section-content">
         <div class="about">
            <div id="three-sixty" class="three-sixty">
               <a href="three-sixty.html" class="three-sixty-icon"><?php echo constant('VirtualTour');?></a>
            </div>
            <button type="text" class="toggle-btn about-btn">
            <span><?php echo constant('ABOUTUS_Title');?></span>
            </button>
            <button type="text" class="toggle-btn contact-btn">
            <span><?php echo constant('CONTACT_Title');?></span>
            </button>
            <span class="close-btn"><?php echo constant('Close');?></span>
         </div>
         <div class="kocki">
            <ul>
               <form action="" method="post" class="hide-large">
                  <input type="hidden" value="mk" name="lang"/><input type="image"  class="flag" src="img/mk.png"
                     alt="English"/>
               </form>
               <form action="" method="post" class="hide-large">
                  <input type="hidden" value="en" name="lang"/><input type="image"  class="flag" src="img/en.png"
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
                  <?php echo constant('ABOUTUS');?>
               </div>
               <?php
                  $img_p = "img/slajder/";
                  $img   = glob($img_p."*.jpg");
                  
                  ?>
               <div class="about__slider">
                  <?php foreach ($img as $i) {?>
                  <div class="about-image">
                     <img src="<?php echo $i;?>" alt="image">
                  </div>
                  <?php }?>
               </div>
            </div>
            <div class="contact-content-inner">
               <div class="row col-md-7">
                  <div class="contact-inner col-md-6">
                     <?php echo constant('CONTACT');?>
  <div class="cities">
   <div>
    <h4 class="heading">Избери дијализен центар</h4>
      <select class="form-control" id="select-city">  
         <option>Канцеларија Скопје</option>
         <option>Дијализен центар Кичево</option>
         <option>Дијализен центар Тетово</option>
         <option>Дијализен центар Гостивар</option>
         <option>Дијализен центар Дебар</option>
         <option>Дијализен центар Охрид</option>
         <option>Дијализен центар Струга</option>
         <option>Дијализен центар Прилеп</option>
         <option>Дијализен центар Битола</option>
         <option>Дијализен центар Прилеп</option>
         <option>Дијализен центар Велес</option>
         <option>Дијализен центар Кавадарци</option>
      </select>
   </div>
   <div class="accordion-content" id="city-1">
      <p>
         Ул. Скупи 3А Скопје,<br>Скопје, Р. Македонија<br>
         Тел: +389 2 3099 593<br>
         Е-mail: info@sistinanefroplus.mk
      </p>
   </div>
   <div class="accordion-content" id="city-2">
      <p>
         Регионален пат Осломеј бр. 9<br>
         Кичево, Р. Македонија<br>
         Тел: +389 71 348 367<br>
         Е-mail: kicevo@sistinanefroplus.mk
      </p>
   </div>
   <div class="accordion-content" id="city-3">
      <p>
         Ул. Илинденска бр. 1<br>
         Тетово, Р. Македонија <br>
         Тел: +389 44 393 954<br>
         Е-mail: tetovo@sistinanefroplus.mk
      </p>
   </div>
   <div class="accordion-content" id="city-4">
      <p>
         Ул. ЈНА бр. 283 а<br>
         Гостивар, Р. Македонија<br>
         Тел: +389 42 210 134<br>
         Е-mail: gostivar@sistinanefroplus.mk
      </p>
   </div>
   <div class="accordion-content" id="city-5">
      <p>
         Ул.Амди Леши бр.51<br>
         Дебар, Р. Македонија<br>
         Тел: +389 46 790 029<br>
         Е-mail: debar@sistinanefroplus.mk
      </p>
   </div>
   <div class="accordion-content" id="city-6">
      <p>
         Св. Еразмо<br>
         Охрид, Р.Македонија<br>
         Е-mail: ohrid@sistinanefroplus.mk
      </p>
   </div>
   <div class="accordion-content" id="city-7">
      <p>
         Ул.Партизанска Бр.1<br>
         Струга, Р. Македонија<br>
         Тел: +389 46 799 477<br>
         Е-mail: struga@sistinanefroplus.mk
      </p>
   </div>
   <div class="accordion-content" id="city-8">
      <p>
         Ул.Партизанска Бр.1<br>
         Струга, Р. Македонија<br>
         Тел: +389 46 799 477<br>
         Е-mail: struga@sistinanefroplus.mk
      </p>
   </div>
   <div class="accordion-content" id="city-9">
      <p>
         Ул. НиколаТесла бр. 158<br>
         Битола, Р. Македонија<br>
         Тел: +389 47 243 324<br>
         Е-mail: bitola@sistinanefroplus.mk
      </p>
   </div>
   <div class="accordion-content" id="city-10">
      <p>
         Ул.Трајко Тарцан Бр.1<br>
         Прилеп, Р. Македонија<br>
         Тел: +389 48 400 085<br>
         Е-mail: prilep@sistinanefroplus.mk
      </p>
   </div>
   <div class="accordion-content" id="city-11">
      <p>
         Ул.Самоборска Бр.1<br>
         Велес, Р. Македонија<br>
         Тел: +389 43 212 212<br>
         Е-mail: veles@sistinanefroplus.mk
      </p>
   </div>
   <div class="accordion-content" id="city-12">
      <p>
         Ул.Шишка Бр.1<br>
         Кавадарци, Р. Македонија<br>
         Тел: +389 43 447 422<br>
         Е-mail: kavadarci@sistinanefroplus.mk
      </p>
   </div>
</div>
</div>
                  <div class="contact-form col-md-6">
                     <h3 class="heading"> <?php echo constant('CONTACTFORM');?></h3>
                     <form action="contact_submit.php" method="post"
                        class="row contact_us_form"
                        novalidate="novalidate">
                        <div class="form-group col-md-6 col-xs-6">
                           <input type="text" class="form-control" id="name" name="name"
                              placeholder="<?php echo constant('NAME');?>">
                        </div>
                        <div class="form-group col-md-6 col-xs-6">
                           <input type="text" class="form-control" id="lastname" name="lastname"
                              placeholder="<?php echo constant('LASTNAME');?>">
                        </div>
                        <div class="form-group col-md-6 col-xs-6">
                           <input type="email" class="form-control" id="email" name="email"
                              placeholder="Email">
                        </div>
                        <div class="form-group col-md-6 col-xs-6">
                           <input type="text" class="form-control" id="subject" name="subject"  placeholder="<?php echo constant('CITY');?>">
                        </div>
                        <div class="form-group col-md-12 col-xs-12">
                           <textarea class="form-control" name="message" id="message" rows="1"
                              placeholder="<?php echo constant('MESSAGE');?>"></textarea>
                        </div>
                        <div class="form-group col-md-12">
                           <button type="submit" class="btn btn-info"><?php echo constant('SUBMIT');?>
                           </button>
                        </div>
                     </form>
                     <div class="contact-form-after"></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <?php require_once 'footer.php';?>