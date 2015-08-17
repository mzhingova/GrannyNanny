<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Two-column full width responsive layout</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="Description" lang="en" content="ADD SITE DESCRIPTION">
		<meta name="author" content="ADD AUTHOR INFORMATION">
		<meta name="robots" content="index, follow">

		<!-- icons -->
		<link rel="shortcut icon" href="favicon.ico">

		<!-- Override CSS file - add your own CSS rules -->
		<link rel="stylesheet" href="assets\css\login_style.css">
	</head>
	<body>
		<div class="header">
			<div class="container">
				<h1 class="header-heading">GrannyNanny</h1>
			</div>
		</div>
		<div class="nav-bar">
			<div class="container">
				<ul class="nav">
					<li><a href="#">Granny profile</a></li>
					<li><a href="#">Search</a></li>
					<li><a href="#"></a></li>
					<li><a href="nanny_reg.php">Nanny registration</a></li>
				</ul>
			</div>
		</div>
		<div class="content">
			<div class="container">
				<div class="main">
					<h1>News</h1>
					<hr>

					<!-- Heading levels -->
					<h1>Heading level 1</h1>
					<h2>Heading level 2</h2>
					<h3>Heading level 3</h3>
					<h4>Heading level 4</h4>
					<h5>Heading level 5</h5>
					<h6>Heading level 6</h6>
					<hr>

					<!-- Paragraphs -->
					<h3>Paragraphs</h3>
					<p>Ut wisi enim ad minim veniam, <a href="#">quis nostrud exerci tation ullamcorper</a> suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
					<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
					<hr>

					<!-- Responsive images -->
					<h3>Responsive images</h3>
					<p>For images to be responsive (so that they will rescale to suit the width of the parent, use the <code>.img-responsive</code> class.</p>
					<p><img class="img-responsive" src="http://placehold.it/800x350" alt=""></p>

					<!-- Lists -->
					<h3>Unordered list</h3>
					<p>Unordered lists are used to markup lists where list items do not require numbering.</p>
					<ul>
						<li>Ut wisi enim ad minim veniam</li>
						<li>Quis nostrud exerci tation</li>
						<li>Lamcorper suscipit lobortis nis</li>
						<li>Ut aliquip ex ea commodo consequat</li>
						<li>Duis autem vel eum iriure dolor</li>
					</ul>
					<hr>

					<h3>Ordered list</h3>
					<p>Ordered lists are used to markup lists where list items require numbering.</p>
					<ol>
						<li>Hendrerit in vulputate velit esse</li>
						<li>Olestie consequat</li>
						<li>Vel illum dolore eu feugiat</li>
						<li>Nulla facilisis at vero eros</li>
						<li>Accumsan et iusto odio</li>
					</ol>
					<hr>

					<h3>Unstyled list</h3>
					<p>You can make the list unstyled using the <code>list-unstyled</code> class.</p>
					<ul class="list-unstyled">
						<li>Ut wisi enim ad minim veniam</li>
						<li>Quis nostrud exerci tation</li>
						<li>Lamcorper suscipit lobortis nis</li>
						<li>Ut aliquip ex ea commodo consequat</li>
						<li>Duis autem vel eum iriure dolor</li>
					</ul>
					<hr>

					<h3>Inline list</h3>
					<p>You can make the list display inline using the <code>list-inline</code> class.</p>
					<ul class="list-inline">
						<li>One</li>
						<li>Two</li>
						<li>Three</li>
						<li>Four</li>
					</ul>
					<hr>

					<!-- Blockquotes -->
					<h3>Blockquotes</h3>
					<p>The blockquote element is used to markup long quotations. Ideally, content inside should be wrapped in paragraph elements.</p>
					<blockquote>
						<p>The real names of our people were destroyed during slavery. The last name of my forefathers was taken from them when they were brought to America and made slaves, and then the name of the slave master was given, which we refuse, we reject that name today and refuse it. I never acknowledge it whatsoever.</p>
						<footer><a href="http://en.wikipedia.org/wiki/Malcolm_X">Malcolm X</a></footer>
					</blockquote>
					<hr>

					<h3>Buttons</h3>
					<p>You can apply the <code>btn</code> class to any element that requires a button style.</p>
					<p><a href="#" class="btn">Submit</a></p>
					<hr>

					<!-- Tables -->
					<h3>Tables</h3>
					<p>Tables should be given the class of <code>table</code>.</p>
					<table class="table table-striped">
						<thead>
							<tr>
								<th>#</th>
								<th>First Name</th>
								<th>Last Name</th>
								<th>Username</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row">1</th>
								<td>Mark</td>
								<td>Otto</td>
								<td>@mdo</td>
							</tr>
							<tr>
								<th scope="row">2</th>
								<td>Jacob</td>
								<td>Thornton</td>
								<td>@fat</td>
							</tr>
							<tr>
								<th scope="row">3</th>
								<td>Larry</td>
								<td>the Bird</td>
								<td>@twitter</td>
							</tr>
						</tbody>
					</table>
				</div>
				    <h1>Вход </h1>
        <form action='login_authentication.php' method='post'>
            <font color="black">
                <h3>Имейл адрес: </h3><input type='text' name='email' style="width: 25%; height: 10%;" /><br><br>
                <h3>Парола: </h3><input type='password' name='pass' style="width: 25%; height: 10%;" /><br><br>
                <input type='submit' style="width: 15%; height: 30px;" name='submit' value='Вход'/><br><br>
                <a href="forgotten_password.php">Забравена Парола</a><br><br>
                Нямате акаунт?<a href="registration.php" style="color: black">
                <span class="glyphicon glyphicon-user"> Регистрирайте се! </span></a>
            </font>
        </form>
			</div>
		</div>
		<div class="footer">
			<div class="container">
			</div>
		</div>
	</body>
</html>