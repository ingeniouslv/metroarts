<?php get_header(); ?>
	  
	<div class="container posts">
		<div class="row page-heading">
			<div class="col-sm-6 col-xs-12">
				<h1><span>News</span></h1>
			</div>
			
			<div class="col-lg-3 col-md-2 hidden-sm hidden-xs"> </div>
			
			<div class="col-lg-3 col-md-4 col-sm-6 text-center hidden-xs">
				<img src="<?php bloginfo('template_directory'); ?>/img/mac-logo.png" class="img-responsive mac-logo" style="height:100px;" height="100" />
			</div>
			
		</div>
	
	<?php if( have_posts() ): while( have_posts() ): the_post(); ?>
	
	<section class="row post">
	
		<?php if ( has_post_thumbnail() ): ?>
		<div class="col-xs-4 post-thumbnail">
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail( 'medium', array('class'=>'img-responsive') ); ?>
			</a>
		</div>
		<?php endif; ?> 
		
		<div class="post-summary col-xs-8">
			<h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			<p class="date small muted"><?php the_time('F j, Y'); ?> <em>at</em> <?php the_time('g:i a'); ?></p>
			<?php the_excerpt(); ?>
			<a href="<?php the_permalink(); ?>" class="btn btn-info btn-readmore">Read More</a>
		</div>
		  		  
	</section>
	
	<?php endwhile; endif; ?> 
	  
	</div>

<?php get_footer(); ?>