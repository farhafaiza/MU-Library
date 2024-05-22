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
  .reg-section {
    height: 100%;
    width: 100%;
    background-color: dimgrey;
    margin-top: -20px;
},
.reg_img {
   margin-bottom: 20px;
}
  
</style>
</head>
<body>


  <section class="reg-section">
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
            <input class="form-control" type="email" name="email" placeholder="Email" required=""><br>
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