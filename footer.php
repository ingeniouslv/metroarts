
	</div>
	
	<footer class="footer row">
		<div class="container">
		
			<div class="col-sm-4 col-xs-12 text-center">
				<a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/mac-logo.png" class="img-responsive mac-logo" style="height:80px; margin:auto;" /></a>
			</div>
			
			<div class="col-sm-4 col-xs-12 text-center footer-navi">
				
			</div>
			
			<div class="col-sm-4 col-xs-12 text-center f-container">
				<div class="content">
					<span>Follow MAC</span>
					<div class="social">
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-instagram"></i></a>
						<a href="#"><i class="fa fa-google-plus"></i></a>
					</div>
				</div>
			</div>
			
		</div>
	</footer>
		
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/plugins.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/main.js"></script>
	
	<?php if ( is_page_template( 'page-resources.php' ) ): ?>
	<script src="<?php bloginfo('template_directory'); ?>/js/facebook.js"></script>
	<?php endif; ?>
	
	<?php if( is_front_page()  ) : ?>
	<script>
		(function() {
			var support = { animations : Modernizr.cssanimations },
				animEndEventNames = {
					'WebkitAnimation' : 'webkitAnimationEnd',
					'OAnimation' : 'oAnimationEnd',
					'msAnimation' : 'MSAnimationEnd',
					'animation' : 'animationend'
				},
				// animation end event name
				animEndEventName = animEndEventNames[ Modernizr.prefixed( 'animation' ) ],
				effectSel = document.getElementById( 'fxselect' ),
				component = document.getElementById( 'component' ),
				items = component.querySelector( 'ul.itemwrap' ).children,
				current = 0,
				itemsCount = items.length,
				nav = component.querySelector( 'nav' ),
				navNext = nav.querySelector( '.next' ),
				navPrev = nav.querySelector( '.prev' ),
				isAnimating = false;
		
			function init() {
				navNext.addEventListener( 'click', function( ev ) { ev.preventDefault(); navigate( 'next' ); } );
				navPrev.addEventListener( 'click', function( ev ) { ev.preventDefault(); navigate( 'prev' ); } );
			}
		
			function navigate( dir ) {
				if( isAnimating ) return false;
				isAnimating = true;
				var cntAnims = 0;
		
		
				var currentItem = items[ current ];
		
				if( dir === 'next' ) {
					current = current < itemsCount - 1 ? current + 1 : 0;
				}
				else if( dir === 'prev' ) {
					current = current > 0 ? current - 1 : itemsCount - 1;
				}
		
				var nextItem = items[ current ];
		
				var onEndAnimationCurrentItem = function() {
					this.removeEventListener( animEndEventName, onEndAnimationCurrentItem );
					classie.removeClass( this, 'current' );
					classie.removeClass( this, dir === 'next' ? 'navOutNext' : 'navOutPrev' );
					++cntAnims;
					if( cntAnims === 2 ) {
						isAnimating = false;
					}
				}
		
				var onEndAnimationNextItem = function() {
					this.removeEventListener( animEndEventName, onEndAnimationNextItem );
					classie.addClass( this, 'current' );
					classie.removeClass( this, dir === 'next' ? 'navInNext' : 'navInPrev' );
					++cntAnims;
					if( cntAnims === 2 ) {
						isAnimating = false;
					}
				}
		
				if( support.animations ) {
					currentItem.addEventListener( animEndEventName, onEndAnimationCurrentItem );
					nextItem.addEventListener( animEndEventName, onEndAnimationNextItem );
				}
				else {
					onEndAnimationCurrentItem();
					onEndAnimationNextItem();
				}
		
				classie.addClass( currentItem, dir === 'next' ? 'navOutNext' : 'navOutPrev' );
				classie.addClass( nextItem, dir === 'next' ? 'navInNext' : 'navInPrev' );
			}
			
		
			init();
		})();
	</script>	
	<?php endif; ?>
	
</body>
</html>