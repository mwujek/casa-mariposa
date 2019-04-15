var $ = jQuery.noConflict();
/*jshint devel:true */


// $(window).bind("load", function() {
jQuery( document ).ready( function() {

    jQuery(document).on( 'nfFormReady', function( e, layoutView ) {
    


    // $('.nf-form-content').flickity({
    //   cellSelector: '.nf-field-container',
    //   prevNextButtons: false,
    //   adaptiveHeight: true
    //   // wrapAround: true
    // });

    // var formData = $('.nf-form-content').data('flickity');
    

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
});// window

