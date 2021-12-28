<?php
include "config.php";
include "declareentrance.php";


//to-do: check if the car is currently parked (departure id not null)
if (!empty($_POST["uid"])){
    $uid = $_POST["uid"];
    $cid = $_POST["cid"];
    $pid =$_POST["pid"];
    //$date =$_POST["date"];
    //$time = $_POST["time"];

    // Return current date from the remote server
    date_default_timezone_set('Europe/Istanbul');
    $date = date('d-m-y');
    $time = date('h:i:s');

    $sql_statement = "Select curr_capacity, capacity FROM parking_areas WHERE pid = '$pid'";
    $result= mysqli_query($db, $sql_statement);
    $row = mysqli_fetch_assoc($result);
    $Capacity =$row["capacity"];
    $currCapacity =$row["curr_capacity"];

    // check first if there is available space at chosen parking area
    if( 0 < $currCapacity){
        $insertparkingdatetimesql = "INSERT INTO parking_date_times(Date, Time) VALUES ( '$date', '$time')";
        $a1 = mysqli_query($db, $insertparkingdatetimesql);

        $currCapacity = $currCapacity -1;
        $updatecurrcapacitysql = "UPDATE parking_areas SET curr_capacity = '$currCapacity' WHERE pid='$pid'";
        $a2 = mysqli_query($db, $updatecurrcapacitysql);

        $tidsql = "Select tid FROM parking_date_times WHERE Time= '$time'";
        $result9= mysqli_query($db, $tidsql);
        $tidrow = mysqli_fetch_assoc($result9);
        $tid = $tidrow["tid"];

        $insertintoparkignareasql = "INSERT INTO parked_by(uid, cid , pid, arrival_tid) VALUES ( '$uid', '$cid', $pid, $tid)";
        $a4 = mysqli_query($db, $insertintoparkignareasql);
    }
}
?>
