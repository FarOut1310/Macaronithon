document.querySelector('#predator').onchange = changeEventHandler;


    	function changeEventHandler(event) {

		    // if nothing has been selected: 
		    if(!event.target.value) {
		    	console.log('Please Select One');
		    }
		    else {
		    	var value = event.target.value;
		    	console.log(value);
		    	document.getElementById('bieber').src = value + ".png";
		    }

		}