<?php

	// :: ONLY DURING DEVELOPMENT ::
	// debugging
	ini_set( "display_errors", "On" );
	ini_set( "error_reporting", E_ALL );

	/*
	 * Versioning Assets to invalidate the browser cache
	 */
	$ver = '?v=20180405134';

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



	<!-- Welcome Section -->
	<section id="welcome" class="welcome-section fill-black js_section">
		<div class="welcome-bg"><img class="block" src="media/lawn-villa-facade-3d.jpg<?php echo $ver ?>"></div>
		<div class="welcome-content block-space-top-bottom">
			<div class="container">
				<div class="row">
					<div class="logo columns small-5 small-offset-1 medium-3 large-2 xlarge-2">
						<img class="block" src="media/logo-lawns.svg<?php echo $ver ?>">
					</div>
					<div class="description p columns text-off-neutral small-10 small-offset-1 large-6 xlarge-5">Lawns is the <span class="strong em text-light">first 4 bedroom villa development in RR Nagar</span>. We at Zotra are glad to be the first to offer this caliber of lifestyle to a region of the city that has long deserved it.</div>
				</div>
			</div>
		</div>
	</section><!-- END : Welcome Section -->



	<!-- Villa Section -->
	<section id="the-villa" class="villa-section block-space-top fill-black js_section">
		<div class="container">
			<div class="row villa-content block-space-top">
				<div class="title label strong text-black columns small-10 small-offset-1">The Villa</div>
				<div class="heading h1 strong text-black columns small-10 small-offset-1 medium-5">Dual Level Approach</div>
				<div class="description p columns small-10 text-black small-offset-1 medium-5 medium-offset-0">Cars do not belong on a lawn, they are better off on a road or parked in a basement. This is the premise behind why we developed this project with a dual level approach.</div>
			</div>
			<div div class="villa-image block-space-bottom">
				<img class="block hide-for-mobile" src="media/cross-section-3d.png<?php echo $ver ?>">
				<img class="block show-for-mobile" src="media/cross-section-3d-mobile.png<?php echo $ver ?>">
			</div>
			<!-- <div>
				[ Blips ] :
				- Lift
				- Private garden
				- Double height cut out
				- Basement
				- Large expanse of living and dining area
			</div> -->
		</div>
		<div class="bg-fix"></div>
	</section><!-- END : Villa Section -->



	<!-- Villa Isometric Section -->
	<section id="villa-key-features" class="villa-isometric-section fill-light js_section js_section_villa_features">
		<div class="floor">
			<div class="isometric"></div>
			<div class="floor-content row block-space-bottom">
				<div class="container">
					<div class="columns small-10 medium-8 large-4 large-offset-8">
						<div class="h2 strong">Top Floor</div>
						<div class="p">THE MASTER SUITE- < Highlights >  - large master bedroom with a study area, large dressing and bathroom. A private terrace straight out of the room.</div>
					</div>
				</div>
			</div>
		</div>
		<div class="floor">
			<div class="isometric"></div>
			<div class="floor-content row block-space-bottom">
				<div class="container">
					<div class="columns small-10 medium-8 large-4 large-offset-8">
						<div class="h2 strong">First Floor</div>
						<div class="p">< Highlights >  2 large bedrooms</div>
					</div>
				</div>
			</div>
		</div>
		<div class="floor">
			<div class="isometric"></div>
			<div class="floor-content row block-space-bottom">
				<div class="container">
					<div class="columns small-10 medium-8 large-4 large-offset-8">
						<div class="h2 strong">Ground Floor</div>
						<div class="p">< Highlights > - large and spacious living and dining rooms, one bedroom, large kitchen which does justice to the villa (targeting the ladies) along with separate utility, a pooja</div>
					</div>
				</div>
			</div>
		</div>
		<div class="floor text-off-neutral">
			<div class="isometric"></div>
			<div class="floor-content row block-space-bottom">
				<div class="container">
					<div class="columns small-10 medium-8 large-4 large-offset-8">
						<div class="h2 strong">Basement Floor</div>
						<div class="p">< Highlights > one service room, which can be used for various services such as store room etc. 3 car parks by default for each villa – not separately charged for.</div>
					</div>
				</div>
			</div>
		</div>
	</section><!-- END : Villa Isometric Section -->



	<!-- Aerial 3D Section -->
	<section id="aerial-3d" class="aerial-3d-section fill-off-neutral js_section">
		<img class="block" src="media/aerial-view-3d.jpg<?php echo $ver ?>">
	</section><!-- END : Aerial 3D Section -->



	<!-- Podium Masterplan Section -->
	<section id="podium-masterplan" class="podium-masterplan-section block-space-top-bottom fill-off-light gradient-light-off-moss texture js_section js_podium_masterplan">
		<div class="container">
			<div class="row">
				<div class="label strong text-copper columns small-10 small-offset-1">Upper-Level</div>
				<div class="h1 strong columns small-10 small-offset-1 medium-6 large-5">Pedestrian<br> Experience</div>
				<div class="p columns small-10 small-offset-1 large-5">The upper-level is a pedestrian-only zone accessible through a dedicated gate. It is not possible for a motor vehicle to be on this level, making it extremely secure for children. The absence of vehicles has given us the freedom to create a community-centric space that is pivoted around human interaction and usability.</div>
			</div>
		</div>

		<!-- Lower Level Masterplan Blips -->
		<div class="blip-system">
			<div class="blip-image">
				<div class="masterplan-container js_masterplan_container">
					<div class="masterplan">
						<div class="layer backdrop"><img class="block" src="media/podium-masterplan/1_PodiumForest.png<?php echo $ver ?>"></div>
						<div class="layer"><img class="block" src="media/podium-masterplan/2_PodiumFills.png<?php echo $ver ?>"></div>
						<div class="layer"><img class="block" src="media/podium-masterplan/3_PodiumLines.svg<?php echo $ver ?>"></div>
						<div class="layer"><img class="block" src="media/podium-masterplan/4_PodiumTrees.png<?php echo $ver ?>"></div>
						<div class="layer roof-shadows"><img class="block" src="media/podium-masterplan/5_PodiumShadows.svg<?php echo $ver ?>"></div>
						<div class="layer"><img class="block" src="media/podium-masterplan/6_PodiumRoof.svg<?php echo $ver ?>"></div>
						<div class="blip-canvas">
							<div class="blip-toggle active js_blip_toggle" tabindex="0" data-index="1" style="top: 57.5%;left: 58.2%;">1</div>
							<div class="blip-toggle js_blip_toggle" tabindex="0" data-index="2" style="top: 57.5%;left: 16.5%;">2</div>
							<div class="blip-toggle js_blip_toggle" tabindex="0" data-index="3" style="top: 19%;left: 31.5%;">3</div>
							<div class="blip-toggle js_blip_toggle" tabindex="0" data-index="4" style="top: 28%;left: 73.1%;">4</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="columns small-12 medium-8 medium-offset-2 large-6 large-offset-3 xlarge-4 xlarge-offset-4">
						<div class="slick-blip fill-light js_slick_blip">
							<div class="point row">
								<div class="title h4 text-copper">Park Experience</div>
								<div class="icon columns small-4 large-3"><img class="block" src="media/podium-masterplan-icons/Promenade.svg<?php echo $ver ?>"></div>
								<div class="p description columns small-7 small-offset-1 large-8">Pedestrian walkways that emulate the experience of a park, not a road network.</div>
							</div>
							<div class="point row">
								<div class="title h4 text-copper">Nature</div>
								<div class="icon columns small-4 large-3"><img class="block" src="media/podium-masterplan-icons/PodiumPromenade.svg<?php echo $ver ?>"></div>
								<div class="p description columns small-7 small-offset-1 large-8">A Landscaped Central Promenade.</div>
							</div>
							<div class="point row">
								<div class="title h4 text-copper">Privacy</div>
								<div class="icon columns small-4 large-3"><img class="block" src="media/podium-masterplan-icons/Periphery.svg<?php echo $ver ?>"></div>
								<div class="p description columns small-7 small-offset-1 large-8">A tree-line that runs around the periphery of the premises.</div>
							</div>
							<div class="point row">
								<div class="title h4 text-copper">Visual Experience</div>
								<div class="icon columns small-4 large-3"><img class="block" src="media/podium-masterplan-icons/EndinGarden.svg<?php echo $ver ?>"></div>
								<div class="p description columns small-7 small-offset-1 large-8">All walkways end in a garden, the visual experience is not interrupted by the abrupt end of a road or a bare compound wall.</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><!-- END : Lower Level Masterplan Blips -->

	</section><!-- END : Podium Masterplan Section -->



	<!-- Podium Experience Section -->
	<section id="podium-experience" class="podium-experience-section fill-moss gradient-off-moss-moss texture js_section">
		<div class="podium-experience-content no-pointer block-space-top-bottom">
			<div class="container">
				<div class="row">
					<div class="label strong text-off-copper columns small-10 small-offset-1">Upper-Level</div>
					<div class="h1 strong columns small-10 small-offset-1 medium-6 large-5">Villa<br> Experience</div>
				</div>
			</div>
		</div>

		<!-- Upper Level Villa Blips -->
		<div class="blip-system">
			<div class="blip-image">
				<img class="block" style="width: 100%;" src="media/pedestrian-walkways-3d.jpg<?php echo $ver ?>">
				<div class="blip-canvas">
					<div class="blip-toggle active js_blip_toggle" tabindex="0" data-index="1" style="top: 59.5%;left: 49.5%;">1</div>
					<div class="blip-toggle js_blip_toggle" tabindex="0" data-index="2" style="top: 80%;left: 20%;">2</div>
					<div class="blip-toggle js_blip_toggle" tabindex="0" data-index="3" style="top: 50%;left: 64.7%;">3</div>
					<div class="blip-toggle js_blip_toggle" tabindex="0" data-index="4" style="top: 75%;left: 80%;">4</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="columns small-12 medium-8 medium-offset-2 large-6 large-offset-3">
						<div class="slick-blip fill-light js_slick_blip">
							<div class="point">
								<div class="title h4 text-copper">Contemporary Architecture</div>
								<div class="p description">The villas possess an aesthetic that mirrors a modern architectural vocabulary prevalent in Germany and Switzerland. The design, however, is not overly minimalist, incorporating an earthy warm mix of locally sourced stone cladding, glass and wood.</div>
							</div>
							<div class="point">
								<div class="title h4 text-copper">Zero Redundant Barriers</div>
								<div class="p description">The front yards of all the villas blend into the main walkways with the use of greenery to create separation and not permanent structures like walls, fences or gates. This creates a very inclusionary, community-driven vibe.</div>
							</div>
							<div class="point">
								<div class="title h4 text-copper">Privacy</div>
								<div class="p description">To aid in privacy, Villas that face each other have been staggered.</div>
							</div>
							<div class="point">
								<div class="title h4 text-copper">Efficient Planning</div>
								<div class="p description">Common areas have been optimized to reduce the loading on the Super Built-up Area. In fact, the clubhouse only occupies 5% of your Super Built-up Area.</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><!-- END: Upper Level Villa Blips -->

	</section><!-- END : Podium Experience Section -->



	<!-- Basement Masterplan Section -->
	<section id="basement-masterplan" class="podium-masterplan-section block-space-top-bottom fill-moss gradient-moss-off-dark texture js_section js_basement_masterplan">
		<div class="container">
			<div class="row">
				<div class="label strong text-neutral columns small-10 small-offset-1">Lower-Level</div>
				<div class="h1 strong columns small-10 small-offset-1 medium-6 large-5">Basement <br>Experience</div>
				<div class="p columns small-10 small-offset-1 large-5">The lower-level is accessible via a separate gate that leads directly to the basement ramps, shepherding cars directly underground. Residents can drive their cars under their respective villas and take a private lift directly into their houses. Or take the stairs and enter house from podium level.</div>
			</div>
		</div>

		<!-- Lower Level Masterplan Blips -->
		<div class="blip-system">
			<div class="blip-image">
				<div class="masterplan-container js_masterplan_container">
					<div class="masterplan">
						<div class="layer grid"><img class="block" src="media/basement-masterplan/1_BasementGrid.png<?php echo $ver ?>"></div>
						<div class="layer"><img class="block" src="media/basement-masterplan/2_BasementTexture.png<?php echo $ver ?>"></div>
						<div class="layer"><div id="basement"> </div><!-- <img class="block" src="media/basement-masterplan/3_BasementLines.svg<?php echo $ver ?>"> --></div>
						<div class="layer lights"><img class="block" src="media/basement-masterplan/4_BasementLights.png<?php echo $ver ?>"></div>
						<div class="blip-canvas">
							<div class="blip-toggle active js_blip_toggle" tabindex="0" data-index="1" style="top: 36%;left: 82.5%;">1</div>
							<div class="blip-toggle js_blip_toggle" tabindex="0" data-index="2" style="top: 38%;left: 19.5%;">2</div>
							<div class="blip-toggle js_blip_toggle" tabindex="0" data-index="3" style="top: 30%;left: 37.2%;">3</div>
							<div class="blip-toggle js_blip_toggle" tabindex="0" data-index="4" style="top: 67%;left: 21%;">4</div>
							<div class="blip-toggle js_blip_toggle" tabindex="0" data-index="5" style="top: 38%;left: 59%;">5</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="columns small-12 medium-8 medium-offset-2 large-6 large-offset-3 xlarge-4 xlarge-offset-4">
						<div class="slick-blip fill-dark js_slick_blip">
							<div class="point row">
								<div class="title h4 text-copper">Car Park</div>
								<div class="icon columns small-4 large-3"><img class="block" src="media/basement-masterplan-icons/Parking.svg<?php echo $ver ?>"></div>
								<div class="p description columns small-7 small-offset-1 large-8">Apartment-style basement car park with driveways leading to personal car parks.</div>
							</div>
							<div class="point row">
								<div class="title h4 text-copper">No Exposed Pipes</div>
								<div class="icon columns small-4 large-3"><img class="block" src="media/basement-masterplan-icons/WaterHidden.svg<?php echo $ver ?>"></div>
								<div class="p description columns small-7 small-offset-1 large-8">There are absolutely no exposed pipes hanging from the ceiling. All plumbing has been laid in serviceable, underground conduits.</div>
							</div>
							<div class="point row">
								<div class="title h4 text-copper">Basement Lighting</div>
								<div class="icon columns small-4 large-3"><img class="block" src="media/basement-masterplan-icons/LightHidden.svg<?php echo $ver ?>"></div>
								<div class="p description columns small-7 small-offset-1 large-8">Lighting and wiring in the basement is hidden along the driveways and embedded within the false ceiling or built into the existing ceiling.</div>
							</div>
							<div class="point row">
								<div class="title h4 text-copper">Landscape</div>
								<div class="icon columns small-4 large-3"><img class="block" src="media/basement-masterplan-icons/SmallLandscape.svg<?php echo $ver ?>"></div>
								<div class="p description columns small-7 small-offset-1 large-8">Small landscaped area in the basement.</div>
							</div>
							<div class="point row">
								<div class="title h4 text-copper">Natural Light &amp; Ventilation</div>
								<div class="icon columns small-4 large-3"><img class="block" src="media/basement-masterplan-icons/CutoutLight.svg<?php echo $ver ?>"></div>
								<div class="p description columns small-7 small-offset-1 large-8">Cut outs spread across the basement ceiling brings in natural light and ventilation from the upper level.</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><!-- END : Lower Level Masterplan Blips -->

	</section><!-- END : Basement Masterplan Section -->



	<!-- Basement Experience Section -->
	<section id="basement-experience" class="basement-experience-section fill-off-dark texture js_section">
		<div class="basement-experience-content no-pointer block-space-top-bottom">
			<div class="container">
				<div class="row">
					<div class="label strong text-off-copper columns small-10 small-offset-1">Lower-Level</div>
					<div class="h1 strong columns small-10 small-offset-1 medium-6 large-5">Villa<br>  Experience</div>
				</div>
			</div>
		</div>

		<!-- Lower Level Villa Blips -->
		<div class="blip-system">
			<div class="blip-image">
				<img class="block" style="width: 100%;" src="media/basement-level-3d.jpg<?php echo $ver ?>">
				<div class="blip-canvas">
					<div class="blip-toggle active js_blip_toggle" tabindex="0" data-index="1" style="top: 57%;left: 45.75%;">1</div>
					<div class="blip-toggle js_blip_toggle" tabindex="0" data-index="2" style="top: 68%;left: 30%;">2</div>
					<div class="blip-toggle js_blip_toggle" tabindex="0" data-index="3" style="top: 57%;left: 82%;">3</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="columns small-12 medium-8 medium-offset-2 large-6 large-offset-3">
						<div class="slick-blip fill-dark js_slick_blip">
							<div class="point row">
								<div class="title h3 text-copper columns small-12">Private Access</div>
								<div class="icon columns small-4 large-5"><img class="block" src="media/basement-experience-icons/PrivateAccess.svg<?php echo $ver ?>"></div>
								<div class="p description columns small-7 small-offset-1 large-6">Every villa has a private, access controlled entrance from the basement. Drive your car in and take a private lift up into your living room.</div>
							</div>
							<div class="point row">
								<div class="title h3 text-copper columns small-12">Future proof</div>
								<div class="icon columns small-4 large-5"><img class="block" src="media/basement-experience-icons/CarElec.svg<?php echo $ver ?>"></div>
								<div class="p description columns small-7 small-offset-1 large-6">Electric-car charging points controlled from within the villa are provided.</div>
							</div>
							<div class="point row">
								<div class="title h3 text-copper columns small-12">Water outlets</div>
								<div class="icon columns small-4 large-5"><img class="block" src="media/basement-experience-icons/CarWash.svg<?php echo $ver ?>"></div>
								<div class="p description columns small-7 small-offset-1 large-6">Each villa has a dedicated water outlet at the basement level for washing cars. There is also a sufficiently allocated space to be utilized for the washing of clothes.</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><!-- END : Lower Level Villa Blips -->

	</section><!-- END : Basement Experience Section -->



	<!-- Location Section -->
	<section id="location" class="location-section block-space-top-bottom fill-light js_section js_location_section">
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
				<div class="location-list columns small-12 large-offset-6 large-6 xlarge-5">
					<div class="location-list-headings js_location_list_headings">
						<div class="heading-underline js_heading_underline"></div>
						<div class="headings strong js_headings">
							<div class="heading h4 selected js_heading" data-index="1">
								<span>Malls</span>
							</div>
							<div class="heading h4 js_heading" data-index="2">
								<span>Hospitals</span>
							</div>
							<div class="heading h4 js_heading" data-index="3">
								<span>Schools</span>
							</div>
							<div class="heading h4 js_heading" data-index="4">
								<span>Other</span>
							</div>
						</div>
					</div>
					<div class="tabs js_tabs">
						<div class="tab selected js_tab">
							<div class="heading h4 js_heading" data-index="1">
								<span>Malls</span>
							</div>
							<div class="tab-content-wrapper block">
								<div class="tab-content">
									<div class="point p clearfix">
										<span>Upcoming Salapuria Mall</span>
										<span class="float-right label strong text-uppercase">3 kms</span>
									</div>
									<div class="point p clearfix">
										<span>Gopalan Arcade Mall</span>
										<span class="float-right label strong text-uppercase">2.7 kms</span>
									</div>
								</div>
							</div>
						</div>
						<div class="tab js_tab">
							<div class="heading h4 js_heading" data-index="2">
								<span>Hospitals</span>
							</div>
							<div class="tab-content-wrapper block">
								<div class="tab-content">
									<div class="point p clearfix">
										<span>BGS Global Hospital</span>
										<span class="float-right label strong text-uppercase">2.5 kms</span>
									</div>
									<div class="point p clearfix">
										<span>SSNMC Super Speciality Hospital</span>
										<span class="float-right label strong text-uppercase">3 kms</span>
									</div>
								</div>
							</div>
						</div>
						<div class="tab js_tab">
							<div class="heading h4 js_heading" data-index="3">
								<span>Schools</span>
							</div>
							<div class="tab-content-wrapper block">
								<div class="tab-content">
									<div class="point p clearfix">
										<span>National Public School</span>
										<span class="float-right label strong text-uppercase">2 kms</span>
									</div>
									<div class="point p clearfix">
										<span>Gnanakshi Vidyaniketan School</span>
										<span class="float-right label strong text-uppercase">0.5 kms</span>
									</div>
									<div class="point p clearfix">
										<span>Bangalore University</span>
										<span class="float-right label strong text-uppercase">3 kms</span>
									</div>
									<div class="point p clearfix">
										<span>Maple Bear Canadian Pre school</span>
										<span class="float-right label strong text-uppercase">2 kms</span>
									</div>
								</div>
							</div>
						</div>
						<div class="tab js_tab">
							<div class="heading h4 js_heading" data-index="4">
								<span>Others</span>
							</div>
							<div class="tab-content-wrapper block">
								<div class="tab-content">
									<div class="point p clearfix">
										<span>Global Village Tech Park</span>
										<span class="float-right label strong text-uppercase">2.5 kms</span>
									</div>
									<div class="point p clearfix">
										<span>Metro Station</span>
										<span class="float-right label strong text-uppercase">3 kms</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</section><!-- END : Location Section -->



	<!-- Aerial Panorama Section -->
	<section id="aerial-panorama" class="aerial-panorama-section fill-moss js_section">
		<div><img class="block" src="media/placeholder-panorama.png<?php echo $ver ?>"></div>
	</section><!-- END : Aerial Panorama Section -->



	<!-- Floorplans Section -->
	<section id="floorplans" class="floorplans-section block-space-top-bottom fill-dark js_section">
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
					<button class="button button-copper block" style="background-color: #83837D;">Download Now &#x2b07;</button>
				</div>
				<div class="floorplan-card fill-light columns small-10 small-offset-1 large-3 large-offset-0">
					<div class="logo"><img class="inline" src="media/floorplan-card/supreme-logo.svg<?php echo $ver ?>"></div>
					<div class="image"><img class="block" src="media/floorplan-card/supreme-img.png<?php echo $ver ?>"></div>
					<div class="pattern"><img class="block" src="media/floorplan-card/supreme-pattern.svg<?php echo $ver ?>"></div>
					<div class="size">villas upto 4349 sft</div>
					<div class="feature em text-neutral">with a Courtyard Lawn</div>
					<div class="price text-copper">Starting at ₹4.1 Cr</div>
					<button class="button button-copper block" style="background-color: #AAA386;">Download Now &#x2b07;</button>
				</div>
				<div class="floorplan-card fill-light columns small-10 small-offset-1 large-3 large-offset-0">
					<div class="logo"><img class="inline" src="media/floorplan-card/premier-logo.svg<?php echo $ver ?>"></div>
					<div class="image"><img class="block" src="media/floorplan-card/premier-img.png<?php echo $ver ?>"></div>
					<div class="pattern"><img class="block" src="media/floorplan-card/premier-pattern.svg<?php echo $ver ?>"></div>
					<div class="size">villas upto 5695 sft</div>
					<div class="feature em text-neutral">with a Premium Lawn</div>
					<div class="price text-copper">Starting at ₹4.5 Cr</div>
					<button class="button button-copper block" style="background-color: #4E5A6B;">Download Now &#x2b07;</button>
				</div>
			</div>
		</div>
	</section><!-- END : Floorplans Section -->



	<!-- Residents Section -->
	<!-- <section id="residents" class="residents-section block-space-top-bottom fill-light js_section">
		<div class="container">
			<div class="label strong">Resident Profile</div>
			<div class="h1 strong">Manoj</div>
			<div class="label">businessman in RR Nagar premium apartment - backend clothing manufacturer</div>
			<div class="p">[ testimonial ]</div>
		</div>
	</section> --><!-- END : Residents Section -->



	<!-- Clubhouse 3D Section -->
	<section id="clubhouse-3d" class="clubhouse-3d-section fill-moss js_section">
		<img class="block" src="media/clubhouse-area-3d.jpg<?php echo $ver ?>">
	</section><!-- END : Clubhouse 3D Section -->



	<!-- Clubhouse Section -->
	<section id="clubhouse" class="clubhouse-section block-space-top-bottom fill-dark texture js_section">
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
				<div class="layer fill-dark texture"><img style="mix-blend-mode: multiply;" class="block" src="media/clubhouse-masterplan/1_ClubhouseTrees.png<?php echo $ver ?>"></div>
				<div class="layer"><img class="block" src="media/clubhouse-masterplan/2_ClubhouseFills.png<?php echo $ver ?>"></div>
				<div class="layer"><img class="block" src="media/clubhouse-masterplan/3_ClubhouseLines.svg<?php echo $ver ?>"></div>
				<div class="layer"><img class="block" src="media/clubhouse-masterplan/4_ClubhouseIcons.svg<?php echo $ver ?>"></div>
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
	<section id="infrastructure" class="infrastructure-section block-space-top fill-light js_section">
		<div class="container">
			<div class="water-content row">
				<div class="columns small-10 small-offset-1 large-6">
					<div class="title label strong text-copper">Infrastructure</div>
					<div class="heading h1 strong">Water System</div>
					<div div class="description p">Water is a very valuable resource in Bangalore, managing it is something we have put a lot of energy behind. The water management system at Lawns is designed to make the most of all available sources of water with efficient fail-safes put in place to account for a minimal disruption in service.</div>
				</div>
			</div>
			<div class="water-details row">
				<div class="columns small-10 small-offset-1 medium-5 large-3">
					<div class="label em text-neutral text-nocase">
						<div class="point"><img class="inline-middle" src="media/glyphs/glyph-i.svg<?php echo $ver ?>"> : 3 inlets have been provided at the entrance gate for water tankers to interface with.</div>
						<div class="point">The property has excellent groundwater tapped by 5 Borewells fitted with Hydro-Pneumatic systems that pump water to the Borewell tanks.</div>
					</div>
				</div>
				<div class="columns small-10 small-offset-1 medium-5 medium-offset-0 large-3">
					<div class="label em text-neutral text-nocase">
						<div class="point">
							Each villa has 3 water tanks on the roof.<br>
							<img class="inline-middle" src="media/glyphs/glyph-a.svg<?php echo $ver ?>"> : The first for Borewell water.<br>
							<img class="inline-middle" src="media/glyphs/glyph-b.svg<?php echo $ver ?>"> : the second for Cauvery water.<br>
							<img class="inline-middle" src="media/glyphs/glyph-c.svg<?php echo $ver ?>"> :  the third for a mix of treated black-water (recycled by the STP) and harvested rainwater.</div>
						<div class="point">The tanks come with a tank reserve of 1 days worth of gravity-flow water supply in case the hydro-pneumatic pumps fail.</div>
					</div>
				</div>
			</div>
		</div>

		<div class="masterplan-container">
			<div class="masterplan">
				<div class="layer"><img class="block" src="media/water-masterplan/StaticRaster.png<?php echo $ver ?>"></div>
				<div class="layer"><img class="block" src="media/water-masterplan/StaticVector.svg<?php echo $ver ?>"></div>
				<div class="layer"><img class="block" src="media/water-masterplan/AnimatedWaterLevels.svg<?php echo $ver ?>"></div>
				<div class="layer"><img class="block" src="media/water-masterplan/AnimatedLines.svg<?php echo $ver ?>"></div>
				<div class="layer"><img class="block" src="media/water-masterplan/StaticText.svg<?php echo $ver ?>"></div>
				<div class="layer"><img class="block" src="media/water-masterplan/DynamicText.svg<?php echo $ver ?>"></div>
			</div>
		</div>

		<!-- <div>
			1 - Each villa has 3 water tanks on the roof. The first for bore-well water, the second for Cauvery water and the third for a mix of treated black-water (recycled by the STP) and harvested rainwater.
			2 - The tanks come with a tank reserve of 1 days worth of gravity-flow water supply in case the hydro-pneumatic pumps fail.
			3 - The property has excellent groundwater tapped by 5 borewells fitted with Hydro-Pneumatic systems that pump water to the bore-well tanks.
			4 - 3 inlets have been provided at the entrance gate for water tankers to interface with.
		</div> -->
	</section><!-- END : Infrastructure Section -->



	<!-- Architect Section -->
	<section id="architect" class="architect-section block-space-top-bottom fill-off-light texture js_section">
		<div class="container">
			<div class="row">
				<div class="photograph columns small-12 large-5">
					<img src="media/architect-photograph.png<?php echo $ver ?>">
				</div>
				<div class="architect-content columns small-10 small-offset-1 large-5">
					<div class="title label strong text-off-copper">Principal Designer</div>
					<div class="heading h1 strong text-neutral">Hadi Teherani</div>
					<div class="description p">Hadi Teherani is an award-winning German architect and designer based in Hamburg, Germany. His style is marked with simplicity, openness and moderation. The Bangalore chapter of his firm has spearheaded the design of this community.<br><br>
					This blend of world-renowned pedigree and an awareness of the local nuances expected in an Indian home has created a product unlike any in the region. He has designed many landmark projects across Europe and Asia.<br><br>
					<a class="p strong em text-off-copper" href="http://www.haditeherani.com" target="_blank">Architect's Website &#10230;</a>
					</div>
					<hr>
					<div class="team-title label strong text-off-copper">Landscape Designers</div>
					<div class="team-heading h3 strong text-neutral">Zoras</div>
					<div class="team-title label strong text-off-copper">Mechanical Electrical &amp; Plumbing</div>
					<a class="team-heading h3 strong text-neutral" href="http://www.zoras.co.uk/" target="_blank">Tirumala Associates</a><br>
					<div class="team-title label strong text-off-copper">Structural Consultants</div>
					<div class="team-heading h3 strong text-neutral">Visda</div>
				</div>
			</div>
		</div>
	</section><!-- END : Architect Section -->



	<!-- Safety Section -->
	<section id="safety" class="safety-section block-space-top-bottom fill-light js_section js_section_safety">
		<div class="safety-content row js_safety_content">
			<div class="container">
				<div class="columns small-10 small-offset-1 large-4">
					<div class="heading h1 strong text-copper">Safety &amp; Security</div>
					<div class="description p">The main benefit of residing in a community of this kind is the peace that comes with knowing that safety is has been built-in to the project.</div>
				</div>
			</div>
		</div>
		<div class="safety-points row js_safety_points">
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
				<div class="point columns small-10 small-offset-1 medium-4 large-2 large-offset-6">
					<img src="media/safety-icons/my-gate.svg<?php echo $ver ?>">
					<span class="p em text-copper">App based visitor management system. Controlled access to the lift from basement.</span>
				</div>
			</div>
		</div>
	</section><!-- END : Safety Section -->



	<!-- Specifications Section -->
	<section id="specifications" class="specifications-section block-space-top-bottom fill-dark js_section js_section_specifications">
		<div class="specifications-content row js_specifications_content">
			<div class="container">
				<div class="columns small-10 small-offset-1 large-4">
					<div class="title label strong text-off-copper">Specifications</div>
					<div class="heading h1 strong">Fixture &amp; Materials</div>
					<div class="description p">We are constantly finding ways to improve Concerto at the DASTA Design Cell, certain aspects of the specifications, features, finishes and the planning can possibly undergo a few changes. We assure you that these changes will be improvements.</div>
				</div>
			</div>
		</div>
		<div class="specifications-points row js_specifications_points">
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



	<!-- Lazaro Signature -->
	<?php lazaro_signature(); ?>
	<!-- END : Lazaro Signature -->

</div><!-- END : Page Wrapper -->






<!-- Menu Section -->
<section class="menu js_menu_opener js_modal_closer" tabindex="-1">
	<div class="menu-container container">
		<div class="menu-toggle inline">
			<span class="menu-label h4 text-uppercase">&nbsp;</span>
			<span class="menu-icon">
				<span></span>
				<span></span>
				<span></span>
			</span>
		</div>
	</div>
</section>
<!-- END : Menu Section -->

<!-- Nav Section -->
<section class="nav-section js_nav_section">
	<div class="nav">
		<div class="nav-container container text-right">
			<div class="inline nav-list fill-copper text-left">
				<div class="title h1 strong text-off-copper">Menu</div>
				<a tab-index="-1" href="#welcome" class="link inline label text-off-neutral">Welcome</a><br>
				<a tab-index="-1" href="#the-villa" class="link inline h3">The Villa</a><br>
				<a tab-index="-1" href="#villa-key-features" class="link inline label text-off-neutral">Key features</a><br>
				<a tab-index="-1" href="#podium-masterplan" class="link inline h3">Project Masterplan</a><br>
				<a tab-index="-1" href="#podium-experience" class="link inline label text-off-neutral">Upper-Level Features</a><br>
				<a tab-index="-1" href="#basement-experience" class="link inline label text-off-neutral">Lower-Level Features</a><br>
				<a tab-index="-1" href="#location" class="link inline h3">Location</a><br>
				<a tab-index="-1" href="#aerial-panorama" class="link inline label text-off-neutral">Aerial View</a><br>
				<a tab-index="-1" href="#floorplans" class="link inline h3">Download Floorplan &#x2b07;</a><br>
				<a tab-index="-1" href="#clubhouse" class="link inline h3">Clubhouse</a><br>
				<a tab-index="-1" href="#architect" class="link inline label text-off-neutral">The Architect</a><br>
				<a tab-index="-1" href="#infrastructure" class="link inline h3">Infrastructure</a><br>
				<a tab-index="-1" href="#infrastructure" class="link inline label text-off-neutral">Water System</a><br>
				<a tab-index="-1" href="#safety" class="link inline label text-off-neutral">Safety &amp; Security</a><br>
				<a tab-index="-1" href="#specifications" class="link inline h3">Specifications</a><br>
			</div>
		</div>
	</div>
</section>
<!-- END : Nav Section -->









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
		<!-- <div class="modal-close js_modal_close">&times;</div> -->
	</div>

</div><!-- END : Modal Wrapper -->

<!--  ☠  MARKUP ENDS HERE  ☠  -->

<?php /*lazaro_disclaimer();*/ ?>









<!-- JS Modules -->
<script type="text/javascript" src="/js/modules/pageless.js"></script>
<script type="text/javascript" src="/js/modules/navigation.js"></script>
<script type="text/javascript" src="/js/modules/scroll-subtleties.js"></script>
<script type="text/javascript" src="/js/modules/blips-and-cards.js"></script>
<script type="text/javascript" src="/js/modules/masterplan-parallax.js"></script>
<script type="text/javascript" src="/js/modules/video_embed.js"></script>
<script type="text/javascript" src="/js/modules/modal_box.js"></script>
<script type="text/javascript" src="/js/modules/smoothscroll.js"></script>
<script type="text/javascript" src="/js/modules/tabs.js"></script>
<script type="text/javascript" src="/js/modules/form.js"></script>
<!-- <script type="text/javascript" src="/js/modules/disclaimer.js"></script> -->

<!-- Slick Carousel JS -->
<script type="text/javascript" src="plugins/slick/slick.min.js"></script>
<script type="text/javascript" src="plugins/bodymovin/bodymovin.js"></script>

<script type="text/javascript">

// JAVASCRIPT GOES HERE
$(document).ready(function(){

		var animation = bodymovin.loadAnimation({
		  container: document.getElementById('basement'),
		  renderer: 'svg',
		  loop: true,
		  autoplay: true,
		  path: 'basement.json'
		})

});

</script>

</body>

</html>
