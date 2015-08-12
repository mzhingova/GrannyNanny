<?php
error_reporting(E_ALL); ini_set('display_errors', 1);
	
	$conn  = new mysqli("localhost", "root", "", "grannynanny");
			if(! $conn )
			{
				die('Could not connect: ' . mysql_error());
			}
			
			$conn ->set_charset("utf8");
			$count=0;
			$errors = array();
	    if(isset($_POST['submit'])){
	        $firstname = $_POST['firstname'];
			$lastname =$_POST['lastname'];
	        $emaill = $_POST['email'];
			$tel = $_POST['tel'];
	        $password = $_POST['pass'];
			$flat = $_POST['flat'];
			$num = $_POST['num'];
			$street = $_POST['street'];
			$district = $_POST['district'];
			$selected_val = $_POST['city'];
			
			
			
			//form validation.
			if(!empty($firstname)){
			
				
			}
			
			
				$sql ="INSERT INTO `parenuser` (flat, num, street, district, city, firstname, lastname, tel, pass, email) VALUES ('$flat', '$num', '$street', '$district', '$selected_val', '$firstname', '$lastname', '$tel', '$password', '$emaill')";
				$result=mysqli_query($conn ,$sql)or die("Error in the consult.." . mysqli_error($conn));

				if($result){
				header("Location: success.html");

				}

			
		
		}
	    ?>