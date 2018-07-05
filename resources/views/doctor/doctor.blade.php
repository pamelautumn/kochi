<!DOCTYPE html>
<html>
<head>
  <title>KOCHI Digital Learning Resource</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="KOCHI" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet" />

<link href="{{ URL::asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
<link href="{{ URL::asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
<link href="{{ URL::asset('css/imagehover.css') }}" rel="stylesheet" type="text/css" media="all" />

<link type="text/css" rel="stylesheet" href="{{ URL::asset('css/cm-overlay.css') }}">
<!-- js -->

<script type="text/javascript" src="{{ URL::asset('js/jquery-2.1.4.min.js') }}"></script>

<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Capriola' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="{{ URL::asset('js/move-top.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/easing.js') }}"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
</head>

<body>
<!-- banner -->
	<div class="banner">
		<div class="header">
			<div class="container">
				<nav class="navbar navbar-default">
					<div class="navbar-header navbar-left">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<h1><a class="navbar-brand" href="/"><span>K</span>OCHI</a></h1>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
						<nav class="menu menu--shylock">
							<!-- <div class="agileinfo_social_icons">
								<ul class="agileinfo_social_icons1">
									<li><a href="#" class="facebook"></a></li>
									<li><a href="#" class="twitter"></a></li>
									<li><a href="#" class="google"></a></li>
									<li><a href="#" class="pinterest"></a></li>
								</ul>
							</div> -->
							<ul class="nav navbar-nav">
								<li class="active"><a href="/">Home</a></li>
                <li><a href="/doctor/counseling" class="hvr-bounce-to-bottom">Counseling</a></li>
								<li><a href="/doctor/report" class="hvr-bounce-to-bottom">Report</a></li>
                <li><a href="/doctor/profile" class="hvr-bounce-to-bottom">Profile</a></li>
							</ul>
							<div class="clearfix"> </div>
						</nav>
					</div>
				</nav>
			</div>
		</div>
		<div class="w3agile_banner_info">
			<div class="container">
				<h3>KOCHI</h3>
				<h4> a Digital Learning Resource for Child Patient in Hospital </h4>
			</div>
		</div>
		<div class="w3_scroll">
			<div class="scroll-down">
			  <span class="dot"> </span>
			</div>
		</div>
		<div class="w3_banner_pos">
			<img src="images/b.png" alt=" " class="img-responsive animated wow slideInUp" data-wow-delay=".1ms" />
		</div>
	</div>
<!-- //banner -->
<!-- banner-bottom -->
	<div id="about" class="banner-bottom">
		<div class="container">
			<h3 class="head">A<span>brief description <i>about</i> KOCHI</span></h3>
			<div class="agileits_banner_bottom_grids">
        <div class="col-md-6 agileits_banner_bottom_grid_l">
					<h4>KOCHI Digital Learning Resource</h4>
					<p>KOCHI is Digital Learning Resource for child patient in hospital. This research conduct in Saga University Hospital, Saga, Japan.

					</p>
				</div>
				<div class="col-md-6 agileits_banner_bottom_grid_r">
					<div class="agileits_banner_btm_grid_r">
						<img src="images/3.jpg" alt=" " class="img-responsive" />
						<div class="agileits_banner_btm_grid_r_pos">
							<img src="images/2.jpg" alt=" " class="img-responsive" />
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //banner-bottom -->
<!-- banner-bottom1 -->
	<div class="banner-bottom1">
		<div class="col-md-6 agile_banner_bottom1_left">
		</div>
    <div class="col-md-6 agile_banner_bottom1_right">
			<h4>What's Inside</h4><br>

			<ul>
				<li><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span>Material for Study</li>
				<li><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span>Educational Game and Intermezzo</li>
				<li><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span>Quiz and Test</li>
				<li><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span>Counseling</li>
				<li><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span>Report Progress</li>
			</ul>
		</div>
		<div class="clearfix"> </div>
	</div>
<!-- //banner-bottom1 -->

<!-- footer -->
	<div class="footer">
		<div class="container">
      <div class="col-md-4 w3l_footer_grid">
				<h2><a href="index.html"><span>K</span>OCHI</a></h2>
				<p>KOCHI developed by Pamela P. Maldini, an Exchange Student in Saga University</p>
			</div>

			<div class="col-md-2 w3l_footer_grid">
				<!-- <h3>Navigation</h3>
        <ul class="w3_address">
					<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Saga University<span>Saga, Japan.</span></li>
					<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:pamela.maldini3122@gmail.com">info@in.com</a></li>
					<!-- <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+1234 567 567</li> -->
				</ul> -->
			</div>
			<div class="col-md-2 w3l_footer_grid">
				<!-- <h3>Social Media</h3>
				<ul class="agileinfo_social_icons1 agileinfo_social">
					<li><a href="#" class="facebook"></a></li>
					<li><a href="#" class="twitter"></a></li>
					<li><a href="#" class="google"></a></li>
					<li><a href="#" class="pinterest"></a></li>
				</ul> -->
			</div>

			<div class="col-md-4 w3l_footer_grid">
				<h3>Address</h3>
        <ul class="w3_address">
					<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Saga University<span>Saga, Japan.</span></li>
					<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:pamela.maldini3122@gmail.com">info@in.com</a></li>
					<!-- <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+1234 567 567</li> -->
				</ul>
			</div>
			<div class="clearfix"> </div>
			<!-- <div class="w3agile_footer_copy">
				<p>© 2016 KOCHI. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
			</div> -->
		</div>
	</div>
<!-- //footer -->
<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear'
				};
			*/

			$().UItoTop({ easingType: 'easeOutQuart' });

			});
	</script>
<!-- //here ends scrolling icon -->
</body>
</html>
