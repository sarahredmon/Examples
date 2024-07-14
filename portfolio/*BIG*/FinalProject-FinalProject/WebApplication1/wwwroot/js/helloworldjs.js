submit.onclick = function() {
	// Declare and initialize all variables
	var firstname = document.getElementById("fn").value;
	var lastname = document.getElementById("ln").value;
	var phone = document.getElementById("p").value;
	var emailaddress = document.getElementById("ea").value;
	var streetaddress = document.getElementById("sa").value;
	var city = document.getElementById("c").value;
	var state = document.getElementById("s").value;
	var zipcode = document.getElementById("zc").value;

	/*
	Go through each field and verify if the input is valid:
	- If not valid, show alert and return false to the method, allowing the user to try again
	- Otherwise, do nothing and go on to display the input on the webpage
	*/
	if (!firstname.match(/^[A-Za-zÀ-ÖØ-öø-ÿ ]+$/)) {
		alert("First name not valid");
		return false;
	}

	if (!lastname.match(/^[A-Za-zÀ-ÖØ-öø-ÿ ]+$/)) {
		alert("Last name not valid");
		return false;
	}

	if (!phone.match(/^[0-9]+$/)) {
		alert("Phone not valid");
		return false;
	}

	if (!emailaddress) { // cannot figure out ea regex
		alert("Email address not valid");
		return false;
	}

	if (!streetaddress) {
		alert("Street address not valid");
		return false;
	}

	if (!city.match(/^[A-Za-zÀ-ÖØ-öø-ÿ ]+$/)) {
		alert("City not valid");
		return false;
	}

	if (!state.match(/^[A-Za-zÀ-ÖØ-öø-ÿ ]+$/)) {
		alert("State not valid");
		return false;
	}

	if (!zipcode.match(/^\d{5}(?:[-\s]\d{4})?$/)) {
		alert("Zip code not valid");
		return false;
	}

	// Assign each JavaScript variable to a HTML variable to display
	document.getElementById("name").innerHTML = firstname + " " + lastname;
	document.getElementById("phone").innerHTML = phone;
	document.getElementById("emailaddress").innerHTML = emailaddress;
	document.getElementById("streetaddress").innerHTML = streetaddress;
	document.getElementById("address").innerHTML = city + ", " + state + " " + zipcode;
}