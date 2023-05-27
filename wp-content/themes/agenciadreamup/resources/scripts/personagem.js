(function($) {

  jQuery(document).ready(function() {
    jQuery(".fancybox-button").fancybox({
      playSpeed     : 500,
      prevEffect    : 'none',
      nextEffect    : 'none',
      closeBtn    : false,
      loop      : false,
      showNavArrows	: true,
      afterShow: function() {
          jQuery(".fancybox-title").wrapInner('<div />').show();
          
          jQuery(".fancybox-wrap").hover(function() {
              jQuery(".fancybox-title").show();
          }, function() {
              jQuery(".fancybox-title").hide();
          });
      },
      helpers : {
          title: {
              type: 'over'
          }
      },
      buttons : {}
    });

    jQuery(".fancybox-button2").fancybox({
      playSpeed     : 500,
      prevEffect    : 'none',
      nextEffect    : 'none',
      closeBtn    : false,
      loop      : false,
      showNavArrows	: true,
      afterShow: function() {
          jQuery(".fancybox-title").wrapInner('<div />').show();
          
          jQuery(".fancybox-wrap").hover(function() {
              jQuery(".fancybox-title").show();
          }, function() {
              jQuery(".fancybox-title").hide();
          });
      },
      helpers : {
          title: {
              type: 'over'
          }
      },
      buttons : {}
    });

    $(".artes4").on("DOMSubtreeModified", function() { 
      jQuery(".fancybox-button3").fancybox({
        playSpeed     : 500,
        prevEffect    : 'none',
        nextEffect    : 'none',
        closeBtn    : false,
        loop      : false,
        showNavArrows	: true,
        afterShow: function() {
            jQuery(".fancybox-title").wrapInner('<div />').show();
            
            jQuery(".fancybox-wrap").hover(function() {
                jQuery(".fancybox-title").show();
            }, function() {
                jQuery(".fancybox-title").hide();
            });
        },
        helpers : {
            title: {
                type: 'over'
            }
        },
        buttons : {}
      });
    });

  });

})(jQuery)

