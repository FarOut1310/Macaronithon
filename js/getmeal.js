function getMeal(){
		var mealValue = document.getElementsByClassName("inputMeal")[0].value;

		if(mealValue == "pizza"){
			location.href = "screen_2.php";
		} else if (mealValue == "hamburger"){
			location.href = "screen_3.php";
		} else {
			location.href = "screen_3.php";
		}
	}

	document.getElementsByClassName("submitMeal")[0].addEventListener("click", getMeal);