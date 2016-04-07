(function( $ ) {
	"use strict";

	$(function() {
	
		
		$('body').konami( { eventName: 'konami.with.input'} );
		
	
		$(window).on('konami.with.input', function(event, opts) {
            window.location = 'http://webdevg5.dwfb-dev.de/newslogin.php';
		});
	});
}(jQuery));