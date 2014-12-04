<?php 
/* Template Name: FORM */
get_header(); ?>

		<main role="main">
		<!-- section -->
		<section>
		
		
		<div class="container-fluid">
		
			<div class="container content">
			<div class="row">
							  
			 <?php
			 if ( have_posts() ) {
			 while ( have_posts() ) {
			 the_post(); ?>

			

			<h2><?php the_title(); ?></h2>

		
				
			</div><!--/row-->
			</div><!--/container-->
		 </div><!--/container-fluid-->
		
		
		  <div class="container-fluid contact-form-wrap">
		
        
				<div class="container">
				
							<div class="col-md-12">
							
								<div class="col-md-12">
								<?php						
												 the_content(); 


													} // end while
												} // end if
									//gravity_form(4, $display_title=false, $display_description=false, $display_inactive=false, $field_values=null, $ajax=true, $tabindex); 		
				

						?>

		<?php edit_post_link(); ?>

			</div><!-- span -->
							</div><!-- span -->
								 
						  
			   </div><!-- container -->
                        
                  
		</div><!-- container-fluid-->
        
        
        
        
</section>
</main>
	
	
	
	
	
		
	


<?php get_footer(); ?>
