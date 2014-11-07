<?php get_header(); ?>

<?php if ( has_post_thumbnail() ): ?>
  <div class="row page-heading background" style="background-image:url(../img/mac-our-mission.jpg); background-size:cover;">
	  <div class="col-xs-12">
		  <h1 class="page-title text-center"><span><?php the_title(); ?></span></h1>
	  </div>
  </div>
<?php endif; ?> 
  
  <div class="container">
  
	  <section class="row">
	  
	  	<blockquote>
	  	  <p>Mission Statement:</p>
		  <p><strong>To provide a regional approach dedicated to promoting, expanding and facilitating the arts in Southern Nevada.</strong></p>
		  </blockquote>
		  
		  <div class="wrap">
		  	<h3>Vision Statement:</h3>
		  	<p>As a non-profit, coordinating body, Metro Arts Council's vision is to encourage and further the development of the arts, to build a stronger cultural community.</p>
		  	<p>As an umbrella organization, Metro Arts Council serves as:</p>
		  </div>
		  
		<ul class="bullets">
			<li>An information source</li>
			<li>A coordinator of fiscal sponsorship</li>
			<li>A facilitator of networking and training</li>
			<li>An advocate for a more collaborative arts culture</li>
		</ul>
		
		<div class="wrap">
			<h3>HISTORY:</h3>
			<?php the_content(); ?>
		</div>
		  		  
	  </section>
  </div>

<?php get_footer(); ?>