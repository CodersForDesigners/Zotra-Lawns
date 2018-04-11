
$( function () {

	$( ".js_location_section .js_h" ).on( "click", function ( event ) {

		var $targetEl = $( event.target )
		var $section = $targetEl.closest( ".js_location_section" )
		var tabIndex = $targetEl.closest( ".js_h" ).data( "index" )

		var $selectedHeading = $section.find( ".js_headings .js_h:nth-child( " + tabIndex + " )" );
		$section.find( ".selected" ).removeClass( "selected" )
		$selectedHeading.addClass( "selected" )
		$section.find( ".js_tab:nth-child( " + tabIndex + " )" )
			.addClass( "selected" )

		var $selectedHeadingContent = $selectedHeading.find( "span" );
		$( ".js_heading_underline" ).css( {
			left: $selectedHeadingContent.position().left / $( ".js_container_headings" ).width() * 100 + "%",
			width: $selectedHeadingContent.outerWidth() / $( ".js_container_headings" ).width() * 100 + "%"
		} )

	} )

} )
