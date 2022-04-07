<?
  $topModules[0] = "Internet Systems Development";
  $topModules[1] = "Programming 1";
  $topModules[2] = "Programming 2";
  $topModules[3] = "OOAD";
  $topModules[4] = "Software Engineering";
?>
<html>
  <head>
    <title>Data in table</title>
  </head>
  <body>
    <table border=1 align="center">
      <tr><th>Index</th><th>Subject</th></tr>
      <?
        for($count = 0;$count < 5;$count++)
        {
          echo "<tr><td>$count</td><td>$topModules[$count]</td></tr>";
        }
      ?>
    </table>
  </body>
</html>