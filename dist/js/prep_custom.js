


















































































































/* =========
CUSTOM JS
======*/

$('[data-uk-scrollspy]').on('inview.uk.scrollspy', function(){
 
    var numItems = $('.radial-progress').length;

    for(i = 0; i < numItems; i++){

        progress= function() {
            var end = $('.radial-progress').attr('data-end');
            $('.radial-progress').attr( 'data-progress', end);
        }
       console.log(progress[i]);
        setTimeout(progress[i], 200);
    }
});

$(function(){
        
    });
    $('#phone-img li:first-child').removeClass('uk-active');


   