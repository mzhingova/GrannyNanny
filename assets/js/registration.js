function validateForm(){
	//first name
     var fname = document.forms['regform']['firstname'].value;
    if (fname === null || fname === "") {
        alert("Моля полълнете име.");
        return false;
	}
	else if (!(fname.match(/^[a-zA-Z-\u0400-\u04FF]{2,16}$/i))){
		alert("Моля въведете валидно име.");
		return false;
	}
	//last name
	var lname = document.forms['regform']['lastname'].value;
    if (lname === null || lname === "") {
        alert("Моля въведете Фамилия");
        return false;
	}
	else if (!(lname.match(/^[a-zA-Z-\u0400-\u04FF]{2,16}$/i))){
		alert("Моля въведете валидна фамилия.");
		return false;
	}
	//city validation
	var city = document.forms['regform']['city'].value;
		  if(city === null ||city == ""){
   
      alert("Моля изберете град."); 
      return false;
   }

	//telephone 
		var tel = document.forms['regform']['tel'].value;
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
	else if (!(email.match(/^[a-zA-Z]{1}[a-zA-Z0-9_.]+@[a-zA-Z-]+\.[a-zA-Z0-9-.]+$/))){
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
	else if (!(pass.match(/^(?=.*[a-zA-Z])(?=.*[\d])(?=.*[\W_]).{5,16}$/))){
		alert("Моля въведете валидена парола.");
		return false;
	}
	else if (!(pass===pass2)){
		alert("Въведената парола не съпада.");
		return false;
	}
	
}