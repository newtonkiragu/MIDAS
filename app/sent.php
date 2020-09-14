<?php
require("config.ini.php");
  $usename=$_POST['usename'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $gender=$_POST['gender'];
  $ethnicity=$_POST['ethnicity'];
  $institution=$_POST['institution'];
  $course=$_POST['course'];
  
/*username=strtoupper($usename);
email=strotupper($email);
*/
$gender=strtolower($gender);
$ethnicity=strtolower($ethnicity);
$institution=strtolower($institution);
$course=strtolower($course);
 

//  if (isset($_POST['submit'])) {
    //	apl stands for application letter
    $apl = $_FILES['apl'];
    $aplName = $_FILES['apl']['name'];
    $aplTmpName = $_FILES['apl']['tmp_name'];
    $aplSize = $_FILES['apl']['size'];
    $aplError = $_FILES['apl']['error'];
    $aplType = $_FILES['apl']['type'];

    $aplExt = explode('.', $aplName);
    $aplActualExt = strtolower(end($aplExt));

    $allowed = array('doc', 'docx', 'pdf', 'jpeg', 'png', 'jpg');

    if (in_array($aplActualExt, $allowed)) {
        if($aplError === 0){
            if($aplSize < 1500000){
                $aplNameNew = uniqid('',true).".".$aplActualExt;
                $aplDestination = '../media/application-letter/'.$aplNameNew;
                move_uploaded_file(	$aplTmpName, $aplDestination);
                header('location: htpp://midas/app');
                $a=$aplDestination;
            }else{
                echo "your file is to big!";
            }
        }else {
            echo "there was an error uploading your file";
        }
    }else {
        echo "you cannot upload files of this type";
    }


      //	uplID stands for Upload ID
      $uplID = $_FILES['uplID'];
      $uplIDName = $_FILES['uplID']['name'];
      $uplIDTmpName = $_FILES['uplID']['tmp_name'];
      $uplIDSize = $_FILES['uplID']['size'];
      $uplIDError = $_FILES['uplID']['error'];
      $uplIDType = $_FILES['uplID']['type'];

      $uplIDExt = explode('.', $uplIDName);
      $uplIDActualExt = strtolower(end($uplIDExt));


      if (in_array($uplIDActualExt, $allowed)) {
          if($uplIDError === 0){
              if($uplIDSize < 1500000){
                  $uplIDNameNew = uniqid('',true).".".$uplIDActualExt;
                  $uplIDDestination = '../media/uploaded-id/'.$uplIDNameNew;
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


      //	uplLFI stands for upload letter from institute
      $uplLFI = $_FILES['uplLFI'];
      $uplLFIName = $_FILES['uplLFI']['name'];
      $uplLFITmpName = $_FILES['uplLFI']['tmp_name'];
      $uplLFISize = $_FILES['uplLFI']['size'];
      $uplLFIError = $_FILES['uplLFI']['error'];
      $uplLFIType = $_FILES['uplLFI']['type'];

      $uplLFIExt = explode('.', $uplLFIName);
      $uplLFIActualExt = strtolower(end($uplLFIExt));


      if (in_array($uplLFIActualExt, $allowed)) {
          if($uplLFIError === 0){
              if($uplLFISize < 1500000){
                  $uplLFINameNew = uniqid('',true).".".$uplLFIActualExt;
                  $uplLFIDestination = '../media/letter-from-institute/'.$uplLFINameNew;
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


      //	upli stands for upload insurance
      $uplI = $_FILES['uplI'];
      $uplIName = $_FILES['uplI']['name'];
      $uplITmpName = $_FILES['uplI']['tmp_name'];
      $uplISize = $_FILES['uplI']['size'];
      $uplIError = $_FILES['uplI']['error'];
      $uplIType = $_FILES['uplI']['type'];

      $uplIExt = explode('.', $uplIName);
      $uplIActualExt = strtolower(end($uplIExt));


      if (in_array($uplIActualExt, $allowed)) {
          if($uplIError === 0){
              if($uplISize < 1500000){
                  $uplINameNew = uniqid('',true).".".$uplIActualExt;
                  $uplIDestination = '../media/insurance/'.$uplINameNew;
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


      //	uplGC stands for upload good conduct
      $uplGC = $_FILES['uplGC'];
      $uplGCName = $_FILES['uplGC']['name'];
      $uplGCTmpName = $_FILES['uplGC']['tmp_name'];
      $uplGCSize = $_FILES['uplGC']['size'];
      $uplGCError = $_FILES['uplGC']['error'];
      $uplGCType = $_FILES['uplGC']['type'];

      $uplGCExt = explode('.', $uplGCName);
      $uplGCActualExt = strtolower(end($uplGCExt));


      if (in_array($uplGCActualExt, $allowed)) {
          if($uplGCError === 0){
              if($uplGCSize < 1500000){
                  $uplGCNameNew = uniqid('',true).".".$uplGCActualExt;
                  $uplGCDestination = '../media/good-conduct/'.$uplGCNameNew;
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
//  }


//check connection
  if ($con->connect_error) {
    die("connection failed: " . $conn->connect_error);
  }
  echo "connected successfully";

  $sql = "INSERT INTO appform (usename, email, phone, Gender, Ethnicity, Institution, Course, applicationletter, uploadedID, letterFromInstitute, insurance, goodConduct ) VALUES ('$usename', '$email', '$phone','$gender','$ethnicity', '$institution', '$course', '$aplNameNew', '$uplIDNameNew', '$uplLFINameNew', '$uplINameNew', '$uplGCNameNew')";
//  $uploads = "INSERT INTO appform ( ) VALUES ()";
  if ($conn->query($sql) === TRUE) {
    echo "Thanks for your input will look into it and get back to you if necessary as soon as possible.";
    header("location: index.php");
  } else {
    echo "Error: " . $sql ."<br>" . $conn->error;
  }

    CloseCon(OpenCon());
?>