function validateForm() {

	//pass
	
	var pass = document.forms['regform']['pass'].value;
	var pass2 = document.forms['regform']['pass2'].value;
	
 if (!(pass.match(/^(?=.*[a-zA-Z])(?=.*[\d])(?=.*[\W_]).{5,16}$/))){
		alert("Моля въведете валидена парола.");
		return false;
	}
	else if (!(pass===pass2)){
		alert("Въведената парола не съпада.");
		return false;
	}
	
}