export default {
	init() {

		var $ = require('jquery');

		$( document ).ready(function() {
			console.log( "ready!" );

      var el = $(".carrousel");

      var slide_first = 0;
      var slide_visible = 1;


			//////////////////////////////////////////////
			//troca de paginas no carousel
			$(".setas-slider .seta-direita").on("click", function() {
				if (slide_visible <= el.find(".slide").length-1) {
					el.find(".slide" + slide_visible).addClass("active");
					el.find(".slide" + slide_first).removeClass("active");
					slide_first = slide_first + 1;
					slide_visible = slide_visible + 1;
				}
			});

			$(".setas-slider .seta-esquerda").on("click", function() {
				if (slide_first >= 1) {
					slide_first = slide_first - 1;
					slide_visible = slide_visible - 1;
					el.find(".slide" + slide_visible).removeClass("active");
					el.find(".slide" + slide_first).addClass("active");
				}
			});


      //////////////////////////////////////////////
      //lightbox
      el.find(".lightbox").on("click", function(e) {
        $("body").append("<div class='lightbox-div'><div class='lightbox-imgs'></div><div class='setas-lightbox'><i class='fa-solid fa-arrow-left seta-esquerda setas'></i><i class='fa-solid fa-arrow-right seta-direita setas'></i></div></div>");
        var click_lightbox = $(this).find(".box img").data("key");
        $(this).parents('.thumbs').find('.lightbox').each(function(index){
        	var lightbox_active = "";
        	if(index == click_lightbox){
        		lightbox_active = "active";
        	}
        	$(".lightbox-div .lightbox-imgs").append("<img class='lightbox-img no-lazy "+index+" "+lightbox_active+"' data-id='"+index+"' src='"+$(this).find(".box img").attr("src")+"'>");
        });
        $("body").css("overflow", "hidden");
        let viewportmeta = document.querySelector('meta[name="viewport"]');
        viewportmeta.setAttribute('content', "initial-scale=1.0, user-scalable=yes");
        e.stopPropagation();
        e.preventDefault();
        return false;
      });

			//////////////////////////////////////////////
			//troca de paginas no carousel
      $(document).on("click", ".lightbox-div .seta-direita",function(e){
      	var lightbox_slide_first = 0;
      	var lightbox_slide_total = $(".lightbox-div .lightbox-img").length-1;
      	var lightbox_slide_active = $(".lightbox-div .lightbox-img.active").data('id');
			$(document).on("keyup", "body", function(e) {
				if ($(".lightbox-div").length > 0) {
					if (e.keyCode == 37) {
						$(".lightbox-div .seta-esquerda").trigger('click');
					}
					if (e.keyCode == 39) {
						$(".lightbox-div .seta-direita").trigger('click');
					}
				}
			});

				if (lightbox_slide_active < lightbox_slide_total) {
        	var lightbox_slide_active_new = lightbox_slide_active+1;
					$(".lightbox-div .lightbox-img[data-id='" + lightbox_slide_active_new + "']").addClass("active");
					$(".lightbox-div .lightbox-img[data-id='" + lightbox_slide_active + "']").removeClass("active");
					lightbox_slide_active = lightbox_slide_active + 1;
				}
			});

      $(document).on("click", ".lightbox-div .seta-esquerda",function(e){
      	var lightbox_slide_first = 0;
      	var lightbox_slide_total = $(".lightbox-div .lightbox-img").length-1;
      	var lightbox_slide_active = $(".lightbox-div .lightbox-img.active").data('id');
				if (lightbox_slide_active > lightbox_slide_first) {
        	var lightbox_slide_active_new = lightbox_slide_active-1;
					$(".lightbox-div .lightbox-img[data-id='" + lightbox_slide_active_new + "']").addClass("active");
					$(".lightbox-div .lightbox-img[data-id='" + lightbox_slide_active + "']").removeClass("active");
					lightbox_slide_active = lightbox_slide_active - 1;
				}
      });

      $(document).on("click", "html",function(e){
    		if($(e.target).hasClass('setas')){
    			return;
    		}
        if ($(".lightbox-div").length > 0) {
            $("body").find(".lightbox-div").remove();
            $("body").css("overflow", "auto");
            let viewportmeta = document.querySelector('meta[name="viewport"]');
            viewportmeta.setAttribute('content', "width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no");
        }
      });
		});

	},
};
