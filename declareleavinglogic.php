<?php
include "config.php";
include "declareleaving.php";

//to-do: check if car already parked if necessary
//$sql_statement1 = "SELECT parkname FROM parking_areas WHERE parkname = '$parkname'";
//$resultp= mysqli_query($db, $sql_statement);

if (!empty($_POST["parkname"])){
    if(!empty($_POST["pid"])){
        $pid = $_POST["pid"];
        $uid = $_POST["uid"];
        $cid = $_POST["cid"];
        //$date =$_POST["date"];
        //$time = $_POST["time"];

        // Return current date from the remote server
        date_default_timezone_set('Europe/Istanbul');
        $date = date('d-m-y');
        $time = date('h:i:s');
        
        $sql_statement2 = "SELECT curr_capacity, capacity FROM parking_areas WHERE pid = '$pid'";
        $result= mysqli_query($db, $sql_statement);
        $row = mysqli_fetch_assoc($result);
        $Capacity =$row["capacity"];
        $currCapacity =$row["curr_capacity"];

        // check first if there is available space at chosen parking area
        if( 0 < $currCapacity){
            $deleteparkingdatetimesql = "INSERT INTO leaving_date_times(Date, Time) VALUES ( '$date', '$time')";
            $a1 = mysqli_query($db, $deleteparkingdatetimesql);

            $currCapacity = $currCapacity +1;
            $updatecurrcapacitysql = "UPDATE parking_areas SET curr_capacity = '$currCapacity' WHERE pid='$pid'";
            $a2 = mysqli_query($db, $updatecurrcapacitysql);

            $tidsql = "Select tid FROM parking_date_times WHERE Time= '$time'";
            $result9= mysqli_query($db, $tidsql);
            $tidrow = mysqli_fetch_assoc($result9);
            $tid = $tidrow["tid"];

            //$insertintoparkignareasql = "INSERT INTO parked_by(uid, cid , pid, arrival_tid) VALUES ( '$uid', '$cid', $pid, $tid)";
            //$a4 = mysqli_query($db, $insertintoparkignareasql);

        }
    }
    else{
        echo "Parking area is already empty.";
    }
}   
else{
    echo "There is not such park name.";
}