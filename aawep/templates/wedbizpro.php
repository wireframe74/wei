<?php 
/* Template Name: WED BIZ PRO */
get_header(); ?>

		<main role="main">
		<!-- section -->
		<section>
		
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	
		<div class="container content">
				<div class="row">
								  
						<div class="col-md-10 offset-3">
						<h2><?php the_title(); ?></h2>
						<?php the_content(); ?>
						</div><!--span-->
					<?php edit_post_link(); ?>
				</div><!--/row-->
		</div> <!--/container-->


		
<div class="container-fluid">	
	<div class="row">
		
		<?php $count = 0; ?>
		
		
		<?php while(the_repeater_field('partners')): ?>
		<?php  $count++; ?>
			
			

			<aside class="group col-sm-6 col-md-4 col-lg-3">
			
				<a class="cta cta-white parnter-widget" target="_blank" href="<?php the_sub_field('link'); ?>">
				
				<div class="partner-logo">
				<img src="<?php the_sub_field('logo'); ?>" class="img-responsive" />
				<h3>VISIT THE WEBSITE</h3>
				</div>
				
				</a>
				
			</aside><!--/span-->
			
			
	
			
			
			
		<?php endwhile; ?>


		<div class="enrollment-links col-md-12">	
								<a class="btn enrolment-btn back btn-default pull-left" href="#">Back</a>
								</div>

			</div><!--/row-->
		 </div><!--/container-fluid-->
		
<?php endwhile; ?>	
<?php endif; ?>

		
		
		
		</section>
		</main>
	


<?php get_footer(); ?>
