<?php
	// Connect to server and select database
	$link= mysqli_connect('localhost', '21905680', 'mysqluser', 'db1_21905680');
	// Execute sql statement	
	$sql = "INSERT INTO test (name,email,phone_number) ";

    $sql = "SELECT * from test";
	
	// Execute sql statement
    $sql = $sql . " values ('$_POST[txtName]','$_POST[txtEmail]','$_POST[txtPhoneNumber]')";

	$result = mysqli_query($link, "SELECT * FROM test");

	while ($row = mysqli_fetch_assoc($result))
	{
		echo "$row[name]  $row[email]  $row[phone_number] <br/>";
	}

    mysqli_free_result($result);
    mysqli_close($link);

?>