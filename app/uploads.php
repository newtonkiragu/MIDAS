<?php
if (isset($_POST['submit'])) {
//	uplGC stands for upload good conduct
	$uplGC = $_FILES['file'];
	$uplGCName = $_FILES['file']['name'];
	$uplGCTmpName = $_FILES['file']['tmp_name'];
	$uplGCSize = $_FILES['file']['size'];
	$uplGCError = $_FILES['file']['error'];
	$uplGCType = $_FILES['file']['type'];

	$uplGCExt = explode('.', $uplGCName);
	$uplGCActualExt = strtolower(end($uplGCExt));
	
	$allowed = array('docx', 'doc','pdf' , 'jpeg', 'png', 'jpg');

	if (in_array($uplGCActualExt, $allowed)) {
		if($uplGCError === 0){
			if($uplGCSize < 1500000){
				$uplGCNameNew = uniqid('',true).".".$uplGCActualExt;
				$uplGCDestination = 'uploads/'.$uplGCNameNew;
				move_uploaded_file(	$uplGCTmpName, $uplGCDestination);
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
  $a = $uplGCNameNew;
  
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

  $sql = "INSERT INTO appform (uploads) VALUES ('$a')";
  if ($conn->query($sql) === TRUE) {
    //echo "Thanks for your input will look into it and get back to you if necessary as soon as possible.";
    //header("location: index.php");
  } else {
   // echo "Error: " . $sql ."<br>" . $conn->error;
  }

  $conn -> close();
?>



