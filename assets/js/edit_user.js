function validateForm() {
	//first name
     var fname = document.forms['regform']['firstname'].value;
     if (fname != ""){
     	if (!(fname.match(/^[a-zA-Z-\u0400-\u04FF]{2,16}$/i))){
		alert("Моля въведете валидно име.");
		return false;
     }
 }
     
	//last name
	var lname = document.forms['regform']['lastname'].value;
	if (lname != ""){
   if (!(lname.match(/^[a-zA-Z-\u0400-\u04FF]{2,16}$/i))){
		alert("Моля въведете валидна фамилия.");
		return false;
	}
}
	//telephone 
		var tel = document.forms['regform']['tel'].value;
	if (tel != ""){
    if (!(tel.match(/^[0-9]{5,10}$/i))){
		alert("Моля въведете валиден телефон.");
		return false;
	}
}
	//pass
	var password = document.forms['regform']['password'].value;
	var pass = document.forms['regform']['pass'].value;
	var pass2 = document.forms['regform']['pass2'].value;
    if (!(password === "")&&(pass === "")&&(pass2 === "")) {
     if (!(pass.match(/^(?=.*[a-zA-Z])(?=.*[\d])(?=.*[\W_]).{5,16}$/))){
		alert("Моля въведете валидена парола.");
		return false;
	}
}
	else if (!(pass === pass2)){
		alert("Въведената парола не съпада.");
		return false;
	}
	
}