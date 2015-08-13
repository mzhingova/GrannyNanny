function validateForm(){
	//first name
     var fname = document.forms['regform']['firstname'].value;
    if (fname === null || fname === "") {
        alert("Моля полълнете име.");
        return false;
	}
	else if (!(fname.match(/^[a-zA-Z\u0400-\u04FF]{2,16}$/i))){
		alert("Моля въведете валидно име.");
		return false;
	}
	//last name
	var lname = document.forms['regform']['lastname'].value;
    if (lname === null || lname === "") {
        alert("Моля въведете Фамилия");
        return false;
	}
	else if (!(lname.match(/^[a-zA-Z\u0400-\u04FF]{2,16}$/i))){
		alert("Моля въведете валидна фамилия.");
		return false;
	}
	//district validation
		var district = document.forms['regform']['district'].value;
    if (district === null || district === "") {
        
	}
	else if (!(district.match(/^[a-zA-Z\u0400-\u04FF\0-9]{2,20}$/i))){
		alert("Моля въведете валиден квартал.");
		return false;
	}
	//street
		var dstreet = document.forms['regform']['street'].value;
    if (district === null || street === "") {
        
	}
	else if (!(street.match(/^[a-zA-Z\u0400-\u04FF\0-9]{2,20}$/i))){
		alert("Моля въведете валидена улица.");
		return false;
	}
	//street num 
		var num = document.forms['regform']['num'].value;
    if (num === null || num === "") {
        
	}
	else if (!(num.match(/^[0-9]{0,3}$/i))){
		alert("Моля въведете валиденен номер.");
		return false;
	}
	//flat
		var flat = document.forms['regform']['flat'].value;
    if (num === null || num === "") {
        
	}
	else if (!(flat.match^[a-zA-Z\u0400-\u04FF\0-9]{0,6}$))){
		alert("Моля въведете валиденен номер на блок.");
		return false;
	}
	//telephone 
		var tel = document.forms['regform']['let'].value;
    if (tel === null || tel === "") {
        alert("Моля въведете телефон");
        return false;
	}
	else if (!(tel.match(/^[0-9]{5,10}$/i))){
		alert("Моля въведете валиден телефон.");
		return false;
	}
	//email
	var email = document.forms['regform']['email'].value;
    if (email === null || email === "") {
        alert("Моля въведете email");
        return false;
	}
	else if (!(email.match(/^(?=(.*\d))(?=.*[a-zA-Z])(?=.*[!@#$%])[0-9a-zA-Z!@#$%]{5,16}/))){
		alert("Моля въведете валиден email.");
		return false;
	}
	//pass
	
	var pass = document.forms['regform']['pass'].value;
	var pass2 = document.forms['regform']['pass2'].value;
    if ((pass === null || pass === "")&&(pass2 === null || pass2 === "")) {
        alert("Моля въведете парола.");
        return false;
	}
	else if (!(pass.match(/^(?=(.*\d))(?=.*[a-zA-Z])(?=.*[!@#$%])[0-9a-zA-Z!@#$%]{5,16}/))){
		alert("Моля въведете валидена парола.");
		return false;
	}
	else if (!(pass===pass2)){
		alert("Въведената парола не съпада.");
		return false;
	}
	
}