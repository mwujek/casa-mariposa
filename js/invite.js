var $ = jQuery.noConflict();
/*jshint devel:true */


// $(window).bind("load", function() {
jQuery( document ).ready( function() {

    jQuery(document).on( 'nfFormReady', function( e, layoutView ) {
    
    

    var primaryFields
    var secondaryFields
    
    var hideContent = function(){
        primaryFields = $('.nf-field-container').filter(function( index ) {
            return index === 1 || index === 0;
          })
        secondaryFields = $('.nf-field-container').filter(function( index ) {
            return index !== 1 && index !== 0;
          })
        // primaryFields.css( "border", "3px double blue" );
        secondaryFields.slideUp();

        console.log(primaryFields);
        

        
    }

    hideContent();

    var commentLabel = $('.nf-field-container.comment label');
    var openNoRSVP = function(){
        secondaryFields.slideUp();
        $('.nf-field-container.btn-container').slideDown();
        $('.nf-field-container.comment').slideDown();
        commentLabel.text("We'll miss you! We'd still love to hear from you")


    };
    
    var openYesRSVP = function(){
        secondaryFields.slideDown();
    };

    var attendInput = $('.attending input');
    attendInput.on('change',function(){
        var val = $(this).val();
        console.log('asd');
        console.log(val);
        if(val === 'not-attending'){
            openNoRSVP();;
        } else {
            openYesRSVP();
        }

    });

    }); //ninja forms

    console.log('inivte ppl')

    // flickity
    var slideFlick = $('#invite-box').flickity({
      cellAlign: 'left',
      contain: true,
      cellSelector: '.invite-cell',
      prevNextButtons: false,
      pageDots: false,
      draggable: false

    });

    


    $('.progress-btn[role="next"]').click(function(){
        console.log('asd');
        slideFlick.flickity( 'next');
    });

    $('.progress-btn[role="prev"]').click(function(){
        console.log('asd');
        slideFlick.flickity( 'previous');
    });


});// window










