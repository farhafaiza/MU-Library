<?php
  include "connection.php";
  include "navbar.php";
?>
<!DOCTYPE html>
<html>
<head>
  <title>
    Student Registration
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
 <!-- <header style="height: 101px;">
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
    <div class="reg_img">
      <br>
    <div class="box2">
        <h1 style="text-align: center; font-size: 35px;font-family: Lucida Console;">User Registration Form</h1><br>
        <form name="Registration" action="" method="post">
          <div class="login">
            <p>First name:</p>
            <input class="form-control" type="text" name="first" placeholder="First Name" required=""> <br>
            <p>Last name:</p>
            <input class="form-control" type="text" name="last" placeholder="Last Name" required=""> <br>
            <p>Username:</p>
            <input class="form-control" type="text" name="username" placeholder="Username" required=""> <br>
            <p>Password:</p>
            <input class="form-control" type="password" name="password" placeholder="Password" required=""> <br>
            <p>ID:</p>
            <input class="form-control" type="text" name="roll" placeholder="ID" required=""><br>
            <p>Email:</p>
            <input class="form-control" type="text" name="email" placeholder="Email" required=""><br>
            <p>Phone number:</p>
            <input class="form-control" type="text" name="contact" placeholder="Phone No" required=""><br><br>

            <input class="btn btn-default" type="submit" name="submit" value="Sign Up" style="color: black; width: 70px; height: 30px"></div>
        </form>
        
    </div>
    
  </section>

<?php

      if(isset($_POST['submit']))
      {
        $count=0;

        $sql="SELECT username from `student`";
        $res=mysqli_query($db,$sql);

        while($row=mysqli_fetch_assoc($res))
        {
          if($row['username']==$_POST['username'])
          {
            $count=$count+1;
          }
        }
        if($count==0)
        {
          mysqli_query($db,"INSERT INTO `STUDENT` VALUES('$_POST[first]', '$_POST[last]', '$_POST[username]', '$_POST[password]', '$_POST[roll]', '$_POST[email]', '$_POST[contact]', 'p.jpg');");
        ?>
          <script type="text/javascript">
           alert("Registration successful");
          </script>
        <?php
        }
        else
        {

          ?>
            <script type="text/javascript">
              alert("The username already exist.");
            </script>
          <?php

        }

      }

    ?>
</body>