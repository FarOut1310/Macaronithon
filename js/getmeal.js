function getMeal(){
		var mealValue = document.getElementsByClassName("inputMeal")[0].value;

		if(mealValue === "pizza"){
			location.href = "screen_2.php";
		} else if (mealValue === "cheeseburger"){
			location.href = "screen_3.php";
		} else if (mealValue === "caesar salad") {
			location.href = "screen_4.php";
		} else if (mealValue === "club sandwich") {
			location.href = "screen_5.php";
		} else if (mealValue === "tomato soup") {
			location.href = "screen_6.php";
		} else {
		$('.window--alert').removeClass('none');
			$(".conditionalOpen, .conditionalClose").toggleClass("conditionalOpen conditionalClose");
		}
	}

	document.getElementsByClassName("submitMeal")[0].addEventListener("click", getMeal);