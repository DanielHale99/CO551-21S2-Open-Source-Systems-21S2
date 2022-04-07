<?php
  $mymarks["year1"] = 55;
  $mymarks["year2"] = 65;
  $mymarks["year3"] = 75;

  /*
  while(list($index, $value) = each($mymarks))
  {
  echo "for $index my grade was $value <br/>";
  }
  echo "<br/> My best year was Year 3 when I averaged " . $mymarks["year3"];
  */
?>

<html>
  <head>
    <title>Averages</title>
  </head>
  <body>
    <table border=1 align="center">
      <tr><th>Year</th><th>Average</th></tr>
      <?php
        while(list($index, $value) = each($mymarks))
        {
        echo "<tr><td>$index</td><td>$value</td></tr>";
        }
      ?>
    </table>
  </body>
</html>