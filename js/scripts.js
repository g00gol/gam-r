//Smooth Scroll
//Nav
$(document).ready(function(){
  $(".nav > a").on('click', function(event) {
    if (this.hash !== "") {
      event.preventDefault();
      var hash = this.hash;
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
        window.location.hash = hash;
      });
    }
  });
});





//Slant Color
$(function() {
  var slant = $(".section2 .slant");
  $(window).scroll(function() {
    var scroll = $(window).scrollTop();
    if (scroll >= 600) {
      slant.removeClass('slant').addClass("slant2");
    } else {
      slant.removeClass("slant2").addClass('slant');
    }
  });
});





//AOS
$(function() {
  AOS.init();
});

$(window).on('load', function() {
  AOS.refresh();
});
