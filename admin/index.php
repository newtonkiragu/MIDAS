<?php
include('auth.php');
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Admin</title>
  <link rel="icon" type="img/" href ="5smMvRlz_400x400.jpg">
  <link rel="stylesheet" href="./index.css">
  <link rel="stylesheet" href="./min.css">
  <link rel='stylesheet' href='./fa.min.css'>
  
</head>
<body>
<!-- partial:index.partial.html -->
<header> 
	<style type="text/css">
		.logotype{
			font-family: 'Poppins', san serif;
		}
	</style>
  <nav class="navigation">
    <div class="logotype"><center>TRAINING HEAD</center></div>
    <ul class="categories">
      <li class="category-item"><a href="http://localhost/midas/">Home</a></li>
      <br>
      
      <br>
      <li class="category-item"><a href="http://localhost/midas/app">Application page</a></li>
      <br>
      
      <br>
      <!--li class="category-item"><a href="#">Books</a></li-->
      <li class="category-item"><a href="logout.php">Log Out</a></li>
    </ul>
  </nav>
</header>

<div class="wrapper">
  <aside class="sidebar">
    <ul class="sidebar-list">
      <li class="sidebar-item"><a href="http://localhost/midas/admin/">Applications</a></li>
      <br>
      <li class="sidebar-item sb-active"><a href="Dashboard.html">Dashboard</a></li>
      <li class="sidebar-item"><a href="CV.html">CV</a></li>
      <li class="sidebar-item"><a href="Documents.html">Documents</a></li>
    </ul>
  </aside>
  <main class="content">
<div style="height:500px; overflow-y: scroll; scrolling: auto;" class="table">
<table border="1" align="center" style="width: auto; font-family: 'Poppins', san serif; font-size: 15px;">
<thead>	
<tr>
	<!--th>Route ID</th-->
	<th>Username</th>
	<th>Application type</th>
	<th>Email</th>
	<th>Phone number</th>
	<th>Gender</th>
	<th>Ethnicity</th>
	<th>Institustion</th>
	<th>Course</th> 
</tr>
</thead>
<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "iliad" ;
//create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
//check connection
	if ($conn->connect_error) {
		die("connectitn failed: " . $conn->connect_error);
	}
$sql = "SELECT * FROM app";
$result = $conn->query($sql);
$sql = $sql = "SELECT username, email, phone, Gender, Ethnicity, Institution, Course FROM app";

$result = $conn->query($sql);


//fetch from db
if($result -> num_rows > 0){
	while($row = $result->fetch_assoc()){
	?>

<tbody>
  	<tr>
		<!--td class="block"><center>
	<?php echo $row['id']; ?> </center></td-->

		<td class="block"><?php echo $row['username']; ?></td>
		<td class="block"><?php echo $row['email']; ?></td>
		<td class="block"><?php echo $row['phone']; ?></td>
		<td class="block"><?php echo $row['Gender']; ?></td>
		<td class="block"><?php echo $row['Ethnicity']; ?></td>
		<td class="block"><?php echo $row['Institution']; ?></td>
		<td class="block"><?php echo $row['Course']; ?></td>
		<!--td class="block"><?php /*echo $row['app']; ?></td>
		
		<td class="block"><?php echo $row['pdf'];*/ ?></td-->


	</tr>
	<?php
	}
}	
else
{
	?>
	<tr>
	<th colspan="2">There's no data found!!</th>
	</tr>
	<?php
}
?>

</tbody>
</table>
</div>
  </main>
</div>
<!-- partial -->
  <script  src="script.js"></script>

  <!damn>
<script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.5/angular.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/2.0.0/ui-bootstrap-tpls.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/angular-ui-utils/0.1.1/angular-ui-utils.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/js/jquery.dataTables.min.js'></script>
<script src='https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js'></script><script  src="./script1.js"></script>
  </body>
</html>
