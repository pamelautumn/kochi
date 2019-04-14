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

<!--  nasi goreng -->

  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <!-- <link rel="stylesheet" href="/resources/demos/style.css"> -->
  <!-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script> -->
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  var isFirstOpen = false;
  var setDestroy = false;
  var currentGame = 0;
  var gamePath = [
    "<iframe src='{{URL::to('http://localhost/kochi/game/chapter6/index.html')}}' width='100%' height='100%' ></iframe>",
    "<iframe src='{{URL::to('http://localhost/kochi/game/quiz/index.html')}}' width='100%' height='100%' ></iframe>",
    "<embed src='{{URL::to('http://localhost/kochi/game/chapter12/index.html')}}' width='100%' height='100%'>",
    "<embed src='{{URL::to('http://localhost/kochi/game/chapter3/index.html')}}' width='100%' height='100%'>"

  ];

    $(function () {
      $( "#dialog" ).dialog({
        autoOpen: true,
        width: 800,
        height: 600,
        open: function(event, ui){
          if (!isFirstOpen) {
            setTimeout("$('#dialog').dialog('close')", 1);
            isFirstOpen = true;
          } else {
            var targetGamePath = gamePath[currentGame];
            $(this).html(targetGamePath);
          }
        },
        close: function (event, ui) {
          $(this).html("");
        }
      });
    });
  var showDialog = function () {
    $( function() {
      $( "#dialog" ).dialog("open");
    } );
  }

  </script>

<!--  ======================-->


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
  // popup examples
  $( document ).on( "pagecreate", function() {
      // The window width and height are decreased by 30 to take the tolerance of 15 pixels at each side into account
      function scale( width, height, padding, border ) {
          var scrWidth = $( window ).width() - 30,
              scrHeight = $( window ).height() - 30,
              ifrPadding = 2 * padding,
              ifrBorder = 2 * border,
              ifrWidth = width + ifrPadding + ifrBorder,
              ifrHeight = height + ifrPadding + ifrBorder,
              h, w;
          if ( ifrWidth < scrWidth && ifrHeight < scrHeight ) {
              w = ifrWidth;
              h = ifrHeight;
          } else if ( ( ifrWidth / scrWidth ) > ( ifrHeight / scrHeight ) ) {
              w = scrWidth;
              h = ( scrWidth / ifrWidth ) * ifrHeight;
          } else {
              h = scrHeight;
              w = ( scrHeight / ifrHeight ) * ifrWidth;
          }
          return {
              'width': w - ( ifrPadding + ifrBorder ),
              'height': h - ( ifrPadding + ifrBorder )
          };
      };
      $( ".ui-popup iframe" )
          .attr( "width", 0 )
          .attr( "height", "auto" );
      $( "#popupVideo" ).on({
          popupbeforeposition: function() {
              // call our custom function scale() to get the width and height
              var size = scale( 497, 298, 15, 1 ),
                  w = size.width,
                  h = size.height;
              $( "#popupVideo iframe" )
                  .attr( "width", w )
                  .attr( "height", h );
          },
          popupafterclose: function() {
              $( "#popupVideo iframe" )
                  .attr( "width", 0 )
                  .attr( "height", 0 );
          }
      });
  });

</script>

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
			<h2 align="center">List of Games </h3>
			<div class="agileits_banner_bottom_grids">
        <div class="col-md-6 agileits_banner_bottom_grid_l">
          <h4>教育ゲームのリスト（オフライン）</h4>
          <p>
            <a href="#" onclick="currentGame =; showDialog(); ">第1章</a>
          </p>
          <p>
            <a href="#" onclick="currentGame =; showDialog(); ">第2章</a>
          </p>
          <p>
            <a href="#" onclick="currentGame =3; showDialog(); ">第3章</a>
          </p>
          <p>
            <a href="#" onclick="currentGame =; showDialog(); ">第4章</a>
          </p>
          <p>
            <a href="#" onclick="currentGame =; showDialog(); ">第5章</a>
          </p>

          <p>  <a href="#" onclick="currentGame = 0;showDialog(); ">第6章</a>
          </p>
          <!-- <p>
            <a href="#" onclick="currentGame = 1; showDialog(); ">Quiz</a>
          </p> -->
          <p>
            <a href="#" onclick="currentGame =; showDialog(); ">第7章</a>
          </p>
          <p>
            <a href="#" onclick="currentGame =; showDialog(); ">第8章</a>
          </p>
          <p>
            <a href="#" onclick="currentGame =; showDialog(); ">第9章</a>
          </p>
          <p>
            <a href="#" onclick="currentGame =; showDialog(); ">第10章</a>
          </p>
          <p>
            <a href="#" onclick="currentGame =; showDialog(); ">第11章</a>
          </p>

          <p>
            <a href="#" onclick="currentGame = 2; showDialog(); ">第12章</a>
          </p>
          <p>
            <a href="#" onclick="currentGame =; showDialog(); ">第13章</a>
          </p>
          <p>
            <a href="#" onclick="currentGame =; showDialog(); ">第14章</a>
          </p>
          <p>
            <a href="#" onclick="currentGame =; showDialog(); ">第15章</a>
          </p>
          <p>
            <a href="#" onclick="currentGame =; showDialog(); ">第16章</a>
          </p>
          <p>
            <a href="#" onclick="currentGame =; showDialog(); ">第17章</a>
          </p>
          <p>
            <a href="#" onclick="currentGame =; showDialog(); ">第18章</a>
          </p>
          <div id="dialog" title="Game">
            <iframe src="{{URL::to('http://localhost/kochi/game/chapter5/index.html')}}" width="100%" height="100%" ></iframe>
          </div>
        </div>
				<div class="col-md-6 agileits_banner_bottom_grid_l">
					<h4>List of the Educational Games  (Online)</h4>
					<p><i></i></p>
          <p><a href="https://www.mathgames.com/skill/6.46-multiply-and-divide-decimals-by-powers-of-ten">Game Chapter 2: Division of Tens and Hundreds</a></p>
          <p><a href="http://www.abcya.com/measuring_angles.htm">Game Chapter 3: Angles</a></p>
          <p><a href="http://www.abcya.com/division_drag_race.htm">Game Chapter 4: Division by One-digit Numbers</a></p>
          <p><a href="https://www.iknowit.com/lessons/d-geometry-quadrilaterals.html">Game Chapter 5: Quadrilaterals</a></p>
          <p><a href="BELOM CARI">Game Chapter 6: Division by Two-digit Numbers</a></p>
          <p><a href="https://www.mathgames.com/skill/6.98-interpret-line-graphs">Game Chapter 7: Line Graphs</a></p>
          <p><a href="http://www.abcya.com/rounding_numbers.htm">Game Chapter 8: Round Numbers</a></p>
          <p><a href="http://www.memozor.com/other-free-memory-games-online/abacus-games">Game Chapter 9: Japanese Abacus</a></p>
          <p><a href="">Game Chapter 10: Expresions and Calculations</a></p>
          <p><a href="https://www.mathgames.com/skill/5.115-area-of-squares-and-rectangles">Game Chapter 11: Area</a></p>
          <p><a href="https://www.mathgames.com/skill/6.39-add-and-subtract-decimal-numbers-up-to-3-places">Game Chapter 12: Decimal Numbers</a></p>
          <p><a href="">Game Chapter 13: Thinking About How to Calculate</a></p>
          <p><a href="">Game Chapter 14: Arrangement of Data</a></p>
          <p><a href="https://www.mathgames.com/skill/6.44-divide-decimals-by-whole-numbers">Game Chapter 15: Multiplication and Division of Decimal Numbers</a></p>
          <p><a href="https://www.mathgames.com/skill/7.64-add-and-subtract-fractions">Game Chapter 16: Fractions</a></p>
          <p><a href="">Game Chapter 17: Rectangular Prisms and Cubes</a></p>
          <p><a href="">Game Chapter 18: Quantities Change Together</a></p>
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

//       $(window).load(function () {
//     $(".trigger_popup_fricc").click(function(){
//        $('.hover_bkgr_fricc').show();
//     });
//     $('.hover_bkgr_fricc').click(function(){
//         $('.hover_bkgr_fricc').hide();
//     });
//     $('.popupCloseButton').click(function(){
//         $('.hover_bkgr_fricc').hide();
//     });
// });
	</script>
<!-- //here ends scrolling icon -->
</body>
</html>
