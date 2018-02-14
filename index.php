<?php require 'includes/head.php'; ?>
<?php require 'includes/header.php'; ?>
<!--Popup-->
<span class="window--alert none conditionalClose "><p>Unfortunately we don't have your product. Do you want to add it?</p>
		<div class="grid-container--buttons">
		<div class="button button--ok">OK</div>
		<div class="button button--cancel">CANCEL</div>
		</div>
		</span>
		
<main class="mainArea1">
	
	<section class="mainArea1--searchField">

		<div class="mainArea1--searchField-left"></div>
		<div class="mainArea1--searchField-center">
			<input onclick="getLowercase()" class="awesomplete inputMeal" placeholder="Search for the meal" data-list="pizza, cheeseburger, caesar salad, club sandwich, tomato soup">
			<button class="submitMeal"><span>Go!</span></button>
		</div>
		<div class="mainArea1--searchField-right"></div>
	</section>

	<section class="mainArea1--background">
		<div class="mainArea1--background-left"><img id="predatorrex" src="img/predatorrex.png" alt="Predator" width="300px"></div>
		<div class="mainArea1--background-center"></div>
		<div class="mainArea1--background-right"><img id="humanrun" src="img/humanrun.png" alt="Predator" width="200px"></div>
		<div class="mainArea1--background-bottom"></div>
		
	</section>

</main>
<script>
	function getLowercase() {
		var lowercaseValue = document.getElementsByClassName("inputMeal")[0].value;
		var res = str.toLowerCase();
	}
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/awesomplete.min.js"></script>
<script src="js/getmeal.js" type="text/javascript"></script>
<script src="js/popup.js" type="text/javascript"></script>

<?php include 'includes/footer.php'; ?>




