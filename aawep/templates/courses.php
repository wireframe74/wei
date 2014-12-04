<?php 
/* Template Name: COURSES NEW */

get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>
	<div class="container">
		<div class="col-md-12">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php the_content( ); ?>
		<?php endwhile; else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>
	</div>
	</div>
	
	<div class="container-fluid">
		
		
				  	  
					<div class="row padding-vertical">
			
	
				
					<aside class="group col-sm-6 col-md-4 col-lg-4">
					 <a href="<?php bloginfo('url'); ?>/courses/certification-courses/" class="courses-cta course-2 cta"> 
					 <h2>Certification Courses</h2>
					</a>
					</aside><!--/span-->
					
					
					<aside class="group col-sm-6 col-md-4 col-lg-4">
					 <a href="<?php bloginfo('url'); ?>/courses/courses-self-study/" class="courses-cta light-purple cta"> 
					 <h2>Self-Study Courses</h2>
					</a>
					</aside><!--/span-->
					
					
					<aside class="group col-sm-6 col-md-4 col-lg-4">
					 <a href="<?php bloginfo('url'); ?>/courses/courses-university/" class="courses-cta dark-purple cta"> 
					 <h2>School &amp; University Classes</h2>
					</a>
					</aside><!--/span-->

					<aside class="group col-sm-6 col-md-4 col-lg-4" style="display: none;">
					 <a href="<?php bloginfo('url'); ?>/products/dummy-course-for-paypal/" class="courses-cta dark-purple cta"> 
					 <h2>Course Affiliate</h2>
					</a>
					</aside><!--/span-->
					
					
				

					
				
					
							
							
									   
									   
									   
									   
			
</div><!--/row-->
				  
			
		

		
			
			
			
		</div><!--/container-fluid-->
		</section>
		<!-- /section -->
	</main>
	
	
	
	


<?php get_footer(); ?>
