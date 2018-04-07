
var onScrollSubtleties = function () {

	var $window = $( window );

	var $sectionVillaFeatures = $( ".js_section_villa_features" );

	var $sectionSafety = $( ".js_section_safety" );
	var $safetyContent = $( ".js_safety_content" );
	var $safetyPoints = $( ".js_safety_points" );

	var $sectionSpecifications = $( ".js_section_specifications" );
	var $specificationsContent = $( ".js_specifications_content" );
	var $specificationsPoints = $( ".js_specifications_points" );


	return function onScrollSubtleties ( event ) {

		var viewportHeight = $window.height();
		var scrollTop = window.scrollY || document.body.scrollTop;
		var scrollBottom = scrollTop + viewportHeight;

		/*
		 *
		 * On scrolling past the Villa Key Features section,
		 * have the images on side follow through
		 *
		 */
		var sectionVillaFeaturesTop = $sectionVillaFeatures.position().top;
		var sectionVillaFeaturesBottom = sectionVillaFeaturesTop + $sectionVillaFeatures.height();
		if (
			scrollTop >= sectionVillaFeaturesTop
			&& scrollBottom <= sectionVillaFeaturesBottom
		) {
			$sectionVillaFeatures.addClass( "scrolling" );
		}
		else {
			$sectionVillaFeatures.removeClass( "scrolling" );
		}


		/*
		 *
		 * On scrolling past the Safety and Security section,
		 * sticky the text on the side
		 *
		 */
		var sectionSafetyTop = $sectionSafety.position().top;
		var sectionSafetyBottom = sectionSafetyTop + $sectionSafety.height();
		var safetyContentTop = sectionSafetyTop + $safetyContent.position().top;
		var safetyContentBottomRelative = $safetyContent.position().top + $safetyContent.height();
		var safetyPointsBottom = sectionSafetyTop + $safetyPoints.position().top + $safetyPoints.height();
		// var safetyPointsBottom = sectionSafetyBottom - 240;
		// var safetyPointsBottom = sectionSafetyBottom - 180;

		if ( scrollTop >= sectionSafetyTop ) {
			$sectionSafety.addClass( "scrolling" );
		}
		else {
			$sectionSafety.removeClass( "scrolling" );
		}

		if ( scrollTop + safetyContentBottomRelative >= safetyPointsBottom ) {
			$sectionSafety.addClass( "scrolled" );
		}
		if ( scrollTop + 240 <= safetyContentTop ) {
			$sectionSafety.removeClass( "scrolled" );
		}


		/*
		 *
		 * On scrolling past the Fixture and Materials section,
		 * sticky the text on the side
		 *
		 */
		var sectionSpecificationsTop = $sectionSpecifications.position().top;
		var sectionSpecificationsBottom = sectionSpecificationsTop + $sectionSpecifications.height();
		var specificationsContentTop = sectionSpecificationsTop + $specificationsContent.position().top;
		var specificationsContentBottomRelative = $specificationsContent.position().top + $specificationsContent.height();
		var specificationsPointsBottom = sectionSpecificationsTop + $specificationsPoints.position().top + $specificationsPoints.height();

		if ( scrollTop >= sectionSpecificationsTop ) {
			$sectionSpecifications.addClass( "scrolling" );
		}
		else {
			$sectionSpecifications.removeClass( "scrolling" );
		}

		if ( scrollTop + specificationsContentBottomRelative >= specificationsPointsBottom ) {
			$sectionSpecifications.addClass( "scrolled" );
		}
		if ( scrollTop + 240 <= specificationsContentTop ) {
			$sectionSpecifications.removeClass( "scrolled" );
		}

	};

}();

$( window ).on( "scroll", onScrollSubtleties );
