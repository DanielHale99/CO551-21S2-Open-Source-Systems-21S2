<html>
 <head>
  <title>Shopping Page</title>
 </head>
 <body>
  <form  action="selectcolour.php" method="post">
  <input type="hidden" name = "selqty" value = "<?php echo $_POST["selqty"] ?>"/>
   Size of widgets
   <select name = "Size">
       <option>Small</option>
       <option>Medium</option>
       <option>Large</option>
       <option>Extra Large</option>
   </select>
   <br/>
   <input type="submit" value="Buy"/>
  </form>
 </body>
</html>