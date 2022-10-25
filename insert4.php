<!DOCTYPE html>
<html>
<!--------Niaomi James/ 9/6/22---------->
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
    <a href="FRT.html">Wolf Donations Management</a>
    <a href="SA.html">Accreditation</a>
    
    
  </nav>
  
</div>
<h3 style= "text-align: center">Donation</h3>
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
if(isset($_POST['insert'])){
 $SignatureID = $_POST['SignatureID'];
        $FoundationRepID=$_POST['FoundationRepID'];
		$PlushyID=$_POST['PlushyID'];
		$Contact=$_POST['Contact'];
		$Address=$_POST['Address'];
        $Amount=$_POST['Amount'];
		 $Date=$_POST['Date'];
$sql = "INSERT INTO donation (SignatureID, FoundationRepID, PlushyID , Contact, Address, Amount, Date) VALUES ( '$SignatureID','$FoundationRepID', '$PlushyID' , '$Contact','$Address', '$Amount', '$Date')";
$sql_run = mysqli_query($conn, $sql);
}
if ($conn->query($sql) === TRUE) {
  echo "New donation created successfully";
} else {
  echo "Error: Please provide the right identification number" . "<br>" . "<br>" . "<br>" . "<br>" . "<br>". $conn->error;
}


$conn->close();
	
    ?>
</body>
</html>
