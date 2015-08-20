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

	//address validation
	var address = document.forms['regform']['address'].value;
    if (address === null || address === "") {
        alert("Моля въведете адрес.");
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
	//pid validation
	var pid=document.forms['regform']['pid'].value;
	if(pid==null || pid===""){
		alert("Моля въведете ЕГН");
		return false;
	}
	else if(!(pid.match(/^[0-9]{10,10}$/i))){
		alert("Моля въведете валидно ЕГН.");
		return false;
	}
		//education validation
	var education = document.forms['regform']['education'].value;
		  if(education === null ||education == ""){
   
      alert("Моля изберете образование."); 
      return false;
   }
		//raboten status validation
	var work_status = document.forms['regform']['work_status'].value;
		  if(work_status === null || work_status== ""){
   
      alert("Моля изберете работен статус."); 
      return false;
   }
   
	//motivation validation
	var motivation=document.forms['regform']['motivation'].value;
	if(motivation===null || motivation==""){
		alert("Моля  напишете мотивация.");
		return false;
	}
	else if(!(motivation.match(/^.{20,255}$/))){
		alert ("Не може да въведете повече от 255 символа  и не по малко от 20 символа.");
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
	//gender validation
	var gender = document.forms['regform']['gender'].cheked;
	if(gender==false){
		alert("Моля изберете пол.");
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