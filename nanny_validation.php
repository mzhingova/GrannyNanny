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
	        $email = $_POST['email'];
			$tel = $_POST['tel'];
	        $password = $_POST['pass'];
			$password2 = $_POST['pass2'];
			$flat = $_POST['flat'];
			$num = $_POST['num'];
			$street = $_POST['street'];
			$district = $_POST['district'];
			$pid=$_POST['pid'];
			
			
			
			
			//education validation
				if(empty($_POST['education']))
			{
				echo "Изберете образование.";
			}
			else{
			$education=$_POST['education'];
			$count++;
				
			}
			if(!(isset($_POST['workout'])))
			{
			
			}
			else{
				$workout=$_POST['workout'];
				
			}
			//city validation 
			if(empty($_POST['city']))
			{
				echo "Моля изберете град.";
			}
			else{
				$city=$_POST['city'];
				$count++;
			}
			//gender validation
			if(!(isset($_POST['gender'])))
			{
				echo "Моля изберете пол";
			}
			else{
				$gender=$_POST['gender'];
				$count++;
			}
			//work status 
			
			if(empty($_POST['work_status']))
			{
				echo "Моля изберете работен статус";
			}
			else{
				$work_status=$_POST['work_status'];
				$count++;
			}
			
			$conn ->set_charset("utf8");
			
			
			//form validation.
			//frst name validation
			if(!empty($firstname)){
				if(preg_match("/^[a-zA-Z\p{Cyrillic}]{2,16}$/iu",$firstname)){
					$count++;
				
				}
				else{
					echo "Моля въведете валидно име.";	
				}
			}
			else{
				echo "Моля въведете име.";
			}
			//last name validation 
			if(!empty($lastname)){
					if(preg_match("/^[a-zA-Z\p{Cyrillic}]{2,16}$/iu",$lastname)){
					$count++;
					
				}
				else{
					echo "Моля въведете валидна фамилия.";	
				}
				
			}
			else{
				echo"Моля въведете фамилия.";
			}
			
			//district validation 
			if(!empty($district)){
				if(preg_match("/^[a-zA-Z\p{Cyrillic}0-9\s]{2,20}$/iu",$district)){
					
				}
				else{
					echo "Моля въведете валиден квартал.";
				}
			
			}
			//street validation 
			
			if(!empty($street)){
				if(preg_match("/^[a-zA-Z\p{Cyrillic}0-9\s]{2,20}$/iu",$street)){
					
				}
				else{
					echo "Моля въведете валидена улица.";
				}
			}
			//street num validation 
			
			if(!empty($num)){
				if(preg_match("/^[0-9]{0,3}$/iu",$num)){
					
				}
				else{
					echo "Моля въведете валиден номер.";
				}
			}
			//flat validation 
			if(!empty($flat)){
				if(preg_match("/^[a-zA-Z\p{Cyrillic}0-9\']{0,6}$/",$flat)){
					
				}
				else{
					echo "Моля въведете валиден номер на блок.";
				}
			}
			//telephone validation 
			if(!empty($tel)){
				if(preg_match("/^[0-9]{5,10}$/i",$tel)){
					$count++;
				}
				else{
					echo "Моля въведете валиден телефонен номер.";
				}
			}
			else{
				 echo "Моля въведете телефонен номер.";
			}
			//email validation
			
			if(!empty($email)){
				if(preg_match("/^[a-zA-Z]{1}[a-zA-Z0-9_.]+@[a-zA-Z-]+\.[a-zA-Z0-9-.]+$/",$email)){
					$count++;
				}
				else{
					echo "Моля въведете валиден email.";
				}
			}
			else{
				 echo "Моля въведете email.";
			}
			// f this pass validation 
			if(!empty($password) && !empty($password2)){
				if(preg_match("/^(?=.*[\d])(?=.*[\W]).{5,16}$/",$password)){
					if($password==$password2){
						$count++;
					}
				}
				else{
					echo "Моля въведете валидена парола.";
				}
			}
			else{
				 echo "Моля въведете парола.";
			}
						//pid validation 
			if(!empty($pid)){
				if(preg_match("/^[0-9]{10}$/i",$pid)){
					$count++;
				}
				else{
					echo "Моля въведете валидено ЕГН.";
				}
			}
			else{
				 echo "Моля въведете ЕГН.";
			}
			
			//motivation validation  
			
			if(!empty($motivatin)){
				if(preg_match("/^{0,255}$/i",$motivation)){
					$count++;
				}
				else{
					echo "Моля въведете валидено ЕГН.";
				}
			}
			
			
			
			echo $count;
			
			if($count>9){
				$sql ="INSERT INTO `parenuser` (pid, workout, work_status, gender, education, motivation, flat, num, street, district, city, firstname, lastname, tel, pass, email, status) VALUES ('$pid','$workout','$work_status','$gender','$edication', '$motivation', '$flat', '$num', '$street', '$district', '$selected_val', '$firstname', '$lastname', '$tel', '$password', '$email', 'nanny')";
				$result=mysqli_query($conn ,$sql)or die("Error in the consult.." . mysqli_error($conn));

				if($result){
				header("Location: success.html");

				}
			}
			else{
				echo "QQ";
			}
		}
	    ?>