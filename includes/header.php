<?php 
			error_reporting(E_ALL);
			ini_set('display_errors', 1);
			session_start();

		?>
			<header>
			<link rel="stylesheet" href="assets/css/main_style.css">
				<div class="container">
					<a href="index.php"><img id="logo" src="assets/img/Logo.png" alt="Logo"></a>
					<?php if(isset($_SESSION['status']) && ($_SESSION['status']=="nanny" || $_SESSION['status']=="user" || $_SESSION['status']=="admin")){ ?>
					<p id='welcomeNote'>Здравей <?php echo ($_SESSION["name"])." ".($_SESSION["lastname"]) ?>!</p>
					<?php } ?>
				</div>
			</div>
			
			
				<div class="container">
					<div class="nav-bar">
						<ul class="nav">
							<?php if(isset($_SESSION['status']) && ($_SESSION['status']=="nanny" || $_SESSION['status']=="user" || $_SESSION['status']=="admin")){?> 
								<li><a href="home.php">Начало</a></li><?php
							} else {?><li><a href="index.php">Начало</a></li><?php } ?>
							
								<li><?php if(isset($_SESSION['status']) && ($_SESSION['status']=="nanny" || $_SESSION['status']=="user")){?><a  href='profile.php' value="izhof" >Профил</a><?php
								} else if (isset($_SESSION['status']) && ($_SESSION['status']=="admin")) {?> <a  href='nannies.php'> Nannies</a><?php
							} else {?><a  href='apply_for_nanny.php'>Кандидатствай за Nanny</a><?php } ?></li>

								<li><?php if(isset($_SESSION['status']) && ($_SESSION['status']=="nanny" )){?><a  href='calendar.php'>Календар</a><?php
							} else if (isset($_SESSION['status']) && ($_SESSION['status']=="admin")) {?> <a  href='users.php'> Потребители</a><?php
							} else {?><a href="nanny_search.php">Търси Nanny</a><?php } ?></li>
							
							<?php if(isset($_SESSION['status']) && ($_SESSION['status']=="nanny" )){?><li><a  href='messages.php' value="izhof" >Съобщения</a></li><?php } ?>

							<?php if(isset($_SESSION['status']) && ($_SESSION['status']=="admin")){?>
							<li><a href="pages.php">Преглед на всички страници</a></li><?php
							} else { ?>
							<li><a href="help.php">Помощ</a></li>
							<li><a href="about_us.php">За нас</a></li>
							<?php } ?>
						<?php if(isset($_SESSION['status']) && ($_SESSION['status']=="admin")){?>
							<li><a href="nanny_reg.php">Регистрирай Nanny</a></li><?php
						} ?>

						
						
								<li role="menuitem" class="menu"><?php if(isset($_SESSION["name"])) {?> <a  href='logout.php' value="izhof" >Изход</a><?php
							} else {?><a  href='login.php' value="Вход" >Вход</a><?php } ?></li>

					
					</ul>
				
			</div>
		</header>