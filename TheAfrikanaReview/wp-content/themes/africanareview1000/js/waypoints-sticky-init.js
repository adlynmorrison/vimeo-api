jQuery(document).ready(function($) {

	//$('#menu-general').hide();
	$('.dropdown-menu').hide();
	$( '#dropdownMenu1' ).click(function() {
		event.preventDefault();
  	$( '.dropdown-menu' ).fadeToggle(500);

	});

		function makeSticky() {
			var myWindow = $( window ),
				myHeader = $( ".website-header" );

			myWindow.scroll( function() {
				if ( myWindow.scrollTop() == 0 ) {
					myHeader.removeClass( "sticky-nav" );
				} else {
					myHeader.addClass( "sticky-nav" );
				}
			} );
		}

		$( function() {
			// makeSticky();

			$( ".website-header" ).waypoint( 'sticky' );
		} );

});