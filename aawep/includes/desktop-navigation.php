<div class="col-xs-3 col-sm-2" id="sidebar" role="navigation">
		<div id="sidebar-links">
		  <div class="list-group">
				
				<?php 
				 wp_nav_menu( array(
					 'menu'              => 'primary',
					 'theme_location'    => 'primary',
					 'depth'             => 2,
					 'container'         => 'div',
					 'container_class'   => 'collapse navbar-collapse navbar-ex1-collapse nav navbar-nav navbar-right',
					 'menu_class'        => 'nav navbar-nav',
					 'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
					 'walker'            => new wp_bootstrap_navwalker())
				 );
				?>
 
			</div>
			  
			  <ul id="social-links">
			  <li id="fb"><a href="http://www.facebook.com/WeddingAndEventInstitute" target="_blank">Facebook</a></li>
			  <li id="twitter"><a href="https://twitter.com/#!/WedInstitute" target="_blank">Twitter</a></li>
			  <li id="pinterest"><a href="http://pinterest.com/WedInstitute/" target="_blank">Pinterest</a></li>
			  <li id="youtube"><a href="http://www.youtube.com/theweddinginstitute" target="_blank">Youtube</a></li>
			  <li id="google-plus"><a href="https://plus.google.com/b/107287638508570072100/+WeddingandeventinstituteWEI/posts" rel="publisher" target="_blank">Google+</a></li>
			  </ul>
		</div><!--sidebar-links-->
	</div><!--/span-->
	