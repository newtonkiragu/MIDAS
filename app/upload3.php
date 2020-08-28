<?php
if (isset($_POST['submit'])) {
//	upli stands for upload insurance
	$uplI = $_FILES['file'];
	$uplIName = $_FILES['file']['name'];
	$uplITmpName = $_FILES['file']['tmp_name'];
	$uplISize = $_FILES['file']['size'];
	$uplIError = $_FILES['file']['error'];
	$uplIType = $_FILES['file']['type'];

	$uplIExt = explode('.', $uplIName);
	$uplIActualExt = strtolower(end($uplIExt));

	$allowed = array('doc', 'docx', 'pdf' , 'jpeg', 'png', 'jpg');

	if (in_array($uplIActualExt, $allowed)) {
		if($uplIError === 0){
			if($uplISize < 1500000){
				$uplINameNew = uniqid('',true).".".$uplIActualExt;
				$uplIDestination = 'upload3/'.$uplINameNew;
				move_uploaded_file(	$uplITmpName, $uplIDestination);
				header('location: htpp://midas/app');
			}else{
				echo "your file is to big!";
			}
		}else {
			echo "there was an error uploading your file";
		}
	}else {
		echo "you cannot upload files of this type";
	}
} 

  $a = $uplINameNew;
  
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "iliad" ;
//create connection
  $conn = new mysqli("$servername", "$username", "$password", "$dbname");
//check connection
  if ($conn->connect_error) {
    die("connection failed: " . $conn->connect_error);
  }
  //echo "connected successfully";

  $sql = "INSERT INTO appform (upload3) VALUES ('$a')";
  if ($conn->query($sql) === TRUE) {
    //echo "Thanks for your input will look into it and get back to you if necessary as soon as possible.";
    //header("location: index.php");
  } else {
   // echo "Error: " . $sql ."<br>" . $conn->error;
  }

  $conn -> close();
?>

