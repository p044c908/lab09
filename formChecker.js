document.getElementById('form').onsubmit = function() {

	const user = document.getElementById('user').value;
	var def = user.split("@");
	if (def.length != 2 || def[0] == "" || def[1] == "") {
		console.log("Enter email in form of name@domain.com");
		return false;
	} else {
		var def2 = def[1].split(".");
		if (def2.length != 2 || def2[0] ==3 "" || def2[1] == "") {
			console.log("Enter email in form of name@domain.com");
			return false;
		}
	}

	const pass = document.getElementById('password').value;
	if (pass == "") {
		console.log("Enter a valid password");
		return false;
	}

	const q1 = document.getElementById('item1').value;
	const q2 = document.getElementById('item2').value;
	const q3 = document.getElementById('item3').value;

	if (q1 == "" || q2 == "" || q3 == "") {
		console.log("Enter number of items");
		return false;
	}

	if (q1 < 0 || q2 < 0 || q3 < 0) {
		console.log("Item cannot be negative");
		return false;
	}

	const ship1 = document.getElementById('free').value;
	const ship2 = document.getElementById('overnight').value;
	const ship3 = document.getElementById('3d').value;

	if (!(ship1 || ship2 || ship3)) {
		console.log("Select shipping method");
		return false;
	}
}
