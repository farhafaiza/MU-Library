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
		<nav>
			<ul>
				<li><a href="index.php">HOME</a></li>
				<li><a href="books.php">BOOKS</a></li>
				<li><a href="student_login.php">LOGIN</a></li>
				<li><a href="registration.php">SIGN-UP</a></li>
				<li><a href="">FEEDBACK</a></li>
			</ul>
		</nav>
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

<!--			<div class="w3-content w3-section" style="width: 500px">
				<img class="mySlides w3-animate-left" src="images/2.jpg" style="width: 100%">
				<img class="mySlides w3-animate-right" src="images/21.jpg" style="width: 100%">
				<img class="mySlides w3-animate-left" src="images/H.jpg" style="width: 100%">
				<img class="mySlides w3-animate-right" src="images/1.jpg" style="width: 100%">
			</div>

			<script type="text/javascript">
				var a=0;
				carousel();

				function carousel()
				{
					var i;
					var x= document.getElementsByClassName("mySlides");

					for(i=0; i<x.length; i++)
					{
						x[i].style.display="none";
					}

					a++;
					if(a>x.length) {a=1}
						x[a-1].style.display = "block";
						setTimeout(carousel, 2000);

				}
			</script>-->
		</div>
		</section>
		

	</div>
</body>
</html>