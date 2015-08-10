<?php

	    require('connection.php');

	    // If the values are posted, insert them into the database.

	    if (isset($_POST['firstname']) && isset($_POST['pass'])){

	        $firstname = $_POST['firstname'];
			$lastname =$_POST['lastname'];
			$address= $_POST['address'];
	        $email = $_POST['email'];
			$tel = $_POST['tel'];
	        $password = $_POST['pass'];

	  

	        $query = "INSERT INTO `parenuser` (firstname, lastname, tel, address, pass, email) VALUES ('$firstname', '$lastname', '$tel', '$address', '$password', '$email')";

	        $result = mysql_query($query);

	        if($result){

	            
        header("Location: success.html");

	        }

	    }

	    ?>



<form method="POST" action="" class="regForm">
	<label >First Name</label>
	<input type="text" name="firstname"></input>
	<label>Last Name </label>
	<input type="text" name="lastname">
	<label>Address</label>
	<input type="text" name="address"></input>
	<label>Telephone</label>
	<input type="tel" name="tel" ></input>
	<label>Email</label>
	<input type="email" name="email"></input>
	<label>Password</label>
	<input type="password" name="pass"></input>
	<label>Confirm Password</label>
	<input type="password" name="pass2"></input>
	<input type="submit" name="submit"></input>
</form>