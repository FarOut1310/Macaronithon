<?php require 'includes/head.php'; ?>
<?php require 'includes/header.php'; ?>

<main class="mainArea1">
	
	<section class="mainArea1--searchField">

		<div class="mainArea1--searchField-left"></div>
		<div class="mainArea1--searchField-center">
			<button id="submit" onclick="submitMeal();">Go!</button>
			<input class="awesomplete" placeholder="Search for the meal" data-list="Pizza">
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
<?php include 'includes/footer.php'; ?>



