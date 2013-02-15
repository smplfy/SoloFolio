<?php
/* 
SoloFolio
Gallery Template: Default (Galleria Slideshow)
*/

$output .="<div class=\"galleria-wrap\"><div class=\"galleria galleria-container notouch\">";
$i = 0;

foreach ( $attachments as $id => $attachment ) {

	$link2 = wp_get_attachment_url($id);
	$link3 = wp_get_attachment_image_src($id, 'thumbnail');
	$link4 = wp_get_attachment_image_src($id, 'large');
	
	
	$output .= "
		
		<a href=\"" . $link4[0] . "\" rel=\"" . $link2 . "\">
			<img  class=\"full\" alt=\"" .  wptexturize($attachment->post_excerpt) . "\" src=\"". $link3[0] . "\"/>			
		</a>";
	$i++;

}


	$output .= "</div>";
	
	$output .= "<div class=\"galleriabar\">";
		$output .= "<div class=\"galleria-controls\">";
						if ($shownav != "false"){$output.= "<a class=\"prev\" href=\"#\">< prev</a>";}
						if ($showcounter != "false"){$output.= "<div class=\"galleria-counter\">
							<span class=\"index\"></span> of 
							<span class=\"total\"></span>
						</div>";}
						if ($shownav != "false"){$output.= "<a class=\"next\" href=\"#\">next ></a>";}
						if ($fullscreen != "false"){$output.= "<a class=\"fullscreen\" href=\"#\" title=\"Fullscreen\"></a>";}
						if ($showplay != "false"){$output.= "<a class=\"play\" href=\"#\" title=\"Slideshow\"></a>";}
						if ($showthumbnails != "false"){$output.= "<a class=\"toggle\" href=\"#\" title=\"Thumbnails\"></a>";}
					$output .= "</div>";
					if ($captions != "false"){$output.= "<div class=\"galleria-info\"></div>";}
	$output .= "</div></div>";



add_action('wp_footer', 'solofolio_slideshow_footer');
 
function solofolio_slideshow_footer() {
    
    global $solofolio_autoplay;
    global $solofolio_transition;
    
    $output .="<script type=\"text/javascript\" src=\"" . get_bloginfo('template_url') . "/includes/gallery/js/galleria.solofolio.js\"></script>";
    
    $output .= " <script type=\"text/javascript\">$('.galleria').galleria({";
		if ($solofolio_transition != ""){$output.= "transition: '" .  $solofolio_transition . "',";}
		if ($solofolio_autoplay == "true"){$output.= "autoplay: true,";}
		//if ($width != ""){$output.= "width: " .  $width . ",";} // Just going to force responsive for now
		if ($height != ""){$output.= "height: " .  $height . ",";} else {$output.= "height: .667,";}
		$output .= $transition;
		$output.="swipe: true,";
		$output.="responsive: true,";
		$output.="maxScaleRatio: 1,";
		$output.="trueFullscreen: true";

	$output.= " });";
	
	$output.= "Galleria.ready(function() {
				var gallery = this, data;
				this.addElement('exit').appendChild('container','exit');
				var btn = this.$('exit').hide().text('Close').click(function(e) {
					gallery.exitFullscreen();
				});
				this.bind('fullscreen_enter', function() {
					btn.show();
				});
				this.bind('fullscreen_exit', function() {
					btn.hide();
				});
				$('.prev').click(function() {
					gallery.prev();
				});
				$('.next').click(function() {
					gallery.next();
				});
				$('.fullscreen').click(function() {
					gallery.toggleFullscreen();
				});
				$('.play').click(function() {
					gallery.playToggle();
					$('.play').toggleClass(\"playing\");
				});
				$('.toggle').click(function() {
					gallery.$('thumblink').click();
				});
				this.bind('image', function(e) {
					data = e.galleriaData;
					$('.galleria-info').html('<div class=\"galleria-info-description\">'+data.description+'</div>' );
				});
				this.bind('image', function(e) {
					data = e.index;
					$('.index').html(data + 1);
				});
				this.bind('image', function(e) {
					data = e.index;
					$('.index').html(data + 1);
				});
				$('.total').append(this.getDataLength());
			});";
	
	$output.= "</script>";
	
	$output.= "\n<style>";
	
	if ($showthumbnails== "false"){
		$output.= ".galleria-thumblink {display:none} ";
		};
		
	if ($showplay== "false"){
		$output.= ".galleria-play {display:none} ";
		};
	
	$output.="</style>\n";


     
    echo $output;
 
}

?>
