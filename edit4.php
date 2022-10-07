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


$CustomerID = $_POST['CustomerID'];
		
$sql = "SELECT * FROM donation WHERE CustomerID='$CustomerID' ";
$sql_run = mysqli_query($conn, $sql);

if ($row = mysqli_fetch_array($sql_run)) {
if(isset($_POST['Update'])){
   
     
	    $SignatureID = $_POST['SignatureID'];
        $FoundationRepID=$_POST['FoundationRepID'];
		$PlushyID=$_POST['PlushyID'];
		$Contact=$_POST['Contact'];
		$Address=$_POST['Address'];
		$Amount=$_POST['Amount'];
        $Date=$_POST['Date'];
		
		
$sql = "UPDATE donation SET SignatureID='$SignatureID', FoundationRepID='$FoundationRepID', PlushyID='$PlushyID',Contact='$Contact', Address='$Address', Amount='$Amount', Date='$Date'  WHERE CustomerID='$CustomerID' ";

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
	  <h3>Update Donation</h3>
  <form action="edit4.php" method= "POST">
  <input type="hidden" name="CustomerID" value="<?php echo $row['CustomerID']; ?>">
  <label for="SignatureID">Signature ID</label>
  <input type="text" id="SignatureID" name="SignatureID" value="<?php echo $row['SignatureID']; ?>"  placeholder="Edit Your Signature ID..">

  <label for="FoundationRepID">FoundationRep ID</label>
  <input type="text" id="FoundationRepID" name="FoundationRepID" value="<?php echo $row['FoundationRepID']; ?>"  placeholder="Edit Your FoundationRep ID..">

  <label for="PlushyID">Plushy ID</label>
<input type="text" id="PlushyID" name="PlushyID" value="<?php echo $row['PlushyID']; ?>" placeholder="Edit Your PlushyID..">

<label for="Contact">Contact</label>
<input type="text" id="Contact" name="Contact" value="<?php echo $row['Contact']; ?>" placeholder="Edit Your Contact..">

<label for="Address">Address</label>
<input type="text" id="Address" name="Address" value="<?php echo $row['Address']; ?>" placeholder="Edit Your Address..">

<label for="Amount">Amount</label>
<input type="text" id="Amount" name="Amount" value="<?php echo $row['Amount']; ?>" placeholder="Edit Your Amount..">

<label for="Date">Date</label>
<input type="date" id="Date" name="Date" value="<?php echo $row['Date']; ?>" placeholder="Edit Your Date.." style="width:470px">

   <button type="submit"  name ="Update" value = "Update" class = "plus"><img src="update.png" height ="30" width="70"  /></button><a href= "donation.php" type="submit"><img src="cancel.png" height ="30" width="70"  /></a>
</form>
</div>
<p  class="footer">@Copyrights & copy; 2022 Niaomi James</p>
</body>
</html>
