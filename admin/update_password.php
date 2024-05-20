<?php 
	include "connection.php";
	include "navbar.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Change Password</title>

	<style type="text/css">
		body
		{
			height: 650px;
			background: rgb(65,82,100);
			background: radial-gradient(circle, rgba(65,82,100,1) 0%, rgba(51,21,19,1) 35%, rgba(173,0,2,1) 86%);
		}
		.wrapper
		{
			width: 400px;
			height: 450px;
			margin:100px auto;
			background-color: black;
			opacity: .8;
			color: white;
			padding: 27px 15px;
		}
		.form-control
		{
			width: 300px;
		}
	</style>
</head>
<body>
	<div class="wrapper">
		<div style="text-align: center;">
			<h1 style="text-align: center; font-size: 35px;font-family: Lucida Console;">Change Your Password</h1>
		</div>
		<div style="padding-left: 30px; ">
		<form action="" method="post" >
			<p>Username:</p>
			<input type="text" name="username" class="form-control" placeholder="Username" required=""><br>
			<p>Email:</p>
			<input type="text" name="email" class="form-control" placeholder="Email" required=""><br>
			<p>New password:</p>
			<input type="text" name="password" class="form-control" placeholder="New Password" required=""><br>
			<button class="btn btn-default" type="submit" name="submit" >Update</button>
		</form>

	</div>
	
	<?php

		if(isset($_POST['submit']))
		{
			if(mysqli_query($db,"UPDATE admin SET password='$_POST[password]' WHERE username='$_POST[username]'
			AND email='$_POST[email]' ;"))
			{
				?>
					<script type="text/javascript">
                alert("The Password Updated Successfully.");
              </script> 

				<?php
			}
			
		}
	?></div>
</body>
</html>