require('jquery.scrollex');

var app = {
  init: function () {


    console.log('init');

    $('#toggle').click(function () {
      $(this).toggleClass('active');
      $('#overlay').toggleClass('open');
      $('#wrapper').toggleClass('open');
      
    });

    $('a[href^="#"]').click(function(){
      $('#toggle').removeClass('active');
      $('#overlay').removeClass('open');
      $('#wrapper').removeClass('open');
    });

    
    var stickyNav = function () {
      var scrollTop = $(window).scrollTop(); // our current vertical position from the top

      if (scrollTop > 100) {
        $('.header').addClass('sticky');
      } else {
        $('.header').removeClass('sticky');
      }
    };

    stickyNav();
    // and run it again every time you scroll
    $(window).scroll(function () {
      stickyNav();
    });


    
    $('a[href^="#"]').click(function(){
      var the_id = $(this).attr("href");
      if (the_id === '#') {
        return;
      }
      $('html, body').animate({
        scrollTop:$(the_id).offset().top-$('.header').outerHeight()
      }, 'slow');
      return false;
    });

   

  },

     

};

$(app.init);
