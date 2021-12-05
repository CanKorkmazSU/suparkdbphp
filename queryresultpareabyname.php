<?php
include "config.php";
include "selection.php";

 if (isset($_POST["inputparkname"]) ){
    $sql_statement= 'SELECT * FROM parking_areas ';
    $result= mysqli_query($db, $sql_statement);
    while($row = mysqli_fetch_assoc($result)){
        if($row["pname"] == $_POST["inputparkname"]){
        $parkname = $row["pname"];
        $capacity = $row["capacity"];
        echo $parkname . " " . $capacity. "<br>";
        }
   }  
} 
?>