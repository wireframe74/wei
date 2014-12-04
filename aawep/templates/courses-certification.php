<?php 
/* Template Name: COURSES CERTIFICATION */

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
			
					
					<aside class="group col-sm-6 col-md-3 col-lg-3">
					 <a href="<?php bloginfo('url'); ?>/products/wedding-planning-design-business-course/?comparison=true" class="courses-cta course-1 dark cta bg-cta"> 
					 <h2>Wedding Planning, Design and Business Course</h2>
					</a>
					</aside><!--/span-->
					
				
					<aside class="group col-sm-6 col-md-3 col-lg-3">
					 <a href="<?php bloginfo('url'); ?>/products/wedding-planning-event-planning-business-course-2/?comparison=true" class="courses-cta course-2 cta dblue "> 
					 <h2>Wedding Planning, Event Planning and Business Course</h2>
					</a>
					</aside><!--/span-->
					
					
					<aside class="group col-sm-6 col-md-3 col-lg-3">
					 <a href="<?php bloginfo('url'); ?>/products/wedding-and-event-planning-design-and-business-course-2/?comparison=true" class="courses-cta light-purple cta"> 
					 <h2>Wedding and Event Planning, Design, and Business Course</h2>
					</a>
					</aside><!--/span-->
					
					
					<aside class="group col-sm-6 col-md-3 col-lg-3">
					 <a href="<?php bloginfo('url'); ?>/products/wedding-professional-advanced-course/?comparison=true" class="courses-cta dark-purple cta"> 
					 <h2>Wedding Professional Advanced Course</h2>
					</a>
					</aside><!--/span-->
					
					
				
					
				
					
							
							
									   
									   
									   
									   
			
</div><!--/row-->
				  
			
		

		
			
			
			
		</div><!--/container-fluid-->
		</section>
		<!-- /section -->
	</main>
	
	
	
	


<?php get_footer(); ?>
