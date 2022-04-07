<?php
   echo "<h2> Your order qty is $_POST[hdqty] </h2></br>";
   echo "<h2> and the selected colour is $_POST[selcolour].</h2></br>";

   if($_POST) 
   {
      $qty = $_POST["hdqty"];
     $price = $_POST["trueprice"];

     if($_POST["trueprice"] == "Small")
     {
       $total =  $qty * 15.75;
     }
     else if($_POST["trueprice"] == "Medium")
     {
       $total =  $qty * 16.75;
     }
     else if($_POST["trueprice"] == "Large")
     {
       $total =  $qty * 17.75;
     }
     else if($_POST["trueprice"] == "Extra Large")
     {
       $total =  $qty * 17.75;
     }
     else 
     {
        echo "You have not included a price to your widgets";
     }    
      echo("<h2>Total price of widget is: $total </h2>");       
  }
?>