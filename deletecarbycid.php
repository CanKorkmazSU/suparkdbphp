<?php

include "config.php";
include "delete.php";
if(!empty($_POST['inputdelcid'])){
    
    //$uid = $_POST['inputdelid'];
    $cid = $_POST['inputdelcid'];

    $sql_statement = "DELETE FROM cars WHERE cid = $cid";

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
        echo "<br><br> Unsuccessful attemt at deleting car by car-id <br><br>";
    }
    
}
    ?>