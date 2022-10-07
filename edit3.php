<!DOCTYPE html>
<html>
<!--------Niaomi James/ 9/6/22---------->
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="home.css">
<link rel="stylesheet" href="nav.css">
<link rel="stylesheet" href="signature.css">
<script src="home.js"></script>
  <h1><img src="vitalis.png" alt="vitalis" style="width:200px"style="height:200px" style="float:left"><span>Wolves Are </span>Just Like Us</h1>
    <h3>Give Them Love & Respect.</h3>
	<style type="text/css">
fieldset{
width: 99%;
border: 3px solid black;
border-radius:10px;
}

label{
width:75px;
float:center;
text-align: center;
font-weight:bold;
}

input{
border: 1px solid #000;
padding:3px;
}

.signature{
position:fixed;
top:50%;
left:50%;
transform: translate(-50%,-50%) scale(0);
transtion:200ms ease-in-out;
border:5px solid black;
border-radius:10px;
z-index: 10;
background-color:#0B978E;
width: 500px
max-width:80%;
}

.signature.active{
transform: translate(-50%,-50%) scale(1);
transtion:200ms ease-in-out;
}

.sign-header{
padding: 10px 15px;
display: flex;
justify-content:space-between;
align-items: center;
text-align: right;

}

.sign-header .title{
font-size:1.25rem;
font-weight:bold;
text-align: center;
margin: auto;
}

.sign-header .close-button{
cursor:pointer;
border:none;
outline: none;
background: none;
font-size: 1.25rem;
font-weight:bold;
}

.plus{
cursor:pointer;
border:none;
outline: none;
background: none;

}


.sign-body{
padding:10px 15px;
}

#overlay{
postion: fixed;
opacity: 0;
top:0;
left:0;
right:0;
bottom:0;
pointer-events: none;
}

#overlay.active{
opacity: 1;
pointer-events: all;
}
  input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}


input[type=submit] {
  width: 17%;
  background-color: #0B978E;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}


input[type=submit]:hover {
  background-color: #ddd;
}

.contain {
    max-width: 500px;
    margin: auto;
    background: #0B978E;
    padding: 10px;
	text-align: left;
	
  }

*::after,*::before{
box-sizing: border-box;
}
</style>
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


$FoundationRepID = $_POST['FoundationRepID'];
		
$sql = "SELECT * FROM foundationrep WHERE FoundationRepID='$FoundationRepID' ";
$sql_run = mysqli_query($conn, $sql);

if ($row = mysqli_fetch_array($sql_run)) {
if(isset($_POST['Update'])){
	    $SignatureID = $_POST['SignatureID'];
        $FirstName=$_POST['FirstName'];
		$LastName=$_POST['LastName'];
		$Number=$_POST['Number'];
		$Location=$_POST['Location'];
		$Establishment=$_POST['Establishment'];
        $AvailableTime=$_POST['AvailableTime'];
		
$sql = "UPDATE foundationrep SET SignatureID='$SignatureID', FirstName='$FirstName', LastName='$LastName',Number='$Number', Location='$Location', Establishment='$Establishment', AvailableTime='$AvailableTime'  WHERE FoundationRepID='$FoundationRepID' ";

$sql_run = mysqli_query($conn, $sql);

if ($conn->query($sql) === TRUE) {
  echo "Successfully update";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}
}
$conn->close();


	  ?>
	  <div class="contain">
	  <h3>Update Foundation Representive</h3>
  <form action="edit3.php" method= "POST">
  <input type="hidden" name="FoundationRepID" value="<?php echo $row['FoundationRepID']; ?>">
  <label for="SignatureID">Signature ID</label>
  <input type="text" id="SignatureID" name="SignatureID" value="<?php echo $row['SignatureID']; ?>"  placeholder="Edit Your Signature ID..">

  <label for="FirstName">First Name</label>
  <input type="text" id="FirstName" name="FirstName" value="<?php echo $row['FirstName']; ?>"  placeholder="Edit Your First Name..">

  <label for="LastName">Last Name</label>
<input type="text" id="LastName" name="LastName" value="<?php echo $row['LastName']; ?>" placeholder="Edit Your Last Name..">

<label for="Number">Number</label>
<input type="text" id="Number" name="Number" value="<?php echo $row['Number']; ?>" placeholder="Edit Your Number..">

<label for="Location">Location</label>
<input type="text" id="Location" name="Location" value="<?php echo $row['Location']; ?>" placeholder="Edit Your Location..">

<label for="Establishment">Establishment</label>
<input type="text" id="Establishment" name="Establishment" value="<?php echo $row['Establishment']; ?>" placeholder="Edit Your Establishment..">

<label for="AvailableTime">Available Time</label>
<input type="text" id="AvailableTime" name="AvailableTime" value="<?php echo $row['AvailableTime']; ?>" placeholder="Edit Your Available Time..">

    <button type="submit"  name ="Update" value = "Update" class = "plus"><img src="update.png" height ="30" width="70"  /></button><a href= "foundation.php" type="submit"><img src="cancel.png" height ="30" width="70"  /></a>
</form>
</div>
<p  class="footer">@Copyrights & copy; 2022 Niaomi James</p>
</body>
</html>