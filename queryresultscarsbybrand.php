<?php
include "config.php";
include "selection.php";

if (isset($_POST["inputbrand"])){
            
            //$sql_statement= 'SELECT * FROM users WHERE name = $_POST["inputname"]';
            $sql_statement= 'SELECT * FROM cars';
            $result= mysqli_query($db, $sql_statement);
            while($row = mysqli_fetch_assoc($result)){
               if($row["car_brand"] == $_POST["inputbrand"]){
                $did = $row["driver_id"];
                $plateno = $row["plate_no"];
                $caryear =$row["caryear"];
                $carbrand =$row["car_brand"];
                $carmodel =$row["car_model"];
                echo $did . " " . $plateno . " " .$caryear. " " . $carbrand . " " .$carmodel. "<br>";
               }
    
           }   
        }
?>