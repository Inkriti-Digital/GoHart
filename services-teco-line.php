<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>GoHart</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/styles.min.css">
		<link rel="stylesheet" href="css/styles2.css">
	</head>
	<body>

		<!-- Content -->

		<div class="container services">
			<?php include ("views/main-nav.php"); ?>
			
			<section class="header servicesPagesBg">
				<div class="logo"><img src="img/hart-logo.png"/></div>
				<div class="menu-ico"><img src="img/menu-ico.png"/></div>

				<div class="headline headline-services-teco-line">
					<h1>TECO LINE</h1>
					<br/>
					<h1>STREETCAR SYSTEM</h1>
				</div>

			</section>
			<section class="page-content">
				<div class="content-block">
					<div class="page-nav">
						<a href="maps-schedules.php" class="nav-btn"><span>MAPS</span></a>
						<a href="maps-schedules.php" class="nav-btn"><span>SCHEDULES</span></a>
						<a href="fares-cards.php" class="nav-btn"><span>FARES</span></a>
					</div>
					
					<div class="bottom-rule">
						<div class="cta"><span>TECO LINE STREETCAR</span><hr/></div>
					</div>
					<div class="content-body">
						<div class="info">
							<p>
								This service is a 2.7-mile streetcar line that runs along Downtown Tampa, through the Channel District, and Ybor City. The system features historical replica streetcars of the original Tampa Streetcar Line. Ticket Vending Machines are conveniently located at all station stops.
							</p>
							<p class="visit-link">
								<a href="http://tecolinestreetcar.org/" target="_blank">FOR MORE INFORMATION, VISIT TECOLINESTREETCAR.ORG</a>
							</p>
						</div>
						<div class="info-graphic">
							<img src="img/service/info-graphic.jpg"/>
							<br/>
							<span class="paid-ad-text">Paid Ad</span>
						</div>
					</div>					
				</div>				
			</section>
			
			<section class="mid-section">
				<div class="mid-copy van-service-midcopy-1">
					<h3>The streetcar system first started operation in the late 1800's to transport Tampa passengers for work and leisure.</h3>
				</div>
			</section>

			<section class="page-content" style="background: none;">
				<div class="content-block">
					<div class="content-body">
						<div class="bottom-rule footer-rule">
							<div class="cta center-cta">
								<div class="callout corp-trans-callout">
									<div>
										<span class="cta-more">WANT TO FIND OUT MORE? VISIT</span>
										<span class="cta-page"><a href="services-alternative-transportation.php">ALTERNATIVE TRANSPORTATION</a></span>
									</div>
								</div>
								<hr/>
							</div>
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