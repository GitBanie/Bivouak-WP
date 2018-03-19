//Evite les conflits (effet de bord), on passe en référence l'objet jQuery
(function($){
  $(function() {
  // DOM ready!

  //Enable tooltip
  $('[data-toggle="tooltip"]').tooltip();

  //Change color on focus
  $('.search-form').on('focus', '.form-control', function() {
    $(this).next().css('color', '#e9511f');
    $('.animate-arrow').css("animation", "none");
  });
  $('.search-form').on('focusout', '.form-control', function() {
    $(this).next().css('color', '#636561');
  });

  //show btn figure on over
  $('.figure').on('mouseover', function() {
    $(this).children('.show').show();
  });
  $('.figure').on('mouseleave', function() {
    $(this).children('.show').hide();
  });

  //Retour au de page
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



  //animation arrow header
  // setInterval(function(){
  //   $('.animate-arrow').animate({top: '10px'});
  // }, 3000);



  });
  // Code here


})(jQuery);
