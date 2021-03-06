<?php 
 /* Template Name: ASK ALISON - MONTHLY MESSAGE */
 get_header();
 ?>


<main role="main">
		<!-- section -->
		<section>
			<article id="post-<?php the_ID(); ?>" class="paymentPage">
				<div class="container-fluid tab-nav-bg"></div>
	

<?php 


	$args = array(
 		'cat' => 10,
		'post_type' => 'post', 
		'posts_per_page'         => 1,
		'order'               => 'DESC',
		'orderby'             => 'date',
 		);

$query = new WP_Query( $args );
 while ($query->have_posts()) : $query->the_post(); ?>
	

<!-- COURSE INFO TABS -->

<div  class="tab-container container-fluid tabbed-content-margin">

<?php include_once('aa-nav.php'); ?>
	
 
<div class="container">

	   <div id="tab-monthly-message" class="tab-pane active">


		<h2>Monthly Message:
		<span class="primary-color date"><?php the_time('F'); ?></span>
		</h2>


			<?php  if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'full', array('class' => ' img-responsive' )); ?>
			<?php endif; ?>

			<?php the_content(); ?>

			<p class="signature">Alison</p>
			<?php endwhile; ?>
<?php wp_reset_postdata(); ?>

<div class="clear"></div>

<?php 
		$args2 = array(
	 		'cat' => 10,
			'post_type' => 'post', 
			'posts_per_page' => 2,
			'order'               => 'DESC',
			'orderby'             => 'date',
			
	 		);

	 $query2 = new WP_Query( $args2 );
	?>


	<?php while ($query2->have_posts()) : $query2->the_post(); ?>
		
		<aside class="col-sm-6">
		
			<h2>Monthly Message: <br>
			<span class="primary-color date"><?php the_time('F'); ?></span>
			</h2>

			<p><?php the_excerpt(); ?></p>
			<p><a href="<?php the_permalink(); ?>">Read More</a></p>
		</aside>

	<?php endwhile; ?>
	<?php wp_reset_postdata(); ?>

<select ONCHANGE="location = this.options[this.selectedIndex].value;" class="col-xs-12 col-sm-6 pull-right form-control archive-select">

		<option value="">View WEI Inspire Archives</option>

			<?php 
			$args3 = array(
	 		'cat' => 10,
			'post_type' => 'post', 
			'posts_per_page' => 100,
			'order'               => 'DESC',
			'orderby'             => 'date'
	 		);

			 $query3 = new WP_Query( $args3 );
			?>

	<?php while ($query3->have_posts()) : $query3->the_post(); ?>

		<option value="<?php the_permalink(); ?>"><?php the_title(); ?>, <?php the_time('Y'); ?></option>
	
	<?php endwhile; ?>
	<?php wp_reset_postdata(); ?>

</select>


		</div>

</div> <!-- .container -->




</div><!-- tab-container -->
</div> <!-- .container-fluid .nav-bg -->





<div class="clear"></div>
</article>
		</section>
		<!-- /section -->
</main>
<?php get_footer(); ?>
