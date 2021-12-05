<?php
include "config.php";

if (!empty($_POST["uname"])){
    $name = $_POST["uname"];
    $drivers_licecne = $_POST["driverid"];
    $age =$_POST["age"];
    $isowner =$_POST["is_owner"];
    $education = $_POST["education"];
    $insertusersql = "INSERT INTO users(name, drivers_license , age, is_owner) VALUES ( '$name', $drivers_licecne,  $age, $isowner )";
    $getuidsql = "SELECT LAST_INSERT_ID()";
    $result1 = mysqli_query($db, $insertusersql);
    $result2 = mysqli_query($db, $getuidsql);

    while($row = mysqli_fetch_assoc($result2)) {
        $idd = $row['LAST_INSERT_ID()'];
        $insertstudent = "INSERT INTO students(uid, education) VALUES ( $idd, '$education')";
        $result3 = mysqli_query($db, $insertstudent);
    }
    
    header ("Location: admin.php");

}
else {
    echo "You did not enter name and surname.";
}

?>

