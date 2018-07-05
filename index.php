<?php

	// :: ONLY DURING DEVELOPMENT ::
	// debugging
	ini_set( "display_errors", "On" );
	ini_set( "error_reporting", E_ALL );

	/*
	 * Versioning Assets to invalidate the browser cache
	 */
	$ver = '?v=20180705';

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
		<div class="welcome-bg">
			<picture>
				<source srcset="media/lawn-villa-facade-3d-large.jpg<?php echo $ver ?>" media="(min-width: 640px)">
				<img class="block" src="media/lawn-villa-facade-3d-small.jpg<?php echo $ver ?>">
			</picture>
		</div>
		<div class="welcome-content block-space-top-bottom">
			<div class="container">
				<div class="row">
					<div class="logo columns small-5 small-offset-1 medium-3 large-3 xlarge-2">
						<img class="block" src="media/logo-lawns.svg<?php echo $ver ?>">
					</div>
					<div class="description p columns text-off-neutral small-10 small-offset-1 large-6 large-offset-0 xlarge-5 xlarge-offset-1">Zotra Lawns is the <span class="strong em text-light">first 4 Bedroom low rise residential development in RR Nagar</span>. We at Zotra are glad to be the first to offer this caliber of lifestyle – to a region of the city that has long deserved it.</div>
				</div>
			</div>
		</div>
	</section><!-- END : Welcome Section -->

	<section id="zotra" class="zotra-section fill-black js_zotra">
		<div class="container">
			<div class="row">
				<div class="logo-partner columns small-9 small-offset-1 medium-4">
					<div class="title label strong text-off-copper">Project By :</div>
					<img class="logo block" src="media/logo-zotra-partner.svg<?php echo $ver ?>">
					<div class="rera label">RERA Nº : PRM/KA/RERA/1251/310/PR/180420/001509</div>
				</div>
				<div class="zotra-content h4 text-neutral columns small-10 small-offset-1 large-5">
					Zotra Lawns exemplifies the luxury of both, an Architect designed bungalow and the benefits of living in a high-end gated community. We have painstakingly planned it to ensure your family is safe without compromising on the lifestyle they deserve.
				</div>
			</div>
		</div>
	</section>

	<!-- Villa Section -->
	<section id="the-villa" class="villa-section block-space-top fill-black js_section">
		<div class="container">
			<div class="row villa-content block-space-top fill-light">
				<div class="title label strong text-black columns small-10 small-offset-1">Dual-Level Homes</div>
				<div class="heading h1 strong text-black columns small-10 small-offset-1 medium-5">The Best of Both Worlds</div>
				<div class="description p columns small-10 text-black small-offset-1 medium-5 medium-offset-0">Cars do not belong on a lawn, they are better off on a road or parked in a basement. This is the premise behind why we developed this project with a dual-level approach. As such, the entire 2.8 acre property is exclusively pedestrian only. Cars use a ramp at the entrance to access a basement. Your home is a mansion with room for the entire family – each floor is designed for a specific purpose.</div>
			</div>
			<div div class="villa-image">
				<!-- Villa Blips -->
				<div class="blip-system">
					<div class="blip-image">
						<picture>
							<source srcset="media/cross-section-3d-large.jpg<?php echo $ver ?>" media="(min-width: 640px)">
							<img class="block" style="width: 100%;" src="media/cross-section-3d-small.jpg<?php echo $ver ?>">
						</picture>
						<div class="blip-canvas js_blip_canvas">
							<div class="container-blip-toggle-and-card" style="top: 51.7%; left: 63.2%;">
								<div class="blip-toggle js_blip_toggle" data-index="1" tabindex="0">1</div>
								<div class="point fill-dark js_point"><!-- The corresponding point will be plonked in here --></div>
							</div>
							<div class="container-blip-toggle-and-card" style="top: 70%; left: 20%;">
								<div class="blip-toggle js_blip_toggle" data-index="2" tabindex="0">2</div>
								<div class="point fill-dark js_point"><!-- The corresponding point will be plonked in here --></div>
							</div>
							<div class="container-blip-toggle-and-card" style="top: 45%; left: 36%;">
								<div class="blip-toggle active js_blip_toggle" data-index="3" tabindex="0">3</div>
								<div class="point fill-dark active js_point"><!-- The corresponding point will be plonked in here --></div>
							</div>
							<div class="container-blip-toggle-and-card" style="top: 84%; left: 60%;">
								<div class="blip-toggle js_blip_toggle" data-index="4" tabindex="0">4</div>
								<div class="point fill-dark js_point"><!-- The corresponding point will be plonked in here --></div>
							</div>
							<div class="container-blip-toggle-and-card" style="top: 65%; left: 47.5%;">
								<div class="blip-toggle js_blip_toggle" data-index="5" tabindex="0">5</div>
								<div class="point fill-dark js_point"><!-- The corresponding point will be plonked in here --></div>
							</div>
						</div>
					</div>
					<div class="container">
						<div class="row">
							<div class="columns small-12 medium-8 medium-offset-2 large-6 large-offset-3">
								<div class="slick-blip fill-dark js_slick_blip">
									<div class="point js_point">
										<div class="heading h4 text-copper">Dedicated Private Lift</div>
										<div class="p description">Your home comes with a dedicated private lift. The Lift is access controlled and configured to allow secure access to all floors. The main staircase runs in a spiral around the lift well. </div>
									</div>
									<div class="point js_point">
										<div class="heading h4 text-copper">Private Lawn</div>
										<div class="p description">Your home opens up onto a dedicated landscaped lawn. Connecting your commonly used family spaces with the outdoors. </div>
									</div>
									<div class="point js_point">
										<div class="heading h4 text-copper">Double Height Cut-Out</div>
										<div class="p description">Your Living Room is a double height space that deliberately invokes the feeling of a high-end custom designed home. </div>
									</div>
									<div class="point js_point">
										<div class="heading h4 text-copper">Basement</div>
										<div class="p description">You have 3 dedicated car-parks. Enter the basement on a direct ramp and drive to your parking. Take the access controlled lift to any floor in your home. The staircase leads to your front-door at the pedestrian level. </div>
									</div>
									<div class="point js_point">
										<div class="heading h4 text-copper">Expansive living and dining area</div>
										<div class="p description">All the rooms on the ground floor revolve around an aptly placed Living Room and Dining Area, which open up onto landscaped lawns. </div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div><!-- END: Villa Blips -->
			</div>

		</div>
		<div class="bg-fix"></div>
	</section><!-- END : Villa Section -->



	<!-- Villa Isometric Section -->
	<section id="villa-key-features" class="villa-isometric-section fill-light js_section js_section_villa_features">
		<div class="floor">
			<div class="isometric"></div>
			<div class="floor-content row">
				<div class="container">
					<div class="columns small-10 medium-8 large-4 large-offset-7">
						<div class="title h2 strong">Top Floor</div>
						<div class="heading h4">The Master Suite</div>
						<div class="description p">A large master bedroom with a study area, large dressing and bathroom. Access to a private terrace from your bedroom. </div>
					</div>
				</div>
			</div>
		</div>
		<div class="floor">
			<div class="isometric"></div>
			<div class="floor-content row">
				<div class="container">
					<div class="columns small-10 medium-8 large-4 large-offset-7">
						<div class="title h2 strong">1<sup>st</sup> Floor</div>
						<div class="heading h4">The Nuclear Family</div>
						<div class="description p">One large bedroom. One large children's bedroom. Both accessed from a corridor that overlooks the Ground floor. </div>
					</div>
				</div>
			</div>
		</div>
		<div class="floor">
			<div class="isometric"></div>
			<div class="floor-content row">
				<div class="container">
					<div class="columns small-10 medium-8 large-4 large-offset-7">
						<div class="title h2 strong">Ground Floor</div>
						<div class="heading h4">Family Central</div>
						<div class="description p">Large and spacious living and dining rooms. One bedroom. A large kitchen which does justice to the home, along with separate utility and a pooja room. </div>
					</div>
				</div>
			</div>
		</div>
		<div class="floor text-off-light">
			<div class="isometric"></div>
			<div class="floor-content row">
				<div class="container">
					<div class="columns small-10 medium-8 large-4 large-offset-7">
						<div class="title h2 strong">Basement</div>
						<div class="heading h4">Ample Parking and Storage</div>
						<div class="description p">One large service room, which can be used for various services such as store room etc. Three carparks for each home. </div>
					</div>
				</div>
			</div>
		</div>
	</section><!-- END : Villa Isometric Section -->



	<!-- Aerial 3D Section -->
	<section id="aerial-3d" class="aerial-3d-section fill-off-neutral js_section">
		<picture>
			<source srcset="media/aerial-view-3d-large.jpg<?php echo $ver ?>" media="(min-width: 640px)">
			<img class="block" src="media/aerial-view-3d-small.jpg<?php echo $ver ?>">
		</picture>
	</section><!-- END : Aerial 3D Section -->



	<!-- Podium Masterplan Section -->
	<section id="podium-masterplan" class="podium-masterplan-section block-space-top-bottom fill-off-light gradient-light-off-moss texture js_section js_podium_masterplan">
		<div class="podium-masterplan-content">
			<div class="container">
				<div class="row">
					<div class="title label strong text-copper columns small-10 small-offset-1">Upper-Level</div>
					<div class="heading h1 strong columns small-10 small-offset-1 medium-6 large-5">Pedestrian<br> Experience</div>
					<div class="description p columns small-10 small-offset-1 large-5">The upper-level is a pedestrian-only zone accessible through a dedicated gate. It is not possible for a motor vehicle to be on this level, making it extremely secure for children and elderly. The absence of vehicles has given us the freedom to create a community-centric space that is pivoted around human interaction and usability.</div>
				</div>
			</div>
		</div>

		<!-- Lower Level Masterplan Blips -->
		<div class="blip-system">
			<div class="blip-image">
				<div class="masterplan-container panorama-instruction js_masterplan_container">
					<div class="masterplan">
						<div class="layer backdrop"><img class="block" src="media/podium-masterplan/1_PodiumForest.png<?php echo $ver ?>"></div>
						<div class="layer"><img class="block" src="media/podium-masterplan/2_PodiumFills.png<?php echo $ver ?>"></div>
						<div class="layer"><img class="block" src="media/podium-masterplan/3_PodiumLines.svg<?php echo $ver ?>"></div>
						<div class="layer"><img class="block" src="media/podium-masterplan/4_PodiumTrees.png<?php echo $ver ?>"></div>
						<div class="layer roof-shadows"><img class="block" src="media/podium-masterplan/5_PodiumShadows.svg<?php echo $ver ?>"></div>
						<div class="layer"><img class="block" src="media/podium-masterplan/6_PodiumRoof.svg<?php echo $ver ?>"></div>
						<div class="layer"><div id="bm-podium"> </div></div>
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
								<div class="title h4 text-copper">Central Promenade</div>
								<div class="icon columns small-4 large-3"><img class="block" src="media/podium-masterplan-icons/PodiumPromenade.svg<?php echo $ver ?>"></div>
								<div class="p description columns small-7 small-offset-1 large-8">Pedestrian walkways that emulate the experience of a park, not a road network.</div>
							</div>
							<div class="point row">
								<div class="title h4 text-copper">Outdoor Recreation</div>
								<div class="icon columns small-4 large-3"><img class="block" src="media/podium-masterplan-icons/Promenade.svg<?php echo $ver ?>"></div>
								<div class="p description columns small-7 small-offset-1 large-8">A landscaped recreational area, with outdoor amenities.</div>
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
		<div class="podium-experience-content no-pointer block-space-top">
			<div class="container">
				<div class="row">
					<div class="title label strong text-off-copper columns small-10 small-offset-1">Upper-Level</div>
					<div class="heading h1 strong columns small-10 small-offset-1 medium-6 large-5">Promenade<br> Experience</div>
				</div>
			</div>
		</div>

		<!-- Upper Level Villa Blips -->
		<div class="blip-system">
			<div class="blip-image">
				<picture>
					<source srcset="media/pedestrian-walkways-3d-large.jpg<?php echo $ver ?>" media="(min-width: 640px)">
					<img class="block" style="width: 100%;" src="media/pedestrian-walkways-3d-small.jpg<?php echo $ver ?>">
				</picture>
				<div class="blip-canvas js_blip_canvas">
					<div class="container-blip-toggle-and-card" style="top: 59.5%;left: 49.5%;">
						<div class="blip-toggle active js_blip_toggle" tabindex="0" data-index="1">1</div>
						<div class="point fill-light active js_point"><!-- The corresponding point will be plonked in here --></div>
					</div>
					<div class="container-blip-toggle-and-card" style="top: 80%;left: 20%;">
						<div class="blip-toggle js_blip_toggle" tabindex="0" data-index="2">2</div>
						<div class="point fill-light js_point"><!-- The corresponding point will be plonked in here --></div>
					</div>
					<div class="container-blip-toggle-and-card" style="top: 50%;left: 64.7%;">
						<div class="blip-toggle js_blip_toggle" tabindex="0" data-index="3">3</div>
						<div class="point fill-light js_point"><!-- The corresponding point will be plonked in here --></div>
					</div>
					<div class="container-blip-toggle-and-card" style="top: 75%;left: 80%;">
						<div class="blip-toggle js_blip_toggle" tabindex="0" data-index="4">4</div>
						<div class="point fill-light js_point"><!-- The corresponding point will be plonked in here --></div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="columns small-12 medium-8 medium-offset-2 large-6 large-offset-3">
						<div class="slick-blip fill-light js_slick_blip">
							<div class="point js_point">
								<div class="title h4 text-copper">Contemporary Architecture</div>
								<div class="p description">The homes possess an aesthetic that mirrors a modern architectural vocabulary prevalent in Germany and Switzerland. The design, however, is not overly minimalist, incorporating an earthy warm mix of locally sourced stone cladding, glass and wood.</div>
							</div>
							<div class="point js_point">
								<div class="title h4 text-copper">Zero Redundant Barriers</div>
								<div class="p description">The front yards of all the homes blend into the main walkways with the use of greenery to create separation and not permanent structures like walls, fences or gates. This creates a very inclusionary, community-driven vibe.</div>
							</div>
							<div class="point js_point">
								<div class="title h4 text-copper">Privacy</div>
								<div class="p description">To aid in privacy, homes that face each other have been staggered. Effectively staggering the windows.</div>
							</div>
							<div class="point js_point">
								<div class="title h4 text-copper">Efficient Planning</div>
								<div class="p description">The walkways on the promenade level periodically open up into landscaped resting areas. This would not have been possible without taking the design decision to make all vehicular traffic enter the basement directly.</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><!-- END: Upper Level Villa Blips -->

	</section><!-- END : Podium Experience Section -->



	<!-- Basement Masterplan Section -->
	<section id="basement-masterplan" class="basement-masterplan-section block-space-top-bottom fill-moss gradient-moss-off-dark texture js_section js_basement_masterplan">
		<div class="basement-masterplan-content">
			<div class="container">
				<div class="row">
					<div class="title label strong text-neutral columns small-10 small-offset-1">Lower-Level</div>
					<div class="heading h1 strong columns small-10 small-offset-1 medium-6 large-5">Basement <br>Experience</div>
					<div class="description p columns small-10 small-offset-1 large-5">The lower-level is accessible via a separate gate that leads directly to the basement ramps, shepherding cars directly underground. Residents can drive their cars under their respective homes and take a private lift directly into their houses. Or take the stairs and enter house from podium level.</div>
				</div>
			</div>
		</div>

		<!-- Lower Level Masterplan Blips -->
		<div class="blip-system">
			<div class="blip-image">
				<div class="masterplan-container panorama-instruction js_masterplan_container">
					<div class="masterplan">
						<div class="layer grid"><img class="block" src="media/basement-masterplan/1_BasementGrid.png<?php echo $ver ?>"></div>
						<div class="layer"><img class="block" src="media/basement-masterplan/2_BasementTexture.png<?php echo $ver ?>"></div>
						<div class="layer"><div id="bm-basement"> </div><!-- <img class="block" src="media/basement-masterplan/3_BasementLines.svg<?php echo $ver ?>"> --></div>
						<div class="layer lights"><img class="block" src="media/basement-masterplan/4_BasementLights.png<?php echo $ver ?>"></div>
						<div class="blip-canvas">
							<div class="blip-toggle active js_blip_toggle" tabindex="0" data-index="1" style="top: 36%;left: 82.5%;">1</div>
							<div class="blip-toggle js_blip_toggle" tabindex="0" data-index="2" style="top: 38%;left: 19.5%;">2</div>
							<div class="blip-toggle js_blip_toggle" tabindex="0" data-index="3" style="top: 67%;left: 21%;">4</div>
							<div class="blip-toggle js_blip_toggle" tabindex="0" data-index="4" style="top: 38%;left: 59%;">5</div>
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
								<div class="p description columns small-7 small-offset-1 large-8">All plumbing has been laid in serviceable, underground conduits. There are no exposed pipes hanging from the ceiling, except the emergency water sprinklers in case of fire.</div>
							</div>
							<div class="point row">
								<div class="title h4 text-copper">Landscape</div>
								<div class="icon columns small-4 large-3"><img class="block" src="media/basement-masterplan-icons/SmallLandscape.svg<?php echo $ver ?>"></div>
								<div class="p description columns small-7 small-offset-1 large-8">Small artificially landscaped area in the basement.</div>
							</div>
							<div class="point row">
								<div class="title h4 text-copper">Natural Light</div>
								<div class="icon columns small-4 large-3"><img class="block" src="media/basement-masterplan-icons/CutoutLight.svg<?php echo $ver ?>"></div>
								<div class="p description columns small-7 small-offset-1 large-8">Cut outs spread across the basement ceiling brings in natural light from the upper level.</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><!-- END : Lower Level Masterplan Blips -->

	</section><!-- END : Basement Masterplan Section -->



	<!-- Basement Experience Section -->
	<section id="basement-experience" class="basement-experience-section fill-off-dark texture js_section">
		<div class="basement-experience-content no-pointer block-space-top">
			<div class="container">
				<div class="row">
					<div class="title label strong text-off-copper columns small-10 small-offset-1">Lower-Level</div>
					<div class="heading h1 strong columns small-10 small-offset-1 medium-6 large-5">Basement<br>  Experience</div>
				</div>
			</div>
		</div>

		<!-- Lower Level Villa Blips -->
		<div class="blip-system">
			<div class="blip-image">
				<picture>
					<source srcset="media/basement-level-3d-large.jpg<?php echo $ver ?>" media="(min-width: 640px)">
					<img class="block" style="width: 100%;" src="media/basement-level-3d-small.jpg<?php echo $ver ?>">
				</picture>
				<div class="blip-canvas js_blip_canvas">
					<div class="container-blip-toggle-and-card" style="top: 57%;left: 45.75%;">
						<div class="blip-toggle js_blip_toggle" tabindex="0" data-index="1">1</div>
						<div class="point fill-dark js_point"><!-- The corresponding point will be plonked in here --></div>
					</div>
					<div class="container-blip-toggle-and-card" style="top: 68%;left: 30%;">
						<div class="blip-toggle active js_blip_toggle" tabindex="0" data-index="2">2</div>
						<div class="point fill-dark active js_point"><!-- The corresponding point will be plonked in here --></div>
					</div>
					<div class="container-blip-toggle-and-card" style="top: 57%;left: 82%;">
						<div class="blip-toggle js_blip_toggle" tabindex="0" data-index="3">3</div>
						<div class="point fill-dark js_point"><!-- The corresponding point will be plonked in here --></div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="columns small-12 medium-8 medium-offset-2 large-6 large-offset-3">
						<div class="slick-blip fill-dark js_slick_blip">
							<div class="point row js_point">
								<div class="title h3 text-copper columns small-12">Private Access</div>
								<div class="icon columns small-4 large-5"><img class="block" src="media/basement-experience-icons/PrivateAccess.svg<?php echo $ver ?>"></div>
								<div class="p description columns small-7 small-offset-1 large-6">Every home has a private, access controlled entrance from the basement. Drive your car in and take a private lift up into your living room.</div>
							</div>
							<div class="point row js_point">
								<div class="title h3 text-copper columns small-12">Future proof</div>
								<div class="icon columns small-4 large-5"><img class="block" src="media/basement-experience-icons/CarElec.svg<?php echo $ver ?>"></div>
								<div class="p description columns small-7 small-offset-1 large-6">Electric-car charging points controlled from within the home.</div>
							</div>
							<div class="point row js_point">
								<div class="title h3 text-copper columns small-12">Water outlets</div>
								<div class="icon columns small-4 large-5"><img class="block" src="media/basement-experience-icons/CarWash.svg<?php echo $ver ?>"></div>
								<div class="p description columns small-7 small-offset-1 large-6">Each home has a dedicated water outlet at the basement level for washing cars. There is also a sufficiently allocated space to be utilized for the washing of clothes.</div>
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
					<div class="heading h1 strong text-copper">Rajarajeshwari Nagar</div>
					<div class="description p">Finding a community like this in RR Nagar is highly uncommon and unheard of. This developed region of Bangalore needs little introduction. With an average escalation in land cost from Rs 4000 to Rs 8000 per sft in the last five years, it is very apparent that this neighbourhood is on an upswing.</div>
				</div>
			</div>

			<div class="row">
				<div class="maps columns small-12 large-4 large-offset-1">
					<a class="button button-copper" href="https://goo.gl/maps/5Xc1F2vXznS2" target="_blank">Open in Google Maps</a>
				</div>
				<div class="appreciation columns small-12 large-6 large-offset-1 xlarge-5">
					<div class="title label strong text-off-copper">Appreciation</div>
					<div class="description p">Growth in this region over the next 3 years will be exponentially faster. This is why we were determined to develop a community on a 3 acre plot – that would normally have been relegated to an apartment development. It’s long been overdue.</div>
				</div>
			</div>

			<!-- <div>[ We need to highlight proximity to Banshankari as well, as there are premium customers in that area and would not mind moving here. ]<div> -->
			<div class="row">
				<div class="location-list columns small-12 large-offset-6 large-6 xlarge-5">
					<div class="location-list-headings js_location_list_headings">
						<div class="heading-underline js_heading_underline"></div>
						<div class="headings strong js_headings">
							<div class="heading h4 selected js_heading" data-index="1">
								<span>Schools</span>
							</div>
							<div class="heading h4 js_heading" data-index="2">
								<span>Malls</span>
							</div>
							<div class="heading h4 js_heading" data-index="3">
								<span>Hospitals</span>
							</div>
							<div class="heading h4 js_heading" data-index="4">
								<span>More</span>
							</div>
						</div>
					</div>
					<div class="tabs js_tabs">
						<div class="tab selected js_tab">
							<div class="heading h4 js_heading" data-index="1">
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
							<div class="heading h4 js_heading" data-index="2">
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
							<div class="heading h4 js_heading" data-index="3">
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
							<div class="heading h4 js_heading" data-index="4">
								<span>More</span>
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
	<section id="aerial-panorama" class="aerial-panorama-section fill-moss js_section js_aerial_panorama_section">
		<div class="panorama-wrappper panorama-instruction js_panorama_wrapper"></div>
	</section><!-- END : Aerial Panorama Section -->



	<!-- Floorplans Section -->
	<section id="floorplans" class="show-form floorplans-section block-space-top-bottom fill-dark js_section">
		<div class="container">
			<div class="heading h1 strong block text-center">Floor Plans</div>
			<div class="row">
				<div class="floorplan-card fill-light columns small-10 small-offset-1 large-3 large-offset-0">
					<div class="logo"><img class="inline" src="media/floorplan-card/sovereign-logo.svg<?php echo $ver ?>"></div>
					<div class="image"><img class="block" src="media/floorplan-card/sovereign-img.png<?php echo $ver ?>"></div>
					<div class="pattern"><img class="block" src="media/floorplan-card/sovereign-pattern.svg<?php echo $ver ?>"></div>
					<div class="size">Homes upto 4175 sft</div>
					<div class="feature em text-neutral">with a Backyard Lawn</div>
					<!-- <div class="price text-copper">Starting at ₹4.3 Cr</div> -->
					<button class="button button-copper block" style="background-color: #83837D;">Download Now &#x2b07;</button>
				</div>
				<div class="floorplan-card fill-light columns small-10 small-offset-1 large-3 large-offset-0">
					<div class="logo"><img class="inline" src="media/floorplan-card/supreme-logo.svg<?php echo $ver ?>"></div>
					<div class="image"><img class="block" src="media/floorplan-card/supreme-img.png<?php echo $ver ?>"></div>
					<div class="pattern"><img class="block" src="media/floorplan-card/supreme-pattern.svg<?php echo $ver ?>"></div>
					<div class="size">Homes upto 4515 sft</div>
					<div class="feature em text-neutral">with a Courtyard Lawn</div>
					<!-- <div class="price text-copper">Starting at ₹4.1 Cr</div> -->
					<button class="button button-copper block" style="background-color: #AAA386;">Download Now &#x2b07;</button>
				</div>
				<div class="floorplan-card fill-light columns small-10 small-offset-1 large-3 large-offset-0">
					<div class="logo"><img class="inline" src="media/floorplan-card/premier-logo.svg<?php echo $ver ?>"></div>
					<div class="image"><img class="block" src="media/floorplan-card/premier-img.png<?php echo $ver ?>"></div>
					<div class="pattern"><img class="block" src="media/floorplan-card/premier-pattern.svg<?php echo $ver ?>"></div>
					<div class="size">Homes upto 7220 sft</div>
					<div class="feature em text-neutral">with a Premium Lawn</div>
					<!-- <div class="price text-copper">Starting at ₹4.5 Cr</div> -->
					<button class="button button-copper block" style="background-color: #4E5A6B;">Download Now &#x2b07;</button>
				</div>
			</div>
		</div>

		<!-- Call For Action -->
		<div class="action-section">
			<div class="container">
				<div class="row">
					<div class="action-card fill-off-light columns small-12 medium-10 medium-offset-1 large-8 large-offset-2 xlarge-6 xlarge-offset-3">
						<div class="form-close js_form_close" tabindex="-1">Close</div>
						<form action="" class="row">
							<div class="form-heading h2 strong columns small-12">Get Floorplan</div>
							<label class="form-item columns small-12 large-6">
								<span class="label">Name</span>
								<input class="block" type="text" placeholder="">
							</label>
							<label class="form-item columns small-12 large-6">
								<span class="label">Email</span>
								<input class="block" type="text" placeholder="">
							</label>
							<label class="form-item columns small-12 large-6">
								<span class="label">Mobile</span>
								<input class="block" type="text" placeholder="">
							</label>
							<label class="form-item columns small-12 large-6">
								<span class="label invisible">Download</span>
								<input class="block button button-copper" type="Submit" value="Download">
							</label>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- END : Call For Action -->

	</section><!-- END : Floorplans Section -->



	<!-- Clubhouse 3D Section -->
	<section id="clubhouse-3d" class="clubhouse-3d-section fill-moss js_section">
		<picture>
			<source srcset="media/clubhouse-area-3d-large.jpg<?php echo $ver ?>" media="(min-width: 640px)">
			<img class="block" src="media/clubhouse-area-3d-small.jpg<?php echo $ver ?>">
		</picture>
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
					<div class="description p">The clubhouse has been planned with a great deal of efficiency. It only occupies 5% of the total Super Built Area of an average home. This translates to a greater component of usable carpet area in your home when compared to most other projects.</div>
				</div>
			</div>
		</div>

		<div class="masterplan-container">
			<div class="masterplan">
				<div class="layer fill-dark texture"><img style="mix-blend-mode: multiply;" class="block" src="media/clubhouse-masterplan/1_ClubhouseTrees.png<?php echo $ver ?>"></div>
				<div class="layer"><div id="bm-clubhouse"></div></div>
			</div>
		</div>
	</section><!-- END : Clubhouse Section -->



	<!-- Infrastructure Section -->
	<section id="infrastructure" class="infrastructure-section block-space-top fill-light js_section">
		<div class="container">
			<div class="water-content row">
				<div class="columns small-10 small-offset-1 large-6">
					<div class="title label strong text-copper">Infrastructure</div>
					<div class="heading h1 strong">Water System</div>
					<div div class="description p">Water is a very valuable resource in Bangalore, managing it is something we have put a lot of energy behind. The water management system at Lawns is designed to make the most of all available sources of water, with efficient fail-safes put in place to account for a minimal disruption in service.</div>
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
							Each home has 3 water tanks on the roof.<br>
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
				<div class="layer"><div id="bm-water"></div></div>
			</div>
		</div>

	</section><!-- END : Infrastructure Section -->



	<!-- Architect Section -->
	<section id="architect" class="architect-section block-space-top-bottom fill-off-light texture js_section">
		<div class="container">
			<div class="row">
				<div class="photograph columns small-12 large-5">
					<picture>
						<source srcset="media/architect-photograph-large.png<?php echo $ver ?>" media="(min-width: 640px)">
						<img src="media/architect-photograph-small.png<?php echo $ver ?>">
					</picture>
				</div>
				<div class="architect-content columns small-10 small-offset-1 large-5">
					<div class="title label strong text-off-copper">Principal Designer</div>
					<div class="heading h1 strong text-neutral">Hadi Teherani</div>
					<div class="description p">Hadi Teherani is an award-winning German architect and designer based in Hamburg, Germany. His style is recognisable by its unique blend of simplicity, openness and moderation. The Bangalore chapter of his firm has spearheaded the design of this community.<br><br>
					This blend of world-renowned pedigree and an awareness of the local nuances expected in an Indian home has resulted in a product unlike any in the region. He has designed many landmark projects across Europe and Asia.<br><br>
					<a class="p strong em text-off-copper" href="http://www.haditeherani.com" target="_blank">Architect's Website &#10230;</a>
					</div>
					<hr>
					<div class="team-title label strong text-off-copper">Landscape Designers</div>
					<a class="team-heading h3 strong text-neutral" href="http://www.zoras.co.uk/" target="_blank">Zoras</a><br>
					<div class="team-title label strong text-off-copper">Mechanical Electrical &amp; Plumbing</div>
					<div class="team-heading h3 strong text-neutral">Tirumala Associates</div>
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
					<div class="description p">We are constantly finding ways to improve Zotra Lawns, certain aspects of the specifications, features, finishes and the planning can possibly undergo a few changes. We assure you that these changes will be improvements.</div>
				</div>
			</div>
		</div>
		<div class="specifications-points row js_specifications_points">
			<div class="container">
				<div class="columns small-10 small-offset-1 large-6 large-offset-6">
					<div class="heading h4 text-uppercase">Structure</div>
					<div class="point p">RCC Frame Structure</div>
					<div class="point p">Concrete Solid Block Masonry</div>

					<div class="heading h4 text-uppercase">Walls</div>
					<div class="point p">Internal Walls - Plastered and Painted Internal Emulsion ( Asian / Berger or equivalent make).</div>
					<div class="point p">Exterior Walls - Painted with ( Asian / Berger or equivalent make ).</div>
					<div class="point p">Bath Room - Ceramic Tiles up to a height of 7 feet.</div>

					<div class="heading h4 text-uppercase">Floors</div>
					<div class="point p">Living &amp; Dining Room – Imported designer marble</div>
					<div class="point p">Master Bedrooms - Imported designer marble</div>
					<div class="point p">Bedrooms - Imported designer marble</div>
					<div class="point p">Kitchen – Natural or Engineered Granite</div>
					<div class="point p">Bath Room ( Master Bedroom ) - Ceramic Tiles (Kajaraia/Nitco or equivalent) </div>
					<div class="point p">Bath Room ( Others ) - Ceramic Tiles ( 1’ x 1’ ) (Kajaraia/Nitco or equivalent)  Balconies - Matte Ceramic Tiles ( 1’ x 1’ ) (Kajaraia/Nitco or equivalent)  </div>

					<div class="heading h4 text-uppercase">Windows</div>
					<div class="point p">Windows - 3 Track powder coated aluminium framed windows with  clear toughened glass and mosquito mesh.</div>



					<div class="heading h4 text-uppercase">Doors</div>
					<div class="point p">Main / Entrance Door - Teak wood frame with flush shutter with veneer on both sides.</div>
					<div class="point p">Other doors – Hard wood frame with veneer finished flush doors.</div>
					<div class="point p">Hardware - All the doors have brass / stainless steel finish. The Main door will be provided with a night latch ( Godrej / Europa or equivalent make ).</div>

					<div class="heading h4 text-uppercase">Bathrooms</div>
					<div class="point p">Sanitary Fittings – Kohler/Toto/American Standard or equivalent make, all in white color.</div>
					<div class="point p">Closet - Western style floor mounted closet of Kohler/Toto/American Standard or equivalent make with PVC cistern.</div>
					<div class="point p">Faucets - Kohler/Toto/American Standard or equivalent make </div>
					<div class="point p">Hot Water - A hot water connection will be provided to the shower </div>

					<div class="heading h4 text-uppercase">Kitchen</div>
					<div class="point p">Counter Top - 19 MM Granite Counter Top provided.</div>
					<div class="point p">Stainless Steel Sink for Kitchen - Single Bowl sink (18” x 16”) with drain board provided in the Kitchen area. Franke Brand or equivalent</div>
					<div class="point p">Stainless Steel Sink for Utility - Single Bowl sink (18” x 16”) with drain board provided in the utility area. Franke Brand or equivalent.</div>

					<div class="heading h4 text-uppercase">Electrical</div>
					<div class="point p">Wiring - Finolex/Anchor/havels or equivalent make concealed in 19mm diameter, 2 mm thick PVC Conduit pipes. The wiring for 5 amps point shall be of 3/22 rating copper wire. FRLS Provided. </div>
					<div class="point p">Switches – Schneider/Legrand make or equivalent</div>
					<div class="point p">Switch Points - Switch points, sockets, phone points and television points come as standard points included in the basic cost.</div>
					<div class="point p">Other points in room - Cable TV, with a centralised single dish antenna on the terrace.</div>

					<div class="heading h4 text-uppercase">Elevator</div>
					<div class="point p">1 Hydraulic/MRL Elevator of 2-3 passenger capacity per unit</div>



				</div>
			</div>
		</div>
	</section><!-- END : Specifications Section -->



	<!-- Footer Section -->
	<section class="footer-section fill-off-dark block-space-top-bottom">
		<div class="container">
			<div class="row">
				<div class="columns small-10 small-offset-1">
					<div class="heading h3">Disclaimer</div>
					<div class="point small">By using or accessing the Website you agree with the Disclaimer without any qualification or limitation. Zotra reserves the right to terminate, revoke, modify, alter, add and delete any one or more of the terms and conditions of the website. Zotra shall be under no obligation to notify the visitor of the amendment to the terms and conditions and the visitor shall be bound by such amended terms and conditions.</div>
					<div class="point small">The visuals and information contained herein marked as "artistic impression" are artistic impressions being indicative in nature and are for general information purposes only. The visuals contained marked as "generic image" and other visuals /image /photographs are general images and do not have any correlation with the project.</div>
					<div class="point small">The imagery used on the website may not represent actuals or may be indicative of style only. Photographs of interiors, surrounding views and location may not represent actuals or may have been digitally enhanced or altered. These photographs may not represent actuals or may be indicative only. Computer generated images, walkthroughs and render images are the artist's impression and are an indicative of the actual designs.</div>
					<div class="point small">No information given on this Website creates a warranty or expand the scope of any warranty that cannot be disclaimed under the applicable laws. The information on this website is presented as general information and no representation or warranty is expressly or impliedly given as to its accuracy. Any interested party should verify all the information including designs, plans, specifications, facilities, features, payment schedules, terms of sales etc independently with Zotra prior to concluding any decision for buying in any of the project.</div>
					<div class="point small">While enough care is taken by Zotra to ensure that information in the website are up to date, accurate and correct, the readers/ users are requested to make an independent enquiry with Zotra before relying upon the same. Nothing on the website should be misconstrued as advertising, marketing, booking, selling or an offer for sale or invitation to purchase a unit in any project by Zotra. Zotra is not responsible for the consequences of any action taken by the viewer relying on such material/ information on this website without independently verifying with Zotra.</div>
				</div>
			</div>
		</div>
	</section><!-- END : Footer Section -->



	<!-- Lazaro Signature -->
	<?php lazaro_signature(); ?>
	<!-- END : Lazaro Signature -->

</div><!-- END : Page Wrapper -->






<!-- Menu Section -->
<section class="menu js_menu_opener js_modal_closer" tabindex="-1">
	<div class="menu-container container">
		<div class="menu-toggle-close"></div>
		<div class="menu-toggle inline js_menu_toggle">
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
				<a tab-index="-1" href="#the-villa" class="link inline h3">The Home</a><br>
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
						<!-- <div class="youtube_embed ga_video" data-src="https://www.youtube.com/embed/lncVHzsc_QA?rel=0&amp;showinfo=0" data-ga-video-src="Sample - Video">
							<div class="youtube_load"></div>
							<iframe width="1280" height="720" src="" frameborder="0" allowfullscreen></iframe>
						</div> -->
					</div>
				</div>
			</div>
		</div><!-- END : Sample Video -->


		<!-- Modal Close Button -->
		<!-- <div class="modal-close js_modal_close">&times;</div> -->
	</div>

</div><!-- END : Modal Wrapper -->

<!--  ☠  MARKUP ENDS HERE  ☠  -->

<?php /*lazaro_disclaimer();*/ ?>









<!-- JS Modules -->
<script type="text/javascript">

	/*
	 *
	 * Auto-scroll to the section specified in the url
	 *
	 */
	( function () {

		if ( location.pathname == "/" ) return;

		var section = location.pathname.slice( 1, -1 )
		setTimeout( function () {
			window.scrollTo( { top: document.getElementById( section ).offsetTop, behavior: "smooth" } );
		}, 250 );

	} )()

</script>
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
<script type="text/javascript" src="plugins/dot/dot-v1.1.2.min.js"></script>
<script type="text/javascript" src="plugins/uEvent/uEvent-v1.0.0.min.js"></script>
<script type="text/javascript" src="plugins/D/D-v0.7.5.min.js"></script>
<script type="text/javascript" src="plugins/three/three-v0.91.0.min.js"></script>
<script type="text/javascript" src="plugins/photo-sphere-viewer/photo-sphere-viewer-v3.3.2.min.js"></script>


<script type="text/javascript">

// JAVASCRIPT GOES HERE
$(document).ready(function(){

		var animation = bodymovin.loadAnimation({
		  container: document.getElementById('bm-basement'),
		  renderer: 'svg',
		  loop: true,
		  autoplay: true,
		  path: 'basement.json'
		})

		var animation = bodymovin.loadAnimation({
		  container: document.getElementById('bm-podium'),
		  renderer: 'svg',
		  loop: true,
		  autoplay: true,
		  path: 'pedestrian.json'
		})

		var animation = bodymovin.loadAnimation({
		  container: document.getElementById('bm-water'),
		  renderer: 'svg',
		  loop: true,
		  autoplay: true,
		  path: 'water.json'
		})

		var animation = bodymovin.loadAnimation({
		  container: document.getElementById('bm-clubhouse'),
		  renderer: 'svg',
		  loop: true,
		  autoplay: true,
		  path: 'clubhouse.json'
		})

	/*
	 * Set up the panorama
	 */
	new PhotoSphereViewer( {
		panorama: {
			left: "media/panorama/face0.jpg",
			front: "media/panorama/face1.jpg",
			right: "media/panorama/face2.jpg",
			back: "media/panorama/face3.jpg",
			top: "media/panorama/face4.jpg",
			bottom: "media/panorama/face5.jpg"
		},
		container: $( ".js_aerial_panorama_section .js_panorama_wrapper" )[ 0 ],
		time_anim: 3000,
		allow_scroll_to_zoom: false,
		navbar: false,
		navbar_style: {
			backgroundColor: 'rgba(58, 67, 77, 0.7)'
		},
		mousewheel: false
	} );

});

</script>

</body>

</html>
