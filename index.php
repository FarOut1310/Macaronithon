<!DOCTYPE html>
<html lang="en">
<html>
<head>
	<!-- Title -->
	<title>Macaronithon - How far can you run before you get eaten.</title>

	<!-- Description -->
	<meta name="description" content="Macaronithon is an online web application where you can see how far you can run on different kinds of food. Just made in a new and fun way!">

	<!-- Keywords -->
	<meta name="keywords" content="HTML,CSS,JavaScript">

	<!-- Viewport -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Favicons -->
	<link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
	<link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16" />


	<!-- CSS & SASS -->
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="stylesheet" type="text/css" href="sass/styles.scss">
	<link rel="stylesheet" type="text/css" href="css/animate.css">

</head>
<body>

	<!-- Grid start -->
<div class="grid-container">

	<!-- Header if needed 
	<header>
	</header>
	-->

	<!-- Front page logo/name -->
	<div class="item1">
        <div class="animated zoomIn">
        	<h1 id="frontname">Macaronithon(insert logo)</h1>
			<p id="fronttext">How far can you run before you get eaten</p>
		</div>
	</div>

	<!-- Search bar -->
	<div class="item2">
		<input onclick="getLowercase()" class="awesomplete inputMeal" placeholder="Search for the meal" data-list="pizza, cheeseburger, caesar salad, club sandwich, tomato soup">
		<button class="submitMeal"><span>Go!</span></button>
	</div>

	<!-- Pictures of the predator and human -->
	<div class="item3">
        <div class="animated tada">
			<img src="images/predatorrex.png" alt="Predator hunting running human" title="T-rex" class="t-rex">
        </div>
	</div>

	<div class="item4">
        <div class="animated shake">
    		<img src="images/humanrun.png" alt="Human running from predator" title="Human" class="human">
        </div>
	</div>

	<!-- Footer if needed-->
	

</div>


	<!-- Scripts for Macaronithon -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="js/awesomplete.min.js"></script>
	<script src="js/getmeal.js" type="text/javascript"></script>
	<script src="js/popup.js" type="text/javascript"></script>

</body>
</html>