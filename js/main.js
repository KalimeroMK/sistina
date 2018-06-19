/*// Wrap every letter in a span
$('.txt-trn').each(function(){
  $(this).html($(this).text().replace(/([^\x00-\x80]|\w)/g, "<span class='letter'>$&</span>"));
});
setTimeout(function(){
anime.timeline({loop: false})
  .add({
    targets: '.txt-trn .letter',
    opacity: [0,1],
    easing: "easeInOutQuad",
    duration: 1000,
    delay: function(el, i) {
      return 80 * (i+1)
    }
  }).add({
    targets: '.txt-trn',
    opacity: 1,
    duration: 500,
    easing: "easeOutExpo",
    delay: 3500
  });
}, 3100);

*/

$(document).ready(function() {
  $(document).ready(function(){
    $("#select-city").change(function(){
        x=$("#select-city option:selected").index();
       
        $('#city-'+(x+1)).toggleClass('active').siblings().removeClass('active');
 
    });
});

});
    
$(document).ready(function(){
    $('.about-content-inner , .contact-content-inner').fadeOut();
    $(".toggle-btn.contact-btn").click(function(){
        $(".right-section").toggleClass("open");
        $('.contact-content-inner').fadeIn("slow");
    });
     $(".toggle-btn.about-btn").click(function(){
        $(".right-section").toggleClass("open");
        $('.about-content-inner').fadeIn("slow");
    });
    
    window.onbeforeunload = $(window).one("load", function(){location.hash=''});
});






$(document).ready(function(){
    $(".close-btn").click(function(){
        $(".right-section").toggleClass( "open");
         $('.about-content-inner , .contact-content-inner').fadeOut();
    });
});





$(document).ready(function(){
var vid = document.getElementById("video-about");

vid.onended = function() {
    $(this).hide();
};



    $(".toggle-btn.about-btn").click(function(){
        $(".about-video").toggleClass("active");
vid.autoplay = true;
vid.load();
    $('.about__slider').slick('slickGoTo',0);
    });
});

$(document).ready(function(){
    $(".close-btn").click(function(){
        $(".about-video").toggleClass( "active");
    });
});




