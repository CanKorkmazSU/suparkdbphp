<?php
include "config.php";

if (!empty($_POST["uname"])){
    $name = $_POST["uname"];
    $drivers_licecne = $_POST["driverid"];
    $age =$_POST["age"];
    $isowner =$_POST["is_owner"];
    
    $insertusersql = "INSERT INTO users(name, drivers_license , age, is_owner) VALUES ( '$name', $drivers_licecne,  $age, $isowner )";
    $result = mysqli_query($db, $insertusersql);

    header ("Location: signsuccess.php");


}else{
    echo "The form can not contain empty places.";
}

?>