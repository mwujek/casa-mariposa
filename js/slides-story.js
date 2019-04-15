var $ = jQuery.noConflict();
/*jshint devel:true */


$(document).ready(function(){

    

    // ••••••••••••••••••••••••••••
    // ••••••••••••••••••••••••••••
    // ALEX
    // ••••••••••••••••••••••••••••
    // ••••••••••••••••••••••••••••
    $('.slide-content.story').flickity({
      cellSelector: '.slide-item',
      prevNextButtons: false,
      adaptiveHeight: true,
      imagesLoaded: true
      // wrapAround: true
    });

    // var alexSlideData = $('.alex-ppl').data('flickity');

    // // alex clicks
    // $('.slide-list.alex li').click(function(){
    //     var el = $(this);
    //     var index = el.index();
    //     $('.alex-ppl').flickity( 'selectCell', index );
    // });

    // // on each change

    // alexSlideData.on( 'change', function( index ) {
    //     console.log(index);
    //     $('.slide-list.alex li').removeClass();
    //     $('.slide-list.alex li').eq(index).addClass('active');
    // });



    
});

