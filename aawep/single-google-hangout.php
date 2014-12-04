<?php get_header(); ?>


	<main role="main">
		<!-- section -->
		<section>
			<article id="post-<?php the_ID(); ?>" class="paymentPage">
				<div class="container-fluid tab-nav-bg"></div>
	

					<?php 
					$args = array(
				 		
						'post_type' => 'google_hangouts', 
						'posts_per_page'         => 1,
				 		);

					$query = new WP_Query( $args );
					 while ($query->have_posts()) : $query->the_post(); ?>
										

					<!-- COURSE INFO TABS -->

					<div class="tab-container container-fluid tabbed-content-margin">

							<?php include_once('templates/aa-nav.php'); ?>

							<div class="container">

							<div id="tab-google-hangouts" class="tab-pane">

								<h2>GOOGLE HANGOUTS: <span class="primary-color"><?php the_title(); ?></span></h2>


								
									<div class="col-xs-12">
									<?php the_content(); ?> 
									
								</div>


								<div class="clear"></div>

							

							</div>
							</div> <!-- .container -->
							</div><!-- tab-container -->
							<?php endwhile; ?>
							<?php rewind_posts(); ?>

					</div> <!-- .container-fluid .nav-bg -->


	</div>
</section>




<div class="clear"></div>
</article>
</section><!-- /section -->
</main>
<?php get_footer(); ?>
