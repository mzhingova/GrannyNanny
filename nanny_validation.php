<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

$conn = new mysqli("localhost", "root", "", "grannynanny");
if (!$conn) {
	die('Could not connect: ' . mysql_error());
}

$conn->set_charset("utf8");
$count = 0;
$errors = array();
if (isset($_POST['submit'])) {
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$tel = $_POST['tel'];
	$password = $_POST['pass'];
	$password2 = $_POST['pass2'];
	$motivation = $_POST['motivation'];
	$address = $_POST['address'];
	$pid = $_POST['pid'];
	$folder = "uploads/";

	
	
	$file = $_FILES['image']['name'];
	if (isset($file)) {
		$file_loc = $_FILES['image']['tmp_name'];
		$file_size = $_FILES['image']['size'];
		$file_type = $_FILES['image']['type'];

		// new file size in KB
		$new_size = $file_size / 1024;
		// new file size in KB

		// make file name in lower case
		$new_file_name = strtolower($file);
		// make file name in lower case

		$final_file = str_replace(' ', '-', $new_file_name);
		$allowed =  array('gif','png' ,'jpg','jpeg');
		$ext = pathinfo($file, PATHINFO_EXTENSION);
		if(in_array($ext,$allowed) ) {
			if($_FILES['image']['size']> 1024){
				$count++;
			}else{
				echo "Прекалено голяма снимка.";
			}
			
		}else {
			echo "Непозволен формат на снимка.";
		}
		
		
		}
		else {
				echo "Изберете подходяща снимка  снимка.";
			
		}
		echo $count;

	//education validation
	if (empty($_POST['education'])) {
		echo "Изберете образование.";
	} else {
		$education = $_POST['education'];
		$count++;

	}
	if (!(isset($_POST['workout']))) {

	} else {
		$workout = $_POST['workout'];

	}
	//city validation
	if (empty($_POST['city'])) {
		echo "Моля изберете град.";
	} else {
		$city = $_POST['city'];
		$count++;
	}
	//gender validation
	if (!(isset($_POST['gender']))) {
		echo "Моля изберете пол";
	} else {
		$gender = $_POST['gender'];
		$count++;
	}
	//work status

	if (empty($_POST['work_status'])) {
		echo "Моля изберете работен статус";
	} else {
		$work_status = $_POST['work_status'];
		$count++;
	}
	
	

	//form validation.
	//frst name validation
	if (!empty($firstname)) {
		if (preg_match("/^[a-zA-Z\p{Cyrillic}]{2,16}$/iu", $firstname)) {
			$count++;

		} else {
			echo "Моля въведете валидно име.";
		}
	} else {
		echo "Моля въведете име.";
	}
	//last name validation
	if (!empty($lastname)) {
		if (preg_match("/^[a-zA-Z\p{Cyrillic}]{2,16}$/iu", $lastname)) {
			$count++;

		} else {
			echo "Моля въведете валидна фамилия.";
		}

	} else {
		echo "Моля въведете фамилия.";
	}

	//district validation
	if (empty($address)) {

		echo "Моля въведете адрес.";
	} else {
		$count++;
	}
	
	//telephone validation
	if (!empty($tel)) {
		if (preg_match("/^[0-9]{5,10}$/i", $tel)) {
			$count++;
		} else {
			echo "Моля въведете валиден телефонен номер.";
		}
	} else {
		echo "Моля въведете телефонен номер.";
	}
	//email validation
	echo $count;
	if (!empty($email)) {
		if (preg_match("/^[a-zA-Z]{1}[a-zA-Z0-9_.]+@[a-zA-Z-]+\.[a-zA-Z0-9-.]+$/", $email)) {
			$count++;
		} else {
			echo "Моля въведете валиден email.";
		}
	} else {
		echo "Моля въведете email.";
	}
	$check = "SELECT * FROM parenuser WHERE email = '$email'";
	$rs = mysqli_query($conn, $check) or die("Error in the consult.." . mysqli_error());
	$data = mysqli_fetch_array($rs, MYSQLI_NUM);
	if ($data[0] > 1) {
		header("Location: QQ.php");
	} else {
		$count++;
	}

	// f this pass validation
	if (!empty($password) && !empty($password2)) {
		if (preg_match("/^(?=.*[a-zA-Z])(?=.*[\d])(?=.*[\W_]).{5,16}$/", $password)) {
			if ($password == $password2) {
				$count++;
			}
		} else {
			echo "Моля въведете валидена парола.";
		}
	} else {
		echo "Моля въведете парола.";
	}
	//pid validation
	if (!empty($pid)) {
		if (preg_match("/^[0-9]{10}$/i", $pid)) {
			$count++;
		} else {
			echo "Моля въведете валидено ЕГН.";
		}
	} else {
		echo "Моля въведете ЕГН.";
	}

	//motivation validation

	if (!empty($motivation)) {
		if (preg_match("/^.{20,255}$/i", $motivation)) {
			$count++;
		} else {
			echo "Мотивационното писмо не може да съдържа повече от 255 и по малко от 20 символа.";
		}
	} else {
		echo "Моля попълнете полето за мотивация.";
	}
	echo $count;

	if ($count > 13) {
		if (move_uploaded_file($file_loc, $folder . $final_file)) {

		$sql = "INSERT INTO `parenuser` (pid, workout, work_status, gender, education, motivation, address, city, firstname, lastname, tel, pass, email, status, photo) VALUES ('$pid','$workout','$work_status','$gender','$education', '$motivation', '$address', '$city', '$firstname', '$lastname', '$tel', '$password', '$email', 'nanny','$final_file')";
		$result = mysqli_query($conn, $sql) or die("Error in the consult.." . mysqli_error($conn));

		if ($result) {
			header("Location: success.php");

		}
			}
		
	}

}
?>