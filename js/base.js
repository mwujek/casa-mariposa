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


    // lightbox plugin
    $('[data-fancybox="gallery"]').fancybox({
      buttons: [
        "close"
      ],
    });



  $('.flickity-slideshow').flickity({
    // options
    cellAlign: 'left',
    contain: true,
    //prevNextButtons: false,
    adaptiveHeight: true
  });


  var initAccordion = function(){
    var accordion = $('.accordion-container');
    accordion.each(function(){
      var items = $(this).find('.accordion-item');
      items.each(function(){
        $(this).find('.accordion-content').slideUp(0);
      });
    });
  }

  var updateAccordion = function(itemClicked){
    console.log('aaaa');
    if(itemClicked.hasClass('active')){
      itemClicked.find('.accordion-content').slideUp();
      //itemClicked.removeClass('active');
    } else {
      itemClicked.find('.accordion-content').slideDown();
      //itemClicked.addClass('active');
    }
    itemClicked.toggleClass('active');
  }

  // if accordion present
  
  if($('.accordion-container').length !== 0){
    initAccordion();  
    $('.accordion-item').click(function(){
      var el = $(this);
      updateAccordion(el);
    })
  }
  

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


