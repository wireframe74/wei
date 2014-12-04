<?php 
/* Template Name: GOOGLE ANALYTICS */
get_header(); ?>

		<main role="main">
		<!-- section -->
		<section>
		
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		
		
		<div class="container-fluid" id="post-<?php the_ID(); ?>" <?php post_class('container'); ?>	>
		
					<div class="container content">
					
							<div class="row padding-vertical">
											  
									<div class="col-md-10 offset-3">
									<h2><?php the_title(); ?></h2>
									<?php the_field('ga_code'); ?>
									</div>
									<!--span-->
								<?php edit_post_link(); ?>
							</div><!--/row-->
					</div><!--/container content-->

		

			





		 </div><!--/container-fluid-->
		
		<?php endwhile; ?>
		<?php endif; ?>
		
		
		</section>
		</main>
	


<?php get_footer(); ?>
