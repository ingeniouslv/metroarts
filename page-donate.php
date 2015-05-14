<?php 
/*
 * Template Name: Donate Page
 * Description: Page template for the membership page.
 */
	get_header(); 	
	$thumb_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
?>

  <div class="content background" style="background-image:url('<?php echo $thumb_url; ?>'); background-size:cover;">
	  <div class="container">
		 <div class="row">
		 
		 <?php if( have_posts() ): while( have_posts() ): the_post();  ?>
			 <div class="col-sm-5 col-xs-12 copy">
			 	 <h1><span><?php the_title(); ?></span></h1>
			 	 
				 <h3 class="h3 responsive_headline">
					 <?php echo get_the_content(); ?>
				 </h3>
				 
			 </div>
		 <?php endwhile; endif; ?>
			 
			 <div class="col-sm-7 col-xs-12">

				<?php echo do_shortcode('[dgx-donate]'); ?>
				 
			 </div>
		 </div>
	  </div>
  </div>	

<?php get_footer(); ?>