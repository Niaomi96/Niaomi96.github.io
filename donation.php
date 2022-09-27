<!DOCTYPE html>
<html>
<!--------Niaomi James/ 9/6/22---------->
<head>
<meta FoundationRepID="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="home.css">
<link rel="stylesheet" href="nav.css">
<link rel="stylesheet" href="signature.css">
<script src="home.js"></script>
<script src="d.js"></script>
<script defer src="add.js"></script>
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

*,*::after,*::before{
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
	
	<button data-sign-target="#signature" class = "plus"  ><img src="plus.png" height ="25" width="25"  /></button>
<h3 style= "text-align: center">Donation</h3>
  <?php 
        echo '<p>Page visited at '.date('H:i, jS F Y').'</p>';
		
		@$db = new mysqli('localhost', 'root', '', 'wolves');
	
		if (mysqli_connect_errno()) {
			echo "<p>Error: Could not connect to database.</p>";
			exit;
		}

		$result = mysqli_query($db,"SELECT * FROM donation");
		
		echo "<table border='1' align='center' width='1000' text-align ='center'>
		<tr>
		<th>CustomerID</th>
		<th>SignatureID</th>
		<th>FoundationRepID</th>
		<th>PlushyID</th>
		<th>Contact</th>
		<th>Address</th>
		<th>Amount</th>
		<th>Date</th>
		<th>Delete</th>
		</tr>";

	while($row = mysqli_fetch_array($result))
		
		{
		echo "<tr>";
		
		
		?>
	<tbody>
	    <th><?php echo $row['CustomerID']; ?></th>
		<th><?php echo $row['SignatureID'];?></th>
		<th><?php echo $row['FoundationRepID'];?></th>
		<th><?php echo $row['PlushyID'];?></th>
		<th><?php echo $row['Contact'];?></th>
		<th><?php echo $row['Address'];?></th>
		<th><?php echo $row['Amount'];?></th>
		<th><?php echo $row['Date'];?></th>
		
<form action ="delete2.php" method="post">
<input type= "hidden" name ="CustomerID" value="<?php echo $row['CustomerID']; ?>">
<th>
<button type="submit" name="Delete"  class = "plus"  Value ="delete"><img src="trash.png" height ="25" width="25"  /></button>
</th>
</form>

		</tr>
		</tbody>

<?php
		}
	echo "</table>";

		mysqli_close($db);

    ?>
	


<div class="signature" id="signature">
<div class= "sign-header">
<div class="title">Donation </div>
<button data-close-button class="close-button">&times;</button>
</div>
<div class="sign-body">
<form name="myForm" action ="insert4.php" onsubmit="return validateForm()"  method="POST">
<fieldset>
<p><label for="SignatureID">SignatureID:</label>
<input type= "text" id="SignatureID" name="SignatureID" maxlength="25" size="25" / >  
 
</p>

<p><label for="FoundationRepID">FoundationRepID:</label>
<input type ="text" id="FoundationRepID" name="FoundationRepID" maxlength="25" size="25" /></p>

<p><label for="PlushyID">PlushyID:</label>
<input type ="text" id="PlushyID": name="PlushyID" maxlength="23" size="23" /></p>

<p><label for="Candidate">Candidate:</label>
<input type ="text" id="Candidate" name="Candidate" maxlength="25" size="25" /></p>

<p><label for="Contact">Contact:</label>
<input type ="text" id="Contact" name="Contact" maxlength="25" size="25" / >   

</p>

<p><label for="Address">Address:</label>
 <input type ="text" id="Address" name="Address" maxlength="25" size="25" / >      
</p>

<p><label for="Amount">$Amount:</label>
<input type ="text" id="Amount" name="Amount" maxlength="25" size="25" /></p>

<p><label for="Date">Date:</label>
<input type="date" id="Date" name="Date"  style="height:25px" maxlength="25" size="25" /></p>

<p><input type="submit" name ="insert" value = "Enter" style="border-radius:5px;"></p>
</fieldset>
</form>
</div>
</div>
<div "id="overlay"></div>

<p  class="footer">@Copyrights & copy; 2022 Niaomi James</p>




</body>



</html>