<?php 
/* Template Name: COURSES SELF STUDY */

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
					 <a href="<?php bloginfo('url'); ?>/products/wedding-planning-basics-course/?self-study=true" class="courses-cta  course-1 dark cta bg-cta"> 
					 <h2>Wedding Planning Basics Course</h2>
					</a>
					</aside><!--/span-->
					
					
					
					<aside class="group col-sm-6 col-md-3 col-lg-3">
					 <a href="<?php bloginfo('url'); ?>/products/wedding-design-basics-course/?self-study=true" class="courses-cta green cta"> 
					 <h2>Wedding Design Basics Course</h2>
					</a>
					</aside><!--/span-->
					
					
					<aside class="group col-sm-6 col-md-3 col-lg-3">
					 <a href="<?php bloginfo('url'); ?>/products/wedding-business-basics-course/?self-study=true" class="courses-cta light-purple cta"> 
					 <h2>Wedding Business Basics Course</h2>
					</a>
					</aside><!--/span-->
					
					
					<aside class="group col-sm-6 col-md-3 col-lg-3">
					 <a href="<?php bloginfo('url'); ?>/products/event-planning-basics-course/?self-study=true" class="courses-cta dark-purple cta"> 
					 <h2>Event Planning Basics Course</h2>
					</a>
					</aside><!--/span-->
					
					
				
					
				
					
							
							
									   
									   
									   
									   
			
</div><!--/row-->
				  
			
		

		
			
			
			
		</div><!--/container-fluid-->
		</section>
		<!-- /section -->
	</main>
	
	
	
	


<?php get_footer(); ?>
