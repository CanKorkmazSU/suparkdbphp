<?php

include "config.php";
include "delete.php";
if(!empty($_POST['inputdeldid'])){
    
    //$uid = $_POST['inputdelid'];
    $did = $_POST['inputdeldid'];

    $sql_statement = "DELETE FROM cars WHERE driver_id = $did";

    $result =mysqli_query($db, $sql_statement);
    $sql_statement2 = 'Select * FROM cars ';
    $result2 = mysqli_query($db, $sql_statement2);
    if($result){
        while($row = mysqli_fetch_assoc($result2)){           
            $did = $row["driver_id"];
            $plateno = $row["plate_no"];
            $caryear =$row["car_year"];
            $carbrand =$row["car_brand"];
            $carmodel =$row["car_model"];
            echo $did . " " . $plateno . " " .$caryear. " " . $carbrand . " " .$carmodel. "<br>";
        }   
    }      
    else{
        // eğer mevcut bir uid'li row'u silemediyse buraya giriyor, 
        // delete query'si için input edilen uid users table'da yoksa successfull sayıyor.
        echo "<br><br> Unsuccessful attemt at deleting car by driver-id <br><br>";
    }
    
}
    ?>