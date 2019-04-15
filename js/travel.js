var $ = jQuery.noConflict();
/*jshint devel:true */

mapboxgl.accessToken = 'pk.eyJ1IjoibWF0dHd1amVrIiwiYSI6ImNpb2E3M2hmYzAzOXd3M2tqbmI3YTZrc3MifQ.wJmQrrKH-1LGQCQAJLFHrA'

var map;
jQuery( document ).ready( function() {
    var defaultZoom = 10;
    var c = [-123.200011, 39.157192]
    map = new mapboxgl.Map({
        container: 'travel-map',
        style: 'mapbox://styles/mattwujek/cjo375i025mal2rpbo2r8j45x', 
        center: c, 
        zoom: defaultZoom,
        maxZoom: 20,
        scrollZoom: false
    });
    map.addControl(new mapboxgl.NavigationControl({showCompass:false}));



var iconTrigger = $('.airbnb, .hotel, .camping')


var routes = $('#sf, #oak, #sac');

routes.click(function(){
    var routeID = $(this).attr('id');
    console.log(routeID);
});

var zoomToBox = function(bbox){
    map.fitBounds(bbox, {
        padding: {top: 10, bottom:25, left: 15, right: 5}
    });
}

var zoomToDefault = function(){
    map.flyTo({
        center: c,
        zoom: defaultZoom,
        speed: 2,
    });
}

var toggleIcons = function(id, val){
    console.log(id);
    var val2 = 0;
    var bbox;
    if(id ==='sfo' || id ==='oak' || id==='smf'){
        if(val === 0){
            val2 = 0.1;
        } else {
            val2 = 1;
        }
        
    } 

    
    if( id==='airbnb'){
        bbox = [[-122.82211,  39.3412],[-123.35796, 39.03418]];
        map.setPaintProperty('airbnb', 'icon-opacity', val);
        if(val === 1){
            zoomToBox(bbox);
        } else{
            zoomToDefault();
        }
    }else if( id==='camping'){
        map.setPaintProperty('camping', 'icon-opacity', val);        
    }else if( id==='poi'){
        map.setPaintProperty('poi', 'text-opacity', val);
        map.setPaintProperty('poi', 'icon-opacity', val);      
    }else if( id==='hotel'){
        bbox = [[-123.13266,39.19574],[-123.26547,39.11959]]
        map.setPaintProperty('hotels', 'text-opacity', val);
        map.setPaintProperty('hotels', 'icon-opacity', val);
        if(val === 1){
            zoomToBox(bbox);
        } else{
            zoomToDefault();
        }      
    }else if( id==='sfo'){
        bbox = [[-121.13189,39.34484],[-124.51794,37.38187]]
        map.setPaintProperty('sf-route', 'line-opacity', val2);
        map.setPaintProperty('sf-marker', 'text-opacity', val);
        map.setPaintProperty('sf-marker', 'icon-opacity', val);
        if(val === 1){
            zoomToBox(bbox);
        } else{
            zoomToDefault();
        }
    }else if( id==='oak'){
        bbox = [[-120.80401,39.3494],[-124.19006,37.3866]]
        map.setPaintProperty('oak-route', 'line-opacity', val2);      
        map.setPaintProperty('oak-marker', 'text-opacity', val);
        map.setPaintProperty('oak-marker', 'icon-opacity', val);
        if(val === 1){
            zoomToBox(bbox);
        } else{
            zoomToDefault();
        }

    }else if( id==='smf'){
        bbox = [[-121.41820, 39.53722],[-123.38184, 38.40842]]
        map.setPaintProperty('sac-route', 'line-opacity', val2);    
        map.setPaintProperty('sac-marker', 'text-opacity', val);
        map.setPaintProperty('sac-marker', 'icon-opacity', val);
        if(val === 1){
            zoomToBox(bbox);
        } else{
            zoomToDefault();
        }
    } else {

    }
}
iconTrigger.click(function(){
    var iconID = $(this).attr('class');
    toggleIcons(iconID)
});


// $('.check-group input').click(function(e){
//   e.preventDefault();
// });

// map legend 
$('.check-group').click(function(){
    var el = $(this);
    var val = 0;
    if(el.hasClass('active')){
        el.removeClass('active');
        el.find('input').prop("checked", false)
        val = 0
    } else {
        el.addClass('active');
        el.find('input').prop("checked", true)
        val = 1
    }
    var iconID = el.find('span').attr('name');
    toggleIcons(iconID, val)
});



});// window

