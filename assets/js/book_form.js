function validateForm() {
var city = document.forms['book_nanny']['city'].value;
		  if(city === null ||city == ""){
   
      alert("���� �������� ���� ."); 
      return false;
   }
   //address validation
	var address = document.forms['book_nanny']['address'].value;
    if (address === null || address === "") {
        alert("���� �������� �����.");
		return false;
	}
		//children 
		var children = document.forms['book_nanny']['children'].value;
    if (children === null || children === "") {
        alert("���� �������� ���� ���� ");
        return false;
	}
	else if (!(children.match(/^[0-9]$/i))){
		alert("���� �������� ������� ��� ����.");
		return false;
	}
		var startDate = document.forms['book_nanny']['startDate'].value;
    if (startDate === null || startDate === "") {
        alert("���� �������� �����.");
		return false;
	}
		var endDate = document.forms['book_nanny']['endDate'].value;
    if (endDate === null || endDate === "") {
        alert("���� �������� �����.");
		return false;
	}
}