<?php

  $username=$_POST['username'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $gender=$_POST['gender'];
  $ethnicity=$_POST['ethnicity'];
  $institution=$_POST['institution'];
  $course=$_POST['course'];
  
  $ethnicity=strtolower($ethnicity);
  $institution=strtolower($institution);
  $course=strtolower($course);
  $gender=strtolower($gender);

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

  $sql = "INSERT INTO appform (username, email, phone, Gender, Ethnicity, Institution, Course) VALUES ('$username', '$email', '$phone','$gender','$ethnicity', '$institution', '$course')";
  if ($conn->query($sql) === TRUE) {
    echo "Thanks for your input will look into it and get back to you if necessary as soon as possible.";
    header("location: index.php");
  } else {
    echo "Error: " . $sql ."<br>" . $conn->error;
  }

  $conn -> close();
?>