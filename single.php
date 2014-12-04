<?php 	get_header(); ?>
	<?php 
		if( have_posts() ): while( have_posts() ): the_post(); 
			$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); 
	?>
	
		<?php if ( has_post_thumbnail() ): ?>
			<div class="row page-heading background blog" style="background-image:url('<?php echo $url; ?>'); background-size:cover;">
				<div class="col-xs-12">
					<h1 class="page-title text-center"><span><?php the_title(); ?></span></h1>
				</div>
			</div>
		<?php endif; ?> 
		  
		<div class="container">
		  
			<section class="row">
				<h1 class="post-title text-center"><?php the_title(); ?></h1>
				<p class="date small text-center muted"><?php the_time('F j, Y'); ?> <em>at</em> <?php the_time('g:i a'); ?></p>
				<div class="wrap">
					<?php the_content(); ?>
				</div>  		  
			</section>
			  
		</div>
	<?php endwhile; endif; ?>	
<?php get_footer(); ?>