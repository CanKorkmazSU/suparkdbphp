<?php
    include "config.php";
    $sql_statement= "SELECT * FROM users";
    $result= mysqli_query($db, $sql_statement);
    while($row = mysqli_fetch_assoc($result)){
        $uid= $row['uid'];
        $name= $row['name']; 
        $drivers_license = $row["drivers_license"];
        $age= $row['age'];
        $isowner =$row["is_owner"];
        echo $uid . "" . $name . "" .$drivers_license. "" . $age . "" .$isowner. "<br>";
   }
?>