<?php require 'includes/head.php'; ?>
<?php require 'includes/header.php'; ?>

<main class="mainArea2">

	<section class="mainArea2--pizza">
		
		<article class="pizza--topbar">
			<h1 class="pizza--topbar-heading">Your Power Meal is:</h1>
		</article>

		<article class="pizza--sidebarleft"></article>

		<article class="pizza--article">
			<h1 class="pizza--article-heading">Pizza</h1>
			<p class="pizza--article-paragraph">Pizza is a traditional Italian meal, where a bunch of second-class rubbish is layed out onto a flatbread. It consists of: 45% of fats, 35% of carbs and 20% of proteins.</p>
		</article>


		<aside class="pizza--aside">
			<img class="pizza--aside-img" src="img/pizza.png" alt="Pizza">
		</aside>

		<article class="pizza--sidebarright"></article>

	</section>



	<section class="mainArea2--predators">
		
			
				<legend>Choose Your Predator</legend>
				
				<select name="predator" id="selectPredator">
					<option name="bull" value="bull"><span>Bull</span></option>
				<option name="tyrannotitan" value="tyrannotitan"><span>Tyrannotitan</span></option>
				<option name="tiger" value="tiger"><span>Tiger</span></option>
				<option name="justinBieber" value="justinBieber"><span>Justin Bieber</span>></option>
				</select>
<img src="img/bull.png" align="">
<img src="img/tyrannotitan.png" align="">
<img src="tiger.png" align="">
<img src="justin_bieber.png" align="">
			
		
	</section>


	

</main>
<script src="JS/style.js" type="text/javascript"></script>
<script
  src="http://code.jquery.com/jquery-2.2.4.js"
  integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
  crossorigin="anonymous">	
</script>

  <script src="https://cdn.jsdelivr.net/npm/vue@2.5.13/dist/vue.js"></script>

<?php include 'includes/footer.php'; ?>