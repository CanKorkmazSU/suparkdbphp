<?php
include "config.php";
include "declareentrance.php";


//to-do: check if the car is currently parked (departure id not null)
if (!empty($_POST["uid"])){
    $uid = $_POST["uid"];
    $cid = $_POST["cid"];
    $pid =$_POST["pid"];

    // Return current date from the remote server
    date_default_timezone_set('Europe/Istanbul');
    $date = date('d-m-y');
    $time = date('h:i:s');

    $sql_statement = "SELECT curr_capacity, capacity FROM parking_areas WHERE pid = '$pid'";
    $result= mysqli_query($db, $sql_statement);
    $row = mysqli_fetch_assoc($result);
    $Capacity =$row["capacity"];
    $currCapacity =$row["curr_capacity"];

    // check if the car is already parked (one row with departure_tid = NULL exists)
    $checkifalreadyinsql = "SELECT * FROM parked_by WHERE cid = '$cid' and departure_tid IS NULL";
    $resultx= mysqli_query($db, $checkifalreadyinsql);
    $count = 0;
    while($row = mysqli_fetch_assoc($resultx)){
        $count +=1;
    }    
    // check first if there is available space at chosen parking area and car isn't already parked
    if(  $count == 0 &&  0 < $currCapacity){
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
    else{
        echo "Your Car is already parked.";
    }
}
?>
