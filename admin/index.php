<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Online Library
	</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<style type="text/css">
	nav
	{
		float: right;
		word-spacing: 30px;
		padding: 20px;
	}
	nav li 
	{
		display: inline-block;
		line-height: 80px;
	}
</style>
</head>

<body>
	<div class="wrapper">
		<header>

		<?php
		if(isset($_SESSION['login_user']))
		{
			?>
				<nav>
					<ul>
						<li><a href="index.php">HOME</a></li>
						<li><a href="books.php">BOOKS</a></li>
						<li><a href="logout.php">LOGOUT</a></li>
						<li><a href="feedback.php">FEEDBACK</a></li>
					</ul>
				</nav>
			<?php
		}
		else
		{?>
			<nav>
				<ul>
					<li><a href="index.php">HOME</a></li>
					<li><a href="books.php">BOOKS</a></li>
					<li><a href="admin_login.php">LOGIN</a></li>
					<li><a href="registration.php">SIGN-UP</a></li>
					<li><a href="feedback.php">FEEDBACK</a></li>
				</ul>
			</nav>


		<?php
		}

		?>

		<div class="logo">
			<img class="logo-img" src="images/l.png">
		</div>
	
		</header>
		<section>
		<div class="sec_img">
			<br>

			<div class="box">
				<br><br><br><br><br><br>
				<h1 style="text-align: center; font-size: 50px; font-family: calibri;">Welcome to MU library</h1><br>
			</div>


		</div>
		</section>
		
	</div>
	<?php
		include "footer.php";
	?>
</body>
</html>