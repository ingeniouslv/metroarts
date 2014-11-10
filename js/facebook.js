$(function() {
	$(document).ready(function() {		
		fbEvents();
	});
	
	function fbEvents() {
		$.ajaxSetup({ cache: true });
		$.getJSON('https://graph.facebook.com/MACofSouthernNevada/events?access_token=1483434665268789|dtLFLwrrZgovqVkM2tdbvoYmCmE')
		.done(function(data) {
			var events = [];
			
			$.each( data.data, function(i, item) {
				var eventID = item.id;
				var eventDate = $.format.date(item.start_time, "ddd, MMMM d, yyyy");
				
				$('.event-listing').append('<div class="col-md-4 col-sm-6 col-xs-12"><div class="card event-card"><div class="event-cover event'+eventID+'" style="background-image:url(http://lorempixel.com/480/200/nature/);"></div><div class="event-info"><h1>'+item.name+'</h1><h2>'+item.location+'</h2><h4>'+eventDate+'</h4></div><a href="http://facebook.com/events/'+eventID+'" class="btn btn-info btn-rsvp" target="_blank">RSVP</a></div></div>');
				
				getCoverPhoto(eventID);
		
				fadeItems();
				
			});
			
			/* $('.event-listing').append(events); */
		});
	}
	
	function getCoverPhoto(eventID) {
		var eventPhoto;
		var postID = '.event'+eventID;
		
		$.getJSON('https://graph.facebook.com/'+eventID+'/picture?redirect=false&type=large&access_token=1483434665268789|dtLFLwrrZgovqVkM2tdbvoYmCmE', function(json) {
			eventPhoto = json.data.url;
			$(postID).css('background-image', 'url(' + json.data.url + ')');
		});
	}
	
	function fadeItems() {
	
		$('.event-card').each(function(t) {
			$(this).transition({
				opacity: 1,
				delay: 200 * t
			}, 1700)
		});
		
	}
	
});


