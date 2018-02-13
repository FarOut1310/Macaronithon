<?php require 'includes/head.php'; ?>
<?php require 'includes/header.php'; ?>

<main class="mainArea2">

	<section class="mainArea2--pizza">
		
		<article class="pizza--topbar">
			<h1 class="pizza--topbar-heading">Your Power Meal is:</h1>
		</article>

		<article class="pizza--sidebarleft"></article>

		<article class="pizza--article">
			<h1 class="pizza--article-heading">Tomato Soup</h1>
			<p class="pizza--article-paragraph">Main ingredient: tomatoes. Other ingredients: You're probably better off not knowing. Seriously, don't think too much about it. It contains: 10% fat, 55% carbs and 35% protein.</p>
		</article>


		<aside class="pizza--aside">
			<img class="pizza--aside-img" src="img/tomatosoup.jpg" alt="Tomato Soup">
		</aside>

		<article class="pizza--sidebarright"></article>

	</section>



	<section class="mainArea2--predators">
		
		<article class="predators--topbar">
			<h1 class="predators--topbar-heading">Choose Your Predator</h1>
			
			<form class="predators--topbar-form">
				<select class="topbar-form-select" name="predator" id="predator">
					<option value="">Select ...</option>
					<option name="bull" value="bull"><span>Bull</span></option>
					<option name="tyrannotitan" value="tyrannotitan"><span>Tyrannotitan</span></option>
					<option name="bieber" value="bieber"><span>Justin Bieber</span></option>
					<option value="tiger"><span>Tiger</span></option>
					<option name="clown" value="clown"><span>Clown</span></option>
					
				</select>
			</form>
		</article>


		<article class="predators--sidebarleft">
			<img id="image" src="">
		</article>

		<article class="predators--center">
			
		</article>

		<article class="predators--sidebarright">
			<img id="humanrun" src="img/humanrun.png">
		</article>		
	</section>

</main>
<script>
	document.querySelector('#predator').onchange = changeEventHandler;

    	function changeEventHandler(event) {

		    // if nothing has been selected: 
		    if(!event.target.value) {
		    	console.log('Please Select One');
		    }
		    else {
		    	var value = event.target.value;
		    	console.log(value);
		    	document.getElementById('image').src = value + ".png";
		    }
		}
</script>
<script src="JS/style.js" type="text/javascript"></script>
<script
  src="http://code.jquery.com/jquery-2.2.4.js"
  integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
  crossorigin="anonymous">	
</script>

  <script src="https://cdn.jsdelivr.net/npm/vue@2.5.13/dist/vue.js"></script>

<?php include 'includes/footer.php'; ?>