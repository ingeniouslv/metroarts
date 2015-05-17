<?php 
/*
 * Template Name: Resources
 * Description: Page template for facebook event listings.
 */
	get_header(); 	
?>

  <div class="container">
  
	  <div class="row heading">
		  <div class="col-sm-6 hidden-xs">
			  <h1><span>Resources</span></h1>
		  </div>
		  <div class="col-lg-3 col-md-2 hidden-sm hidden-xs"> </div>
		  <div class="col-lg-3 col-md-4 col-sm-6 text-center col-xs-12">
			  <img src="<?php bloginfo('template_directory'); ?>/img/mac-logo.png" class="img-responsive mac-logo" style="height:100px;" height="100" />
		  </div>
		  <div class="col-xs-12 text-center visible-xs">
			  <h1><span>Upcoming Events</span></h1>
		  </div>
	  </div>
  
	  <section class="row event-listing">
		  <?php
			  if( have_posts() ): while( have_posts() ): the_post(); 
				  the_content(); 
			  endwhile; endif;
		  ?>
	  </section>
	  
  </div>

<?php get_footer(); ?>