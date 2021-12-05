<?php

include "config.php";
include "delete.php";
if(!empty($_POST['inputdelpname'])){
    
    //$uid = $_POST['inputdelid'];
    $pname = $_POST['inputdelpname'];

    $sql_statement = "DELETE FROM parking_areas WHERE pname = '$pname'";

    $result =mysqli_query($db, $sql_statement);
    $sql_statement2 = 'Select * FROM parking_areas ';
    $result2 = mysqli_query($db, $sql_statement2);
    if($result){
        while($row = mysqli_fetch_assoc($result2)){
        
        $parkname = $row["pname"];
        $capacity = $row["capacity"];
        echo $parkname . " " . $capacity. "<br>";

       }  
    }      
    else{
        // eğer mevcut bir uid'li row'u silemediyse buraya giriyor, 
        // delete query'si için input edilen uid users table'da yoksa successfull sayıyor.
        echo "<br><br> Unsuccessful attemt at deleting car by driver-id <br><br>";
    }
    
}
    ?>