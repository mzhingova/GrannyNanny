<?php

	 require('connection/connection.php');
	    if(isset($_POST['submit'])) {
	        $firstname = $_POST['firstname'];
			$lastname =$_POST['lastname'];
	        $email = $_POST['email'];
			$tel = $_POST['tel'];
	        $password = $_POST['pass'];
			$flat =$_POST['flat'];
			$num =$_POST['num'];
			$street =$_POST['street'];
			$distrct =$_POST['district'];
			$selected_val = $_POST['city'];
			$count=0;
			mysql_query('SET NAMES utf8');
			
			//form validation.
			if(empty($_POST['firstname'])){
				echo "qq";
			}
		}	
			
			
			
			
			
			
			
			// If the values are posted, insert them into the database.
			if (isset($_POST['firstname']) && isset($_POST['pass'])){
	        $query = "INSERT INTO `parenuser` (flat, num, street, district, city, firstname, lastname, tel, pass, email) VALUES ('$flat', '$num', '$street', '$district', '$selected_val', '$firstname', '$lastname', '$tel', '$password', '$email')";

	        $result = mysql_query($query);

	        if($result){

	            
				header("Location: success.html");

	        }

	    }

	    ?>