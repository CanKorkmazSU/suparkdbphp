<?php
include "config.php";

if (!empty($_POST["driver_id"]) and !empty($_POST["plate_no"])){
    $did = $_POST["driver_id"];
    $plateno = $_POST["plate_no"];
    $caryear =$_POST["caryear"];
    $carbrand =$_POST["car_brand"];
    $carmodel =$_POST["car_model"];
    
    $insertcarsql = "INSERT INTO cars(driver_id, plate_no, car_year, car_brand, car_model) VALUES ( $did, '$plateno', $caryear, '$carbrand', '$carmodel' )";
    $result = mysqli_query($db, $insertcarsql);
}else{
    echo "Driver id or plate no can not be empty.";
}

?>