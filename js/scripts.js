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

//Sub-Nav
$(document).ready(function(){
  $(".sub-nav > .nav-icons > a").on('click', function(event) {
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

//Featured
$(document).ready(function(){
  $("#featured").on('click', function(event) {
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

//toTop
$(document).ready(function(){
  $(".toTop > i").on('click', function(event) {
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





//openLogout()
function openLogout() {
  var x = document.getElementById("logout-tab");
  if (x.style.visibility === "visible") {
    x.style.visibility = "hidden";
  } else {
    x.style.visibility = "visible";
  }
} 





//openSignup()
function openSignup() {
  document.getElementById("signup").style.visibility = "visible";
  document.getElementById("login").style.visibility = "hidden";
}

//openLogin()
function openLogin() {
  document.getElementById("login").style.visibility = "visible";
  document.getElementById("signup").style.visibility = "hidden";
}





//openNav()
function openNav() {
  document.getElementById("res-nav").style.width = "40%";
}

//closeNav()
function closeNav() {
  document.getElementById("res-nav").style.width = "0";
}





//openCheckout()
function openCheckout() {
  document.getElementById("checkout").style.visibility = "visible";
  document.getElementById("form").style.visibility = "visible";
}

//closeCheckout()
function closeCheckout() {
  document.getElementById("checkout").style.visibility = "hidden";
  document.getElementById("form").style.visibility = "hidden";
}



//shippingExpress
function shippingExpress() {
  document.getElementById("shippingCharge").value = "0.00";
}

//shippingTwoDay
function shippingTwoDay() {
  document.getElementById("shippingCharge").value = "14.99";
}

//shippingOneDay
function shippingOneDay() {
  document.getElementById("shippingCharge").value = "24.99";
}





//AOS
$(function() {
  AOS.init();
});

$(window).on('load', function() {
  AOS.refresh();
});





//Sticky Scroll
$(function() {
  var slant = $(".sub-nav > .nav-icons");
  $(window).scroll(function() {
    var scroll = $(window).scrollTop();
    if (scroll >= 100) {
      slant.removeClass('nav-icons').addClass("sticky");
    } else {
      slant.removeClass("sticky").addClass('nav-icons');
    }
  });
});





//Disable Zoom
$(document).keydown(function(event) {
if (event.ctrlKey==true && (event.which == '61' || event.which == '107' || event.which == '173' || event.which == '109'  || event.which == '187'  || event.which == '189'  ) ) {
        event.preventDefault();
     }
});

$(window).bind('mousewheel DOMMouseScroll', function (event) {
       if (event.ctrlKey == true) {
       event.preventDefault();
       }
});

