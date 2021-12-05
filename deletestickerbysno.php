<?php

include "config.php";
include "delete.php";
if(!empty($_POST['inputdelsno'])){
    
    //$uid = $_POST['inputdelid'];
    $cs = $_POST['inputdelsno'];

    $sql_statement = "DELETE FROM car_sticker WHERE sno = $cs";

    $result =mysqli_query($db, $sql_statement);
    $sql_statement2 = 'Select * FROM car_sticker ';
    $result2 = mysqli_query($db, $sql_statement2);
    if($result){
        while($row = mysqli_fetch_assoc($result2)){           
            $cs = $row["sno"];
            $cid = $row["cid"];
            $isd =$row["issue_date"];
            $dd =$row["due_date"];
            echo $cs . " " . $cid . " " .$isd. " " . $dd . "<br>";
        }   
    }      
    else{
        // eğer mevcut bir uid'li row'u silemediyse buraya giriyor, 
        // delete query'si için input edilen uid users table'da yoksa successfull sayıyor.
        echo "<br><br> Unsuccessful attemt at deleting car by driver-id <br><br>";
    }
    
}
    ?>