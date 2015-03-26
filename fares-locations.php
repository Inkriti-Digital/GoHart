<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>GoHart</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/styles.min.css">
	</head>
	<body>

		<!-- Content -->

		<div class="container locations">
			<?php include ("views/main-nav.php"); ?>
			
			<section class="header">
				<div class="logo"><img src="img/hart-logo.png"/></div>
				<div class="menu-ico"><img src="img/menu-ico.png"/></div>

				<div class="headline heading-salesLocations">
					<h1>SALES</h1>
					<h1>LOCATIONS</h1>
				</div>

			</section>
			<section class="page-content">

				<div class="content-block">
					<div class="page-nav">
						<a href="#" class="purchase-tix"><div class="tix-ico"><img src="img/fares/tix-ico.png"/></div><span>PURCHASE HART FARE CARDS ONLINE</span></a>
					</div>

					<div class="bottom-rule">
						<div class="cta"><span>HART FACILITIES</span><hr/></div>
					</div>
					<div class="content-body">
						<div id="gmap-wrap" class="gmap-wrap">
							<img src="img/locations/map-fpo.jpg"/>
						</div>
						<div class="map-locations">
							<div class="marker-details">
								<div>
									<a href="#"><img src="img/locations/locaiton-ico.png"/>
									<span>HART at City Hall</span></a>
								</div>
								<div class="marker-address">
									306 E. Jackson Street
								</div>
							</div>
							<div class="marker-details">
								<div>
									<a href="#"><img src="img/locations/locaiton-ico.png"/>
									<span>HART at City Hall</span></a>
								</div>
								<div class="marker-address">
									306 E. Jackson Street
								</div>
							</div>
							<div class="marker-details">
								<div>
									<a href="#"><img src="img/locations/locaiton-ico.png"/>
									<span>HART at City Hall</span></a>
								</div>
								<div class="marker-address">
									306 E. Jackson Street
								</div>
							</div>
						</div>

						<div>
							HART fare cards can also be purchased at the following locations around Hillsborough County:
						</div>

						<div class="select-locations">
							<div class="help-you">
								<div class="location-type">
									<span>ACE CHECK CASHING LOCATIONS</span>
								</div>

								<div class="location-select">
									<select>
									  <option value="location">Location 1</span></option>
									  <option value="location">Location 2</span></option>
									  <option value="location">Location 3</span></option>
									</select>
								</div>
							</div>

							<div class="help-you">
								<div class="location-type">
									<span>AMSCOT LOCATIONS</span>
								</div>
								<div class="location-select">
									<select>
									  <option value="location">Location 1</span></option>
									  <option value="location">Location 2</span></option>
									  <option value="location">Location 3</span></option>
									</select>
								</div>
						</div>
						</div>


						<div class="map-locations">
							<div class="marker-details">
								<div>
									<a href="#">
									<span>Bay Check Cashing</span></a>
								</div>
								<div class="marker-address-2">
									5239 S. Dale Mabry Hwy.
								</div>
							</div>
							<div class="marker-details">
								<div>
									<a href="#">
									<span>Check Point Check Cashing</span></a>
								</div>
								<div class="marker-address-2">
									2062 E. Busch Blvd.
								</div>
							</div>
							<div class="marker-details">
								<div>
									<a href="#">
									<span>Shop Rite Food Store</span></a>
								</div>
								<div class="marker-address-2">
									2518 N. Albany Ave.
								</div>
							</div>
						</div>

						<div class="map-locations">
							<div class="marker-details">
								<div>
									<a href="#">
									<span>Cash Plus</span></a>
								</div>
								<div class="marker-address-2">
									7306 W. Waters Avenue
								</div>
							</div>
							<div class="marker-details">
								<div>
									<a href="#">
									<span>MacDill Air Force Base</span></a>
								</div>
								<div class="marker-address-2">
									Ticket & Tours Base Exchange
								</div>
							</div>
							<div class="marker-details">
								<div>
									<a href="#">
									<span>Westshore Plaza</span></a>
								</div>
								<div class="marker-address-2">
									Commuter Assistance Center 250 Westshore Plaza
								</div>
							</div>
						</div>

						<div class="map-locations">
							<div class="marker-details">
								<div>
									<a href="#">
									<span>Conimark Mail Center</span></a>
								</div>
								<div class="marker-address-2">
									1715 Fowler Ave
								</div>
							</div>
							<div class="marker-details">
								<div>
									<a href="#">
									<span>The Newstand (Britton Plaza)</span></a>
								</div>
								<div class="marker-address-2">
									3934 S. Dale Mabry Hwy.
								</div>
							</div>
						</div>

						

						

						<div class="bottom-rule footer-rule">
						<div class="cta center-cta">
							<div class="callout corp-trans-callout">
								<div>
									<span class="cta-more">WANT TO FIND OUT MORE? VISIT</span>
									<span class="cta-page"><a href="fares-corp-trans.php">CORPORATE TRANSIT PROGRAM</a></span>
								</div>
							</div>
						<hr/></div>
					</div>
					<div class="center footer-ad">
							<img src="img/service/fpo-ad.jpg"/>
							<div class="gototop">
								<img src="img/gotop.png" />
							</div>
						</div>
					</div>
				</div>				
			</section>
		</div>

		<!-- Load Scripts -->
		<?php include ("views/scripts-load.php"); ?>

	</body>
</html>