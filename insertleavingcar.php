<?php
include "config.php";

if (!empty($_POST["cid"])){
    $cid = $_POST["cid"];
    $tid = $_POST["tid"];
    $date =$_POST["date"];
    $time = $_POST["time"];

    $insertleavingdatetimesql = "INSERT INTO leaving_date_times(Date, Time) VALUES ( '$date', '$time')";
    
    $gettid = "SELECT LAST_INSERT_ID()";
    $result1 = mysqli_query($db, $insertleavingdatetimesql);
    $result2 = mysqli_query($db, $gettid);

    while($row = mysqli_fetch_assoc($result2)) {
        $leave_tid = $row['LAST_INSERT_ID()'];
        $updatesql = "UPDATE parked_by SET departure_tid = $leave_tid WHERE cid = $cid AND arrival_tid = $tid";
        $result3 = mysqli_query($db, $updatesql);
    }

    header ("Location: admin.php");


}else{
    echo "The form can not contain empty places.";
}

?>
