<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>GoHart Home</title>
		<meta name="description" content="">
		<!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
		<meta name="viewport" content="width=640, maximum-scale=1">
		<link rel="stylesheet" href="css/styles.min.css">
		<link rel="stylesheet" href="css/styles2.css">
		<link rel="stylesheet" href="css/slick.css">
		<link rel="stylesheet" href="css/slick-theme.css">
		<!--[if lte IE 10]>
			<link rel="stylesheet" href="css/ie9.css">
		<![endif]-->
	</head>
	<body>

		<!-- Content -->
		<div class="container">
			<?php include ("views/main-nav.php"); ?>

			<section class="landing" data-0="background-position: 40% 0%;" data-500="background-position: 0% 0%;">
				<div class="bus desktop" data-0="left: -40%;" data-400="left: 0%"></div>

				<div class="logo">
					<a href="index.php">
						<img class="full-logo desktop" src="img/hart-logo.png" alt="GoHart Logo"/>
						<img class="box-logo desktop" style="display: none;" src="img/hart-logo-box.png" alt="GoHart Graphic Logo"/>
						<img class="mobile" src="img/responsive/mobile-logo.png" alt="GoHart Mobile Logo"/>
					</a>
				</div>

				<div class="menu-ico">
					<img class="desktop" src="img/menu-ico.png" alt="Main Menu"/>
					<img class="mobile" src="img/responsive/mobilenav-ico.png" alt="Main Menu"/>
				</div>

				<div id="headline" class="headline desktop">
					<h1>TRANSPORTATION</h1><br/>
					<h1>FOR LIFE</h1>
				</div>

				<div class="mobile-home-head mobile">
					<div class="headline mobile">
						<h1>TRANSPORTATION</h1><br/>
						<h1>FOR LIFE</h1>
					</div>
				</div>

				<div class="bus-ico"><a href="#">ONEBUSAWAY</a></div>
				<div class="bottom-rule desktop">
					<div class="cta">LET US TAKE YOU THERE</div>
					<div class="rule"><hr/></div>
				</div>
				<div class="home-form desktop">
					<form action="#">
					<input id="start" type="text" name="start" placeholder="Start" onfocus="this.value='';">
					<input id="end" type="text" name="end" placeholder="End" onfocus="this.value='';">
					<input id="date" type="text" name="date" placeholder="Date" onfocus="this.value='';">
					<input id="time" type="text" name="time" placeholder="Time" onfocus="this.value='';">
					<input type="submit" value="SEARCH" >
					</form>
				</div>
			</section>
			<section class="take-you-there mobile">
				<div class="bottom-rule mobile">
					<div class="cta">LET US TAKE YOU THERE</div>
					<!-- <div class="rule"><hr/></div> -->
				</div>
				<div class="home-form mobile">
					<form action="#">
					<input id="start" type="text" name="start" value="Start" onfocus="this.value='';">
					<input id="end" type="text" name="end" value="End" onfocus="this.value='';">
					<input id="date" type="text" name="date" value="Date" onfocus="this.value='';">
					<input id="time" type="text" name="time" value="Time" onfocus="this.value='';">
					<input type="submit" value="SEARCH">
					</form>
				</div>
				<div class="bottom-rule mobile">
					<div class="cta">CHOOSE YOUR SERVICE</div>
					<select class="mobile">
					  	<option value="metrorapid">METRORAPID</span></option>
					   	<option value="bus">BUS</span></option>
					    <option value="van">VAN</span></option>
					    <option value="streetcar">STREETCAR SYSTEM</span></option>
					    <option value="alt-transpor">ALTERNATIVE TRANSPORTATION</span></option>
					</select>
				</div>
			</section>

			<section class="metro">
				<div class="metro-nav desktop">
					<div class="metro-arrow">
						<img src="img/metro-arrow.png" alt="Metro Navigation Selector"/>
					</div>
					<div id="servnav-bus" class="metro-block">
						<div class="hover-box">
							<span class="metro-hover">BUS</span>
						</div>
						<img src="img/home/servnav-bus.jpg" alt="Bus"/>
					</div>
					<div id="servnav-metro" class="metro-block">
						<div class="hover-box">
							<span class="metro-hover">METRORAPID</span>
						</div>
						<img src="img/home/servnav_metro.jpg" alt="MetroRapid"/>
					</div>
					<div id="servnav-van" class="metro-block">
						<div class="hover-box">
							<span class="metro-hover">VAN</span>
						</div>
						<img src="img/home/servnav-van.jpg" alt="Van"/>
					</div>
					<div id="servnav-streetcar" class="metro-block">
						<div class="hover-box">
							<span class="metro-hover">STREETCAR <br/> SYSTEM</span>
						</div>
						<img src="img/home/servnav-trolly.jpg" alt="Streetcar System"/>
					</div>
					<div id="servnav-alt" class="metro-block">
						<div class="hover-box">
							<span class="metro-hover">ALTERNATIVE <br/> TRANSPORTATION </span>
						</div>
						<img src="img/home/servnav-alt.jpg" alt="Alternate Transportation"/>
					</div>
					<div class="clear-fix"></div>
				</div>

				<div class="mobile-metro mobile">
					<div class="metro-box">
						<span class="metro-title">BUS</span><hr/>
						<ul>
							<li><a href="#">MAPS <span class="arrow"><img src="img/metro-boxnav-arrow.png" alt="navigation indicator"/></span></a></li>
							<li><a href="#">SCHEDULES <span class="arrow"><img src="img/metro-boxnav-arrow.png" alt="navigation indicator"/></span></a></li>
							<li><a href="#">FARES <span class="arrow"><img src="img/metro-boxnav-arrow.png" alt="navigation indicator"/></span></a></li>
							<li><a href="#">ABOUT <span class="arrow"><img src="img/metro-boxnav-arrow.png" alt="navigation indicator"/></span></a></li>
						</ul>
					</div>
					<div class="metro-icons">
						<a href="#"> <span class="ico-block"><img src="img/ico-roadblock.png" alt="Alerts & Detours"/></span></a>
						<!-- <div class="ico-block"><img src="img/ico-chatbox.png"/></div> -->
						<a href="#"><span class="ico-block"><img src="img/ico-arrow.png"/></span></a>
					</div>
				</div>

				<div class="metro-main desktop" data-600="background-position: 40% 0%;" data-1100="background-position: 0% 0%;">
					<div class="alt-transport-box" data-600="background-position: 90% 0%;" data-1100="background-position: 0% 0%;">
						<div class="alt-transport-fore" data-400="background-position: 60% 0%;" data-900="background-position: 0% 0%;">
						</div>
					</div>
  
					<div class="metro-foreground" data-600="left: -15%;" data-1100="left: 0%"></div>
					<div class="train-bg" data-400="background-position: 60% 0%;" data-900="background-position: 0% 0%;"></div>

					<div class="metro-box">
						<span class="metro-title">BUS</span><hr/>
						<ul>
							<li><a href="#">MAPS <span class="arrow"><img src="img/metro-boxnav-arrow.png" alt="Navigation Indicator"/></span></a></li>
							<li><a href="#">SCHEDULES <span class="arrow"><img src="img/metro-boxnav-arrow.png" alt="Navigation Indicator"/></span></a></li>
							<li><a href="#">FARES <span class="arrow"><img src="img/metro-boxnav-arrow.png" alt="Navigation Indicator"/></span></a></li>
							<li><a href="#">ABOUT <span class="arrow"><img src="img/metro-boxnav-arrow.png" alt="Navigation Indicator"/></span></a></li>
						</ul>
					</div>
					<div class="metro-icons">
						<a href="#"><span class="ico-block">
							<div class="metro-tooltip">ALERTS &amp; DETOURS<img src="img/tooltip-marker.png" alt="Tooltip Indicator"/></div>
							<img src="img/ico-roadblock.png" alt="Tooltip Indicator"/>
						</span></a>
						<!-- <div class="ico-block"><img src="img/ico-chatbox.png"/></div> -->
						<a href="#"><span class="ico-block">
							<div class="metro-tooltip share-tip">SHARE<img src="img/tooltip-marker.png" alt="Tooltip Indicator"/></div>
							<img src="img/ico-arrow.png" alt="Tooltip Indicator"/>
						</span></a>
					</div>
				</div>

			</section>
			<section class="news">
				<div class="news-title">
					<h1>NEWS</h1><br/>
					<h1>YOU CAN USE</h1>
				</div>

				<div id="#newsBlockRow" class="newsBlockRow news-blocks">					
						<div class="newsBlock square"><img src="img/news/fpo-img1.jpg" alt="news image"/></div>
						<div class="block ">
							<h3>New Promo</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eget blandit tortor. Aliquam leo mi, condimentum suscipit euismod ac, lacinia ultrices libero. Curabitur pretium consequat luctus
							elit. Nam eget blandit tortor. Aliquam leo mi, condimentum suscipit euismod ac, lacinia ultrices libero....</p>
						</div>
						<div class="block square"><img src="img/news/fpo-img1.jpg" alt="news image"/></div>
						<div class="block light"><h3>New Promo</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eget blandit tortor. Aliquam leo mi, condimentum suscipit euismod ac, lacinia ultrices libero. Curabitur pretium consequat luctus
							elit. Nam eget blandit tortor. Aliquam leo mi, condimentum suscipit euismod ac, lacinia ultrices libero....</p></div>
						<div class="block square"><img src="img/news/fpo-img1.jpg" alt="news image"/></div>
						<div class="block light">
							<h3>New Promo</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eget blandit tortor. Aliquam leo mi, condimentum suscipit euismod ac, lacinia ultrices libero. Curabitur pretium consequat luctus
							elit. Nam eget blandit tortor. Aliquam leo mi, condimentum suscipit euismod ac, lacinia ultrices libero....</p>
						</div>
						<div class="block square"><img src="img/news/fpo-img1.jpg" alt="news image"/></div>
						<div class="block square"><img src="img/news/fpo-img1.jpg" alt="news image"/></div>
						<div class="block">
							<h3>New Promo</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eget blandit tortor. Aliquam leo mi, condimentum suscipit euismod ac, lacinia ultrices libero. Curabitur pretium consequat luctus
							elit. Nam eget blandit tortor. Aliquam leo mi, condimentum suscipit euismod ac, lacinia ultrices libero....</p>
						</div>
						<div class="block square"><img src="img/news/fpo-img1.jpg" alt="news image"/></div>						
				</div>

				<div id="#newsBlockRow2" style="margin-top: 258px;" class="newsBlockRow2 news-blocks">
						<div class="block light"><h3>New Promo</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eget blandit tortor. Aliquam leo mi, condimentum suscipit euismod ac, lacinia ultrices libero. Curabitur pretium consequat luctus
							elit. Nam eget blandit tortor. Aliquam leo mi, condimentum suscipit euismod ac, lacinia ultrices libero....</p></div>
						<div class="block square"><img src="img/news/fpo-img1.jpg" alt="news image"/></div>
						<div class="block light">
							<h3>New Promo</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eget blandit tortor. Aliquam leo mi, condimentum suscipit euismod ac, lacinia ultrices libero. Curabitur pretium consequat luctus
							elit. Nam eget blandit tortor. Aliquam leo mi, condimentum suscipit euismod ac, lacinia ultrices libero....</p>
						</div>					
						<div class="newsBlock square"><img src="img/news/fpo-img1.jpg" alt="news image"/></div>
						<div class="block ">
							<h3>New Promo</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eget blandit tortor. Aliquam leo mi, condimentum suscipit euismod ac, lacinia ultrices libero. Curabitur pretium consequat luctus
							elit. Nam eget blandit tortor. Aliquam leo mi, condimentum suscipit euismod ac, lacinia ultrices libero....</p>
						</div>
						<div class="block square"><img src="img/news/fpo-img1.jpg" alt="news image"/></div>
						
						<div class="block square"><img src="img/news/fpo-img1.jpg" alt="news image"/></div>
						<div class="block square"><img src="img/news/fpo-img1.jpg" alt="news image"/></div>
						<div class="block">
							<h3>New Promo</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eget blandit tortor. Aliquam leo mi, condimentum suscipit euismod ac, lacinia ultrices libero. Curabitur pretium consequat luctus
							elit. Nam eget blandit tortor. Aliquam leo mi, condimentum suscipit euismod ac, lacinia ultrices libero....</p>
						</div>
						<div class="block square"><img src="img/news/fpo-img1.jpg" alt="news image"/></div>						
				</div>


				
			</section>
			
			<section class="gohart" data-2500="background-position: 40% 0%;" data-3000="background-position: 0% 0%;">
				<div class="bus desktop" data-2500="left: -40%;" data-3000="left: -5%"></div>
				<div class="gohart-title desktop">
					<h1>HART TAKES</h1><br/>
					<h1>YOU THERE</h1>
				</div>
				<div class="gohart-title mobile" style="display: none;">
					<h1>HART TAKES</h1><br/>
					<h1>YOU THERE</h1>
				</div>

				<div class="mobile-how-to mobile">
					<h2>CHOOSE FROM OPTIONS BELOW</h2>

					<select id="goHartSelect" class="mobile">
					  	<option value="how-to-ride">HOW TO RIDE</option>
					   	<option value="app-center">APP CENTER</option>
					    <option value="links">LINKS</option>
					</select>

					<div class="mobile-how-to-content gohart-mobile-content">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>

						<div class="button-box">
							<a href="#"><span class="button">VIDEO DEMONSTRATIONS <img src="img/btn-arrow.png" alt="link arrow graphic"/></span></a>
							<a href="#"><span class="button">BIKES ON BUSES <img src="img/btn-arrow.png" alt="link arrow graphic"/></span></a>
							<a href="#"><span class="button">TRAVEL TRAINING PROGRAM <img src="img/btn-arrow.png" alt="link arrow graphic"/></span></a>
							<a href="#"><span class="button">FREQUENTLY ASKED QUESTIONS<img src="img/btn-arrow.png" alt="link arrow graphic"/></span></a>
						</div>
					</div>


					<div class="mobile-app-center-content gohart-mobile-content">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>

						<div class="button-box">
							<a href="#"><span class="button">OneBusAway Tampa <img src="img/btn-arrow.png" alt="link arrow graphic"/></span></a>
							<a href="#"><span class="button">HyperAlert <img src="img/btn-arrow.png" alt="link arrow graphic"/></span></a>
							<a href="#"><span class="button">Mobile-based <img src="img/btn-arrow.png" alt="link arrow graphic"/></span></a>					
							<a href="#"><span class="button">Computer-based<img src="img/btn-arrow.png" alt="link arrow graphic"/></span></a>		
						</div>
					</div>

					<div class="mobile-links-content gohart-mobile-content">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>

						<div class="button-box">
							<a href="#"><span class="button">Fare Information<img src="img/btn-arrow.png" alt="link arrow graphic"/></span></a>
							<a href="#"><span class="button">Riding HART <img src="img/btn-arrow.png" alt="link arrow graphic"/></span></a>
							<a href="#"><span class="button">Mobile-based <img src="img/btn-arrow.png" alt="link arrow graphic"/></span></a>
							<a href="#"><span class="button">Transit Terms<img src="img/btn-arrow.png" alt="link arrow graphic"/></span></a>
							<a href="#"><span class="button">Miscellaneous<img src="img/btn-arrow.png" alt="link arrow graphic"/></span></a>			
						</div>
					</div>


				</div>

				<div class="how-to desktop">
					<div class="tab tab1 active">
						HOW TO RIDE
					</div>
					<div class="tab tab2">
						APP CENTER
					</div>
					<div class="tab tab3">
						LINKS
					</div>

					<div class="content-howto">
						<h2>HOW TO RIDE HART</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>

						<div class="button-box">
							<a href="#"><span class="button">VIDEO DEMONSTRATIONS <img src="img/btn-arrow.png" alt="link arrow graphic"/></span></a>
							<a href="#"><span class="button">BIKES ON BUSES <img src="img/btn-arrow.png" alt="link arrow graphic"/></span></a>
							<a href="#"><span class="button">TRAVEL TRAINING PROGRAM <img src="img/btn-arrow.png" alt="link arrow graphic"/></span></a>
						</div>
						<div class="button-box end-box">
							<a href="#"><span class="button">FREQUENTLY ASKED QUESTIONS<img src="img/btn-arrow.png" alt="link arrow graphic"/></span></a>
						</div>
					</div>

					<div class="content-app">
						<h2>HART APP CENTER</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>

						<div class="button-box">
							<a href="#"><span class="button">OneBusAway Tampa <img src="img/btn-arrow.png" alt="link arrow graphic"/></span></a>
							<a href="#"><span class="button">HyperAlert <img src="img/btn-arrow.png" alt="link arrow graphic"/></span></a>
							<a href="#"><span class="button">Mobile-based <img src="img/btn-arrow.png" alt="link arrow graphic"/></span></a>
						</div>
						<div class="button-box end-box">
							<a href="#"><span class="button">Computer-based<img src="img/btn-arrow.png" alt="link arrow graphic"/></span></a>							
						</div>
					</div>

					<div class="content-links">
						<h2>LINKS</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>

						<div class="button-box">
							<a href="#"><span class="button">Fare Information<img src="img/btn-arrow.png" alt="link arrow graphic"/></span></a>
							<a href="#"><span class="button">Riding HART <img src="img/btn-arrow.png" alt="link arrow graphic"/></span></a>
							<a href="#"><span class="button">Mobile-based <img src="img/btn-arrow.png" alt="link arrow graphic"/></span></a>
						</div>
						<div class="button-box end-box">
							<a href="#"><span class="button">Transit Terms<img src="img/btn-arrow.png" alt="link arrow graphic"/></span></a>
							<a href="#"><span class="button">Miscellaneous<img src="img/btn-arrow.png" alt="link arrow graphic"/></span></a>							
						</div>
					</div>
				</div>
				
			</section>
			<div class="return-top">
					<img class="desktop" src="img/return-arrow.png" alt="Return to Top"/>
					<img class="mobile" src="img/responsive/top-arrow.png" alt="Return to Top"/>
				</div>
		</div>

		<!-- Load Scripts -->		
		<?php include ("views/scripts-load.php"); ?>
		<script src="js/home-animation.js"></script>
		<script src="js/slick.min.js"></script>
		<script>
			$('.newsBlockRow').slick({
			  dots: false,
			  infinite: true,
			  speed: 400,
			  slidesToShow: 1,
			  centerMode: true,
			  slidesToScroll: 4,
			  variableWidth: true,
			  swipeToSlide: true,
			  autoplay: true,
			  autoplaySpeed: 2500,
			  asNavFor: '.newsBlockRow2'
			});

			$('.newsBlockRow2').slick({
			  dots: false,
			  infinite: true,
			  speed: 800,
			  slidesToShow: 1,
			  centerMode: true,
			  slidesToScroll: 4,
			  variableWidth: true,
			  swipeToSlide: true,
			  autoplay: true,
			  autoplaySpeed: 3000
			  // asNavFor: '.newsBlockRow2'
			});
			</script>
		
	</body>
</html>