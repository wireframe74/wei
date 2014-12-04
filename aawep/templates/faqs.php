<?php 
/* Template Name: FAQS */
get_header(); ?>






	<main role="main">
		<!-- section -->
					<section>

						<?php if (have_posts()): while (have_posts()) : the_post(); ?>
						
									<article id="post-<?php the_ID(); ?>" <?php post_class('container-fluid'); ?>	>				
									<?php endwhile; ?>
									<?php endif; ?>

									
										<div class="row padding-vertical">
														  
														  
														
														

												<aside class="group col-sm-6 col-md-4 col-lg-4">
												<a href="<?php bloginfo('url'); ?>/faqs/faqs2/" class="courses-cta faq-cta course-2 cta"> 
												<h2>Frequently<br>Asked <br>Questions</h2>
												</a>
												</aside><!--/span-->
												
												
												
												<aside class="group col-sm-6 col-md-4 col-lg-4">
												 <a href="<?php bloginfo('url'); ?>/faqs/educational-partners/" class="about-cta course-2 cta"> 
												 <h2>Educational Partners</h2>
												</a>
												</aside><!--/span-->
												
												
												
												
												<aside class="group col-sm-6 col-md-4 col-lg-4">
												<a href="<?php bloginfo('url'); ?>/faqs/approved-conferences/" class="courses-cta fees-cta success-cta course-2 cta"> 
												<h2>Approved Conferences</h2>
												</a>
												</aside><!--/span-->
												
												
												<aside class="group col-sm-6 col-md-4 col-lg-4">
									            <a href="<?php bloginfo('url'); ?>/faqs/student-of-the-month/" class="student-cta cta video"> 
												<h2>Student <br>of the <br>Month</h2>
									            </a>
												</aside>
												
												<aside class="group  col-sm-6 col-md-4 col-lg-4">
												<a href="<?php bloginfo('url'); ?>/faqs/course-comparison/" class="courses-cta support advisory-cta cta"> 
												<h2>Comparison<br>Table</h2>
												</a>
												</aside><!--/span-->
												
											
												<aside class="group col-sm-6 col-md-4 col-lg-4">
												<a href="<?php bloginfo('url'); ?>/faqs/success-stories/" class="courses-cta students-cta  course-2 cta"> 
												<h2>Success Stories</h2>
												</a>
												</aside><!--/span-->
												
												
												
												
												
												
												
										
										
														
									
															
										</div><!--/row-->
									</article>
									
					
					
					
						   
					</section>
					<!-- /section -->
	</main>



<?php get_footer(); ?>
