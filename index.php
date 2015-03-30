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

		<div class="container">
			<?php include ("views/main-nav.php"); ?>

			<section class="landing" data-0="background-position: 40% 0%;" data-500="background-position: 0% 0%;">
				<div class="bus" data-0="left: -40%;" data-400="left: 0%"></div>

				<div class="logo"><img src="img/hart-logo.png"/></div>
				<div class="menu-ico"><img src="img/menu-ico.png"/></div>

				<div class="headline">
					<h1>TRANSPORTATION</h1><br/>
					<h1>FOR LIFE</h1>
				</div>

				<div class="bus-ico">ONEBUSAWAY</div>
				<div class="bottom-rule">
					<div class="cta">LET US TAKE YOU THERE</div>
					<div class="rule"><hr/></div>
				</div>
				<div class="home-form">
					<form action=" #">
					<input id="start" type="text" name="start" value="Start" onfocus="this.value='';">
					<input id="end" type="text" name="end" value="End" onfocus="this.value='';">
					<input id="date" type="text" name="date" value="Date" onfocus="this.value='';">
					<input id="time" type="text" name="time" value="Time" onfocus="this.value='';">
					<input type="submit" value="SEARCH" >
					</form>
				</div>
			</section>
			<section class="metro">
				<div class="metro-nav">
					<div class="metro-arrow">
						<img src="img/metro-arrow.png"/>
					</div>
					<div id="servnav-bus" class="metro-block">
						<div class="hover-box">
							<span class="metro-hover">BUS</span>
						</div>
						<img src="img/home/servnav-bus.jpg"/>
					</div>
					<div id="servnav-metro" class="metro-block">
						<div class="hover-box">
							<span class="metro-hover">METRORAPID</span>
						</div>
						<img src="img/home/servnav_metro.jpg"/>
					</div>
					<div id="servnav-van" class="metro-block">
						<div class="hover-box">
							<span class="metro-hover">VAN</span>
						</div>
						<img src="img/home/servnav-van.jpg"/>
					</div>
					<div id="servnav-streetcar" class="metro-block">
						<div class="hover-box">
							<span class="metro-hover"> STREETCAR <BR/> SYSTEM </span>
						</div>
						<img src="img/home/servnav-trolly.jpg"/>
					</div>
					<div id="servnav-alt" class="metro-block">
						<div class="hover-box">
							<span class="metro-hover"> ALTERNATIVE <br/> TRANSPORTATION </span>
						</div>
						<img src="img/home/servnav-alt.jpg"/>
					</div>
					<div class="clear-fix"></div>
				</div>
				<div class="metro-main" data-600="background-position: 40% 0%;" data-1100="background-position: 0% 0%;">
					<div class="metro-foreground" data-600="left: -15%;" data-1100="left: 0%"></div>
					<div class="metro-box">
						<span class="metro-title">BUS</span><hr/>
						<ul>
							<li><a href="#">MAPS <span class="arrow"><img src="img/metro-boxnav-arrow.png"/></span></a></li>
							<li><a href="#">SCHEDULES <span class="arrow"><img src="img/metro-boxnav-arrow.png"/></span></a></li>
							<li><a href="#">FARES <span class="arrow"><img src="img/metro-boxnav-arrow.png"/></span></a></li>
							<li><a href="#">ABOUT <span class="arrow"><img src="img/metro-boxnav-arrow.png"/></span></a></li>
						</ul>
					</div>
					<div class="metro-icons">
						<div class="ico-block"><img src="img/ico-roadblock.png"/></div>
						<div class="ico-block"><img src="img/ico-chatbox.png"/></div>
						<div class="ico-block"><img src="img/ico-arrow.png"/></div>
					</div>
				</div>

			</section>
			<section class="news">
				<div class="news-title">
					<h1>NEWS</h1><br/>
					<h1>YOU CAN USE</h1>
				</div>

				<div class="news-blocks">
					<div class="prev-arrow"><img src="img/news-arrow-left.png"/></div>
					<div class="next-arrow"><img src="img/news-arrow-right.png"/></div>
					<div id="newsRow1" class="block-row">
						<div class="block">
							<h3>New Promo</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eget blandit tortor. Aliquam leo mi, condimentum suscipit euismod ac, lacinia ultrices libero. Curabitur pretium consequat luctus
							elit. Nam eget blandit tortor. Aliquam leo mi, condimentum suscipit euismod ac, lacinia ultrices libero....</p>
						</div>
						<div class="block square"><img src="img/news/fpo-img1.jpg"/></div>
						<div class="block light"><h3>New Promo</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eget blandit tortor. Aliquam leo mi, condimentum suscipit euismod ac, lacinia ultrices libero. Curabitur pretium consequat luctus
							elit. Nam eget blandit tortor. Aliquam leo mi, condimentum suscipit euismod ac, lacinia ultrices libero....</p></div>
						<div class="block square"><img src="img/news/fpo-img2.jpg"/></div>
						<div class="block">
							<h3>New Promo</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eget blandit tortor. Aliquam leo mi, condimentum suscipit euismod ac, lacinia ultrices libero. Curabitur pretium consequat luctus
							elit. Nam eget blandit tortor. Aliquam leo mi, condimentum suscipit euismod ac, lacinia ultrices libero....</p>
						</div>
						<div class="block square"><img src="img/news/fpo-img2.jpg"/></div>
						<div class="block light"></div>
						<div class="block"></div>
						<div class="block square"><img src="img/news/fpo-img1.jpg"/></div>
						<div class="block"></div>				
						<div class="block light"></div>
						<div class="block square"></div>
						<div class="block"></div>
					</div>
					<div id="newsRow2" class="block-row">	
						<div class="block square"><img src="img/news/fpo-img4.jpg"/></div>
						<div class="block light">
							<h3>New Promo</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eget blandit tortor. Aliquam leo mi, condimentum suscipit euismod ac, lacinia ultrices libero. Curabitur pretium consequat luctus
							elit. Nam eget blandit tortor. Aliquam leo mi, condimentum suscipit euismod ac, lacinia ultrices libero....</p>
						</div>
						<div class="block square"><img src="img/news/fpo-img2.jpg"/></div>
						<div class="block"><img src="img/news/fpo-img3-long.jpg"/></div>
						<div class="block square"></div>
						<div class="block"></div>
						<div class="block square light"></div>					
						<div class="block square"></div>
						<div class="block"></div>
						<div class="block square"></div>
					</div>
				</div>
			</section>
			
			<section class="gohart" data-2500="background-position: 40% 0%;" data-3000="background-position: 0% 0%;">
				<div class="bus" data-2500="left: -40%;" data-3000="left: -5%"></div>
				<div class="gohart-title">
					<h1>WHEREVER YOU NEED</h1><br/>
					<h1>TO GO, GO HART</h1>
				</div>

				<div class="how-to">
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
							<div class="button">VIDEO DEMONSTRATIONS <img src="img/btn-arrow.png"/></div>
							<div class="button">BIKES ON BUSES <img src="img/btn-arrow.png"/></div>
							<div class="button">TRAVEL TRAINING PROGRAM <img src="img/btn-arrow.png"/></div>
						</div>
						<div class="button-box end-box">
							<div class="button">FREQUENTLY ASKED QUESTIONS<img src="img/btn-arrow.png"/></div>
						</div>
					</div>

					<div class="content-app">
						<h2>HART APP CENTER</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>

						<div class="button-box">
							<div class="button">OneBusAway Tampa <img src="img/btn-arrow.png"/></div>
							<div class="button">HyperAlert <img src="img/btn-arrow.png"/></div>
							<div class="button">Mobile-based <img src="img/btn-arrow.png"/></div>
						</div>
						<div class="button-box end-box">
							<div class="button">Computer-based<img src="img/btn-arrow.png"/></div>							
						</div>
					</div>

					<div class="content-links">
						<h2>LINKS</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>

						<div class="button-box">
							<div class="button">Fare Information<img src="img/btn-arrow.png"/></div>
							<div class="button">Riding HART <img src="img/btn-arrow.png"/></div>
							<div class="button">Mobile-based <img src="img/btn-arrow.png"/></div>
						</div>
						<div class="button-box end-box">
							<div class="button">Transit Terms<img src="img/btn-arrow.png"/></div>
							<div class="button">Miscellaneous<img src="img/btn-arrow.png"/></div>							
						</div>
					</div>


				</div>
				<div class="return-top">
					<img src="img/return-arrow.png"/>
				</div>
			</section>
		</div>

		<!-- Load Scripts -->		
		<?php include ("views/scripts-load.php"); ?>
		<script src="js/home-animation.js"></script>
	</body>
</html>