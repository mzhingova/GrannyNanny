function validateForm() {
	//first name
     var fname = document.forms['regform']['firstname'].value;
     if (fname != ""){
     	if (!(fname.match(/^[a-zA-Z-\u0400-\u04FF]{2,16}$/i))){
		alert("Моля въведете валидно име от 2 до 16 букви включително.");
		return false;
     }
 }
     

     var fileUpload = document.getElementById("img");
     if (fileUpload.value != "") {
	 var allowedFiles = [".gif",".png", ".jpeg", ".jpg"];
     	var regex = new RegExp("([a-zA-Z0-9\s_\\.\-:])+(" + allowedFiles.join('|') + ")$");
        if (regex.test(fileUpload.value.toLowerCase())) {
			var size = parseFloat(fileUpload.files[0].size / 1024).toFixed(2);
			if (size>1024) {
            
					alert("Непозволен размер.");
					return false;
				} 
           
			}else{
			 alert ("Моля изберете подходящ формат снимка.");
            return false;
		}
}

	//last name
	var lname = document.forms['regform']['lastname'].value;
	if (lname != ""){
   if (!(lname.match(/^[a-zA-Z-\u0400-\u04FF]{2,16}$/i))){
		alert("Моля въведете валидна фамилия от 2 до 16 букви включително.");
		return false;
	}
}
	//telephone 
		var tel = document.forms['regform']['tel'].value;
	if (tel != ""){
    if (!(tel.match(/^[0-9]{5,10}$/i))){
		alert("Моля въведете валиден телефон от 5 до 10 цифри включително.");
		return false;
	}
}
	   
	//motivation validation
	var motivation=document.forms['regform']['motivation'].value;
	if (motivation != ""){
	if(!(motivation.match(/^.{20,255}$/))){
		alert ("Моля въведете валидно мотивационно писмо то не може да бъде по-малко от 20 символа и повече от 255.");
		return false;
	}
}

var address=document.forms['regform']['address'].value;
	if (address != ""){
	if(!(address.match(/^.{5,50}$/))){
		alert ("Моля въведете валиден адрес, той не може да бъде по-малко от 5 символа и повече от 50.");
		return false;
	}
}
	//pass
	var password = document.forms['regform']['password'].value;
	var pass = document.forms['regform']['pass'].value;
	var pass2 = document.forms['regform']['pass2'].value;
	var current_pass = document.forms['regform']['current_pass'].value;
    if ((password != "") || (pass != "") || (pass2 != "")) {



     if (!(pass.match(/^(?=.*[a-zA-Z])(?=.*[\d])(?=.*[\W_]).{5,16}$/))){
		alert("Новата ви парола трябва да съдържа поне една цифра ,един специален символ ,една буква и да бъде с дължина 5-16 символа.");
		return false;
	}

	else if (pass != pass2){
		alert("Несъответствие в полето: 'Повтори парола'");
		return false;
	} else if (current_pass != password){
alert("Несъответствие в полето: 'Настояща парола'");
return false;
	}	
  }
	
}
