<?php
if (isset($_POST['submit'])) {
//	uplLFI stands for upload letter from institute
	$uplLFI = $_FILES['file'];
	$uplLFIName = $_FILES['file']['name'];
	$uplLFITmpName = $_FILES['file']['tmp_name'];
	$uplLFISize = $_FILES['file']['size'];
	$uplLFIError = $_FILES['file']['error'];
	$uplLFIType = $_FILES['file']['type'];

	$uplLFIExt = explode('.', $uplLFIName);
	$uplLFIActualExt = strtolower(end($uplLFIExt));

	$allowed = array('doc', 'docx' , 'pdf', 'jpeg', 'png', 'jpg');

	if (in_array($uplLFIActualExt, $allowed)) {
		if($uplLFIError === 0){
			if($uplLFISize < 1500000){
				$uplLFINameNew = uniqid('',true).".".$uplLFIActualExt;
				$uplLFIDestination = 'upload2/'.$uplLFINameNew;
				move_uploaded_file(	$uplLFITmpName, $uplLFIDestination);
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

  $a = $uplLFINameNew;
  
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

  $sql = "INSERT INTO appform (upload2) VALUES ('$a')";
  if ($conn->query($sql) === TRUE) {
    //echo "Thanks for your input will look into it and get back to you if necessary as soon as possible.";
    //header("location: index.php");
  } else {
   // echo "Error: " . $sql ."<br>" . $conn->error;
  }

  $conn -> close();
?>

