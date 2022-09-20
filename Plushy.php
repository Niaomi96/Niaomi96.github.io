<!DOCTYPE html>
<html>
<!--------Niaomi James/ 9/6/22---------->
<head>
<meta OrderDate="viewport" content="width=device-width, initial-scale=1">
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
<h3 style= "text-align: center">Plushy Order</h3>
  <?php 
        echo '<p>Page visited at '.date('H:i, jS F Y').'</p>';
		
		@$db = new mysqli('localhost', 'root', '', 'wolves');
	
		if (mysqli_connect_errno()) {
			echo "<p>Error: Could not connect to database.</p>";
			exit;
		}

		$result = mysqli_query($db,"SELECT * FROM plushyorder");
		
		echo "<table border='1' align='center' width='1000' text-align ='center'>
		<tr>
		<th>PlushyID</th>
		<th>WolfSpecies</th>
		<th>OrderDate</th>
		<th>ShippingDate</th>
		<th>ArrivalDate</th>
		<th>Size</th>
		<th>FurQuality</th>
		<th>Total</th>
		<th>Description</th>
		<th>Delete</th>
		</tr>";

		while($row = mysqli_fetch_array($result))
		
		{
		echo "<tr>";
		
		
		?>
	<tbody>
	    <th><?php echo $row['PlushyID']; ?></th>
		<th><?php echo $row['WolfSpecies'];?></th>
		<th><?php echo $row['OrderDate'];?></th>
		<th><?php echo $row['ShippingDate'];?></th>
		 <th><?php echo $row['ArrivalDate']; ?></th>
		<th><?php echo $row['Size'];?></th>
		<th><?php echo $row['FurQuality'];?></th>
		<th><?php echo $row['Total'];?></th>
		<th><?php echo $row['Description'];?></th>
		
		
		
		
<form action ="delete4.php" method="post">
<input type= "hidden" name ="PlushyID" value="<?php echo $row['PlushyID']; ?>">
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
<div class="title">Plushy Order </div>
<button data-close-button class="close-button">&times;</button>
</div>
<div class="sign-body">
<form action ="insert3.php" method="post">
<fieldset>
<p><label for="WolfSpecies">Wolf Species:</label>
<select type= "select" id="WolfSpecies" name="WolfSpecies" >  
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
</p>

<p><label for="OrderDate">Order Date:</label>
<input type ="date" id="OrderDate" name="OrderDate" maxlength="25" size="25" /></p>

<p><label for="ShippingDate">Shipping Date:</label>
<input type ="date" id="ShippingDate": name="ShippingDate" maxlength="23" size="23" /></p>

<p><label for="ArrivalDate">Arrival Date:</label>
<input type ="date" id="ArrivalDate" name="ArrivalDate" maxlength="25" size="25" /></p>

<p><label for="Size">Size:</label>
<select type ="select" id="Size" name="Size" >  
<option value = "micro-small"> Micro-Small   
</option>  
<option value = "small"> Small   
</option>  
<option value = "medium"> Medium  
</option>  
<option value = "large"> Large  
</option>  
</select>
</p>

<p><label for="FurQuality">Fur Quality:</label>
 <select type ="select" id="FurQuality" name="FurQuality" >  
<option value = "none-flufy"> None-Fluffy   
</option>  
<option value = "fluffy"> Fluffy  
</option>  
</select>   
</p>

<p><label for="Total">$Total:</label>
<input type ="text" id="Total" name="Total" maxlength="25" size="25" /></p>

<p><label for="Description">Description:</label>
<textarea id="Description" name="Description"  style="height:50px" ></textarea></p>

<p><input type="submit" name ="insert" value = "Enter" style="border-radius:5px;"></p>
</fieldset>
</form>
</div>
</div>
<div "id="overlay"></div>

<p  class="footer">@Copyrights & copy; 2022 Niaomi James</p>
</body>



</html>