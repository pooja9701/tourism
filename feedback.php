<html>
<head>


	<!-- stylesheets -->
  	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />

  	
</head>
<body>
<ul class="menu3">
<li><a href="home.html"><b>Home</b></a></li>
<li><a href="visit.html"><b>Places To Visit</b></a></li>
<li><a href="photo.html"><b>Photos</b></a></li>
<li><a href="reach.html"><b>How To Reach</b></a></li>
<li><a href="contact.html"><b>Contact us</b></a></li>
<li><a href="search.html"><b>Search</b></a></li>
</ul>
<?php
$hostname="127.0.0.1";
$username="root";
$password="";
$database="pune_tourism"; 
$con=mysqli_connect($hostname, $username, $password, $database);
if(!$con)
{
	echo 'Server is not connected';
}
if (!mysqli_select_db ($con,'pune_tourism'))
{
	echo 'Database is not availabel at server';
}
if(isset($_POST['submit']))
{
	$name = $_POST['name'];
	$email = $_POST['email'];
	$comment= $_POST['comment'];
	$sql = "insert into registration (name, email, comment) values ('$name', '$email', '$comment')";
	$result = mysqli_query ($con, $sql); 

if($result)
	{
		echo "Thanks for your feebback";
	}
	else
	{
		echo "We are facing some issue while saving data. Please submit feedback again";
	}
}

ob_end_flush();
?>
</body>
<div class="footer">
  <p><b>Copyright © 2020 Pimpri Chinchwad College of Engineering (Department of MCA)</b></p>
</div>
</html>
