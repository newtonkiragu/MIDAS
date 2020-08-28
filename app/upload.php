<?php
if (isset($_POST['submit'])) {
//	apl stands for application letter
	$apl = $_FILES['file'];
	$aplName = $_FILES['file']['name'];
	$aplTmpName = $_FILES['file']['tmp_name'];
	$aplSize = $_FILES['file']['size'];
	$aplError = $_FILES['file']['error'];
	$aplType = $_FILES['file']['type'];

	$aplExt = explode('.', $aplName);
	$aplActualExt = strtolower(end($aplExt));

	$allowed = array('doc', 'docx', 'pdf', 'jpeg', 'png', 'jpg');

	if (in_array($aplActualExt, $allowed)) {
		if($aplError === 0){
			if($aplSize < 1500000){
				$aplNameNew = uniqid('',true).".".$aplActualExt;
				$aplDestination = 'upload/'.$aplNameNew;
				move_uploaded_file(	$aplTmpName, $aplDestination);
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

  $a = $aplNameNew;
  
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

  $sql = "INSERT INTO appform (upload) VALUES ('$a')";
  if ($conn->query($sql) === TRUE) {
    //echo "Thanks for your input will look into it and get back to you if necessary as soon as possible.";
    //header("location: index.php");
  } else {
   // echo "Error: " . $sql ."<br>" . $conn->error;
  }

  $conn -> close();
?>

