<div class="header">
	<div class="container">
		<h1 class="header-heading">
			<a href="index.php"><img id="logo" src="assets/img/Logo.png" alt="Logo"></a>
	</div>
</div>
<link rel="stylesheet" href="assets/css/main_style.css">
<div class="nav-bar">
	<div class="container">
		<ul class="nav">
			<?php 
			error_reporting(E_ALL);
			ini_set('display_errors', 1);
			session_start();

			?>
			<li><a href="index.php">Начало</a></li>
		    <li><?php if(isset($_SESSION['status']) && ($_SESSION['status']=="nanny" || $_SESSION['status']=="user")){?><a  href='loginout.php' value="izhof" >Профил</a><?php
		} else {?><a  href='login.php'  >Кандидатствай за Nanny</a><?php } ?></li>
		    <li><?php if(isset($_SESSION['status']) && ($_SESSION['status']=="nanny" )){?><a  href='#'  >Календар</a><?php
		} else {?><a href="#">Търси Nanny</a><?php } ?></li>
		
		<?php if(isset($_SESSION['status']) && ($_SESSION['status']=="nanny" )){?><li><a  href='loginout.php' value="izhof" >Съобщения</a></li><?php
		} else {?><?php } ?>
			<li><li><a href="#">Помощ</a></li>
			<li><a href="#">За нас</a></li>
		
			<li><?php if(isset($_SESSION['status']) && ($_SESSION['status']=="nanny" || $_SESSION['status']=="user")){?> <?php
		} else {?><li><a href="registration.php">Регистрираи се</a></li><?php } ?></li>
			
			
			<li role="menuitem" class="menu"><?php if(isset($_SESSION["name"])) {?> <a  href='logout.php' value="izhof" >Изход</a><?php
		} else {?><a  href='login.php' value="Вход" >Вход</a><?php } ?></li>

			<li><a href="home_page.php">Home</a></li>
			<li><a href="nanny_profil.php">Nanny</a></li>
			<li><a href="apply_for_nanny.php">Apply for Nanny</a></li>
			<li><a href="calendar.php">Calendar</a></li>
			<li><a href="nanny_search.php">Nanny search</a></li>
			<li><a href="messages.php">Messages</a></li>
			<li><a href="help.php">Help</a></li>
			<li><a href="about_us.php">About US</a></li>
			<li><a href="profile.php">Profil</a></li>
			
		</ul>
	</div>
</div>