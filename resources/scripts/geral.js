// import external dependencies
import $ from "jquery";
// import components
import Carrousel from './components/carrousel';
Carrousel.init();

jQuery('body').on('click', 'a', function(e) {
	if(jQuery(this).attr("href") == window.location.origin+"/curriculum/"){
		window.open(window.location.origin+"/curriculum", "_blank");
		e.preventDefault();
		e.stopPropagation();
		return;
	}
});

jQuery('body').on("scroll", function(){
	var offset = jQuery('body').scrollTop();
	var header = jQuery('header').height();
	var thumbs_container = jQuery('.slide.active').height();

    if(jQuery('html').width() <= 565){
        jQuery('.bloco-eu').css('background-position' , 'center '+(((offset - header)/2.5 )-50)+'px');
        jQuery('.bloco-curriculum').css('background-position' , 'center '+(((offset - header)/10 )+50)+'px');
    } else if(jQuery('html').width() >= 768 && jQuery('html').width() <= 1024){
        jQuery('.bloco-eu').css('background-position' , 'center '+(((offset - header)/2.5 )-320)+'px');
        jQuery('.bloco-curriculum').css('background-position' , 'center '+(((offset - header)/10 )-40)+'px');
    } else {
        jQuery('.bloco-eu').css('background-position' , 'bottom');
        jQuery('.bloco-curriculum').css('background-position' , 'top');
    }

});


jQuery('body').on("scroll", function(){

    if(jQuery(".slide.active .lightbox").length % 2 == 1){
        var op = 1;
    } else {
        var op = 2;
    }
    
	var offset = jQuery('body').scrollTop();
	var header = jQuery('header').height();
	var thumbs_container = jQuery('.slide.active').height();
    console.log(thumbs_container);
    console.log(header);
    console.log(offset);
    console.log((((offset - header)/2.5 )));
    console.log((((offset - header)/6 )));
    console.log((((offset - header)/9 )));
    console.log((((offset - header)/11 )));
    console.log(jQuery(".slide.active .lightbox").length);/*6,9,11*/
    console.log(jQuery(".slide.active .lightbox").length*2);
    console.log(jQuery(".slide.active .lightbox").length % 2 == 1);
    console.log(((jQuery(".slide.active .lightbox").length*2)+op));
    console.log((((offset - header)/(jQuery(".slide.active .lightbox").length*2)+op)+29));

    if(jQuery('html').width() <= 565){
        jQuery('.bloco-eu').css('background-position' , 'center '+(((offset - header)/2.5 )-50)+'px');
        jQuery('.bloco-curriculum').css('background-position' , 'center '+(((offset - header)/(jQuery(".slide.active .lightbox").length*2)+op)+29)+'px');
    } else if(jQuery('html').width() >= 768 && jQuery('html').width() <= 1024){
        jQuery('.bloco-eu').css('background-position' , 'center '+(((offset - header)/2.5 )-320)+'px');
        jQuery('.bloco-curriculum').css('background-position' , 'center '+(((offset - header)/10 )-40)+'px');
    } else {
        jQuery('.bloco-eu').css('background-position' , 'bottom');
        jQuery('.bloco-curriculum').css('background-position' , 'top');
    }
});
