<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>STATS - Admin Registration</title>
<header>
  <style type="text/css">
   body{
        background-color: #2c3338;
    }
.form{
    bottom: 40px;
}

    /* Add a black background color to the top navigation */
.topnav {
  background-color: #3b4148;
  /*overflow: hidden;*/
  position: relative;
  top: -10px;
  border-radius: 5px;
 
}

/* Style the links inside the navigation bar */
.topnav a {

  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  font-family: 'Poppins', san serif;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #2581DC;
  color: white;
}

/* Add a color to the active/current link */
.topnav a.active {
  background-color: #2581DC;
  color: white;
}
  </style>
  <div class="topnav">
  <a class="active" href="../">Home</a>
  <a href="../admin/">Login</a>
  <a href="../app/">Apply for attachment</a>
  
</div>
<br>

<br>
</header>
</head>
<body>
<?php
require('../config.ini.php');

if (isset($_REQUEST['username'])){
        
 $username = stripslashes($_REQUEST['username']);
 
        //escapes special characters in a string
 $username = mysqli_real_escape_string($con,$username); 
 $email = stripslashes($_REQUEST['email']);
 $email = mysqli_real_escape_string($con,$email);
 $password = stripslashes($_REQUEST['password']);
 $password = mysqli_real_escape_string($con,$password);
 $trn_date = date("Y-m-d H:i:s");

        $query = "INSERT into `login` (username, password, email, trn_date)
VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'>
<h3>You are registered successfully.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
        }
    }else{
?>
<div class="form">
<h1>Registration</h1>
<style type="text/css">

</style>

<form name="registration" action="" method="post">
<input type="text" name="username" placeholder="Username" required />
<input type="email" name="email" placeholder="Email" required />
<input type="password" name="password" placeholder="Password" required />
<input type="submit" name="submit" value="Register" />
</form>
</div>
<?php

 } ?>
</div>
</body>
</html>