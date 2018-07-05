
$( function () {




/*
 * -/-/-/-/-/-/-/-/-/-/-/-/
 * FLOORPLAN BROCHURE FORM
 * -/-/-/-/-/-/-/-/-/-/-/-/
 */
	/* -----
		FORM DISPLAY
	 ----- */
	// Show it when the "Download Now" buttons are hit
	$( document ).on( "click", ".js_form_floorplan_brochure_trigger", function ( event ) {
		// Prevent the link from getting clicked
		event.preventDefault();
		// Set the URL of intended link on the form element ( for context in the future )
		var floorplanBrochureLink = $( event.target ).data( "url" );
		var $form_floorplanBrochure = $( event.target ).closest( ".js_section" ).find( ".js_form_floorplan_brochure" );
		$form_floorplanBrochure.data( "url", floorplanBrochureLink );
		// Open the form ( but first, scroll to the top of the section (for large screens) )
		if ( $( document ).width() <= 1040 ) {
			window.scrollTo( {
				top: $( event.target ).closest( ".js_section" ).offset().top,
				behavior: "smooth"
			} );
			setTimeout( function () {
				$( document ).trigger( "floorplans-form/show" );
			}, 150 );
		}
		else {
			$( document ).trigger( "floorplans-form/show" );
		}
	} );
	// Hide it when the close button is hit
	$( document ).on( "click", ".js_form_close", function ( event ) {
		hideFloorplanBrochureForm();
	} );
	function hideFloorplanBrochureForm () {
		$( ".js_section_floorplans" ).removeClass( "show-form" );
	}
	$( document ).on( "floorplans-form/show", function ( event ) {
		$( ".js_section_floorplans" ).addClass( "show-form" );
		// Focus on the first input element
		$( ".js_form_floorplan_brochure" ).find( "input" ).first().get( 0 ).focus();
	} );

	/* -----
		SUBMISSION
	 ----- */
	$( document ).on( "submit", ".js_form_floorplan_brochure", function ( event ) {

		event.preventDefault();

		var $form = $( event.target );
		var $submitButton = $form.find( ".js_form_submit_btn" );

		// Disable the form
		// $submitButton.prop( "disabled", true );
		$form.find( "input, button" ).prop( "disabled", true );

		// Pull in the form field DOM elements
		var $name = $form.find( "[ name = 'name' ]" );
		var $email = $form.find( "[ name = 'email' ]" );
		var $phoneNumber = $form.find( "[ name = 'phone-number' ]" );

		// Validate the data
			// But first, remove any validation errors from a possible prior submission attempt
		$form.find( ".input-error" ).removeClass( "input-error" );

		if ( ! $name.val().trim() ) {
			$name.addClass( "input-error" );
			alert( "Please enter your name." );
		}
		if ( ! $email.val().trim() ) {
			$email.addClass( "input-error" );
			alert( "Please enter your email." );
		}
		$phoneNumber.val( $phoneNumber.val().replace( /[^-–+\d\s]/g, "" ) );
		if ( $phoneNumber.val().replace( /\D/g, "" ).length < 10 ) {
			$phoneNumber.addClass( "input-error" );
			alert( "Please enter a valid phone number." );
		}

		// If any of the required fields had no value or an incorrect one, then
		// do not proceed.
		if ( $form.find( ".input-error" ).length ) {
			$form.find( "input, button" ).prop( "disabled", false );
			return;
		}

		/* Pull data from the form input fields */
		var data = {
			name: $name.val(),
			email: $email.val(),
			phoneNumber: $phoneNumber.val()
		};

		// Feedback to the user
		$submitButton.text( "Sending..." );

		// Submit the data
		var formSubmissionFlow = $.ajax( {
			url: "/server/handle_form_data.php",
			method: "POST",
			data: data
		} );
		// If the form was successfully submitted
		formSubmissionFlow.done( function ( responseRaw, status, xhr ) {
			$submitButton.text( "Thank you." );

			$form.find( "input" ).prop( "disabled", true );
			$( document ).off( "click", ".js_form_floorplan_brochure_trigger" );

			var $section = $form.closest( ".js_section" );

			// Plonk in the URLs onto the Download buttons
			$section.find( ".js_floorplan_brochure" ).each( function ( _i, el ) {
				var $el = $( el );
				$el.attr( "href", $el.data( "url" ) );
			} );

			// Show a button that exposes the URL
			$submitButton.slideUp();
			$form.find( ".js_floorplan_brochure_form_submit_link" )
				.attr( "href", $form.data( "url" ) )
				.slideDown();

			// Click on the corresponding link
			$( ".js_floorplan_brochure[ href = '" + $form.data( "url" ) + "' ]" ).get( 0 ).click();

			// Set the cocaine
			setCookie( "zotra-user", data, 90 * 24 * 60 * 60 );
		} );
		formSubmissionFlow.fail( function ( responseRaw, status, xhr ) {
			$submitButton.text( "Try again." );

			$form.find( "input" ).prop( "disabled", false );
			$submitButton.prop( "disabled", false );
		} );
		formSubmissionFlow.always( function () {
		} );

	} );

	$( document ).on( "click", ".js_floorplan_brochure_form_submit_link", function () {
		hideFloorplanBrochureForm();
	} );



	/* -----
		VALIDATION
	 ----- */
	// $( document ).on( "input", ".js_form .js_phone", function ( event ) {

	// 	var domField = event.target;
	// 	preserveCursorPosition(
	// 		domField,
	// 		domField.value.replace( /[^-–+\d\s]/g, "" )
	// 	);

	// } );





} );
