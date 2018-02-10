<?php require 'includes/head.php'; ?>
<?php require 'includes/header.php'; ?>

<main class="mainArea1">
	
	<section class="mainArea1--searchField">

		<div class="mainArea1--searchField-left"></div>
		<div class="mainArea1--searchField-center">
			<input class="awesomplete inputMeal" placeholder="Search for the meal" data-list="pizza, hamburger">
			<button onclick="getLowercase()" class="submitMeal"><span>Go!</span></button>
		</div>
		<div class="mainArea1--searchField-right"></div>
	</section>

	<section class="mainArea1--background">
		<div class="mainArea1--background-left"><img src="img/predatorrex.png" alt="Predator" width="300px"></div>
		<dir class="mainArea1--background-center"></dir>
		<dir class="mainArea1--background-right"><img src="img/humanrun.png" alt="Predator" width="200px"></dir>
		<dir class="mainArea1--background-bottom"></dir>
		
	</section>

</main>
<script>
	function getLowercase() {
		var lowercaseValue = document.getElementsByClassName("inputMeal")[0].value;
		var res = str.toLowerCase();
	}
</script>
<script src="js/awesomplete.min.js"></script>
<script src="js/getmeal.js" type="text/javascript"></script>

<?php include 'includes/footer.php'; ?>

select.chenge.event
convert to lower case.


