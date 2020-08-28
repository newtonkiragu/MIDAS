<?php

  $a=$_POST['username'];
  $b=$_POST['email'];
  $c=$_POST['phone'];
  $d=$_POST['Gender'];
  $e=$_POST['Ethnicity'];
  $f=$_POST['Institution'];
  $g=$_POST['Course'];
  
  $e=strtolower($d);
  $f=strtolower($e);
  $g=strtolower($f);
  $h=strtolower($g);

  $servername = "localhost";
  $username = "root";
  $password = "root";
  $dbname = "iliad" ;
//create connection
  $conn = new mysqli("$servername", "$username", "$password", "$dbname");
//check connection
  if ($conn->connect_error) {
    die("connection failed: " . $conn->connect_error);
  }
  echo "connected successfully";

  $sql = "INSERT INTO appform (username, email, phone, Gender, Ethnicity, Institution, Course) VALUES ('$a', '$b', '$c','$d','$e', '$f', '$g')";
  if ($conn->query($sql) === TRUE) {
    echo "Thanks for your input will look into it and get back to you if necessary as soon as possible.";
    header("location: index.php");
  } else {
    echo "Error: " . $sql ."<br>" . $conn->error;
  }

  $conn -> close();
?>