<?php
include "config.php";

if (!empty($_POST["parkname"]) and !empty($_POST["capacity"])){
    $parkname = $_POST["parkname"];
    $capacity = $_POST["capacity"];

    $insertpareasql = "INSERT INTO parking_areas(pname, capacity, curr_capacity) VALUES ( '$parkname' , $capacity, $capacity )";
    $result = mysqli_query($db, $insertpareasql);

    header ("Location: admin.php");
    
}else{
    echo "Park name or capacity can not be empty.";
}

?>
