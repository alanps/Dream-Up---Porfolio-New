<?php 


/*

  =====================================================================
    Script desenvolvido por Alan Pardini Sant'Ana - www.alanps.com.br
  =====================================================================

*/



$musicas = "/wp-content/themes/dreamup/resources/musicas";
$scripts = "/wp-content/themes/dreamup/resources/scripts";

add_action('wp_enqueue_scripts', function () {
    if (!is_admin()) {
        wp_enqueue_script('jquery');
    }
}, 100);

?>

<style>
  body 
  {
  font-family: PF1; 
  font-size:11px; 
  color: #000000; 
  }
  .audiojs { height: 22px; background: #404040;
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, #444), color-stop(0.5, #555), color-stop(0.51, #444), color-stop(1, #444));
    background-image: -moz-linear-gradient(center top, #444 0%, #555 50%, #444 51%, #444 100%);
    -webkit-box-shadow: 1px 1px 8px rgba(0, 0, 0, 0.3); -moz-box-shadow: 1px 1px 8px rgba(0, 0, 0, 0.3);
    -o-box-shadow: 1px 1px 8px rgba(0, 0, 0, 0.3); box-shadow: 1px 1px 8px rgba(0, 0, 0, 0.3); }
  .audiojs .play-pause { width: 15px; height: 20px; padding: 0px 8px 0px 0px; }
  .audiojs p { width: 25px; height: 20px; margin: -3px 0px 0px -1px; }
  .audiojs .scrubber { background: #5a5a5a; width: 310px; height: 10px; margin: 5px; }
  .audiojs .progress { height: 10px; width: 0px; background: #ccc;
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, #ccc), color-stop(0.5, #ddd), color-stop(0.51, #ccc), color-stop(1, #ccc));
    background-image: -moz-linear-gradient(center top, #ccc 0%, #ddd 50%, #ccc 51%, #ccc 100%); }
  .audiojs .loaded { height: 10px; background: #000;
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, #222), color-stop(0.5, #333), color-stop(0.51, #222), color-stop(1, #222));
    background-image: -moz-linear-gradient(center top, #222 0%, #333 50%, #222 51%, #222 100%); }
  .audiojs .time { float: left; height: 25px; line-height: 25px; }
  .audiojs .error-message { height: 24px;line-height: 24px; }

  .track-details { clear: both; height: 20px; width: 448px; padding: 1px 6px; background: #eee; color: #222; font-family: monospace; font-size: 11px; line-height: 20px;
    -webkit-box-shadow: inset 1px 1px 5px rgba(0, 0, 0, 0.15); -moz-box-shadow: inset 1px 1px 5px rgba(0, 0, 0, 0.15); }
  .track-details:before { content: '♬ '; }
  .track-details em { font-style: normal; color: #999; }
</style>

<script src="<?php echo $scripts; ?>/libs/audio.min.js"></script>
<script>
      jQuery(function() { 
        // Setup the player to autoplay the next track
        var a = audiojs.createAll({
          trackEnded: function() {
            var next = jQuery('ol li.playing').next();
            if (!next.length) next = jQuery('ol li').first();
            next.addClass('playing').siblings().removeClass('playing');
            audio.load(jQuery('a', next).attr('data-src'));
            audio.play();
          }
        });
        
        // Load in the first track
        var audio = a[0];
            first = jQuery('ol a').attr('data-src');
        jQuery('ol li').first().addClass('playing');
        audio.load(first);

        // Load in a track on click
        jQuery('ol li').click(function(e) {
          e.preventDefault();
          jQuery(this).addClass('playing').siblings().removeClass('playing');
          audio.load(jQuery('a', this).attr('data-src'));
          audio.play();
        });
        // Keyboard shortcuts
        jQuery(document).keydown(function(e) {
          var unicode = e.charCode ? e.charCode : e.keyCode;
             // right arrow
          if (unicode == 39) {
            var next = jQuery('li.playing').next();
            if (!next.length) next = jQuery('ol li').first();
            next.click();
            // back arrow
          } else if (unicode == 37) {
            var prev = jQuery('li.playing').prev();
            if (!prev.length) prev = jQuery('ol li').last();
            prev.click();
            // spacebar
          } else if (unicode == 32) {
            audio.playPause();
          }
        })
      });
    </script>
	<center>
<audio autoplay></audio>
	  </center>

      <ol>
        <li><a href="#" data-src="<?php echo $musicas; ?>/musicas/MReadyorNot(1996).mp3">Ready or Not - The Fugges</a></li>
		<li><a href="#" data-src="<?php echo $musicas; ?>/musicas/MMaryjane.mp3">Mary Jane - Planet Hemp</a></li>
		<li><a href="#" data-src="<?php echo $musicas; ?>/musicas/MWelcomeToJamrock.mp3">Welcome to Jamrock - Damian Marley</a></li>
		<li><a href="#" data-src="<?php echo $musicas; ?>/musicas/MPaperPlanes.mp3">Paper Planes - MIA</a></li>
		<li><a href="#" data-src="<?php echo $musicas; ?>/musicas/MBossLife.mp3">Boss Life - Snoop Dogg</a></li>
		<li><a href="#" data-src="<?php echo $musicas; ?>/musicas/MMoMoney.mp3">Mo Money Mo Problem - The Notorious Big</a></li>
		<li><a href="#" data-src="<?php echo $musicas; ?>/musicas/MCoolio2.mp3">Geto Highlites - Coolio</a></li>
		<li><a href="#" data-src="<?php echo $musicas; ?>/musicas/M2pac.mp3">To Live and Die in L.A. - 2Pac</a></li>
		<li><a href="#" data-src="<?php echo $musicas; ?>/musicas/MNeverLeaveMe.mp3">Never Leave Me Alone - Nate Dogg Featuring Snoop Dogg</a></li>
		<li><a href="#" data-src="<?php echo $musicas; ?>/musicas/MKillingMeSoftly.mp3">Killing me Softly - The Fugees</a></li>
		<li><a href="#" data-src="<?php echo $musicas; ?>/musicas/MRoadToZion.mp3">Road to Zion - Damian Marley</a></li>
		<li><a href="#" data-src="<?php echo $musicas; ?>/musicas/MCoolio.mp3">Gangsta's Paradise - Coolio</a></li>
		<li><a href="#" data-src="<?php echo $musicas; ?>/musicas/M2pac2.mp3">Me Against the World Paradise - 2Pac</a></li>		
      </ol>
