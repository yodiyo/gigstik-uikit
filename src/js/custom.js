/* =========
CUSTOM JS
======*/

/* wait for element to come into view */
$('[data-uk-scrollspy]').on('inview.uk.scrollspy', function(){
    
    /* get attribute on progress radial */
     progress= function() {
            var end = $('.radial-progress').attr('data-end');
            $('.radial-progress').attr( 'data-progress', end);
        }
        setTimeout(progress, 200);
});

/* hide first  phone image on page load */
$('#phone-img li:first-child').removeClass('uk-active');