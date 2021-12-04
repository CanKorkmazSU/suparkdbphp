<?php
include "config.php";

if (isset($_POST["parkname"])){
    Echo "The form is set.";
    $parkname = $_POST["parkname"];
    $capacity = $_POST["capacity"];

    $insertpareasql = "INSERT INTO parking_areas(pname, capacity) VALUES ( '$parkname' , $capacity )";
    $result = mysqli_query($db, $insertpareasql);
}else{
    echo "The form is not set.";
}

?>
