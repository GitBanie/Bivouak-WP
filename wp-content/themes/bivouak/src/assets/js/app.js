//Evite les conflits (effet de bord), on passe en référence l'objet jQuery
(function($){
  $(function() {
  // DOM ready!

    //Enable tooltip
    $('[data-toggle="tooltip"]').tooltip();

    //Change color on change
    $('.search-form').on('change', '.form-control', function() {
      $(this).next().css('color', '#e9511f');
      $('.animate-arrow').css("animation", "none");

      if($(this).val() == ""){
        $(this).next().css('color', '#636561');
      }
    });
    if($('#searchTextField').val() == ""){
      $(this).next().css('color', '#e9511f');
    }
    else{
      $(this).next().css('color', '#636561');
    }

    //show btn figure on over
    $('.figure-theme').on('mouseover', function() {
      $(this).children('.show').show();
      $(this).children('.figure-img').css('filter', 'grayscale(100%)');
    });
    $('.figure-theme').on('mouseleave', function() {
      $(this).children('.show').hide();
      $(this).children('.figure-img').css('filter', 'grayscale(0%)');
    });

    //Retour haut de page
    var duration = 500;
    $(window).scroll(function() {
      if ($(this).scrollTop() > 100) {
        // Si un défillement de 100 pixels ou plus.
        // Ajoute le bouton
        $('.cRetour').fadeIn(duration);
      } else {
        // Sinon enlève le bouton
        $('.cRetour').fadeOut(duration);
      }
    });
    $('.cRetour').click(function(event) {
      // Un clic provoque le retour en haut animé.
      event.preventDefault();
      $('html, body').animate({scrollTop: 0}, duration);
      return false;
    });

    //Add icon to number
    $('#navbarNav ul li:first-child').prepend('<i class="fas fa-phone"></i>').addClass('number-bivoik');

  });
})(jQuery);
