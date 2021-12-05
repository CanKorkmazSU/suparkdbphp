<?php
include "config.php";

if (!empty($_POST["sno"])){

    $sno = $_POST["sno"];
    $cid = $_POST["cid"];
    $issue_date =$_POST["issue_date"];
    $due_date =$_POST["due_date"];
    
    $insertcarstickersql = "INSERT INTO car_sticker(sno, cid, issue_date, due_date) VALUES ( $sno, $cid, '$issue_date', '$due_date')";
    $result = mysqli_query($db, $insertcarstickersql);

    header ("Location: admin.php");
}else{
    echo "Form can not be empty.";
}

?>
