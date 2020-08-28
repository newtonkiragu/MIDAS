<?php
if (isset($_POST['submit'])) {
	$file = $_FILES['file'];
	$fileName = $_FILES['file']['name'];
	$fileTmpName = $_FILES['file']['tmp_name'];
	$fileSize = $_FILES['file']['size'];
	$fileError = $_FILES['file']['error'];
	$fileType = $_FILES['file']['type'];

	$fileExt = explode('.', $fileName);
	$fileActualExt = strtolower(end($fileExt));

	$allowed = array('doc', 'docx', 'pdf' , 'jpeg', 'png', 'jpg');

	if (in_array($fileActualExt, $allowed)) {
		if($fileError === 0){
			if($fileSize < 1500000){
				$fileNameNew = uniqid('',true).".".$fileActualExt;
				$fileDestination = 'upload3/'.$fileNameNew;
				move_uploaded_file(	$fileTmpName, $fileDestination);
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

  $a = $fileNameNew;
  
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

