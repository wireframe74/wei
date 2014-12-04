    <!-- Main component for a primary marketing message or call to action -->
		 
		 <?php if (is_category()) : 
		      
			  $this_category = get_category($cat); 
		      $catheading = $this_category->category_nicename;
		      query_posts( "posts_per_page=1&category_name=$catheading" );

		  endif; ?>

		 

		     		<?php  if (have_posts()): while (have_posts()) : the_post(); ?>	  
					 


					<div class="slider-feature col-md-12 <?php echo $catheading; ?>" >

					
<!-- <img src="http://www.aawep.com.au/aawep2014/wp-content/themes/au-blog/assets/images/category-headers/home.jpg" class="img-responsive" /> -->

					<style>

						<?php if(get_field('header_image_2')) : ?>

							.slider-feature {
							height:485px;
							background:url(<?php the_field('header_image_2'); ?>) top left no-repeat;
							background-position: center center;
							}

							<?php else: ?>

							.slider-feature  {
							   background: url('http://www.aawep.com.au/aawep2014/wp-content/themes/au-blog/assets/images/category-headers/home.jpg') top left no-repeat;
							background-position: center center;
							}

						<?php endif; ?>

					</style>





					<div class="medium-col-wrap"> 
							
									


									<section class="medium-col">
										<h1><?php the_title(); ?></h1>

											<?php edit_post_link('Edit Post', '<p>', '</p>'); ?>
											<p><?php the_time('F j, Y'); ?> by <?php the_author(); ?></p>
											 <?php wp_count_comments(); ?> 
											
											<?php if(!is_single())  : ?>
											<p><a class="btn btn-lg btn-primary" href="<?php the_permalink(); ?>" role="button">View</a></p>
											<?php endif; ?>
									</section>
							   
							</div><!--medium-col-wrap -->
					 </div>
			<?php endwhile;  ?>
			<?php  endif;  ?>
			<?php  wp_reset_query(); ?>


			