var Global = {
		Init: function() {
			this.Navigation();	
		},
		Navigation: function() {
			$('.navbar-toggle').click(function(e) {
				e.preventDefault();
				$('.menu').addClass('open').removeClass('close');
				$('.content-overlay').addClass('open').removeClass('close');
			});
			$('.menu-close, .content-overlay').click(function(e) {
				e.preventDefault();
				$('.menu').addClass('close').removeClass('open');
				$('.content-overlay').addClass('close').removeClass('open');
			});
		}
	},
	Twitter = {
		Init: function() {
			this.getTweets(); 
		},
		getTweets: function() {
			
		}
	},
	Membership = {
		Init: function() {
			this.responsiveText(); this.selectOr();
		},
		responsiveText: function() {
			$('.responsive_headline').fitText();
		},
		selectOr: function() {
			$("select").selectOrDie();
		}	
	};

$(function() {
	
	$(window).load(function() {
		$('.flexslider').flexslider({
			animation: 'slide'
		});
		$('li.first').addClass('current');
		hideNav();
	});
	
	$(window).resize(function() {
		var ww =  $(window).width();
		var wh =  $(window).height();
		$('.flexslider ul li').each(function() {
			$(this).width(ww);
			$(this).width(wh);
		});
	});
	
	$(window).ready(function() {
		Global.Init();
	
		if ( $('.membership').length ) {
			Membership.Init();
		}
		
	});
	
	function hideNav() {
	
		if ($(window).width() >= 768) {
			var lastScrollTop = 0;
			$(window).scroll(function(event){
				var st = $(this).scrollTop();
	
				if (st > lastScrollTop && st > 60){
					$('.navbar').addClass('navbar-hide');
				} else {
					$('.navbar').removeClass('navbar-hide');
				}
	
				lastScrollTop = st;
			});
	
			$('.navbar').hover(function() {
				$(this).removeClass('navbar-hide');
			});
		}
	}
	
});



