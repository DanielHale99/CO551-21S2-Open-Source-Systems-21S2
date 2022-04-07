<html>
<body>
<?php

	$hourlyrate	= 5.75;
	$hoursperweek = 40;

	//Gross
	$gross = $hourlyrate * $hoursperweek;
  $taxrate = 0.22;

	//Net
  $netwage = $gross * (1 - $taxrate);

	//Output net
	echo $netwage;
?>
</body>
</html>