<?php 
/*
 * Template Name: Mission Statement
 * Description: Page template for the mission statement page.
 */
	get_header(); 	
?>

<?php 
	if ( has_post_thumbnail() ): 
		$thumb_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
?>
  <div class="row page-heading background" style="background-image:url('<?php echo $thumb_url; ?>');">
	  <div class="col-xs-12">
		  <h1 class="page-title text-center"><span><?php the_title(); ?></span></h1>
	  </div>
  </div>
<?php endif; ?> 

  <div class="container">
  
	  <section class="row">

	<?php if( have_posts() ): while( have_posts() ): the_post(); ?>
		  <?php the_content(); ?>
	<?php endwhile; endif; ?>
		  		  
	  </section>
  </div>

<?php get_footer(); ?>