$(document).ready(function() {

  /*============ responsive menu===============*/

  $('.burger').sidr({
    source: '#main-nav',
    displace: false,
    name: 'sidr-main',
  });

  $('body').click(function() {
    $.sidr('close', 'sidr-main');
  });


  // carousel
  $(".owl-carousel").owlCarousel({
    items: 1,
    loop: true,
    nav: true,
    navText: ['Précédent', 'Suivant'],
    dots: false,
  });

});
