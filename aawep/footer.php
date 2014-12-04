<div class="main-footer"></div>
	  
	  <footer role="contentinfo">
		<div class="container-fluid"> 
	    <p><?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>, 
		all rights reserved. <a href="http://www.thosedigitalthoughts.com">Website Design Sydney</a>. + (800) 717 0958 + 
		<a href="<?php bloginfo('url'); ?>/faqs/">FAQ’S</a> + 
		<a href="<?php bloginfo('template_directory'); ?>/assets/docs/Schedule of Administrative Fees WEI.pdf" target="_blank">SCHEDULE OF FEES</a> + 
		<a href="<?php bloginfo('url'); ?>/affiliate-signup">BECOME AN AFFILIATE</a> + 
		
		<a href="<?php bloginfo('template_directory'); ?>/assets/docs/Student Policies and Procedures WEI.pdf" target="_blank">STUDENT POLICIES AND PROCEDURES</a> + 
		<a href="<?php bloginfo('url'); ?>/cookie-policy/">COOKIE POLICY</a></p>
	    </div>
	  </footer>
	  



<?php wp_footer(); ?>	 




	

	</div>
	


<?php if(is_page('contact')) { ?>
	
			<script type="text/javascript">
			jQuery(document).ready(
			function() { 
			jQuery('area[title]').qtip(
			{ style: { classes: 'myCustomClass' }
			}); 
			
			 jQuery('img[usemap]').rwdImageMaps();
			});

			</script>
	<?php } ?>
	
	
	
	<?php if(is_page('about') || $post->post_parent == '1830' || in_category(10) || $post_type == 'google-hangouts' || $post_type == 'podcast' || $post_type == 'wei-tv') : ?>
	
			<script type="text/javascript">
			jQuery(document).ready(
			function() { 
			 HeaderVideo.init({
			  container: jQuery('.header-video'),
			  header: jQuery('.header-video--media'),
			  videoTrigger: jQuery("#video-trigger"),
			  autoPlayVideo: false
			});    

			});

			</script>
	<?php endif; ?>
	
	
	
	<?php if(is_front_page()) { ?>
	<script type="text/javascript">
				jQuery(".enrol-button, #home-cta h3 ").fitText(.9, { minFontSize: '12px', maxFontSize: '19px' });
				jQuery("#home-cta h2").fitText(.9, { minFontSize: '27px', maxFontSize: '39px' });
			</script>
	<?php } ?>	




</body>
</html>