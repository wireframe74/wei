<?php get_header();  
foxyshop_include('header');
 ?>


	<main role="main">
		<!-- section -->
		<section>
			<article id="post-<?php the_ID(); ?>" class="paymentPage">
				<div class="container-fluid tab-nav-bg"></div>
	

<?php
while (have_posts()) : the_post();

//Check For Post Required
	if (post_password_required()) {
		?>

	

			

<div class="container password-wrapper">
		<?php echo '<h2>' . apply_filters('the_title', $product['name']) . '</h2>'; ?>
		<form method="post" action="<?php bloginfo("wpurl"); ?>/wp-login.php?action=postpass" class="validate login-discount form-inline">
		<p>This product is password protected. To view it please enter your password below:</p>

		<input type="password" size="20" id="pwbox-531" class="form-control" name="post_password"/>
		<input type="submit" value="Submit" name="Submit" class="foxyshop_button" class="form-control" />
		</form>
</div>
	<?php		
		break;
	}
												





	
	//Initialize Product
	global $product;
	$product = foxyshop_setup_product();
	
	//This is for testing to see what is included in the $product array
	//print_r($product);

	//Initialize Form
	foxyshop_start_form();
	foxyshop_build_image_slideshow("prettyPhoto", true);
	?>
	

<!-- COURSE INFO TABS -->
<div class="container">
<div id="tab-container" class="tab-container container-fluid tabbed-content-margin"
<?php if ($_GET['hideDescription'] == 'true' || $_GET['certAppForm'] == 'true') { ?>
	style="display:none"
<?php } ?>

<?php if($_GET['hide-info'] == 'true') : ?> 
style="display:none"
<?php endif; ?>
>



	<ul class='etabs nav nav-tabs'>
    <li class='tab'><a href="#tab-overview">Overview</a></li>


 <?php if($_GET['workshopType'] == 'refineWorkshop'): ?>
 	<li class='tab'>
 	<a href="#tab-program-details">
 	Program Details
	</a>
	 </li>
 <?php endif; ?>


    <li class='tab'><a href="#tab-sample">

    <?php if($_GET['workshopType'] == 'refineWorkshop'): ?>Rave Reviews<?php else : ?>Course Sample<?php endif; ?></a>
    	</li>

    <?php if($_GET['self-study'!='true'] || $_GET['workshopType'] == 'asedmWorkshop' || $_GET['workshopType'] == 'refineWorkshop') : ?> 
    	<li class='tab'><a href="#tab-certification-exam">Certification Exam</a></li>
    <?php  endif; 	?>

	<li class='tab'><a href="#tab-fees">Fees</a></li>

	<?php if($_GET['courseType'] != 'university') : ?> 
	
		<li class='tab'>

<a href="#tab-compare"> <?php  if($_GET['workshopType'] == 'asedmWorkshop' || $_GET['workshopType'] == 'refineWorkshop'): ?> Workshop Dates<?php  endif; ?> 
	<?php if($_GET['comparison'] == 'true' || $_GET['self-study'] == 'true'): ?> Course Comparison <?php endif; ?></a> 

		</li>

	<?php endif; ?> 

<?php if(get_field('guest_speakers')) : ?> 
<li class='tab'><a href="#tab-speakers">Guest Speakers</a></li>
<?php endif; ?> 

	</ul>
 



  <?php if($_GET['workshopType'] == 'refineWorkshop'): ?>
<div id="tab-program-details" class="tab-pane">
	<?php
	echo '<h2>' . apply_filters('the_title', $product['name']) . '</h2>';
    the_field('program_details');
	?>
</div>

 <?php endif; ?>

<div id="tab-overview" class="tab-pane">
	<?php
	echo '<h2>' . apply_filters('the_title', $product['name']) . '</h2>';
	echo $product['description']; 

	 the_field('overview'); 
	?>
</div>

<div id="tab-sample" class="tab-pane">
	<?php
	echo '<h2>' . apply_filters('the_title', $product['name']) . '</h2>';
	?>

	<?php the_field('sample'); ?>
</div>

<?php if($_GET['self-study'!='true'] || $_GET['workshopType'] == 'asedmWorkshop' || $_GET['workshopType'] == 'refineWorkshop') : ?> 
	<div id="tab-certification-exam" class="tab-pane">

			<?php
			echo '<h2>' . apply_filters('the_title', $product['name']) . '</h2>';
			?>


			<?php the_field('certification-exam'); ?>
</div>
<?php  endif; 	?>


<div id="tab-fees" class="tab-pane">

		<?php
		echo '<h2>' . apply_filters('the_title', $product['name']) . '</h2>';
		?>


		<div class="row">
										
												<?php while(the_repeater_field('payment_plan_options')): ?>		
												<aside class="group col-md-3">
												<div class="payment-ctas">
													<h3><?php the_sub_field('payment_plan_title'); ?></h3>
													<?php the_sub_field('payment_plan_description'); ?>
												</div><!--payment-ctas-->
											</aside><!--span-->
										<?php endwhile; ?>
										</div><!--row-->

				

</div><!--tab-fees-->


<?php if(get_field('guest_speakers')) : ?> 
	<div id="tab-speakers" class="tab-pane">
	<?php the_field('guest_speakers'); ?>
	</div><!--tab-fees-->
<?php endif; ?>



<?php if($_GET['courseType'] != 'university') : ?> 
	
<div id="tab-compare" class="tab-pane">


<?php  if($_GET['workshopType'] == 'asedmWorkshop' || $_GET['workshopType'] == 'refineWorkshop'): ?>

<?php
echo '<h2>' . apply_filters('the_title', $product['name']) . '</h2>';
?>

<?php  the_field('workshop_dates'); ?>
<?php  endif; 	?>



<?php if($_GET['comparison'] == 'true') : ?> 



		<div id="compareNinjaTable_67614">
	<img src="http://compareninja.com/public/images/loader_small.gif" style="display: block; width: 18px; margin: 50px auto 0;" />
</div>

	<script type="text/javascript">
(function() {
	var cn = document.createElement('script'); cn.type = 'text/javascript';
	cn.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'compareninja.com/API/table/67614?cnurl=' + window.location.href;
	var s = document.getElementsByTagName('head')[0].appendChild(cn);
})();
</script>



<?php  endif; 	?>


<?php if($_GET['self-study'] == 'true') : ?> 

<div id="compareNinjaTable_67212">
	<img src="http://compareninja.com/public/images/loader_small.gif" style="display: block; width: 18px; margin: 50px auto 0;" />
</div>


<script type="text/javascript">
(function() {
	var cn = document.createElement('script'); cn.type = 'text/javascript';
	cn.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'compareninja.com/API/table/67212?cnurl=' + window.location.href;
	var s = document.getElementsByTagName('head')[0].appendChild(cn);
})();
</script>


<?php  endif; 	?>


</div><!--tab-fees-->

<?php endif; ?> 
  
<div class="enrollment-links">	
<a id="fillForm" class="btn btn-lg btn-primary" href="#" role="button">
<?php if($_GET['workshopType'] == 'refineWorkshop'): ?>Register for Refine<?php else : ?>Enroll Online<?php endif; ?>
</a>

<a class="btn brochure-btn btn-default" href="<?php bloginfo('url'); ?>/download-brochure/">BROCHURE</a>
<a class="btn enrolment-btn btn-default pull-right" href="<?php bloginfo('url'); ?>/
	<?php if($_GET['workshopType'] == 'asedmWorkshop' || $_GET['workshopType'] == 'refineWorkshop'): ?>workshops<?php else : ?>courses<?php endif; 	?>">Back to All</a>
</div>	 
						
						

</div>

  <!-- tab-container -->
  
  
  










<!-- PAYMENT AREA TABS -->
<div id="payment-container" class="container tab-container tabbed-content-margin"
<?php if($_GET['hide-info'] == 'true') : ?> 
style="display:block"
<?php endif; ?>
>

<ul class="nav etabs nav-tabs" id="myTab">
<li class="active"><a href="#tab-one" data-toggle="tab">Credit Card</a></li>
<li><a href="#tab-two" data-toggle="tab">Paypal</a></li>
<li><a href="#tab-three" data-toggle="tab">Check</a></li>
<li><a href="#tab-seven" data-toggle="tab">Phone</a></li>
</ul>


 

<div id="tab-one" class="tab-pane">

<h2>CREDIT CARD</h2>


<?php 
echo '<h4>' . apply_filters('the_title', $product['name']) . '</h4>';

 ?>


<p>Please select your preferred payment amount below.</p>

<p><strong>PAYMENT OPTIONS:</strong></p>




<?php
//Shows the Price (includes sale price if applicable)


		echo '<div id="foxyshop_main_price">';
		foxyshop_price();
		echo '</div>';


the_field('short_description');
foxyshop_product_variations(2);


echo "<input type=\"hidden\" id=\"sub_enddate_". 
esc_attr($product['id']).
"\" name=\"sub_enddate\" value=\"\" />";

// echo '<div class="coupon-wrap"><p><strong>ENTER COUPON CODE:</strong></p><input type="text" class="coupon" name="coupon" value="" /></div>';

echo '<button type="submit" name="x:productsubmit" id="productsubmit" class="foxyshop_button">Add To Cart</button>'; 

echo '</form>';
?>



<?php //Add On Products ($qty [1 or 0], $before_entry, $after_entry)
if(foxyshop_addon_products() != ''): ?>
<?php foxyshop_addon_products(); ?>
<?php endif; ?>




</div>
  

<div id="tab-two" class="tab-pane active">

<!-- Start Paypal Form -->

<h2>Paypal</h2>

<form id="form1" name="form1" method="get" target="_blank" action="<?php bloginfo('stylesheet_directory'); ?>/paypal/ReviewOrder.php">



<div class="paypalWrap">
               
<?php echo '<h4>' . apply_filters('the_title', $product['name']) . '</h4>' ?>

<?php the_field('short_description'); ?>



<p>Please choose your preferred payment plan. Choose from either a full payment or a subscription based payment (4 or 10 months in duration).</p>

<div class="prices">

<p><strong>PAYMENT OPTIONS:</strong></p>

<p>

<input type="hidden" name="entry_id" value="<?php the_ID()?>" />

<input type="hidden" name="title" value="<?php echo $product['name']; ?>" />

<!-- Full price -->

<input type="radio" name="pkg" class="elearn" id="" value="pp_full" />

<strong>Full:</strong>&nbsp;$<?php the_field('pp_full'); ?> &nbsp;

<!-- Two month price -->
<?php if(get_field('pp_2')) :?>
<input type="radio" name="pkg" class="elearn" id="" value="pp_2" />
<strong>2 Mth Plan:</strong>&nbsp;$<?php the_field('pp_2'); ?> &nbsp;
<?php endif; ?>
<!-- Four month price -->

<?php if(get_field('pp_4')) :?>
<input type="radio" name="pkg" class="elearn" id="" value="pp_4" />
<strong>4 Mth Plan:</strong>&nbsp;$<?php the_field('pp_4'); ?> &nbsp;
<?php endif; ?>

<?php if(get_field('pp_6')) :?>
<!-- Six month price -->
<input type="radio" name="pkg" class="elearn" id="" value="pp_6" />
<strong>6 Mth Plan:</strong>&nbsp;$<?php the_field('pp_6'); ?> &nbsp;
<?php endif; ?>


<?php if(get_field('pp_8')) :?>
<!-- Eight month price -->
<input type="radio" name="pkg" class="elearn" id="" value="pp_8" />
<strong>8 Mth Plan:</strong>&nbsp;$<?php the_field('pp_8'); ?> &nbsp;
<?php endif; ?>


<?php if(get_field('pp_10')) :?>
<!-- 10 month price -->
<input type="radio" name="pkg" class="elearn" id="" value="pp_10" />
<strong>10 Mth Plan:</strong>&nbsp;$<?php the_field('pp_10'); ?> 
<?php endif; ?>

</p>

</div><!-- prices -->
</div><!-- paypalWrap -->
                  
<input type="submit" id="search_button" class="paypalCheck">

</form> 
				
</div>
<!-- END PAYPAL -->
<?php endwhile; // end of the loop. ?>


<?php if (!post_password_required()) { ?>
	

	




<?php
query_posts('page_id=103');
while (have_posts()) : the_post();
?>



<div id="tab-three" class="tab-pane active">
<h2>Check</h2>
<?php echo '<h4>' . apply_filters('the_title', $product['name']) . '</h4>' ?>
<?php the_field('direct_deposit'); ?>
</div>



<div id="tab-seven" class="tab-pane">
<h2>Phone</h2>
<?php echo '<h4>' . apply_filters('the_title', $product['name']) . '</h4>' ?>
<?php the_field('phone'); ?>
</div>





<?php endwhile; // end of the loop. ?>
<?php wp_reset_query(); ?>





</div>
<!-- tab-container -->

		<?php } ?>


  
<div class="clear"></div>

<?php
edit_post_link('<img src="' . FOXYSHOP_DIR . '/images/editicon.png" alt="Edit Product" width="16" height="16" />','<span class="foxyshop_edit_product">','</span>');
//Check Inventory Levels and Display Status (last variable allows backordering of out of stock items)
// foxyshop_inventory_management("There are only %c item%s left in stock.", "Item is not in stock.", false);


	
	
//Shows any related products
foxyshop_related_products("Related Products");

//Custom Code Can Go Here


echo '</div>';
?>


<script>

$("select.variation-payment-plan-options").change(function() {
	var current_value = $(this).val();
	
	//2 Months
	if (current_value.substring(0, 8) == "2 Months") {
		<?php $new_date = date("Ymd", strtotime("+2 months +1 day")); ?>
		new_date = "<?php echo $new_date; echo foxyshop_get_verification("sub_enddate", $new_date); ?>";

	//4 Months
	} 
	
	else if (current_value.substring(0, 8) == '4 Months') {
		<?php $new_date = date("Ymd", strtotime("+4 months +1 day")); ?>
		new_date = "<?php echo $new_date; echo foxyshop_get_verification("sub_enddate", $new_date); ?>";
	}
	
	
	else if (current_value.substring(0, 8) == '6 Months') {
		<?php $new_date = date("Ymd", strtotime("+6 months +1 day")); ?>
		new_date = "<?php echo $new_date; echo foxyshop_get_verification("sub_enddate", $new_date); ?>";
	}
	
	
	else if (current_value.substring(0, 8) == '8 Months') {
		<?php $new_date = date("Ymd", strtotime("+8 months +1 day")); ?>
		new_date = "<?php echo $new_date; echo foxyshop_get_verification("sub_enddate", $new_date); ?>";
	}
	
	else if (current_value.substring(0, 9) == '10 Months') {
		<?php $new_date = date("Ymd", strtotime("+10 months +1 day")); ?>
		new_date = "<?php echo $new_date; echo foxyshop_get_verification("sub_enddate", $new_date); ?>";
	}
	
	


	//Set the Value
	$("#sub_enddate_<?php echo esc_attr($product['id']); ?>").val(new_date);
});

</script>




	<div class="clr"></div>
	
	
	
	<div id="enrolmentWrap" class="container-fluid contact-form-wrap"
	<?php if ($_GET['hideDescription'] == 'true') { ?>
	style="display:block"
<?php } ?>
>
		
        
        <div class="container">
			
			<div class="row">
			
				<div class="col-md-12">

					
					<?php

					$product_categories = wp_get_post_terms($product['id'], 'foxyshop_categories', array("fields" => "names"));

					//Pillows Category
					if (in_array('Pillows', $product_categories)) :

						//Check Inventory Levels and Display Status (last variable allows ordering of out of stock items)
						foxyshop_inventory_management("notice: only %c pillows%s left in stock!", "sorry, item is not in stock.", false);

					//Everything Else
					else :

						foxyshop_inventory_management("notice: only %c yard%s left in stock!", "sorry, item is not in stock.", false);

					endif;


?>




<?php if($_GET['certAppForm'] == 'true') : ?> 
<h2>APPLICATION FORM FOR CERTIFICATION</h2>
			<p>Applying for Certification can be done online by filling out the form below. You will need to have completed your Education Hours at either one of our Approved Conferences, Seminars or Workshops or have completed our Wedding Professional Advanced Course. The steps below outline the Certification process:</p>
				<p><strong>Step 1</strong>&nbsp;- Complete Education Hours as outlined above&nbsp;<strong><br>
Step 2</strong>&nbsp;- Fill in Application Form below&nbsp;<strong><br>
Step 3</strong>&nbsp;- Make Payment<br>
<strong>Step 4</strong>&nbsp;- You will receive an email from our Certification Department confirming receipt of your Application and Payment&nbsp;<strong><br>
Step 5&nbsp;</strong>- Your Application will be reviewed within 7 days&nbsp;<strong><br>
Step 6&nbsp;</strong>- You will receive an email with your Certification Exam details and the details of your assigned Wedding Expert&nbsp;<strong><br>
Step 7</strong>&nbsp;- Complete your Certification Exam and submit it as outlined in your email&nbsp;<strong><br>
Step 8</strong>&nbsp;- Your exam will be marked within 14 days and feedback will be emailed&nbsp;<strong><br>
Step 9&nbsp;</strong>- You will receive your Certification Badge via email<br>
<strong>Step 10</strong>&nbsp;- You will receive your Certification printed certificate by post within 14 days of satisfactory completion of the Certification Exam<strong><br>
Step 11</strong>&nbsp;- Your Certification is valid for 3 years. After this period you will need to submit proof of attendance of continued education and pay a re-certification fee of $149</p>

	<?php gravity_form(6, $display_title=false, 
					$display_description=false, 
					$display_inactive=false, 
					$field_values=null, 
					$ajax=true, $tabindex); 
					?>
					
<?php else: ?>




					<?php gravity_form(1, $display_title=true, 
					$display_description=true, 
					$display_inactive=false, 
					$field_values=null, 
					$ajax=true, $tabindex); 
					?>

<?php endif; ?>
					
				<div class="enrollment-links">	
<a id="back-cart" class="btn black back enrolment-btn btn-default pull-left" href="#">Back</a>
</div>	


	
		



			
					
					
					
				</div> 
					
				</div> <!-- row -->
                         
                     
             </div><!-- container-->
                        
         </div><!-- container-fluid-->
                        
                       
                        
	

		
		








		
		
			   </article>
		</section>
		<!-- /section -->
	</main>



<?php 
/*
if($_SESSION['VIEW_CART'] != 1) {
header("Location: http://zackeryfretty.com/blink-182/");
}

*/


/*


------------ ATTENTION ------------
If you need to edit this template, do not edit the version in the plugin directory. Place a copy in your template folder and edit it there.
This will allow you to upgrade FoxyShop without breaking your customizations. More details here: http://www.foxy-shop.com/documentation/theme-customization/
-----------------------------------
*/ ?>










<?php foxyshop_include('footer'); ?>
<?php get_footer(); ?>
