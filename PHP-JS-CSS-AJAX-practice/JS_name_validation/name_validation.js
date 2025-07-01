

function nameValidation(){

	var name = document.getElementById('fname').value;

	if (name == ""){

		document.getElementById('name_err').innerHTML = "insert your name ";

		return false;
	}

	if (name.length <= 2){

		document.getElementById('name_err').innerHTML = " at least three character ";

		return false;


	}
}