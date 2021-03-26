$(document).ready(function(){
  $("#phone").mask("+7(000)000-00-00");
  $("#phone1").mask("+7 (000) 000-00-00");
  $("#phone2").mask("+7 (000) 000-00-00");
  $("#phone_client").mask("+7 (000) 000-00-00"); 
  $("#phone_client_blog").mask("+7 (000) 000-00-00"); 
  $("#reset_phone").mask("+7 (000) 000-00-00"); 
  
  $('.slider').slick({
    dots: false,
    arrows: true,
    fade: false,
    autoplay: true,
    infinite: true,
    speed: 400
  });

  $('.group').hide();
  $('#option1').show();
  $('#selectMe').change(function () {
    $('.group').hide();
    $('#'+$(this).val()).show();
  });

    $('.box').hide();
  $('#value1').show();
  $('#selectTab').change(function () {
    $('.box').hide();
    $('#'+$(this).val()).show();
  });
  
   $('.faq').hide();
  $('#accordion1').show();
    $('#selectFAQ').change(function () {
    $('.faq').hide();
    $('#'+$(this).val()).show();
  });

      $('.quesAns').hide();
  $('#qa1').show();
  $('#selectQA').change(function () {
    $('.quesAns').hide();
    $('#'+$(this).val()).show();
  });

  $(".mobile_menu").simpleMobileMenu({
    onMenuLoad: function(menu) {
    },
    onMenuToggle: function(menu, opened) {
    },
    "menuStyle": "slide"
  });
});

jQuery(document).ready(function(){
  $(".dropdown").hover(
    function() { $('.dropdown-menu', this).stop().fadeIn("fast");  $(this).addClass("active");
  },
  function() { $('.dropdown-menu', this).stop().fadeOut("fast"); $(this).removeClass("active");
});
});
