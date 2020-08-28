<?php
if (isset($_POST['submit'])) {
//	uplID stands for upload ID
	$uplID = $_FILES['file'];
	$uplIDName = $_FILES['file']['name'];
	$uplIDTmpName = $_FILES['file']['tmp_name'];
	$uplIDSize = $_FILES['file']['size'];
	$uplIDError = $_FILES['file']['error'];
	$uplIDType = $_FILES['file']['type'];

	$uplIDExt = explode('.', $uplIDName);
	$uplIDActualExt = strtolower(end($uplIDExt));

	$allowed = array('doc' ,'docx','pdf' , 'jpeg', 'png', 'jpg');

	if (in_array($uplIDActualExt, $allowed)) {
		if($uplIDError === 0){
			if($uplIDSize < 1500000){
				$uplIDNameNew = uniqid('',true).".".$uplIDActualExt;
				$uplIDDestination = 'upload1/'.$uplIDNameNew;
				move_uploaded_file(	$uplIDTmpName, $uplIDDestination);
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

  $a = $uplIDNameNew;
  
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

  $sql = "INSERT INTO appform (upload1) VALUES ('$a')";
  if ($conn->query($sql) === TRUE) {
    //echo "Thanks for your input will look into it and get back to you if necessary as soon as possible.";
    //header("location: index.php");
  } else {
   // echo "Error: " . $sql ."<br>" . $conn->error;
  }

  $conn -> close();
?>

