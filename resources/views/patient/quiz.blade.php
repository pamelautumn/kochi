<!DOCTYPE html>
<html>
<head>
<title>Teaching an Education School Category Flat Bootstrap Responsive Website Template | Portfolio :: w3layouts</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Teaching Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
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
								<li class="hvr-bounce-to-bottom"><a href="/">Home</a></li>
								<li class="active"><a href="/child/material" class="hvr-bounce-to-bottom">Material</a></li>
								<li><a href="/child/profile" class="hvr-bounce-to-bottom">Profile</a></li>
							</ul>
							<div class="clearfix"> </div>
						</nav>
					</div>
				</nav>
			</div>
		</div>

<!-- banner-bottom -->
	<div id="about" class="banner-bottom">
		<div class="container">
			<h2 align="center">Quiz</h3>
			<div class="agileits_banner_bottom_grids">
				<div class="col-md-8 agileits_banner_bottom_grid_l">
					<h4>最初の学期</h4>
					<!-- <p><i>List of the Quiz  </i></p> -->
					<p><a href="/quiz/quiz1">第1章のクイズ</a></p>
					<p><a href="/quiz/quiz2">第2章のクイズ</a></p>
					<p><a href="/quiz/quiz3">第3章のクイズ</a></p>
					<p><a href="/quiz/quiz4">第4章のクイズ</a></p>
					<p><a href="/quiz/quiz5">第5章のクイズ</a></p>
					<p><a href="/quiz/quiz6">第6章のクイズ</a></p>
					<p><a href="/quiz/quiz7">第7章のクイズ</a></p>
					<p><a href="/quiz/quiz8">第8章のクイズ</a></p>
					<p><a href="/quiz/quiz9">第9章のクイズ</a></p>
				</div>
				<div class="col-md-4 agileits_banner_bottom_grid_l">
					<h4>二学期</h4>
					<!-- <p><i>List of the Quiz  </i></p> -->
					<p><a href="/quiz/quiz10">第10章のクイズ</a></p>
					<p><a href="/quiz/quiz11">第11章のクイズ</a></p>
					<p><a href="/quiz/quiz12">第12章のクイズ</a></p>
					<p><a href="/quiz/quiz13">第13章のクイズ</a></p>
					<p><a href="/quiz/quiz14">第14章のクイズ</a></p>
					<p><a href="/quiz/quiz15">第15章のクイズ</a></p>
					<p><a href="/quiz/quiz16">第16章のクイズ</a></p>
					<p><a href="/quiz/quiz17">第17章のクイズ</a></p>
					<p><a href="/quiz/quiz18">第18章のクイズ</a></p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>

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
