require('jquery.scrollex');

var app = {

  init: function() {
    console.log('init');

    // On cible nos éléments
    app.$body = $('body');
    app.$banner = $('.banner');
    app.$header = $('.header');

    // On écoute l'événement click sur les éléments "ui-button"
    $('.ui-button').on('click', app.handleToggleMenu);

    // On va executer une méthode pour gérer l'apparence de notre header
    app.enableScrollex();

    // On cible tous les a dont le href comporte une ancre
    // sauf ceux qui on une ancre vide
    $('a[href*="#"]:not([href="#"])').on('click', app.handleSmoothScroll);

  },

  handleToggleMenu: function(event) {

    // on annule le comportement par défaut (on annule l'action du click sur le lien)
    event.preventDefault();

    console.log('tu as cliqué !');

    // on "toggle" notre classe "menu-visible" sur le body
    // https://api.jquery.com/toggleclass/
    app.$body.toggleClass('menu-visible');


  },

  enableScrollex: function() {
    // https://www.npmjs.com/package/jquery.scrollex
    app.$banner.scrollex({
      leave: app.setHeaderFixed,
      enter: app.setHeaderUnfixed
    })
  },

  setHeaderFixed: function() {
    console.log('Je fixe mon header !');
    // https://api.jquery.com/addClass/
    app.$header.addClass('fixed');
  },

  setHeaderUnfixed: function() {
    console.log('Je défixe mon header !');
    // https://api.jquery.com/removeClass/
    app.$header.removeClass('fixed');
  },

  handleSmoothScroll: function(event) {

    // On annule le comportement par défaut
    event.preventDefault();

    // On récupère la cible de notre événement (l'élément cliqué)
    var elementClicked = event.target;
    console.log(elementClicked);

    // On récupère le hash (#)
    var elementHash = elementClicked.hash;
    console.log(elementHash);

    // On récupère la valeur du href (et donc l'id de la section à cibler en jQuery)
    var $elementTarget = $(elementHash);
    console.log($elementTarget);

    // on vérifie que l'élément ciblé existe
    if ($elementTarget.length) {

      // on calcule la position verticale de l'élément
      var targetPosition = $elementTarget.offset().top;
      console.log(targetPosition);

      // On scroll jusqu'à l'élément

      // https://api.jquery.com/animate/
      $('html, body').animate(
        {
          // on scroll jusqu'à l'element (en tenant compte de la hauteur du header)
          scrollTop: targetPosition - app.$header.height()
        },
        1500
      );
    }
  }
};

$(app.init);
