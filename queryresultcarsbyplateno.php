<?php
include "config.php";
include "selection.php";

if (isset($_POST["inputplate"]) ){
        $sql_statement= 'SELECT * FROM cars';
        $result= mysqli_query($db, $sql_statement);
        while(($row = mysqli_fetch_assoc($result))){
            if($row["plate_no"] == $_POST["inputplate"]){
                $did = $row["driver_id"];
                $plateno = $row["plate_no"];
                $caryear =$row["car_year"];
                $carbrand =$row["car_brand"];
                $carmodel =$row["car_model"];
                echo $did . " " . $plateno . " " .$caryear. " " . $carbrand . " " .$carmodel. "<br>";
            }
       }   
    }
?>