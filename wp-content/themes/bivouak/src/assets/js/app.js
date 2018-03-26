// Evite les conflits (effet de bord), on passe en référence l'objet jQuery
(function($){
  $(function() {
  // DOM ready!

    // Change la couleur des font icon
    $('.search-form').on('change', '.form-control', function() {
      $(this).next().css('color', '#e9511f');
      // Stop l'animation de la fleche
      $('.animate-arrow').css("animation", "none");
      if($(this).val() == ""){
        $(this).next().css('color', '#636561');
      }
    });

    // Affiche le boutton en hover des figures de la section themes
    $('.figure-theme').on('mouseover', function() {
      $(this).children('.show').show();
      $(this).children('.figure-img').css('filter', 'grayscale(100%)');
    });
    $('.figure-theme').on('mouseleave', function() {
      $(this).children('.show').hide();
      $(this).children('.figure-img').css('filter', 'grayscale(0%)');
    });

    // Retour haut de page
    var duration = 500;
    var classRetour = '.cRetour';
    $(window).on('scroll', function() {
      if ($(this).scrollTop() > 100) {
        // Si un défillement de 100 pixels ou plus
        // Ajoute le bouton
        $(classRetour).fadeIn(duration);
      } else {
        // Sinon enlève le bouton
        $(classRetour).fadeOut(duration);
      }
    });
    $(classRetour).on('click', function() {
      // Un clic provoque le retour en haut animé
      $('html').animate({scrollTop: 0}, duration);
      return false; 
    });

    // Ajout du font icon au numéro de téléphone
    $('#navbarNav ul li:first-child').prepend('<i class="fas fa-phone"></i>').addClass('number-bivoik');

  });
})(jQuery);
