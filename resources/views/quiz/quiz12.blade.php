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
		<div class="hover_bkgr_fricc">
				<span class="helper"></span>
				<div>
						<div class="popupCloseButton">X</div>
						<p>You already finish this chapter's quiz!<br />Back to List of Quiz</p> <br>
						<a href="/child/material/quiz" class="btn btn-info" role="button">Back</a>
						<!-- <p><button type="button" name="button"><a href="/child/material/quiz"></a>Back</button> </p> -->
						<!-- <p><a href="/child/material/quiz">Back</a> </p> -->
				</div>
		</div>
		<div class="container">
			<h1 align="center">QUIZ</h1>
			<div class="agileits_banner_bottom_grids">
				<div class="col-md-12 agileits_banner_bottom_grid_l">
					<h2>Chapter 12: Decimal Numbers</h2><br>
				</div>
				<div class="col-md-6 agileits_banner_bottom_grid_l">
					<div id="page-wrap">
							<form action="grade.php" method="post" id="quiz">
					            <ol>
												<h3><li>
														6.27+3.51=...</h3>
														<div>
																<input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
																<label for="question-1-answers-A">A) 8.78 </label>
														</div>
														<div>
																<input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
																<label for="question-1-answers-B">B) 9.78</label>
														</div>
														<div>
																<input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
																<label for="question-1-answers-C">C) 9.68</label>
														</div>
														<div>
																<input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
																<label for="question-1-answers-D">D) 8.98</label>
														</div>
												</li><br>
												<h3><li>
														8.46+0.32=...</h3>
														<div>
																<input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
																<label for="question-2-answers-A">A) 8.76</label>
														</div>

														<div>
																<input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
																<label for="question-2-answers-B">B) 8.98</label>
														</div>

														<div>
																<input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
																<label for="question-2-answers-C">C) 8.78</label>
														</div>

														<div>
																<input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
																<label for="question-2-answers-D">D) 8.68</label>
														</div>

												</li><br>

												<h3><li>

														1.54+2.38=...</h3>
														<div>
																<input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
																<label for="question-3-answers-A">A) 3.72</label>
														</div>

														<div>
																<input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
																<label for="question-3-answers-B">B) 3.82</label>
														</div>

														<div>
																<input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
																<label for="question-3-answers-C">C) 3.92</label>
														</div>

														<div>
																<input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
																<label for="question-3-answers-D">D) 3.90</label>
														</div>

												</li><br>

												<h3><li>

														4.72+3.49=...</h3>

														<div>
																<input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
																<label for="question-4-answers-A">A) 12 reminder 5</label>
														</div>

														<div>
																<input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
																<label for="question-4-answers-B">B) 12 </label>
														</div>

														<div>
																<input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
																<label for="question-4-answers-C">C) 12 reminder 3</label>
														</div>

														<div>
																<input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
																<label for="question-4-answers-D">D) 8.21</label>
														</div>

												</li><br>

												<h3><li>

														9.62+0.18=...</h3>

														<div>
																<input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />
																<label for="question-5-answers-A">A) 9.8</label>
														</div>

														<div>
																<input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
																<label for="question-5-answers-B">B) 19 reminder 1</label>
														</div>

														<div>
																<input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
																<label for="question-5-answers-C">C) 19</label>
														</div>

														<div>
																<input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />
																<label for="question-5-answers-D">D) 18 remainder 2</label>
														</div>
												</li><br>
					            </ol>
							</form>
						</div>
				</div>

				<div class="col-md-6 agileits_banner_bottom_grid_l">
					<div id="page-wrap">
							<form action="grade.php" method="post" id="quiz">
					            <ol start="6">
											<h3>	<li>
					                    0.36-0.34=...</h3>
					                    <div>
					                        <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
					                        <label for="question-1-answers-A">A) 0.02 </label>
					                    </div>
					                    <div>
					                        <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
					                        <label for="question-1-answers-B">B) 325 </label>
					                    </div>
					                    <div>
					                        <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
					                        <label for="question-1-answers-C">C) 370</label>
					                    </div>
					                    <div>
					                        <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
					                        <label for="question-1-answers-D">D) 325</label>
					                    </div>
					                </li><br>
					                <h3><li>
					                    1.69-0.56=...</h3>
					                    <div>
					                        <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
					                        <label for="question-2-answers-A">A) 120</label>
					                    </div>

					                    <div>
					                        <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
					                        <label for="question-2-answers-B">B) 1.13</label>
					                    </div>

					                    <div>
					                        <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
					                        <label for="question-2-answers-C">C) 125</label>
					                    </div>

					                    <div>
					                        <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
					                        <label for="question-2-answers-D">D) 130</label>
					                    </div>

					                </li><br>

					                <h3><li>

					                    7.28-2.4=...</h3>
					                    <div>
					                        <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
					                        <label for="question-3-answers-A">A) 120</label>
					                    </div>

					                    <div>
					                        <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
					                        <label for="question-3-answers-B">B) 130</label>
					                    </div>

					                    <div>
					                        <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
					                        <label for="question-3-answers-C">C) 140</label>
					                    </div>

					                    <div>
					                        <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
					                        <label for="question-3-answers-D">D) 4.88</label>
					                    </div>

					                </li><br>

					                <h3><li>

					                    9.15-8.6=...</h3>

					                    <div>
					                        <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
					                        <label for="question-4-answers-A">A) 210</label>
					                    </div>

					                    <div>
					                        <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
					                        <label for="question-4-answers-B">B) 0.55</label>
					                    </div>

					                    <div>
					                        <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
					                        <label for="question-4-answers-C">C) 270</label>
					                    </div>

					                    <div>
					                        <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
					                        <label for="question-4-answers-D">D) 240</label>
					                    </div>

					                </li><br>

					                <h3><li>

					                    4-1.26=...</h3>

					                    <div>
					                        <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />
					                        <label for="question-5-answers-A">A) 2.74</label>
					                    </div>

					                    <div>
					                        <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
					                        <label for="question-5-answers-B">B) 106</label>
					                    </div>

					                    <div>
					                        <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
					                        <label for="question-5-answers-C">C) 107</label>
					                    </div>

					                    <div>
					                        <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />
					                        <label for="question-5-answers-D">D) 104</label>
					                    </div>

					                </li><br>
					            </ol>
					            <!-- <input type="submit" value="Submit Quiz" /> -->
											<a class="btn btn-primary trigger_popup_fricc" href="#" role="button">Submit</a>
							</form>
						</div>
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
			$(window).load(function () {
    $(".trigger_popup_fricc").click(function(){
       $('.hover_bkgr_fricc').show();
    });
    $('.hover_bkgr_fricc').click(function(){
        $('.hover_bkgr_fricc').hide();
    });
    $('.popupCloseButton').click(function(){
        $('.hover_bkgr_fricc').hide();
    });
});
	</script>
<!-- //here ends scrolling icon -->
</body>
</html>
