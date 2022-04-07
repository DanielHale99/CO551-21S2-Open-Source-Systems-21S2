<?php

  header("Content-type: audio/wav");

  $conn = mysqli_connect('localhost', '21905680', 'mysqluser', 'db1_21905680');

  $sql = "SELECT Audio FROM monster WHERE id='" . $_GET[id] ."';";
	
  $result = mysqli_query($sql, $conn);
  $row = mysqli_fetch_array($result);
  
  $audio = $row["Audio"];

  echo $audio;
?>