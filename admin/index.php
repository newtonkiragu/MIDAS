<?php
include('auth.php');
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>STATS - Admin page</title>
  <link rel="icon" type="img/" href ="../static/img/admin/5smMvRlz_400x400.jpg">
  <link rel="stylesheet" href="../static/css/admin/index.css">
  <link rel="stylesheet" href="../static/css/admin/min.css">
  <link rel='stylesheet' href='../static/css/admin/fa.min.css'>
  
</head>
<header> 
	<style type="text/css">
		.logotype{
			font-family: 'Poppins', san serif;
			color: #ffffff;
		}
	</style>
  <nav class="navigation">
    <div class="logotype"><center>ADMINISTRATIVE PAGE</center></div>
    <ul class="categories">
      <li class="category-item"><a href="http://localhost/midas/">Home</a></li>
      <br>
      
      <br>
      <li class="category-item"><a href="http://localhost/midas/app">Application page</a></li>
      <br>

       <br>
       <li class="category-item"><a href="logout.php">Log Out</a></li>
    </ul>
  </nav>
</header>
<body>
<!-- partial:index.partial.html -->


<div class="wrapper">
  <aside class="sidebar">
    <ul class="sidebar-list">
     <br>
      <li class="sidebar-item"><a href="http://localhost/midas/admin/">Applications</a></li>
     <br>

     <br>
      <li class="sidebar-item"><a href="Registration.php">Create account</a></li>
     <br>
    </ul>
  </aside>
  <main class="content">
 <div class="table" style = "width: auto; text-align: center;">
		<table style="font-family: 'Poppins', san serif; font-size: 15px;">
		<thead>	
			<style type="text/css">
				th{
					background-color: #2196f3;
					color: #CCD6DF;
				}
			</style>
		<tr>
			<th>ID</th>
			<th>Username</th>
			<th>Email</th>
			<th>Phone number</th>
			<th>Gender</th>
			<th>Ethnicity</th>
			<th>Institustion</th>
			<th>Course</th> 
			<th>Application Letter</th>
			<th>ID card</th> 
			<th>Institutional letter</th>
			<th>Insurance</th>
			<th>Good conduct</th>
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
		$sql = "SELECT * FROM appform";
		$result = $conn->query($sql);
		$sql = $sql = "SELECT id, usename, email, phone, Gender, Ethnicity, Institution, Course, applicationLetter, uploadedID, letterFromInstitute, insurance, goodConduct FROM appform";

		$result = $conn->query($sql);


		//fetch from db
		if($result -> num_rows > 0){
			while($row = $result->fetch_assoc()){
		?>
		<style type="text/css">
			a.dl{
				color: black;
				font-size: 14px;
				font-family: 'Poppins', san serif;
			}
			td{
				background-color: #A9A9A9; 
			}
		</style>

		 <tr>
		  	<td class="block"><?php echo $row['id']; ?></td>       
			<td class="block"><?php echo $row['usename'];?></td>
			<td class="block"><?php echo $row['email'];?></td>
			<td class="block"><?php echo $row['phone'];?></td>
			<td class="block"><?php echo $row['Gender'];?></td>
			<td class="block"><?php echo $row['Ethnicity'];?></td>
			<td class="block"><?php echo $row['Institution'];?></td>
			<td class="block"><?php echo $row['Course'];?></td>
			<td class="block"><a class="dl" target="_blank" href="../media/application-letter/<?=$row['applicationLetter']?>">Application Letter</td> </a>
			<td class="block"><a class="dl" target="_blank" href="../media/uploaded-id/<?=$row['uploadedID']?>">Uploaded ID</td> </a>
			<td class="block"><a class="dl" target="_blank" href="../media/letter-from-institute/<?=$row['letterFromInstitute']?>">Letter From Institute</td> </a>
			<td class="block"><a class="dl" target="_blank" href="../media/insurance/<?=$row['insurance']?>">Insurance</td> </a>
			<td class="block"><a class="dl" target="_blank" href="../media/good-conduct/<?=$row['goodConduct']?>">Good Conduct</td> </a>
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

	 </table>
	</div>
  </main>
</div>
<!-- partial -->
 <script  src="script.js"></script>

</body>
</html>
