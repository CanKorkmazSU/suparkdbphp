<?php
include "config.php";

if (!empty($_POST["uname"])){
    $name = $_POST["uname"];
    $drivers_licecne = $_POST["driverid"];
    $age =$_POST["age"];
    $isowner =$_POST["is_owner"];
    $department = $_POST["department"];
    $insertusersql = "INSERT INTO users(name, drivers_license , age, is_owner) VALUES ( '$name', $drivers_licecne,  $age, $isowner )";
    $getuidsql = "SELECT LAST_INSERT_ID()";
    $result1 = mysqli_query($db, $insertusersql);
    $result2 = mysqli_query($db, $getuidsql);

    while($row = mysqli_fetch_assoc($result2)) {
        $uid = $row['LAST_INSERT_ID()'];
        $insertpersonnel = "INSERT INTO personnel(uid, department) VALUES ( $uid, '$department')";
        $result = mysqli_query($db, $insertpersonnel);
    }

    header ("Location: admin.php");
}
else {
    echo "You did not enter your name and surname.";
}

?>

<html>