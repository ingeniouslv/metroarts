<?php
/*
 * Template Name: Front Page
 * Description: Template for front page MAC slider
 */
  get_header();

  if( have_rows('frontpage_slider') ):
?>

  <section>
	  <div id="component" class="component component-fullwidth fxPressAway">
		  <ul class="itemwrap">
      <?php
        $i = 0;
        while ( have_rows('frontpage_slider') ) : the_row();

          $slider_img = get_sub_field('slider_image');
          $slider_title = get_sub_field('slide_title');
          $slider_txt = get_sub_field('slide_text');
          $slider_url = get_sub_field('slide_url');
          $slider_pos = get_sub_field('slide_position');

          if( $slider_pos != 'right' ) {
            $pos_class = 'left-text-box';
          } else {
            $pos_class = 'right-text-box';
          }
      ?>
			  <li <?php if($i == 0) { ?>class="first" <?php } ?>style="background-image: url('<?php print $slider_img; ?>'); background-size:cover;">
				<a class="target-area" href="<?php echo $slider_url; ?>"></a>
				<div class="<?php echo $pos_class; ?> slider-text">
					<h1><?php echo $slider_title; ?></h1>
					<p class="slider-copy"><?php echo $slider_txt; ?></p>
			  	</div>
			  </li>
      <?php $i++; endwhile; ?>
			  <!-- <li style="background-image:url('<?php bloginfo('template_directory'); ?>/img/mac-2.jpg'); background-size:cover;">
			  	<div class="right-text-box slider-text">
			  		<h1>Contact Us</h1>
				  	<p class="slider-copy">Contact us for More information</p>
			  	</div>
			  </li> -->
		  </ul>
		  <nav>
			<a class="prev" href="#">Previous item</a>
			<a class="next" href="#">Next item</a>
 		  </nav>
	  </div>
  </section>

<?php
  endif;

  get_footer();
?>
