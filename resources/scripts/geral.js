export default {
	init() {
		jQuery( document ).ready(function() {
			jQuery('#contato-whatsapp').mask('00 0000-00009');
			jQuery('#contato-whatsapp').keyup(function(event) {
			   if(jQuery(this).val().length == 13){ // Celular com 9 dígitos + 2 dígitos DDD e 4 da máscara
			      jQuery(this).mask('00 00000-0009');
			   } else {
			      jQuery(this).mask('00 0000-00009');
			   }
			});
		});


	},
};
