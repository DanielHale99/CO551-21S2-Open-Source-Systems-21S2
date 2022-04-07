<?php include("get_name.php"); ?>
<?php 
        $daniel = new person();
        $ben = new person;
        $daniel->set_name("Daniel Hale");
        $ben->set_name("Ben Smith");

        echo "Daniel's full name: " . $dan->get_name() . "</br>";
        
        echo "Ben's full name: " . $ben->get_name();
?>