<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
?>
			<header>
			<link rel="stylesheet" href="assets/css/main_style.css">
				<div class="container">
					<a href="<?php if (isset($_SESSION['status']) && ($_SESSION['status']=='admin')) {
					echo "home.php";
					} else if (isset($_SESSION['status']) && ($_SESSION['status']=='nanny') || (isset($_SESSION['status']) && ($_SESSION['status']=='user'))) { echo "index.php"; } else {echo "index.php";} ?>"> <img id="logo" src="assets/img/Logo.png" alt="Logo"></a>
					<?php if (isset($_SESSION['status']) && ($_SESSION['status'] == "nanny" || $_SESSION['status'] == "user" || $_SESSION['status'] == "admin")) {?>
					<p id='welcomeNote'>Здравей <?php echo ($_SESSION["name"]) . " " . ($_SESSION["lastname"])?>!</p>
					<?php }
?>
				</div>
			</div>


				<div class="container">
					<div class="nav-bar">
						<ul class="nav">
							<?php if (isset($_SESSION['status']) && ( $_SESSION['status'] == "admin")) {?>
								<li><a href="home.php">Начало</a></li><?php
}else if(isset($_SESSION['status']) && ($_SESSION['status'] == "nanny" || $_SESSION['status'] == "user" )){?>
	<li><a href="index.php">Начало</a><?php
} else {?><li><a href="index.php">Начало</a></li><?php }
?>




								<li><?php if (isset($_SESSION['status']) && ($_SESSION['status'] == "nanny" || $_SESSION['status'] == "user")) {
	if ($_SESSION['status'] == "nanny") {?><a  href='nanny_profil.php' >Профил</a><?php
} else if ($_SESSION['status'] == "user") {?><a  href='user.php' >Профил</a><?php
}
} else if (isset($_SESSION['status']) && ($_SESSION['status'] == "admin")) {?> <a  href='search.php'> Nannies</a><?php
} else {?><a  href='apply_for_nanny.php'>Кандидатствай за Nanny</a><?php }
?></li>

<?php if (isset($_SESSION['status']) && ($_SESSION['status'] == "nanny" || $_SESSION['status'] == "user")) { ?><li><a  href='home_page.php'>Съобщения</a></li><?php

 }

?>


								<li><?php if (isset($_SESSION['status']) && ($_SESSION['status'] == "nanny")) {?><a  href='nanny_calendar.php'>Календар</a><?php

} else if (isset($_SESSION['status']) && ($_SESSION['status'] == "admin")) {?> <a  href='search_one.php'> Потребители</a><?php
} else {?><a href="search.php">Търси Nanny</a><?php }

?></li>

							

							<?php if (isset($_SESSION['status']) && ($_SESSION['status'] == "admin")) {?>
							<?php
} else {?>
							<li><a href="help.php">Помощ</a></li>
							<li><a href="about_us.php">За нас</a></li>
							<?php }
?>
						<?php if (isset($_SESSION['status']) && ($_SESSION['status'] == "admin")) {
	?>
							<li><a href="nanny_reg.php">Регистрирай Nanny</a></li><?php

}
?>
							<?php if (isset($_SESSION['status']) && ($_SESSION['status'] == "nanny" || $_SESSION['status'] == "user" || $_SESSION['status'] == "admin")) {?>
								<?php
} else {?><li><a href="registration.php">Регистрирай се</a></li><?php }
?>


								<li role="menuitem" class="menu"><?php if (isset($_SESSION["name"])) {?> <a  href='logout.php' value="izhof" >Изход</a><?php
} else {?><a  href='login.php' value="Вход" >Вход</a><?php }
?></li>


					</ul>

			</div>
		</header>