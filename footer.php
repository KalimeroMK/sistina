<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="js/anime.min.js"></script>
<script src="js/main.js"></script>
<script src="js/swiper.min.js"></script>
<script src="js/scrollreveal.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/slick-lightbox.min.js"></script>
<script>
    var titles = ['01', '02', '03', '04',];
    $('.swiper-container .swiper-slide').each(function (i) {
        titles.push($(this).data('title'))
    });


    var mySwiper = new Swiper(' .swiper-container-h', {

        direction: 'vertical',
        slidesPerView: 1,
        spaceBetween: 0,
        mousewheel: true,
        speed: 1500,
        loop: false,
        effect: 'fade',

        fadeEffect: {
            crossFade: true
        },
        simulateTouch: false,
        parallax: true,


        hashNavigation: {
            watchState: true,
        },

        // If we need pagination
        pagination: {
            el: '.pag-nav',
            dynamicBullets: false,
            clickable: true,
            hashNavigation: true,
            type: 'bullets',
            renderBullet: function (index, className) {

                return '<div class="' + className + '"><p></p></div>';
            }

        },


    });
    var swiperV = new Swiper('.swiper-container-v', {
        paginationClickable: true,
        direction: 'horizontal',
        spaceBetween: 0,
        nested: true,
        speed: 700,
        parallax: true,
        clickable: true,
        navigation: {
            nextEl: '.next-btn',
            //prevEl: '.prev-btn',

        },
    });


</script>
<script>
    $(window).on("load", function () {

        $('video').trigger('pause');
        $('video[data-vid="0"]').trigger('play');


        var w_width = $(window).width();
        var w_height = $(window).height();

        $("video").css({
            //"width" : w_width,
            //"height": "100vh"
        })

        mySwiper.on('slideChange', function () {

            $(".swiper-container-v[data-slide='" + mySwiper.activeIndex + "'").addClass("active_");


            var swiperV = new Swiper('.active_', {
                paginationClickable: true,
                direction: 'horizontal',
                spaceBetween: 0,
                nested: true,
                speed: 700,
                parallax: true,
                clickable: true,
                navigation: {
                    nextEl: '.next-btn',
                    prevEl: '.prev-btn',

                },
            });
            // $("video").trigger('pause');
            $("#video-background[data-vid='" + mySwiper.activeIndex + "']").trigger("play");

        });


        mySwiper.on('slideChange', function () {

            if (mySwiper.activeIndex == 1) {
                $('.content.two').bind("mousewheel", function () {
                    return false;
                });
                $('.content.two').bind("touchmove", function () {
                    return false;
                });

                // $(".pag-nav").addClass("bg_no_click");
            }
            else {
                // $(".pag-nav").removeClass("bg_no_click");
            }


            console.log(mySwiper.activeIndex);

        });

        var play_pause = document.getElementById("mp3");

        $("#music").click(function () {
            // play_pause.paused ? play_pause.play() : play_pause.pause();
            // $("#music").toggleClass("playing");
        });

    });

    setTimeout(function () {
        $(".preload").fadeOut("slow");
        //$("#music").trigger("click");
        $(".slide-1 h1").addClass("f_a");
        $(".slide-1").addClass("blur-out");
    }, 5500)


</script>
<script>
    var swiper = new Swiper('.about-slider', {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
</script>
<script>
    $('.about__slider').slick({
        dots: false,
        arrows: true,
        infinite: false,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });
    $('.about__slider').slickLightbox({
        src: 'src',
        itemSelector: '.about-image img'
    });
</script>


<script type="text/javascript">


    (function ($) {


        /* $('.down').click(function(event){
           event.preventDefault();
           $(".text-scroll").scrollTop($(".text-scroll").scrollTop()+20);
         });
         $('.up').click(function(event){
          $(".text-scroll").scrollTop($(".text-scroll").scrollTop()-20);
         });*/

    })(jQuery);


    (function ($) {
        $('.down').click(function (event) {
            event.preventDefault();
            $(this).parent().find($(".big-text-scrollable")).scrollTop($(this).parent().find($(".big-text-scrollable")).scrollTop() + 20);
        });
        $('.up').click(function (event) {
            event.preventDefault();
            $(this).parent().find($(".big-text-scrollable")).scrollTop($(this).parent().find($(".big-text-scrollable")).scrollTop() - 20);
        });

    })(jQuery);

</script>
</body>
</html>
<?php require_once 'bottom-cache.php'; ?>