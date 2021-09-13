/****************** Start JS For logo crousal *********************/
$(document).ready(function(){
    $('.customer-logos').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 4000,
        arrows: true,
        dots: false,
            pauseOnHover: false,
            responsive: [{
            breakpoint: 992,
            settings: {
                slidesToShow: 2
            }
        }, {
            breakpoint: 768,
            settings: {
                slidesToShow: 1
            }
        }]
    });
});
/****************** End JS For logo crousal *********************/
       
/****************** Start JS For sticky menu *********************/
$(window).scroll(function(){
  var main_header = $('#main_header'),
      scroll = $(window).scrollTop();

  if (scroll >= 200) main_header.addClass('active');
  else main_header.removeClass('active');
});       
/****************** End JS For sticky menu *********************/