<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title> MTTS Registration</title>
  <link rel="icon" type="img/" href ="../static/img/app/5smMvRlz_400x400.jpg">
  <link rel="stylesheet" href="../static/css/app/reset.min.css">
  <link rel="stylesheet" href="../static/css/app/style1.css">

</head>
<body>
 <style type="text/css">
    /* Add a black background color to the top navigation */
.topnav {
  background-color: #3b4148;
  font-family: 'Poppins', san serif;
  overflow: hidden;
  position: absolute;
  left: 570px;
  top: 10px;

}

/* Style the links inside the navigation bar */
.topnav a {

  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
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
<header>
<div class="topnav">
  <a class="active" href="http://localhost/midas">Home</a>
  <a href="http://localhost/midas/admin/login.php">Login</a>
  <a href="http://localhost/midas/admin">admin</a>
</div>
</header>
<br/>

<br/>
<form id="msform" action="sent.php" method="post" name="mainForm">

  <ul id="progressbar">
    <li class="active">Apply for attatchment</li>
    <li>Personal informatiion</li>
    <li>Upload Documents</li>
  </ul>

  <fieldset>
    <h2 class="fs-title">Apply for attatchment</h2>
    <h3 class="fs-subtitle">Provide the necessary information as promted below.</h3>
    <input type="text" name="username" placeholder="Name in full" />
    <input type="text" name="email" placeholder="Email"/>
    <input type="text" name="phone" placeholder="Phone number"/>
    <input type="button" name="next" class="next action-button" value="Next"/>
  </fieldset>

  <fieldset>
    <h2 class="fs-title">Personal Information</h2>
    <h3 class="fs-subtitle">More about you.</h3>
    <input type="text" name="Gender" placeholder="Gender"/>
    <input type="text" name="Ethnicity" placeholder="Ethnicity"/>
    <input type="text" name="Institution" placeholder="Institution Name In full"/>
    <input type="text" name="Course" placeholder="course"/>
    <input type="button" name="previous" class="previous action-button" value="Previous"/>
    <input type="button" name="next" class="next action-button" value="Next"/>
  </fieldset>

<fieldset> 
  <h2 class="fs-title">Upload documents</h2>
  <h3 class="fs-subtitle">Provide your the necessary documents by uploading them.</h3>
   <div>
      
          <input type="file" name="file" form="Form1">
          <button type="submit" name="submit" form="Form1">Upload Application letter</button>
      
  </div>
  <br>
   <hr>
  <br>
  <div>
      
          <input type="file" name="file" form="Form2">
          <button type="submit" name="submit" form="Form2">Upload ID</button>
      
  </div>
  <br>
    <hr>
  <br>
     <div>
      
          <input type="file" name="file" form="Form3">
          <button type="submit" name="submit" form="Form3">Upload Letter from insitute</button>
      
  </div>
  <br>
   <hr>
  <br>
     <div>
      
          <input type="file" name="file" form="Form4">
          <button type="submit" name="submit" form="Form4">Upload Insurance</button>
      
  </div>
  <br>
   <hr>
  <br>
     <div>
      
          <input type="file" name="file" form="Form5">
          <button type="submit" name="submit" form="Form5">Upload Good Conduct</button>
      
  </div>
  <br>
   <hr>
  <br>

<input type="button" name="previous" class="previous action-button" value="Previous" />
<input type="submit" name="submit" class="submit action-button" value="Submit" />
</fieldset>
</form>
<form action="uploads.php" method="POST" enctype="multipart/form-data" id="Form1"></form>
<form action="upload.php" method="POST" enctype="multipart/form-data" id="Form2"></form>
<form action="upload1.php" method="POST" enctype="multipart/form-data" id="Form3"></form>
<form action="upload2.php" method="POST" enctype="multipart/form-data" id="Form4"></form>
<form action="upload3.php" method="POST" enctype="multipart/form-data" id="Form5"></form>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
<script  src="../static/js/app/script.js"></script>

</body>
</html>
