<?php
include "config.php";

if (!empty($_POST["uid"])){
    $uid = $_POST["uid"];
    $cid = $_POST["cid"];
    $pid =$_POST["pid"];
    $date =$_POST["date"];
    $time = $_POST["time"];

    $insertparkingdatetimesql = "INSERT INTO parking_date_times(Date, Time) VALUES ( '$date', '$time')";
    
    $gettid = "SELECT LAST_INSERT_ID()";
    $result1 = mysqli_query($db, $insertparkingdatetimesql);
    $result2 = mysqli_query($db, $gettid);

    while($row = mysqli_fetch_assoc($result2)) {
        $tid = $row['LAST_INSERT_ID()'];
        $insertsql = "INSERT INTO parked_by(uid, cid , pid, arrival_tid) VALUES ( $uid, $cid, $pid, $tid)";
        $result3 = mysqli_query($db, $insertsql);
    }

    header ("Location: admin.php");


}else{
    echo "The form can not contain empty places.";
}

?>
