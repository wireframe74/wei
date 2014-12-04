<?php 

/* Template Name: ASK ALISON - OLD */

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



	<ul class='etabs nav nav-tabs'>
    <li class='tab'><a href="#tab-overview">Overview</a></li>
    <li class='tab'><a href="#tab-google-hangouts">Google Hangouts</a></li>
    <li class='tab'><a href="#tab-wedbizhour">WedBizHour</a></li>
    <li class='tab'><a href="#tab-wei-tv">WEI TV</a></li>
    <li class='tab'><a href="#tab-podcast-series">Podcast Series</a></li>
    <li class='tab'><a href="#tab-ask-alison">Ask Alison</a></li>
    <li class='tab'><a href="#tab-monthly-message">Monthly Message</a></li>
	</ul>
 
<div class="container">
	<div id="tab-overview" class="tab-pane">
		<?php the_field('overview'); ?>
	</div>

	<div id="tab-google-hangouts" class="tab-pane">
		<h2>GOOGLE HANGOUTS</h2>
		<div class="span-lrg">
		<?php the_field('google_hangouts'); ?>
		</div>
		<div class="span-logo"><img src="<?php bloginfo('template_directory'); ?>/assets/images/wei-live.gif"  /></div>

		<div class="clear"></div>

		<h2>THE LATEST LIVE HANGOUT:</h2>

		<?php if(get_field('latest_hangout_image')): ?>
			<div class="img-wrapper">
				<a href="#" class="latest-hangout-link"></a>
				<img src="<?php the_field('latest_hangout_image'); ?>" class="img-responsive" alt="Latest Hangout" />
			</div>
			
		<?php endif; ?>


	</div>

	<div id="tab-wedbizhour" class="tab-pane">
		<h2>#WEDBIZHOUR</h2>
		<h4>The latest tweets from #wedbizhour with Alison.</h4>
		<?php the_field('wedbizhour'); ?>
	</div>



	<div id="tab-wei-tv" class="tab-pane">
		
		<div class="col-xs-12 col-md-6">
			<?php the_field('wei_tv'); ?>
		</div>

		<div class="col-xs-12 col-md-6">
			<img src="<?php bloginfo('template_directory' ); ?>/assets/images/tv-alison.jpg" alt="WEI TV" />
		</div>


	</div>

	<div id="tab-podcast-series" class="tab-pane">
	<h2>EPISODE 1:</h2>
	<h3>PODCAST TITLE TO GO HERE FOR EACH ONE</h3>
		<?php the_field('podcast_series'); ?>

		<img src="<?php bloginfo('template_directory'); ?>/assets/images/podcast-image.jpg" alt="Ask Alison Podcast"  />

</div>

	<div id="tab-ask-alison" class="tab-pane">

		<div class="col-xs-12 col-md-6">
			<?php the_field('ask_alison'); ?>
		</div>

		<div class="col-xs-12 col-md-6">
<section class="alison-date">
	<div class="info">
		<p>NEXT EVENT:</p>
		<h1>28:10:2014</h1>
		<p>NEW YORK<br>
		08:00</p>
	</div>
</section>


		</div>



	</div>

	<div id="tab-monthly-message" class="tab-pane">

	<h2>Monthly Message: <span class="primary-color"><?php echo date("F"); ?></span></h2>

	<?php if(get_field('monthly_message_image')): ?>
			<img src="<?php the_field('monthly_message_image'); ?>" class="img-responsive" alt="Monthly Message" />
	<?php endif; ?>


	<?php the_field('monthly_message'); ?>

	<p class="signature">Alison</p>
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
