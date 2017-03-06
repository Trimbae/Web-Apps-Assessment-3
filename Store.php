<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="StyleSheet.css" />
<title>Matt Trimby Photo Prints</title>
</head>

<body>

<nav>
<h1>MATT TRIMBY PHOTO PRINTS</h1>
</nav>

<div>
<img class = 'head' src="Header.png" alt="Matt Trimby"/>
</div>

<h2>BUY PRINTS</h2>
<hr>

<?php 
	//Establish connection details
	$connect = mysqli_connect("csmysql.cs.cf.ac.uk", "c1525379", "GenericPass123", "c1525379");
	if (!$connect) { //test connection to mySQL
		die("Connecttion Failed: " . mysqli_connect_error());
	}
	$query = "SELECT * FROM Photos ORDER BY picPrice asc"; //establish mySQL action to be taken

	$result = mysqli_query($connect, $query); //establish variable to call connection and query
	
	while($row = mysqli_fetch_assoc($result)) {  // while loop that goes through table row by row and performs and action?>
	<!--For CSS formatting purposes each attribute of the row is given its own div-->
	<div class = "product">

	<div class = "pic"><img class = 'picPreview' src="<?php echo $row["picRef"]//gets image source from mySQL server?>"/></div>

	<div class = "picName"><?php echo $row["picName"] ?></div>

	<div class = "picPrice">£<?php echo $row["picPrice"]?></div>

	<div class = "picDesc"><?php echo $row["picDesc"]?></div>

	<br />

	</div>

	<br />

<?php } // closes brackets of the while loop?>

<footer>
  <p id = footertext> Matt Trimby Photgraphy </p> 
</footer>

</body>

</html>
