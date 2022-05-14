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
