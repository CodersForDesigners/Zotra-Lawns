
$( function () {

	$( ".js_location_section .js_heading" ).on( "click", function ( event ) {

		var $targetEl = $( event.target )
		var $section = $targetEl.closest( ".js_location_section" )
		var tabIndex = $targetEl.closest( ".js_heading" ).data( "index" )

		var $selectedHeading = $section.find( ".js_headings .js_heading:nth-child( " + tabIndex + " )" );
		$section.find( ".selected" ).removeClass( "selected" )
		$selectedHeading.addClass( "selected" )
		$section.find( ".js_tab:nth-child( " + tabIndex + " )" )
			.addClass( "selected" )

		var $selectedHeadingContent = $selectedHeading.find( "span" );
		$( ".js_heading_underline" ).css( {
			left: $selectedHeadingContent.position().left / $( ".js_location_list_headings" ).width() * 100 + "%",
			width: $selectedHeadingContent.outerWidth() / $( ".js_location_list_headings" ).width() * 100 + "%"
		} )

	} )

} )
