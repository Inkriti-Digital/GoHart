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
		<!--[if lte IE 10]>
			<link rel="stylesheet" href="css/ie9.css">
		<![endif]-->
	</head>
	<body>

		<!-- Content -->

		<div class="container locations">
			<?php include ("views/main-nav.php"); ?>
			
			<section class="header mapsSchedulesBg">
				<div class="logo"><img src="img/hart-logo.png"/></div>
				<div class="menu-ico"><img src="img/menu-ico.png"/></div>

				<div class="headline">
					<h1>TRIP PLANNER</h1>
					<br/>
					<h1>TOOL</h1>
				</div>

			</section>
			<section class="page-content planner">
				<div class="bottom-rule">
					<div class="cta"><span>LET US TAKE YOU THERE</span><hr/></div>
				</div>
				<div class="content-block">
					<div class="content-body">
						<h2>PLAN YOUR NEXT TRIP WITH REAL-TIME ARRIVAL AND DEPARTURE INFORMATION.</h2>
						
							<div class="home-form home-form-innerpage">
								<form action=" #">
								<input id="start" type="text" name="start" placeholder="Start" onfocus="this.value='';">
								<input id="end" type="text" name="end" placeholder="End" onfocus="this.value='';">
								<input id="date" type="text" name="date" placeholder="Date" onfocus="this.value='';">
								<input id="time" type="text" name="time" placeholder="Time" onfocus="this.value='';">
								<input type="submit" value="SEARCH" >
								</form>
							</div>
					</div>
				</div>
				
				<div class="content-block">
									
					<div class="bottom-rule">
						<div class="cta"><span>ONEBUSAWAY TAMPA</span><hr/></div>
					</div>
					<div class="content-body">
						<div class="info">
							<p>
								Know when your bus is arriving in real-time. It is easy to navigate, and seamlessly interfaces with Web-enabled devices such as computers, tablets, and smart phones. This app uses GPS technology to send up-to-the-minute details on bus arrival and departure information
							</p>
							<div class="real-time-access">
								<h2>Use OneBusAway Tampa to access real-time information via:</h2>
								<div class="half-span">
									<div><a href="#"><img src="img/locations/locaiton-ico.png"/> Android</a> (Google Play Store)</div>
									<div><a href="#"><img src="img/locations/locaiton-ico.png"/> iPhone</a> (Apple iTunes store)</div>
									<div><a href="#"><img src="img/locations/locaiton-ico.png"/> Text Message</a> (Apple iTunes store)</div>
									<div><a href="#"><img src="img/locations/locaiton-ico.png"/> Windows Phone</a>  (Windows Phone 7 and 8)</div>
								</div>
								<div class="half-span">
									<div><a href="#"><img src="img/locations/locaiton-ico.png"/> Web</a></div>
									<div><a href="#"><img src="img/locations/locaiton-ico.png"/> Mobile Web</a>  (Phones with mobile browsers)</div>
									<div><a href="#"><img src="img/locations/locaiton-ico.png"/> Windows 8 and Windows RT</a></div>
								</div>
							</div>
						</div>
						<div class="info-graphic">
							<img src="img/service/info-graphic.jpg"/>
							<br/>
							<span class="paid-ad-text">Paid Ad</span>
						</div>
	
						
	
						<div class="fullColumnWidth">
							<div class="half-column brick-blue-link left">
								<a href="#" class="brick-link">
									<div class="icon">
										<img src="img/bus-icon.png" />
									</div>
									<div class="brick-blue-link-text">
										<div class="brick-blue-link-text1">
											INSTRUCTIONS ON USING
										</div>
										<div class="brick-blue-link-text2">
											ONEBUSAWAY TAMPA
										</div>
									</div>
									<div class="clear-fix"></div>
								</a>
							</div>
							<div class="half-column brick-blue-link brick-blue-link-last right">
								<a href="#" class="brick-link">
									<div class="icon">
										<img src="img/twitter-icon.png" />
									</div>
									<div class="brick-blue-link-text">
										<div class="brick-blue-link-text1">
											FOR THE LATEST NEWS
										</div>
										<div class="brick-blue-link-text2">
											FOLLOW@OBA_TAMPA
										</div>
									</div>
									<div class="clear-fix"></div>
								</a>
							</div>
							<div class="clear-fix"></div>
						</div>
	
						<div>
							<h2>ABOUT ONEBUSAWAY TAMPA</h2>
							<p>HART partnered with the Center for Urban Transportation Research at the University of South Florida, where the software was developed with funding from the National Center for Transit Research. Georgia Tech evaluated the system for HART too, thanks to funding from the National Center for Transportation Systems Productivity and Management.</p>
						</div>
	
						<div class="bottom-rule footer-rule">
							<div class="cta center-cta">
								<div class="callout">
									<div>
										<span class="cta-more">WANT TO FIND OUT MORE? VISIT</span>
										<span class="cta-page"><a href="maps-schedules.php">SYSTEM MAP</a></span>
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
				</div>				
			</section>
		</div>

		<!-- Load Scripts -->
		<?php include ("views/scripts-load.php"); ?>

	</body>
</html>