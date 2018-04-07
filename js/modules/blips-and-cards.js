
$( function () {

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
	 * On hitting a blip, "slide" to the corresponding card
	 *
	 */
	$( document ).on( "focus", ".js_blip_toggle", function ( event ) {

		var $blipToggle = $( event.target ).closest( ".js_blip_toggle" );

		$blipToggle
			.closest( ".js_section" )
			.find( ".js_blip_toggle" )
			.removeClass( "active" )
		$blipToggle.addClass( "active" );

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
