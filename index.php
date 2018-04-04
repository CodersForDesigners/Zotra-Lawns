<?php

	// :: ONLY DURING DEVELOPMENT ::
	// debugging
	ini_set( "display_errors", "On" );
	ini_set( "error_reporting", E_ALL );

	/*
	 * Versioning Assets to invalidate the browser cache
	 */
	$ver = '?v=20180404';

	// get info on the request
	$view = require "server/pageless.php";
	$viewName = $view[ 0 ];
	$viewPath = $view[ 1 ];

	// included external php files with functions.
	require ('inc/head.php');
	require ('inc/lazaro.php'); /* -- Lazaro disclaimer and footer -- */

?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml"
	prefix="og: http://ogp.me/ns# fb: http://www.facebook.com/2008/fbml">

<head>


	<!-- Nothing Above This -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Page Title | Page Name -->
	<title>Page Title <?php echo ( $viewName != "404" ? " | " . $viewName : "" ) ?></title>

	<?php echo gethead(); ?>

</head>

<body id="body" class="body">

<!--  ★  MARKUP GOES HERE  ★  -->

<div id="page-wrapper" data-page="<?php echo $viewName ?>"><!-- Page Wrapper -->


	<!-- Header Section -->
	<section class="header-section">
		<div class="container">
			<div class="header row">
				<div class="columns small-3">
					<a class="logo" href="/">
						<img src="media/logo.svg<?php echo $ver ?>">
					</a>
				</div>
				<div class="text-right columns small-9">
					<div class="navigation inline">
						<a class="button js_nav_button <?php echo ( $viewName == "pageone" ? "active" : "" ) ?>" data-page-id="pageone" href="/pageone">page-1</a>
						<a class="button js_nav_button <?php echo ( $viewName == "pagetwo" ? "active" : "" ) ?>" data-page-id="pagetwo" href="/pagetwo">page-2</a>
						<a class="button js_nav_button <?php echo ( $viewName == "contact" ? "active" : "" ) ?>" data-page-id="contact" href="/contact">contact</a>
					</div>
				</div>
			</div>
		</div>
	</section> <!-- END : Header Section -->



	<!-- Welcome Section -->
	<section class="welcome-section fill-moss">
		<div class="welcome-content block-space-top-bottom">
			<div class="container">
				<div class="row">
					<div class="logo columns small-10 small-offset-1 medium-9 large-3 xlarge-2">Z Lawns</div>
					<div class="description text-off-light h4 columns small-10 small-offset-1 medium-9 large-7 large-offset-0 xlarge-5">Lawns is the only 4 bedroom villa development in RR Nagar. We at Zotra are glad to be the first to offer this caliber of lifestyle to a region of the city that has long deserved it, <strong class="text-light">starting at just 4.5 crores.</strong></div>
				</div>
			</div>
		</div>
		<div><img class="block" src="media/lawn-villa-facade-3d.jpg<?php echo $ver ?>"></div>
	</section><!-- END : Welcome Section -->
	


	<!-- Villa Section -->
	<section class="villa-section block-space-top fill-dark">
		<div class="container villa" style="">
			<div class="row">
				<div class="villa-content block-space-top">
					<div class="label strong columns small-10 small-offset-1">The Villa</div>
					<div class="h1 strong columns small-10 small-offset-1 medium-6">Dual Level Approach</div><br>
					<div class="p columns small-10 small-offset-1 medium-6 large-5 xlarge-4">Cars do not belong on a lawn, they are better off on a road or parked in a basement. This is the premise behind why we developed this project with a dual level approach.</div>
				</div>
			</div>
			<div><img class="block" src="media/cross-section-3d.png<?php echo $ver ?>"></div>
			<!-- <div>
				[ Blips ] : 
				- Lift
				- Private garden
				- Double height cut out
				- Basement
				- Large expanse of living and dining area
			</div> -->
		</div>
	</section><!-- END : Villa Section -->


	
	<!-- Villa Isometric Section -->
	<section class="villa-isometric-section fill-light">
		<div class="floor block-space-top-bottom">
			<div class="container">
				<div class="row">
					<div class="isometric columns small-12 large-7"></div>
					<div class="floor-content columns small-10 medium-8 large-4 large-offset-1">
						<div class="h2 strong">Top Floor</div>
						<div class="p">THE MASTER SUITE- < Highlights >  - large master bedroom with a study area, large dressing and bathroom. A private terrace straight out of the room.</div>
					</div>
				</div>
			</div>
		</div>
		<div class="floor block-space-top-bottom">
			<div class="container">
				<div class="row">
					<div class="isometric columns small-12 large-7"></div>
					<div class="floor-content columns small-10 medium-8 large-4 large-offset-1">
						<div class="h2 strong">First Floor</div>
						<div class="p">< Highlights >  2 large bedrooms</div>
					</div>
				</div>
			</div>
		</div>
		<div class="floor block-space-top-bottom">
			<div class="container">
				<div class="row">
					<div class="isometric columns small-12 large-7"></div>
					<div class="floor-content columns small-10 medium-8 large-4 large-offset-1">
						<div class="h2 strong">Ground Floor</div>
						<div class="p">< Highlights > - large and spacious living and dining rooms, one bedroom, large kitchen which does justice to the villa (targeting the ladies) along with separate utility, a pooja</div>
					</div>
				</div>
			</div>
		</div>
		<div class="floor block-space-top-bottom text-off-neutral">
			<div class="container">
				<div class="row">
					<div class="isometric columns small-12 large-7"></div>
					<div class="floor-content columns small-10 medium-8 large-4 large-offset-1">
						<div class="h2 strong">Basement Floor</div>
						<div class="p">< Highlights > one service room, which can be used for various services such as store room etc. 3 car parks by default for each villa – not separately charged for.</div>
					</div>
				</div>
			</div>
		</div>
	</section><!-- END : Villa Isometric Section -->
	


	<!-- Aerial 3D Section -->
	<section class="aerial-3d-section fill-moss">
		<img class="block" src="media/aerial-view-3d.jpg<?php echo $ver ?>">
	</section><!-- END : Aerial 3D Section -->



	<!-- Podium Masterplan Section -->
	<section class="podium-masterplan-section block-space-top-bottom fill-off-light">
		<div class="container">
			<div class="row">
				<div class="label strong columns small-10 small-offset-1">Upper-Level</div>
				<div class="h1 strong columns small-10 small-offset-1 medium-6 large-5">Pedestrian<br> Experience</div>
				<div class="p columns small-10 small-offset-1 large-5">The upper-level is a pedestrian-only zone accessible through a dedicated gate. It is not possible for a motor vehicle to be on this level, making it extremely secure for children. The absence of vehicles has given us the freedom to create a community-centric space that is pivoted around human interaction and usability.</div>
			</div>
		</div>
		<div class="masterplan-container">
			<div class="masterplan">
				<div class="layer"><img class="block" src="media/podium-masterplan/1_PodiumForest.png<?php echo $ver ?>"></div>
				<div class="layer"><img class="block" src="media/podium-masterplan/2_PodiumFills.png<?php echo $ver ?>"></div>
				<div class="layer"><img class="block" src="media/podium-masterplan/3_PodiumLines.svg<?php echo $ver ?>"></div>
				<div class="layer"><img class="block" src="media/podium-masterplan/4_PodiumTrees.png<?php echo $ver ?>"></div>
				<div class="layer"><img class="block" src="media/podium-masterplan/5_PodiumShadows.svg<?php echo $ver ?>"></div>
				<div class="layer"><img class="block" src="media/podium-masterplan/6_PodiumRoof.svg<?php echo $ver ?>"></div>
			</div>
		</div>
		<!-- <div>
			Highlights:
			1 - Pedestrian walkways that emulate the experience of a park, not a road network.
			2 - A Landscaped Central Promenade.
			3 - A treeline that runs around the periphery of the premises.
			4 - All walkways end in a garden, the visual experience is not interrupted by the abrupt end of a road or a bare compound wall.
		</div> -->
	</section><!-- END : Podium Masterplan Section -->



	<!-- Podium Experience Section -->
	<section class="podium-experience-section fill-moss">
		<div class="podium-experience-content block-space-top-bottom">
			<div class="container">
				<div class="row">
					<div class="label strong columns small-10 small-offset-1">Upper-Level</div>
					<div class="h1 strong columns small-10 small-offset-1 medium-6 large-5">Villa<br> Experience</div>
				</div>
			</div>
		</div>
		<div><img class="block" src="media/pedestrian-walkways-3d.jpg<?php echo $ver ?>"></div>
		<!-- <div>
			Highlights:
			1 - Contemporary Architecture - The villas possess an aesthetic that mirrors a modern architectural vocabulary prevalent in Germany and Switzerland. The design, however, is not overly minimalist, incorporating an earthy warm mix of locally sourced stone cladding, glass and wood.  
			2 - Zero Redundant Barriers - The front yards of all the villas blend into the main walkways with the use of greenery to create separation and not permanent structures like walls, fences or gates. This creates a very inclusionary, community-driven vibe.
			3 - Privacy - To aid in privacy, Villas that face each other have been staggered.
			4 - Efficient Planning - Common areas have been optimized to reduce the loading on the Super Built-up Area. In fact, the clubhouse only occupies 5% of your Super Built-up Area.
		</div> -->
	</section><!-- END : Podium Experience Section -->



	<!-- Basement Masterplan Section -->
	<section class="podium-masterplan-section block-space-top-bottom fill-dark">
		<div class="container">
			<div class="row">
				<div class="label strong columns small-10 small-offset-1">Lower-Level</div>
				<div class="h1 strong columns small-10 small-offset-1 medium-6 large-5">Basement <br>Experience</div>
				<div class="p columns small-10 small-offset-1 large-5">The lower-level is accessible via a separate gate that leads directly to the basement ramps, shepherding cars directly underground. Residents can drive their cars under their respective villas and take a private lift directly into their houses. Or take the stairs and enter house from podium level.</div>
			</div>
		</div>
		<div class="masterplan-container">
			<div class="masterplan">
				<div class="layer"><img class="block" src="media/basement-masterplan/1_BasementGrid.png<?php echo $ver ?>"></div>
				<div class="layer"><img class="block" src="media/basement-masterplan/2_BasementTexture.png<?php echo $ver ?>"></div>
				<div class="layer"><img class="block" src="media/basement-masterplan/3_BasementLines.svg<?php echo $ver ?>"></div>
				<div class="layer"><img class="block" src="media/basement-masterplan/4_BasementLights.png<?php echo $ver ?>"></div>
			</div>
		</div>
		<!-- <div>
			Highlights:
			1 - Apartment-style basement car park with driveways leading to personal car parks.
			2 - There are absolutely no exposed pipes hanging from the ceiling. All plumbing has been laid in serviceable, underground conduits.
			3 - Lighting and wiring in the basement is hidden along the driveways and embedded within the false ceiling or built into the existing ceiling.
			4 - Small landscaped area in the basement.
			5 - Cut outs spread across the basement ceiling brings in natural light and ventilation from the upper level.
		</div> -->
	</section><!-- END : Basement Masterplan Section -->



	<!-- Basement Experience Section -->
	<section class="basement-experience-section fill-moss">
		<div class="basement-experience-content block-space-top-bottom">
			<div class="container">
				<div class="row">
					<div class="label strong columns small-10 small-offset-1">Lower-Level</div>
					<div class="h1 strong columns small-10 small-offset-1 medium-6 large-5">Villa Experience</div>
				</div>
			</div>
		</div>
		<div class="blip-system">
			<img class="blip-bg" class="block" style="width: 100%;" src="media/basement-level-3d.jpg<?php echo $ver ?>">
			<div class="blip-container">
				<div class="blip" style="top: 46%; left: 37%;">
					<div class="blip-toggle"><div class="icon"></div></div>
					<div class="blip-card p fill-light">1 - Private Access - Every villa has a private, access controlled entrance from the basement. Drive your car in and take a private lift up into your living room.</div>
				</div>
				<div class="blip" style="top: 70%; left: 30%;">
					<div class="blip-toggle"><div class="icon"></div></div>
					<div class="blip-card p">2 - Future proof - Electric-car charging points controlled from within the villa are provided.</div>
				</div>
				<div class="blip" style="top: 70%; left: 30%;">
					<div class="blip-toggle"><div class="icon"></div></div>
					<div class="blip-card p">3 - Water outlets - Each villa has a dedicated water outlet at the basement level for washing cars. There is also a sufficiently allocated space to be utilized for the washing of clothes.</div>
				</div>
			</div>
		</div>
	</section><!-- END : Basement Experience Section -->



	<!-- Location Section -->
	<section class="location-section block-space-top-bottom fill-light">
		<div class="container">
			<div class="row">
				<div class="beacon-container hide-for-mobile columns small-12 medium-5"><div class="beacon"></div></div>
				<div class="location-content columns small-10 small-offset-1 medium-6 medium-offset-0 large-offset-1 xlarge-5">
					<div class="title label strong text-off-copper">Location</div>
					<div class="heading h1 strong text-copper">Villas in Rajarajeshwari Nagar</div>
					<div class="description p">Finding a villa community like this in RR Nagar is highly uncommon and unheard of. This developed region of Bangalore needs little introduction. With an average escalation in land cost from Rs 4000 to Rs 12000 per sft in the last five years, it is very apparent that this neighbourhood is on an upswing.</div>
				</div>
			</div>

			<div class="row">
				<div class="maps columns small-12 large-4 large-offset-1">
					<a class="button button-copper" href="https://maps.google.com/" target="_blank">Open in Google Maps</a>
				</div>	
				<div class="appreciation columns small-12 large-6 large-offset-1 xlarge-5">
					<div class="title label strong text-off-copper">Appreciation</div>
					<div class="description p">Growth in this region over the next 3 years will be exponentially faster. This is why we were determined to develop a villa community on a 3 acre plot that would normally have been relegated to an apartment development. It’s long been overdue.</div>
				</div>
			</div>

			<!-- <div>[ We need to highlight proximity to Banshankari as well, as there are premium customers in that area and would not mind moving here. ]<div> -->
			<div class="row">
				<div class="location-list columns small-12">
					Malls - 
					Upcoming Salapuria Mall – 3 kms
					Gopalan Arcade Mall – 2.7 kms

					Hospitals -
					BGS Global Hospital – 2.5 kms
					SSNMC Super Speciality Hospital – 3 kms

					Schools -
					National Public School – 2 kms
					Gnanakshi Vidyaniketan School – 0.5 kms
					Bangalore University – 3 kms
					Maple Bear Canadian Pre school – 2 kms

					Global Village Tech Park – 2.5 kms
					Metro Station – 3 kms
				</div>
			</div>
		</div>

		</div>
	</section><!-- END : Location Section -->


	
	<!-- Aerial Panorama Section -->
	<section class="aerial-panorama-section fill-moss">
		<div><img class="block" src="media/placeholder-panorama.png<?php echo $ver ?>"></div>
	</section><!-- END : Aerial Panorama Section -->



	<!-- Floorplans Section -->
	<section class="floorplans-section block-space-top-bottom fill-dark">
		<div class="container">
			<div class="heading h1 strong block text-center">Floor Plans</div>
			<div class="row">
				<div class="floorplan-card fill-light columns small-10 small-offset-1 large-3 large-offset-0">
					<div class="logo"><img class="inline" src="media/floorplan-card/sovereign-logo.svg<?php echo $ver ?>"></div>
					<div class="image"><img class="block" src="media/floorplan-card/sovereign-img.png<?php echo $ver ?>"></div>
					<div class="pattern"><img class="block" src="media/floorplan-card/sovereign-pattern.svg<?php echo $ver ?>"></div>
					<div class="size">villas upto 3992 sft</div>
					<div class="feature em text-neutral">with a Backyard Lawn</div>
					<div class="price text-copper">Starting at ₹4.3 Cr</div>
					<button class="button button-copper block">Download Now $</button>
				</div>
				<div class="floorplan-card fill-light columns small-10 small-offset-1 large-3 large-offset-0">
					<div class="logo"><img class="inline" src="media/floorplan-card/supreme-logo.svg<?php echo $ver ?>"></div>
					<div class="image"><img class="block" src="media/floorplan-card/supreme-img.png<?php echo $ver ?>"></div>
					<div class="pattern"><img class="block" src="media/floorplan-card/supreme-pattern.svg<?php echo $ver ?>"></div>
					<div class="size">villas upto 4349 sft</div>
					<div class="feature em text-neutral">with a Courtyard Lawn</div>
					<div class="price text-copper">Starting at ₹4.1 Cr</div>
					<button class="button button-copper block">Download Now $</button>
				</div>
				<div class="floorplan-card fill-light columns small-10 small-offset-1 large-3 large-offset-0">
					<div class="logo"><img class="inline" src="media/floorplan-card/premier-logo.svg<?php echo $ver ?>"></div>
					<div class="image"><img class="block" src="media/floorplan-card/premier-img.png<?php echo $ver ?>"></div>
					<div class="pattern"><img class="block" src="media/floorplan-card/premier-pattern.svg<?php echo $ver ?>"></div>
					<div class="size">villas upto 5695 sft</div>
					<div class="feature em text-neutral">with a Premium Lawn</div>
					<div class="price text-copper">Starting at ₹4.5 Cr</div>
					<button class="button button-copper block">Download Now $</button>
				</div>
			</div>
		</div>
	</section><!-- END : Floorplans Section -->
	


	<!-- Residents Section -->
	<section class="residents-section block-space-top-bottom fill-light">
		<div class="container">
			<div class="label strong">Resident Profile</div>
			<div class="h1 strong">Manoj</div>
			<div class="label">businessman in RR Nagar premium apartment - backend clothing manufacturer</div>
			<div class="p">[ testimonial ]</div>
		</div>
	</section><!-- END : Residents Section -->



	<!-- Clubhouse 3D Section -->
	<section class="clubhouse-3d-section fill-moss">
		<img class="block" src="media/clubhouse-area-3d.jpg<?php echo $ver ?>">
	</section><!-- END : Clubhouse 3D Section -->



	<!-- Clubhouse Section -->
	<section class="clubhouse-section block-space-top-bottom fill-dark">
		<div class="container">
			<div class="row">
				<div class="clubhouse-content columns small-10 small-offset-1 large-6">
					<div class="title label strong text-neutral">Amenities</div>
					<div class="heading h1 strong">Clubhouse</div>
					<div class="description p text-off-neutral">Located at the far end of the premises, the clubhouse is spread across three floors. Comprising over 5500 sft of indoor facilities it looks onto a beautifully landscaped communal space filled with outdoor amenities.</div>
				</div>

				<div class="uds columns small-10 small-offset-1 large-6">
					<div class="title label strong text-neutral">Optimised UDS</div>
					<div class="description p">The clubhouse has been planned with a great deal of efficiency. It only occupies 5% of the total Super Built Area of an average villa. This translates to a greater component of usable carpet area in your villa when compared to most other projects.</div>
				</div>
			</div>
		</div>

		<div class="masterplan-container">
			<div class="masterplan">
				<div class="layer fill-dark"><img style="mix-blend-mode: multiply;" class="block" src="media/clubhouse-masterplan/1_ClubhouseTrees.png<?php echo $ver ?>"></div>
				<div class="layer"><img class="block" src="media/clubhouse-masterplan/2_ClubhouseFills.png<?php echo $ver ?>"></div>
				<div class="layer"><img class="block" src="media/clubhouse-masterplan/3_ClubhouseLines.svg<?php echo $ver ?>"></div>
			</div>
		</div>
		<!-- <div>
			1 - Ground Floor - Clubhouse has a covered pool looking out into the lawn.
			2 - First Floor - Indoor games and squash court
			3 - Second Floor - Gymnasium
			4 - Outdoor - Basketball court, Children’s play area, outdoor gym.
		</div> -->
	</section><!-- END : Clubhouse Section -->



	<!-- Infrastructure Section -->
	<section class="infrastructure-section block-space-top-bottom fill-light">
		<div class="container">
			<div class="h1 strong">Infrastructure</div>
			
			<div>Backup Generator</div>
			<div>Complete power back up including lift</div>

			<div>STP</div>
			<div>< Get Details ></div>
			
			<div>Water System</div>

			<div>Water is a very valuable resource in Bangalore, managing it is something we have put a lot of energy behind. The water management system at Lawns is designed to make the most of all available sources of water with efficient fail-safes put in place to account for a minimal disruption in service.</div>
		</div>
		< Get water calculations >
		<div>[ 2D Water System Diagram ] – to be taken from water consultant</div>

		<!-- <div>
			1 - Each villa has 3 water tanks on the roof. The first for bore-well water, the second for Cauvery water and the third for a mix of treated black-water (recycled by the STP) and harvested rainwater.
			2 - The tanks come with a tank reserve of 1 days worth of gravity-flow water supply in case the hydro-pneumatic pumps fail.
			3 - The property has excellent groundwater tapped by 5 borewells fitted with Hydro-Pneumatic systems that pump water to the bore-well tanks.
			4 - 3 inlets have been provided at the entrance gate for water tankers to interface with.
		</div> -->
	</section><!-- END : Infrastructure Section -->
	


	<!-- Architect Section -->
	<section class="architect-section block-space-top-bottom fill-off-light">
		<div class="container">
			<div class="row">
				<div class="photograph columns small-12 medium-5">
				</div>
				<div class="architect-content columns small-10 small-offset-1 medium-6 medium-offset-0 large-5 large-offset-1">
					<div class="title label strong text-off-copper">Principal Designer</div>
					<div class="heading h1 strong text-neutral">Hadi Tehrani</div>
					<div class="description p">Hadi Tehrani is an award-winning Iranian-German architect and designer based in Hamburg, Germany. His style is marked with simplicity, openness and moderation. The Bangalore chapter of his firm has spearheaded the design of this community.<br><br>
					This blend of world-renowned pedigree and an awareness of the local nuances expected in an Indian home has created a product unlike any in the region. He has designed many landmark projects across Europe and Asia.<br><br>
					<a class="p em text-off-copper" href="www.haditeherani.com" target="_blank">Architect Website</a>
				</div>
				</div>
			</div>
		</div>
	</section><!-- END : Architect Section -->
	


	<!-- Safety Section -->
	<section class="safety-section block-space-top-bottom fill-light">
		<div class="safety-content row">
			<div class="container">
				<div class="columns small-10 small-offset-1 large-4">
					<div class="heading h1 strong text-copper">Safety &amp; Security</div>
					<div class="description p">The main benefit of residing in a community of this kind is the peace that comes with knowing that safety is has been built-in to the project.</div>
				</div>
			</div>
		</div>
		<div class="safety-points row">
			<div class="container">
				<div class="point columns small-10 small-offset-1 medium-4 large-2 large-offset-6">
					<img src="media/safety-icons/fire-sprinkler.svg<?php echo $ver ?>">
					<span class="p em text-copper">Fire sprinklers in the basement.</span>
				</div>
				<div class="point columns small-10 small-offset-1 medium-4 medium-offset-2 large-2 large-offset-1">
					<img src="media/safety-icons/extinguisher.svg<?php echo $ver ?>">
					<span class="p em text-copper">Fire suppression water outlets all across the upper level.</span>
				</div>
				<div class="point columns small-10 small-offset-1 medium-4 large-2 large-offset-6">
					<img src="media/safety-icons/fence.svg<?php echo $ver ?>">
					<span class="p em text-copper">High compound walls and electrical fencing.</span>
				</div>
				<div class="point columns small-10 small-offset-1 medium-4 medium-offset-2 large-2 large-offset-1">
					<img src="media/safety-icons/cctv.svg<?php echo $ver ?>">
					<span class="p em text-copper">CCTV camera coverage all round as well as across the common areas of the community.</span>
				</div>
			</div>
		</div>
	</section><!-- END : Safety Section -->
	


	<!-- Specifications Section -->
	<section class="specifications-section block-space-top-bottom fill-dark">
		<div class="specifications-content row">
			<div class="container">
				<div class="columns small-10 small-offset-1 large-4">
					<div class="title label strong text-off-copper">Specifications</div>
					<div class="heading h1 strong">Fixture &amp; Materials</div>
					<div class="description p">We are constantly finding ways to improve Concerto at the DASTA Design Cell, certain aspects of the specifications, features, finishes and the planning can possibly undergo a few changes. We assure you that these changes will be improvements.</div>
				</div>
			</div>
		</div>
		<div class="specifications-points row">
			<div class="container">
				<div class="columns small-10 small-offset-1 large-6 large-offset-6">
					<div class="heading h4 text-uppercase">Structure</div>
					<div class="point p">Stainless Steel Sink for Utility - Single Bowl sink (18” x 16”) without drain board provided in the utility area. Franke Brand or equivalent.</div>
					<div class="point p">
						<span class="block text-neutral">Stainless Steel Sink for Utility - Single Bowl sink (18” x 16”) without drain board provided in the utility area.</span>
						<small class="upgrade small block text-uppercase">Upgraded</small>
						<span class="block">Stainless Steel Sink for Utility - Single Bowl sink (18” x 16”) without drain board provided in the utility area. Franke Brand or equivalent.</span>
					</div>
					<div class="point p">Stainless Steel Sink for Utility - Single Bowl sink (18” x 16”) without drain board provided in the utility area. Franke Brand or equivalent.</div>
					<div class="heading h4 text-uppercase">Walls</div>
					<div class="point p">Stainless Steel Sink for Utility - Single Bowl sink (18” x 16”) without drain board provided in the utility area. Franke Brand or equivalent.</div>
					<div class="point p">
						<span class="block text-neutral">Stainless Steel Sink for Utility - Single Bowl sink (18” x 16”) without drain board provided in the utility area.</span>
						<small class="upgrade small block text-uppercase">Upgraded</small>
						<span class="block">Stainless Steel Sink for Utility - Single Bowl sink (18” x 16”) without drain board provided in the utility area. Franke Brand or equivalent.</span>
					</div>
					<div class="point p">Stainless Steel Sink for Utility - Single Bowl sink (18” x 16”) without drain board provided in the utility area. Franke Brand or equivalent.</div>
					<div class="point p">Stainless Steel Sink for Utility - Single Bowl sink (18” x 16”) without drain board provided in the utility area. Franke Brand or equivalent.</div>
					<div class="point p">
						<span class="block text-neutral">Stainless Steel Sink for Utility - Single Bowl sink (18” x 16”) without drain board provided in the utility area.</span>
						<small class="upgrade small block text-uppercase">Upgraded</small>
						<span class="block">Stainless Steel Sink for Utility - Single Bowl sink (18” x 16”) without drain board provided in the utility area. Franke Brand or equivalent.</span>
					</div>
					<div class="point p">Stainless Steel Sink for Utility - Single Bowl sink (18” x 16”) without drain board provided in the utility area. Franke Brand or equivalent.</div>
					<div class="point p">Stainless Steel Sink for Utility - Single Bowl sink (18” x 16”) without drain board provided in the utility area. Franke Brand or equivalent.</div>
					<div class="heading h4 text-uppercase">Bathrooms </div>
					<div class="point p">Stainless Steel Sink for Utility - Single Bowl sink (18” x 16”) without drain board provided in the utility area. Franke Brand or equivalent.</div>
					<div class="point p">Stainless Steel Sink for Utility - Single Bowl sink (18” x 16”) without drain board provided in the utility area. Franke Brand or equivalent.</div>
					<div class="point p">Stainless Steel Sink for Utility - Single Bowl sink (18” x 16”) without drain board provided in the utility area. Franke Brand or equivalent.</div>
					<div class="point p">Stainless Steel Sink for Utility - Single Bowl sink (18” x 16”) without drain board provided in the utility area. Franke Brand or equivalent.</div>
				</div>
			</div>
		</div>
	</section><!-- END : Specifications Section -->
	


	<!-- Footer Section -->
	<section class="footer-section">
		<div class="container">
		</div>
	</section><!-- END : Footer Section -->


	<!-- Page Content -->
	<div id="page-content">
		<?php require $viewPath; ?>
	</div> <!-- END : Page Content -->


	<!-- Lazaro Signature -->
	<?php lazaro_signature(); ?>
	<!-- END : Lazaro Signature -->

</div><!-- END : Page Wrapper -->









<!-- ⬇ All Modals below this point ⬇ -->

<div id="modal-wrapper"><!-- Modal Wrapper -->
	<div class="modal-box js_modal_box">
		<!-- Modal Content : Sample Video -->
		<div class="modal-box-content js_modal_box_content" data-mod-id="sample-video">
			<div class="container">
				<div class="row">
					<div class="columns small-12">
						<!-- video embed -->
						<div class="youtube_embed ga_video" data-src="https://www.youtube.com/embed/lncVHzsc_QA?rel=0&amp;showinfo=0" data-ga-video-src="Sample - Video">
							<div class="youtube_load"></div>
							<iframe width="1280" height="720" src="" frameborder="0" allowfullscreen></iframe>
						</div>
					</div>
				</div>
			</div>
		</div><!-- END : Sample Video -->

		<!-- Modal Content : Sample Form -->
		<div class="modal-box-content js_modal_box_content" data-mod-id="sample-form">
			<div class="container">
				<div class="row">
					<div class="columns small-12">
						<h2>Form Title Goes Here</h2>
					</div>
				</div>
				<div class="row">
					<!-- video embed -->
					<div class="columns small-12">
						<div class="youtube_embed ga_video" data-src="https://www.youtube.com/embed/lncVHzsc_QA?rel=0&amp;showinfo=0" data-ga-video-src="Sample - Video">
							<div class="youtube_load"></div>
							<iframe width="1280" height="720" src="" frameborder="0" allowfullscreen></iframe>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="columns small-12">
						<p>Augmented reality chrome network skyscraper Tokyo camera military-grade cardboard footage ablative otaku warehouse Kowloon table tower monofilament. Bicycle girl tower network face forwards towards fetishism corporation tiger-team. Monofilament decay hacker RAF dolphin DIY franchise narrative math-skyscraper realism systemic order-flow corrupted. Math-sentient tube cyber-paranoid order-flow long-chain hydrocarbons Chiba boy. RAF advert narrative dissident car wristwatch soul-delay cardboard nano-neon silent. Wonton soup pistol nano-otaku assault franchise realism RAF denim skyscraper geodesic tube into weathered youtube artisanal grenade. Youtube monofilament smart-corporation military-grade Tokyo meta-papier-mache corrupted disposable plastic savant shanty town dolphin 8-bit wonton soup. Military-grade Tokyo digital 3D-printed boat advert San Francisco engine tattoo computer skyscraper physical construct. Sub-orbital computer media market order-flow nodal point j-pop spook Chiba soul-delay tiger-team tanto cartel. Camera tower-space franchise range-rover futurity network military-grade Shibuya. Saturation point tanto physical BASE jump 3D-printed neural fetishism long-chain hydrocarbons rain. Bicycle apophenia futurity digital boat denim post-jeans free-market car corporation range-rover cardboard convenience store concrete. Long-chain hydrocarbons j-pop Tokyo crypto-table cardboard render-farm. Tokyo boy disposable industrial grade bridge A.I. carbon footage BASE jump cartel free-market euro-pop long-chain hydrocarbons-ware grenade. Pre-man voodoo god towards euro-pop cyber-crypto-Legba systema modem beef noodles. Free-market boy sensory post--space systemic jeans. Uplink singularity shanty town voodoo god rifle tank-traps smart-katana shrine human. Hotdog savant human garage wonton soup tube dolphin j-pop. Tiger-team wristwatch engine vehicle cartel apophenia augmented reality man network stimulate. Shrine claymore mine monofilament hotdog voodoo god geodesic knife. Voodoo god silent otaku hacker computer post-singularity office tower shanty town. Tokyo lights corrupted marketing skyscraper receding beef noodles uplink footage gang rebar order-flow table nano-bicycle tube. </p>
					</div>
				</div>
			</div>
		</div><!-- END : Sample Form -->


		<!-- Modal Close Button -->
		<div class="modal-close js_modal_close">&times;</div>
	</div>

</div><!-- END : Modal Wrapper -->

<!--  ☠  MARKUP ENDS HERE  ☠  -->

<?php lazaro_disclaimer(); ?>









<!-- JS Modules -->
<script type="text/javascript" src="/js/modules/pageless.js"></script>
<script type="text/javascript" src="/js/modules/video_embed.js"></script>
<script type="text/javascript" src="/js/modules/modal_box.js"></script>
<script type="text/javascript" src="/js/modules/smoothscroll.js"></script>
<script type="text/javascript" src="/js/modules/form.js"></script>
<script type="text/javascript" src="/js/modules/disclaimer.js"></script>

<script type="text/javascript">

// JAVASCRIPT GOES HERE
$(document).ready(function(){
});

</script>

</body>

</html>
