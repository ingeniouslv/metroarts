<!doctype html>
<html lang="en" class="no-js">
<head>
	<!-- Document settings and metadata. -->
	<title>
	<?php 
		if ( !is_front_page() ):
			wp_title( '|', true, 'right' ); 
		endif;
		
		bloginfo('name'); 
	?>
	</title>
	<meta charset="utf-8" />
	
	<!-- iOS, Android and Windows stuff. -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black" />
	<meta name="format-detection" content="telephone=yes" />
	<meta name="mobile-web-app-capable" content="yes" />
	<meta name="msapplication-TileImage" content="" />
	<meta name="msapplication-TileColor" content="" />
	
	<!-- Robots and Viewport. -->
	<meta name="robots" content="index, follow" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	
	<!-- Icons. -->
	<link rel="icon" href="" />
	<link rel="icon" sizes="196x196" href="" />
	<link rel="apple-touch-icon" href="" />
	<link rel="prev" href="" />
	
	<link href="<?php bloginfo('template_directory'); ?>/stylesheets/flexslider.css" media="screen, projection" rel="stylesheet" type="text/css" />
	<link href="<?php bloginfo('template_directory'); ?>/stylesheets/bootstrap/bootstrap.css" media="screen, projection" rel="stylesheet" type="text/css" />
	<link href="<?php bloginfo('template_directory'); ?>/stylesheets/component.css" media="screen, projection" rel="stylesheet" type="text/css" />
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?php bloginfo('template_directory'); ?>/stylesheets/screen.css" media="screen, projection" rel="stylesheet" type="text/css" />
	<link href="<?php bloginfo('template_directory'); ?>/stylesheets/print.css" media="print" rel="stylesheet" type="">
	
	<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.min.js"></script>
	
	<!--[if IE]>
	  <link href="/stylesheets/ie.css" media="screen, projection" rel="stylesheet" type="text/css" />
	<![endif]-->
	
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>


<div class="stage">

	<div class="menu close">
		<?php get_sidebar(); ?>
	</div>
	
	<div class="content-overlay close"></div>

	<nav class="navbar navbar-fixed-top" role="navigation">
    	<div class="container-fluid">
    		<div class="row">
          	
          	<div class="col-xs-4 social">
	          	<a href="https://www.facebook.com/MACofSouthernNevada" target="_blank">
					<span class="fa-stack">
						<i class="fa fa-circle fa-stack-2x"></i>
						<i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
					</span>
				</a>
	          	<a href="https://twitter.com/macofsn" target="_blank">
					<span class="fa-stack">
						<i class="fa fa-circle fa-stack-2x"></i>
						<i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
					</span>
				</a>
	          	<a href="https://instagram.com/macofsn" target="_blank">
					<span class="fa-stack">
						<i class="fa fa-circle fa-stack-2x"></i>
						<i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
					</span>
				</a>
          	</div>
          	
          	<div class="col-xs-4 text-center">
          		<a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/img/mac-logo.jpg" class="img-responsive logo" style="height:90px; margin:auto;" /></a>
          	</div>
          	
          	<div class="col-xs-4">
			  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="menu">
			    <span class="sr-only">Menu</span>
			    <span class="icon-bar"></span>
			    <span class="icon-bar"></span>
			    <span class="icon-bar"></span>
			  </button>
			</div>
        </div>
	</div>
  </nav> 
  