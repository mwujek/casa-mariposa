//var $ = jQuery.noConflict();
/*jshint devel:true */
var prev;
var $window;
var nav;
var scroller;
jQuery( document ).ready( function() {
    prev = 0;
    nav = $('header#asd');
    scroller = $('.arrow-container');
    $('[data-fancybox="gallery"]').fancybox({
      // Options will go here
      //infobar: false,
      //toolbar: false,
      //arrows: false
      buttons: [
        //"zoom",
        //"share",
        //"slideShow",
        //"fullScreen",
        //"download",
        //"thumbs",
        "close"
      ],
    });

  $('.flickity-slideshow').flickity({
    // options
    cellAlign: 'left',
    contain: true,
    prevNextButtons: false,
    adaptiveHeight: true
  });

}); // end of ready

$(window).on('scroll', function(){
  var scrollTop = $(this).scrollTop();
  //console.log(scrollTop);

  nav.toggleClass('anchored', scrollTop < 300);
  if(scroller.length === 1){
  	scroller.toggleClass('hidden', scrollTop > 300);
  }
  
  // prev = scrollTop;
});


