var $ = jQuery.noConflict();
/*jshint devel:true */


$(document).ready(function(){

    

    // ••••••••••••••••••••••••••••
    // ••••••••••••••••••••••••••••
    // ALEX
    // ••••••••••••••••••••••••••••
    // ••••••••••••••••••••••••••••
    $('.alex-ppl').flickity({
      cellSelector: '.slide-item',
      prevNextButtons: false,
      adaptiveHeight: true,
      // wrapAround: true
    });

    var alexSlideData = $('.alex-ppl').data('flickity');

    // alex clicks
    $('.slide-list.alex li').click(function(){
        var el = $(this);
        var index = el.index();
        $('.alex-ppl').flickity( 'selectCell', index );
    });

    // on each change

    alexSlideData.on( 'change', function( index ) {
        console.log(index);
        $('.slide-list.alex li').removeClass();
        $('.slide-list.alex li').eq(index).addClass('active');
    });


    // ••••••••••••••••••••••••••••
    // ••••••••••••••••••••••••••••
    // WUJ
    // ••••••••••••••••••••••••••••
    // ••••••••••••••••••••••••••••
    $('.wuj-ppl').flickity({
      cellSelector: '.slide-item',
      prevNextButtons: false,
      adaptiveHeight: true
      // wrapAround: true
    });

    var wujSlideData = $('.wuj-ppl').data('flickity');

    // alex clicks
    $('.slide-list.wuj li').click(function(){
        var el = $(this);
        var index = el.index();
        $('.wuj-ppl').flickity( 'selectCell', index );
    });

    // on each change

    wujSlideData.on( 'change', function( index ) {
        console.log(index);
        $('.slide-list.wuj li').removeClass();
        $('.slide-list.wuj li').eq(index).addClass('active');
    });


    // ••••••••••••••••••••••••••••
    // ••••••••••••••••••••••••••••
    // BOTH
    // ••••••••••••••••••••••••••••
    // ••••••••••••••••••••••••••••
    $('.both-ppl').flickity({
      cellSelector: '.slide-item',
      prevNextButtons: false,
      adaptiveHeight: true
      // wrapAround: true
    });

    var bothSlideData = $('.both-ppl').data('flickity');

    // alex clicks
    $('.slide-list.both li').click(function(){
        var el = $(this);
        var index = el.index();
        $('.both-ppl').flickity( 'selectCell', index );
    });

    // on each change

    bothSlideData.on( 'change', function( index ) {
        console.log(index);
        $('.slide-list.both li').removeClass();
        $('.slide-list.both li').eq(index).addClass('active');
    });

    
});

