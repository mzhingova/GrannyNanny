function validateForm() {
	//first name
     var fname = document.forms['regform']['firstname'].value;
	if (!(fname.match(/^[a-zA-Z-\u0400-\u04FF]{2,16}$/i))){
		alert("Моля въведете валидно име.");
		return false;
	}
	//last name
	var lname = document.forms['regform']['lastname'].value;
   if (!(lname.match(/^[a-zA-Z-\u0400-\u04FF]{2,16}$/i))){
		alert("Моля въведете валидна фамилия.");
		return false;
	}
		
	//telephone 
		var tel = document.forms['regform']['tel'].value;
    if (!(tel.match(/^[0-9]{5,10}$/i))){
		alert("Моля въведете валиден телефон.");
		return false;
	}
	   
	//motivation validation
	var motivation=document.forms['regform']['motivation'].value;
	
	if(!(motivation.match(/^.{20,255}$/))){
		alert ("Не може да въведете повече от 255 символа  и не по малко от 20 символа.");
		return false;
	}
	//pass
	var password = document.forms['regform']['password'].value;
	var pass = document.forms['regform']['pass'].value;
	var pass2 = document.forms['regform']['pass2'].value;
    if ((password === null || password === "")(pass === null || pass === "")&&(pass2 === null || pass2 === "")) {
        alert("Моля въведете парола.");
        return false;
	}
	else if (!(pass.match(/^(?=.*[a-zA-Z])(?=.*[\d])(?=.*[\W_]).{5,16}$/))){
		alert("Моля въведете валидена парола.");
		return false;
	}
	else if (!(pass === pass2)){
		alert("Въведената парола не съпада.");
		return false;
	}
	
}