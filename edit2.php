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


$PlushyID = $_POST['PlushyID'];
		
$sql = "SELECT * FROM plushyorder WHERE PlushyID='$PlushyID' ";
$sql_run = mysqli_query($conn, $sql);

if ($row = mysqli_fetch_array($sql_run)) {
if(isset($_POST['Update'])){
	    $WolfSpecies = $_POST['WolfSpecies'];
        $OrderDate=$_POST['OrderDate'];
		$ShippingDate=$_POST['ShippingDate'];
		$ArrivalDate=$_POST['ArrivalDate'];
		$Size=$_POST['Size'];
        $Total=$_POST['Total'];
		$Description=$_POST['Description'];
		
$sql = "UPDATE plushyorder SET WolfSpecies='$WolfSpecies', OrderDate='$OrderDate', ShippingDate='$ShippingDate',ArrivalDate='$ArrivalDate', Size='$Size', Total='$Total',Description='$Description'  WHERE PlushyID='$PlushyID' ";

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
	  <h3>Update Plushy Order</h3>
  <form action="edit2.php" method= "POST">
  <input type="hidden" name="PlushyID" value="<?php echo $row['PlushyID']; ?>">
  <label for="WolfSpecies">Wolf Species:</label>
<select type= "select" id="WolfSpecies" name="WolfSpecies" value="<?php echo $row['WolfSpecies']; ?> >  
<option value = "ArcticWolf"> Arctic Wolf  
</option>  
<option value = "Grey Wolf"> Grey Wolf   
</option>  
<option value = "Timber Wolf"> Timber Wolf  
</option>  
<option value = "Red Wolf"> Red Wolf
</option>  
<option value = "Ethiopian Wolf"> Ethiopian Wolf
</option>  
<option value = "Afrian Golden Wolf"> Afrian Golden Wolf
</option>  
<option value = "Japanese Wolf"> Japanese Wolf  
</option>  
<option value = "Mongolian Wolf"> Mongolian Wolf  
</option>  
<option value = "Eurasian Wolf"> Eurasian Wolf
</option>  
</select>  


  <label for="OrderDate">Order Date:</label>
<input type ="date" id="OrderDate" name="OrderDate" value="<?php echo $row['OrderDate']; ?>" style="width:470px">

 <label for="ShippingDate">Shipping Date:</label>
<input type ="date" id="ShippingDate": name="ShippingDate" value="<?php echo $row['ShippingDate']; ?>" style="width:470px">

<label for="ArrivalDate">Arrival Date:</label>
<input type ="date" id="ArrivalDate" name="ArrivalDate" value="<?php echo $row['ArrivalDate']; ?>" style="width:470px">

<label for="Size">Size:</label>
<select type ="select" id="Size" name="Size" value="<?php echo $row['Size']; ?>">  
<option value = "micro-small"> Micro-Small   
</option>  
<option value = "small"> Small   
</option>  
<option value = "medium"> Medium  
</option>  
<option value = "large"> Large  
</option>  
</select>

<label for="FurQuality">Fur Quality:</label>
 <select type ="select" id="FurQuality" name="FurQuality" value="<?php echo $row['FurQuality']; ?> >  
<option value = "none-flufy"> None-Fluffy   
</option>  
<option value = "fluffy"> Fluffy  
</option>  
</select> 

<label for="Total">$Total:</label>
<input type ="text" id="Total" name="Total" value="<?php echo $row['Total']; ?>" placeholder="Edit Your Total..">

<label for="Description">Description(Optional):</label>
<input type ="Text" id="Description" name="Description"  value="<?php echo $row['Description']; ?>" placeholder="Edit Your Description.." >
    <button type="submit"  name ="Update" value = "Update" class = "plus"><img src="update.png" height ="30" width="70"  /></button><a href= "plushy.php" type="submit"><img src="cancel.png" height ="30" width="70"  /></a>
</form>
</div>
<p  class="footer">@Copyrights & copy; 2022 Niaomi James</p>
</body>
</html>