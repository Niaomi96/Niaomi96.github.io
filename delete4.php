<!DOCTYPE html>
<html>
<!--------Niaomi James/ 9/19/22---------->
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="home.css">
<link rel="stylesheet" href="nav.css">
<link rel="stylesheet" href="signature.css">

  <h1><img src="vitalis.png" alt="vitalis" style="width:200px"style="height:200px" style="float:left"><span>Wolves Are </span>Just Like Us</h1>
    <h3>Give Them Love & Respect.</h3>
</head>
<body>

<div class="sticky-section">
<div id="logo">What Do You Know About Wolves?</div>
  <nav>
    <a href='home.html'>Home</a>
    <a href="FRT.HTML">Wolf Donations Management</a>
    <a href="SA.html">Accreditation</a>
    
  </nav>
  
</div>

<h3 style= "text-align: center">Plushy Order</h3>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wolves";
 echo '<p>Page visited at '.date('H:i, jS F Y').'</p>';

		
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['Delete'])){
	$PlushyID =$_POST ['PlushyID'];
	
 $sql = "DELETE FROM plushyorder WHERE PlushyID = '$PlushyID'";
 $sql_run = mysqli_query($conn, $sql);
}

if ($conn === TRUE) {
  echo "Deleted successfully";
} else {
  echo "Error:  Can't Delete Paraticipant. They are connected to another table! "."<br>";
}

$conn->close();






?>
</body>
</html>