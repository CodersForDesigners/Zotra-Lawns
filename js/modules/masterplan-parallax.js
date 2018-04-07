
$( function () {

	var forestMaxXOffset = 10
	var forestMaxYOffset = 10
	var roofShadowMaxXOffset = 10
	var roofShadowMaxYOffset = 10

	$( ".js_podium_masterplan" ).on( "mousemove", ".js_masterplan_container", function ( event ) {

		var $el = $( event.target );
		if ( $el.is( ".js_blip_toggle" ) ) return;
		$el = $el.closest( ".js_masterplan_container" )

		var width = $el.width()
		var height = $el.height()
		var midX = width / 2
		var midY = height / 2

		var userX = event.offsetX
		var userY = event.offsetY;

		// Mapping the screen coordinates to the offset coordinates
		var forestXOffset = -1 * ( userX - midX ) * ( forestMaxXOffset / midX )
		var forestYOffset = -1 * ( userY - midY ) * ( forestMaxYOffset / midY )
		var roofShadowXOffset = ( userX - midX ) * ( roofShadowMaxXOffset / midX )
		var roofShadowYOffset = ( userY - midY ) * ( roofShadowMaxYOffset / midY )

		var rootElement = document.documentElement
		rootElement.style.setProperty( "--forest-offset-x", forestXOffset + "px" )
		rootElement.style.setProperty( "--forest-offset-y", forestYOffset + "px" )
		rootElement.style.setProperty( "--roof-shadow-offset-x", roofShadowXOffset + "px" )
		rootElement.style.setProperty( "--roof-shadow-offset-y", roofShadowYOffset + "px" )

	} )



	var gridMaxXOffset = 10
	var gridMaxYOffset = 10
	var lightsMaxXOffset = 5
	var lightsMaxYOffset = 5

	$( ".js_basement_masterplan" ).on( "mousemove", function ( event ) {

		var $el = $( event.target );
		if ( $el.is( ".js_blip_toggle" ) ) return;
		$el = $el.closest( ".js_masterplan_container" )

		var width = $el.width()
		var height = $el.height()
		var midX = width / 2
		var midY = height / 2

		var userX = event.offsetX
		var userY = event.offsetY

		// console.log( `x: ${ userX } \ny: ${ userY }` )
		// Mapping the screen coordinates to the offset coordinates
		var gridXOffset = -1 * ( userX - midX ) * ( gridMaxXOffset / midX )
		var gridYOffset = -1 * ( userY - midY ) * ( gridMaxYOffset / midY )
		var lightsXOffset = ( userX - midX ) * ( lightsMaxXOffset / midX )
		var lightsYOffset = ( userY - midY ) * ( lightsMaxYOffset / midY )

		var rootElement = document.documentElement
		rootElement.style.setProperty( "--grid-offset-x", gridXOffset + "px" )
		rootElement.style.setProperty( "--grid-offset-y", gridYOffset + "px" )
		rootElement.style.setProperty( "--lights-offset-x", lightsXOffset + "px" )
		rootElement.style.setProperty( "--lights-offset-y", lightsYOffset + "px" )
		// console.log( `x: ${ shadowXOffset } \ny: ${ shadowYOffset }` )

	} )

} );
