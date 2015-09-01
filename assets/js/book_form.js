function validateForm() {
var city = document.forms['book_nanny']['city'].value;
		  if(city === null ||city == ""){
   
      alert("Моля изберете град ."); 
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
}