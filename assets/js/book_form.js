function validateForm() {
var city = document.forms['book_nanny']['city'].value;
		  if(city === null ||city == ""){
   
      alert("Моля изберете град."); 
      return false;
   }
   //address validation
	var address = document.forms['book_nanny']['address'].value;
    if (address === null || address === "") {
        alert("Моля въведете адрес.");
		return false;
	}
		//children 
		var children = document.forms['book_nanny']['children'].value;
    if (children === null || children === "") {
        alert("Моля въведете брой деца ");
        return false;
	}
	else if (!(children.match(/^[0-9]$/i))){
		alert("Моля въведете валиден бой деца.");
		return false;
	}
		var startDate = document.forms['book_nanny']['startDate'].value;
    if (startDate === null || startDate === "") {
        alert("Моля въведете адрес.");
		return false;
	}
		var endDate = document.forms['book_nanny']['endDate'].value;
    if (endDate === null || endDate === "") {
        alert("Моля въведете адрес.");
		return false;
	}
	//first name
     var fname = document.forms['book_nanny']['firstname'].value;
    if (fname === null || fname === "") {
        alert("Моля полълнете име.");
        return false;
	}
	else if (!(fname.match(/^[a-zA-Z-\u0400-\u04FF]{2,16}$/i))){
		alert("Моля въведете валидно име.");
		return false;
	}
	//last name
	var lname = document.forms['book_nanny']['lastname'].value;
    if (lname === null || lname === "") {
        alert("Моля въведете Фамилия");
        return false;
	}
	else if (!(lname.match(/^[a-zA-Z-\u0400-\u04FF]{2,16}$/i))){
		alert("Моля въведете валидна фамилия.");
		return false;
	}
		//email
	var email = document.forms['book_nanny']['email'].value;
    if (email === null || email === "") {
        alert("Моля въведете email");
        return false;
	}
	else if (!(email.match(/^[a-zA-Z]{1}[a-zA-Z0-9_.]+@[a-zA-Z-]+\.[a-zA-Z0-9-.]+$/))){
		alert("Моля въведете валиден email.");
		return false;
	}
	//telephone 
		var tel = document.forms['book_nanny']['tel'].value;
    if (tel === null || tel === "") {
        alert("Моля въведете телефон");
        return false;
	}
	else if (!(tel.match(/^[0-9]{5,10}$/i))){
		alert("Моля въведете валиден телефон.");
		return false;
	}
}