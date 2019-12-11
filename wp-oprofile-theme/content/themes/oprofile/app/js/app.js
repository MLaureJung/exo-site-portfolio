require('jquery.scrollex');

var app = {
  init: function() {
    console.log('init');

    $('#toggle').click(function() {
      $(this).toggleClass('active');
      $('#overlay').toggleClass('open');
      $('#wrapper').toggleClass('open');
     });
  },

  
};

$(app.init);
