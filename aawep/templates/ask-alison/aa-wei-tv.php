<?php 

/* Template Name: ASK ALISON - WEI TV */

get_header();  

 ?>


	<main role="main">
		<!-- section -->
		<section>
			<article id="post-<?php the_ID(); ?>" class="paymentPage">
				<div class="container-fluid tab-nav-bg"></div>
	

<?php while (have_posts()) : the_post(); ?>
	

<!-- COURSE INFO TABS -->

<div id="tab-container" class="tab-container container-fluid tabbed-content-margin">

<?php include_once('aa-nav.php'); ?>
	
 
<div class="container">

   <div id="tab-wei-tv" class="tab-pane active">
		
		<div class="col-xs-12 col-md-6">
			<?php the_field('wei_tv'); ?>
		</div>

		<div class="col-xs-12 col-md-6">
			<img src="<?php bloginfo('template_directory' ); ?>/assets/images/tv-alison.jpg" alt="WEI TV" />
		</div>
 	</div>



	

	

</div> <!-- .container -->
</div><!-- tab-container -->


<?php endwhile; ?>


<?php $args = array('post_type' => 'wei_tv',);
$the_query = new WP_Query( $args ); ?>

<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

<aside class="group col-xs-12 col-sm-6 col-md-3 col-lg-3">
								
			<a class="cta cta-white video no-padding href="#">
			<div class="video-container">
			
				<?php $embed_code = wp_oembed_get(get_field('video_url') );
				echo $embed_code;
				?>
			
			</div>

		
			
			<div class="video-caption">
			<h3><?php the_title(); ?></h3>
			
			<?php 

			$date = get_sub_field('date');
			// $date = 19881123 (23/11/1988)
			 
			// extract Y,M,D
			$y = substr($date, 0, 4);
			$m = substr($date, 4, 2);
			$d = substr($date, 6, 2);
			 
			
			$time = strtotime("{$d}-{$m}-{$y}");
			 
		  ?>
			
			<date>Published on <?php echo date('d/m/Y', $time); ?></date>

			</div>
			
			</a>
									
</aside><!--/span-->
<?php endwhile; endif; ?>



</div> <!-- .container-fluid .nav-bg -->





<div class="clear"></div>
</article>
		</section>
		<!-- /section -->
	</main>
<?php get_footer(); ?>
