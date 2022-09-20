<!DOCTYPE html>
<html>
<!--------Niaomi James/ 9/6/22---------->
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="home.css">
<link rel="stylesheet" href="nav.css">
<link rel="stylesheet" href="signature.css">
<script src="home.js"></script>
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
    <a href="FRT.HTML">Wolf Donations Management</a>
    <a href="SA.html">Accreditation</a>
    
  </nav>
  
</div>
	
	<button data-sign-target="#signature" class = "plus"  ><img src="plus.png" height ="25" width="25"  /></button>
<h3 style= "text-align: center">Signatures </h3>
<?php 
        echo '<p>Page visited at '.date('H:i, jS F Y').'</p>';
		
		@$db = new mysqli('localhost', 'root', '', 'wolves');
	
		if (mysqli_connect_errno()) {
			echo "<p>Error: Could not connect to database.</p>";
			exit;
		}

		$result = mysqli_query($db,"SELECT * FROM signatures");
		echo "<table border='1' align='center' width='1000' text-align ='center'>
		<tr>
		<th>SignatureID</th>
		<th>Name</th>
		<th>Sponsor</th>
		<th>Region</th>
		<th>Delete</th>
		
		</tr>";
		
		while($row = mysqli_fetch_array($result))
		
		{
		echo "<tr>";
		
		
		?>
	<tbody>
	    <th><?php echo $row['SignatureID']; ?></th>
		<th><?php echo $row['Name'];?></th>
		<th><?php echo $row['Sponsor'];?></th>
		<th><?php echo $row['Region'];?></th>
		
		
<form action ="delete.php" method="post">
<input type= "hidden" name ="SignatureID" value="<?php echo $row['SignatureID']; ?>">
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
<div class="title">Sign Petition </div>
<button data-close-button class="close-button">&times;</button>
</div>
<div class="sign-body">

<form action ="insert.php"  method="post">
<fieldset>
<p><label for="Name">Name:</label>
<input type ="text" id="Name" name="Name" maxlength="25" size="25" /></p>

<p><label for="Sponsor">Sponsor:</label>
<input type ="text" id="Sponsor" name="Sponsor" maxlength="23" size="23" /></p>

<p><label for="Region">Region:</label>
<input type ="text" id="Region" name="Region" maxlength="25" size="25" /></p>

<p><input type="submit"  name ="insert" value = "Enter" style="border-radius:5px;"></p>
</fieldset>
</form>
</div>
</div>
<div "id="overlay"></div>


<p  class="footer">@Copyrights & copy; 2022 Niaomi James</p>


</body>



</html>