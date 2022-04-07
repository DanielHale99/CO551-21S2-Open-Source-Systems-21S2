<?php	

	// Connect to server and select database
    $link= mysqli_connect('localhost', '21905680', 'mysqluser', 'db1_21905680');

	$sql = "SELECT * FROM test WHERE ID = '$_GET[id]' ";
	//Execute query
	$result = mysqli_query($link, "SELECT * FROM test WHERE ID = '$_GET[id]' ");

	$row = mysqli_fetch_assoc($result);
?>
<html>
<body>
<form action="wk6ex2save.php?id=<?php echo $_GET[id]; ?>" method="post">

	Name :
	<input type=text name=txtname value="<?php echo $row[name] ?>" />
	</br>
	Phone number :
	<input type=text name=txttelno value="<?php echo $row[phone_number]?>" />
	</br>
	Email :
	<input type=text name=txtemail value="<?php echo $row[email]?>" />
	</br>
	<input type=submit name=btnsubmit value="Save"/>
</form>
<form action="wk6ex2delete.php?id=<?php echo $_GET[id]; ?>" method="post">
	<input type=submit name=btnsubmit value="Delete"/>
</form>
</body>