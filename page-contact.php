<?php 
/*
 * Template Name: Contact Us
 * Description: Page template for the contact form.
 */
	get_header(); 	
?>

  <div class="container content">
  
	  	<div class="row" style="padding-top:6rem; padding-bottom:15rem;">
			 <div class="col-sm-5 col-xs-12 copy">
			 	 <h1><span><?php the_title(); ?></span></h1>
			 	 <?php if( have_posts() ): while( have_posts() ): the_post();
			 	 
						 the_content();
						 
					 endwhile; endif; 
				?>
			 </div>
			 <div class="col-sm-7 col-xs-12">

				<div class="row">
				  <div class="col-md-12 hidden">
				    <small><i></i>Add alerts if form ok... success, else error.</i></small>
					<div class="alert alert-success"><strong><span class="glyphicon glyphicon-send"></span> Success! Message sent. (If form ok!)</strong></div>	  
				    <div class="alert alert-danger"><span class="glyphicon glyphicon-alert"></span><strong> Error! Please check the inputs. (If form error!)</strong></div>
				  </div>
				  <form role="form" action="" method="post" >
				    
				      <div class="well well-sm hidden"><strong> Required Field</strong></div>
				      <div class="form-group">
				        <label for="InputName">Your Name</label>
				        <div class="input-group">
				          <input type="text" class="form-control" name="InputName" id="InputName" placeholder="Enter Name" required>
				          <span class="input-group-addon"></span></div>
				      </div>
				      <div class="form-group">
				        <label for="InputEmail">Your Email</label>
				        <div class="input-group">
				          <input type="email" class="form-control" id="InputEmail" name="InputEmail" placeholder="Enter Email" required  >
				          <span class="input-group-addon"></span></div>
				      </div>
				      <div class="form-group">
				        <label for="InputMessage">Message</label>
				        <div class="input-group">
				          <textarea name="InputMessage" id="InputMessage" class="form-control" rows="5" required></textarea>
				          <span class="input-group-addon"></span></div>
				      </div>
				      <div class="form-group">
				        <label for="InputReal">What is 4+3? (Simple Spam Checker)</label>
				        <div class="input-group">
				          <input type="text" class="form-control" name="InputReal" id="InputReal" required>
				          <span class="input-group-addon"></span></div>
				      </div>
				      <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-info">
				    
				  </form>
				  			
				 
			 </div>
		 </div>
	  
  </div>

<?php get_footer(); ?>