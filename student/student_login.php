<?php
  include "connection.php";
  include "navbar.php";
?>
<!DOCTYPE html>
<html>
<head>
  <title>
    Student Login
  </title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style type="text/css">
  section{
    margin-top: -20px;
  }
</style>
</head>
<body>

     <?php

    if(isset($_POST['submit']))
    {
      $count=0;
      $res=mysqli_query($db,"SELECT * FROM `student` WHERE username='$_POST[username]' && password='$_POST[password]';");
      
      //$row= mysqli_fetch_assoc($res);
      $count=mysqli_num_rows($res);

      if($count==0)
      {
        ?>
            
           <!-- <script type="text/javascript">
              alert("The username and password doesn't match.");
            </script> -->
        
          <div class="alert alert-danger" style="width: 600px; margin-left: 370px; background-color: #de1313; color: white">
            <span class="glyphicon glyphicon-exclamation-sign"></span><strong> Incorrect Username and Password.</strong>
          </div>  
        <?php
      }
      else
      {
        $_SESSION['login_user'] = $_POST['username'];
        //$_SESSION['pic']= $row['pic'];

        ?>
          <script type="text/javascript">
            window.location="index.php"
          </script>
        <?php
      }
    }

  ?>

<!--  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand active">MU Library</a>
      </div>
      <ul class="nav navbar-nav">
        <li><a href="index.php">HOME</a></li>
        <li><a href="books.php">BOOKS</a></li>
        <li><a href="logout.php">LOGOUT</a></li>
        <li><a href="feedback.php">FEEDBACK</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="student_login.php"><span class="glyphicon glyphicon-log-in"> LOGIN</span></a></li>
        <li><a href="student_login.php"><span class="glyphicon glyphicon-log-out"> LOGOUT</span></a></li>
        <li><a href="registration.php"><span class="glyphicon glyphicon-user"> SIGNUP</span></a></li>
      </ul>
    </div>
    
  </nav>-->
  <!--<header style="height: 102px;">
    <div class="logo">
      <img src="images/l.png">
    </div>

        <nav>
          <ul>
            <li><a href="index.html">HOME</a></li>
            <li><a href="books.php">BOOKS</a></li>
            <li><a href="logout.php">LOGOUT</a></li>
            <li><a href="feedback.php">FEEDBACK</a></li>
          </ul>
        </nav>

            <nav>
              <ul>
                <li><a href="index.html">HOME</a></li>
                <li><a href="books.php">BOOKS</a></li>
                <li><a href="student_login.html">LOGIN</a></li>
                <li><a href="registration.html">SIGN-UP</a></li>
                <li><a href="feedback.php">FEEDBACK</a></li>
              </ul>
            </nav>
  </header>-->
  <section>
    <div class="log_img">
      <br>
    <div class="box1">
        <h1 style="text-align: center; font-size: 35px;font-family: Lucida Console;">User Login Form</h1>
        <form name="login" action="" method="post">
          <br><br>
          <div class="login">
            <p>Username:</p>
            <input class="form-control" type="text" name="username" placeholder="Username" required="">
            <p>Password:</p>
            <input class="form-control" type="password" name="password" placeholder="Password" required=""><br>
            <input class="btn btn-default" type="submit" name="submit" value="Login" style="color: black; width: 70px; height: 30px"></div>

        <p style="color: white; padding-left: 15px;">
          <br><br>
          <a style="color:yellow; text-decoration: none;" href="update_password.php">Forgot password?</a> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  
          New to this website?<a style="color: yellow; text-decoration: none;" href="registration.php">Sign Up here</a>
        </p>
      </form>
  </section>

</body>



