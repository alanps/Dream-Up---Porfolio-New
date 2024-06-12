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
