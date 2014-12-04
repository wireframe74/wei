<?php 
/* TEMPLATE NAME: STANDARD PAGE */
get_header(); ?>

	<main role="main" class="inner-shadow">
		<section>

			<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			
				<article id="post-<?php the_ID(); ?>" <?php post_class('container'); ?>	>

			
					<div class="row-fluid padding-vertical">
							  
							 	<div class="col-md-6 left-column">
								<h2><?php the_title(); ?></h2>
								<?php the_field('left_column'); ?>
								</div><!--/span-->
							   
							    <div class="col-md-6 padding-top">
								<?php the_field('right_column'); ?>
						

					</div><!--/span-->
									
					<div class="enrollment-links col-md-12">

					<?php if(is_page('certification')): ?>
					<a class="btn large-button btn-lg btn-primary" href="<?php bloginfo('url'); ?>/products/certified-wedding-professional-exam?certAppForm=true">Apply Now</a>
					<?php endif; ?>

<?php if(is_page('brochure-download')): ?>
<!-- Google Code for Brochure Form Completions Conversion Page -->

<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 969274808;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "1yKhCNiU4wkQuOuXzgM";
var google_remarketing_only = false;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/969274808/?label=1yKhCNiU4wkQuOuXzgM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
<?php endif; ?>



					<?php if ( $post->post_parent == '836' || is_page(952)) { ?>
						
				<a class="btn large-button btn-lg btn-primary" href="<?php bloginfo('url'); ?>/products/<?php the_slug();?>?hideDescription=true">Sign Up</a>
				
	                <?php } ?>

								<a class="btn enrolment-btn back btn-default pull-right" href="#">Back</a>
								</div>
								
								<?php edit_post_link(); ?>
								
							</div><!--/row-->


	

				  
			   </article>
			   
			   
		<?php endwhile; ?>
		<?php else: ?>
		
		<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
		</article>
		<!-- /article -->

		<?php endif; ?>
		<?php wp_reset_query(); ?>
		
		
		
		
			   
		</section>
	</main>

<?php get_footer(); ?>