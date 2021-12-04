<?php
include "config.php";

if (!empty($_POST["parkname"]) and !empty($_POST["capacity"])){
    $parkname = $_POST["parkname"];
    $capacity = $_POST["capacity"];

    $insertpareasql = "INSERT INTO parking_areas(pname, capacity) VALUES ( '$parkname' , $capacity )";
    $result = mysqli_query($db, $insertpareasql);
}else{
    echo "Park name or capacity can not be empty.";
}

?>