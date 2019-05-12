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


  var updateSlideCopy = function(index, parent,init){
    var info = parent.find('.slide-item').eq(index).attr('desc');
    console.log(info);
    if(init){
      parent.append('<p class="flickity-desc">'+info+'</p>');
    } else{
      parent.find('.flickity-desc').text(info)
    }

    // console.log(parent);
    // parent.fadeOut();
  }

  $('.flickity-slideshow').flickity({
    // options
    cellAlign: 'center',
    contain: true,
    adaptiveHeight: true,
    imagesLoaded: true,
    wrapAround: true,
    on: {
      ready: function() {
        var parent = $(this)[0]['$element'];
        updateSlideCopy(0, parent,true)
      },
      change: function( index ) {
        var parent = $(this)[0]['$element'];
        //console.log( 'Slide changed to' + index );
        updateSlideCopy(index, parent)
      }
  }

  });


  

  //$('[data-remodal-id=modal]').remodal(options);
  var inst = $('[data-remodal-id=modal]').remodal();
  $('.booking-link').click(function(){
    console.log('go');
    inst.open();
  });

  $('.remodal-close').click(function(){
    console.log('close');
    inst.close();
    var state = inst.getState();
    console.log(state);

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


