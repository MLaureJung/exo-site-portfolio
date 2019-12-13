require('jquery.scrollex');

var app = {
  init: function () {


    console.log('init');

    $('#toggle').click(function () {
      $(this).toggleClass('active');
      $('#overlay').toggleClass('open');
      $('#wrapper').toggleClass('open');
    });


    // grab the initial top offset of the navigation 
    var stickyNavTop = $('.header').offset().top;

    // our function that decides weather the navigation bar should have "fixed" css position or not.
    var stickyNav = function () {
      var scrollTop = $(window).scrollTop(); // our current vertical position from the top

      // if we've scrolled more than the navigation, change its position to fixed to stick to top,
      // otherwise change it back to relative
      if (scrollTop > stickyNavTop) {
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
