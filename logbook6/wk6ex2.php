<?php	
	// Connect to server and select database
    $link= mysqli_connect('localhost', '21905680', 'mysqluser', 'db1_21905680');
	$sql = "SELECT * from test";
	// Execute sql statement
    $result = mysqli_query($link, "SELECT * FROM test");
?>
<html>
<body>

<?php
while ($row = mysqli_fetch_assoc($result))
{
      echo "<a href=\"wk6ex2action.php?id=$row[ID]\">$row[name] ($row[ID])</a></br>";  	
}
?>
</body>
</html>