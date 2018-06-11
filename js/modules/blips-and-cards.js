
$( function () {

	/*
	 *
	 * Copy the "point" cards over to where blip toggles are.
	 * This redundancy is so that for larger screens, we can show the cards
	 * right next to the blip toggles itself.
	 *
	 */
	$( ".js_blip_canvas" ).each( function ( _i, el ) {
		var $cardCarousel = $( el ).closest( ".js_section" ).find( ".js_slick_blip" );
		var $points = $cardCarousel.find( ".js_point" );
		var $pointsRedundant = $( el ).find( ".js_point" );
		$pointsRedundant.each( function ( index ) {
			$pointsRedundant.eq( index ).html( $points.eq( index ).html() );
		} );
	} );

	/*
	 *
	 * Initialise the card carousels
	 *
	 */
	$( ".slick-blip" ).slick( {
		dots: true,
		arrows: true,
		infinite: true,
		speed: 300,
		slidesToShow: 1,
		adaptiveHeight: true
	} );

	/*
	 *
	 * On navigating to a card, reflect the selection on the corresponding blip
	 *
	 */
	$( ".slick-blip" ).on( "beforeChange", function ( event, slick, currentSlideIndex, nextSlideIndex ) {

		$( event.target )
			.closest( ".js_section" )
			.find( ".js_blip_toggle:eq( " + nextSlideIndex + " )" )
			.trigger( "focus" )


	} )

	/*
	 *
	 * On hitting a blip,
	 * 1. Show the corresponding card, and anchor it next to the blip ( for larger screens ).
	 * 2. "Slide" to the corresponding card in the card carousel ( for smaller screens ).
	 *
	 */
	$( document ).on( "focus", ".js_blip_toggle", function ( event ) {

		// Get the blip toggle element
		var $blipToggle = $( event.target ).closest( ".js_blip_toggle" );

		// Un-mark the card that is currently "active"
		$blipToggle.closest( ".js_section" ).find( ".js_point" ).removeClass( "active" );

		// Mark that blip toggle element as "active"
		$blipToggle
			.closest( ".js_section" )
			.find( ".js_blip_toggle" )
			.removeClass( "active" )
		$blipToggle.addClass( "active" );

		/*
		 * Show the corresponding card, anchored next to the blip
		 */
		$blipToggle.parent().find( ".js_point" ).addClass( "active" );

		/*
		 * "Sliding" to the next card in the carousel
		 */
		// Get the index of the slide to "slide" to
		var index = $blipToggle.data( "index" ) - 1;
		// Get the corresponding slick widget for that section
		var $slickWidget = $( event.target )
			.closest( ".js_section" )
			.find( ".js_slick_blip" )
		// Slide to the slide with computed index
		$slickWidget.slick( "slickGoTo", index );

	} );

} );
