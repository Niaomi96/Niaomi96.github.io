<!DOCTYPE html>
<html>
<!--------Niaomi James/ 9/6/22---------->
<head>
<meta FirstName="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="home.css">
<link rel="stylesheet" href="nav.css">
<link rel="stylesheet" href="signature.css">
<script src="home.js"></script>
<script src="f.js"></script>

<script src="Pagination.js"></script>
<script defer src="add.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/paginationjs/2.1.4/pagination.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paginationjs/2.1.4/pagination.css"/>
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
<h3 style= "text-align: center">Foundation Representatives </h3>
<section>
 <div id="container"></div>
<div style="text-align:center">
<div id="pagination" >
  <div class="pagination">
    <span class="pagination" onclick="currentSlide(1)"><a href="signature.php">1</a></span> 
  <div class="numbertext">1</div>
  
  </div>
  <div class="pagination">
   <span class="pagination" onclick="currentSlide(2)"> <a href="foundation.php">2</a></span> 
  <div class="numbertext">2</div>
 
  </div>
  <div class="pagination">
 <span class="pagination" onclick="currentSlide(3)"><a href="plushy.php#">3</a></span> 
  <div class="numbertext">3</div>
  
  </div>
  <div class="pagination">
  <div class="numbertext">4</div>
   <span class="pagination" onclick="currentSlide(4)"> <a href="donation.php">4</a></span> 
  </div>
  
  
</div>
<button   class = "plus"  onclick="window.location.href='FRT.html';" ><img src="return.png" height ="25" width="25"  /></button>

</section>

</div>
  <?php 
        echo '<p>Page visited at '.date('H:i, jS F Y').'</p>';
		
		@$db = new mysqli('localhost', 'root', '', 'wolves');
	
		if (mysqli_connect_errno()) {
			echo "<p>Error: Could not connect to database.</p>";
			exit;
		}

		$result = mysqli_query($db,"SELECT * FROM foundationrep");
		
		echo "<table border='1' align='center' width='1000' text-align ='center'>
		<tr>
		<th>FoundationRepID</th>
		<th>SignatureID</th>
		<th>FirstName</th>
		<th>LastName</th>
		<th>Number</th>
		<th>Location</th>
		<th>Establishment</th>
		<th>AvailableTime</th>
		<th>Delete</th>
		<th>Edit</th>
		</tr>";

		while($row = mysqli_fetch_array($result))
		
		{
		echo "<tr>";
		
		
		?>
	<tbody>
	    <th><?php echo $row['FoundationRepID']; ?></th>
		<th><?php echo $row['SignatureID'];?></th>
		<th><?php echo $row['FirstName'];?></th>
		<th><?php echo $row['LastName'];?></th>
		 <th><?php echo $row['Number']; ?></th>
		<th><?php echo $row['Location'];?></th>
		<th><?php echo $row['Establishment'];?></th>
		<th><?php echo $row['AvailableTime'];?></th>
		
		
<form action ="delete3.php" method="post">
<input type= "hidden" name ="FoundationRepID" value="<?php echo $row['FoundationRepID']; ?>">
<th>
<button type="submit" name="Delete"  class = "plus"  Value ="delete"><img src="trash.png" height ="25" width="25"  /></button>
</th>
</form>
<form action ="edit3.php" method="POST">
<input type= "hidden" name ="FoundationRepID" value="<?php echo $row['FoundationRepID']; ?>">
<th>
<button type="submit" name="Edit"  class = "plus"  Value ="edit"><img src="edit.png" height ="25" width="25"  /></button>
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
<div class="title">Foundation Representatives </div>
<button data-close-button class="close-button">&times;</button>
</div>
<div class="sign-body">
<form name="myForm" action ="insert2.php" onsubmit="return validateForm()" method="post">
<fieldset>
<p><label for="SignatureID">SignatureID:</label>
<input type ="text" id="SignatureID" name="SignatureID" maxlength="25" size="25" /></p>

<p><label for="FirstName">First Name:</label>
<input type ="text" id="FirstName" name="FirstName" maxlength="25" size="25" /></p>

<p><label for="LastName">Last Name:</label>
<input type ="text" id="LastName": name="LastName" maxlength="23" size="23" /></p>

<p><label for="Number">Number:</label>
<input type ="text" id="Number" name="Number" maxlength="25" size="25" /></p>

<p><label for="Location">Location:</label>
<input type ="text" id="Location" name="Location" maxlength="25" size="25" /></p>

<p><label for="Establishment">Establishment:</label>
<input type ="text" id="Establishment": name="Establishment" maxlength="23" size="23" /></p>

<p><label for="AvailableTime">Available Time:</label>
<input type ="text" id="AvailableTime" name="AvailableTime" maxlength="25" size="25" /></p>

<p><button type="submit" name ="insert" class = "plus" value = "Enter" ><img src="enter.png" height ="40" width="70"  /></button></p>
</fieldset>
</form>
</div>
</div>
<div "id="overlay"></div>

<p  class="footer">@Copyrights & copy; 2022 Niaomi James</p>
</body>



</html>