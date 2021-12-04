<?php
include "config.php";
include "selection.php";

 if (isset($_POST["inputparkname"]) ){
    $sql_statement= 'SELECT * FROM parking_area ';
    $result= mysqli_query($db, $sql_statement);
    while($row = mysqli_fetch_assoc($result)){
        if($row["pname" == $_POST["inputparkname"]]){
        $parkname = $_POST["parkname"];
        $capacity = $_POST["capacity"];
        echo $parkname . " " . $capacity. "<br>";
        }
   }  
} 
header()
?>