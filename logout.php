
<?php
include 'includes/header.php';

session_destroy();
//unset($_SESSION['username']);
header('Location: index.php');
exit();
?>
<div class="container">
				<?php include 'includes/footer.php';?>
			</div>