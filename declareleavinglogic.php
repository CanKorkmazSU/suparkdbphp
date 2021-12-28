<?php
include "config.php";
include "declareleaving.php";

//to-do: 

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

    $tidsql = "SELECT arrival_tid FROM parked_by WHERE departure_tid = 'NULL' and cid ='$cid' ";
    $result9= mysqli_query($db, $tidsql);
    $tidrow = mysqli_fetch_assoc($result9);
    $tid1 = $tidrow["tid"];
        // check first if there is available space at chosen parking area
    if($tidrow){
        $insertleavingdatetimesql = "INSERT INTO leaving_date_times(Date, Time, tid) VALUES ( '$date', '$time')";
        $a1 = mysqli_query($db, $insertleavingdatetimesql);

        $currCapacity = $currCapacity+1;
        $updatecurrcapacitysql = "UPDATE parking_areas SET curr_capacity = '$currCapacity' WHERE pid='$pid'";
        $a2 = mysqli_query($db, $updatecurrcapacitysql);

        $tidsq2 = "Select tid FROM leaving_date_times WHERE Time= '$time'";
        $result9= mysqli_query($db, $tidsq2);
        $tidrow = mysqli_fetch_assoc($result9);
        $tid2= $tidrow["tid"];

        $updateparkedbysql = "UPDATE parked_by Set departure_tid = '$tid2' where arrival_tid = '$tid1')";
        $a4 = mysqli_query($db, $updateparkedbysql);
    }else{
        echo "You car isn't parked.";
    }
}






if(!empty($_POST["plate_no"])){
    $plate_no = $_POST["plate_no"];

    // Return current date from the remote server
    date_default_timezone_set('Europe/Istanbul');
    $date = date('d-m-y');
    $time = date('h:i:s');
    $plate_no = str_replace(' ', '', $plate_no);
    $plate_no = strtoupper($plate_no);

    $sql_plate_no = "SELECT cid FROM cars WHERE plate_no = '$plate_no'";
    $result1= mysqli_query($db, $sql_plate_no);
    //$row = mysqli_fetch_assoc($result1);
    while($row = mysqli_fetch_assoc($result1)){
        $cid = $row["cid"];
        echo "Plate no $plate_no";
        echo "CID $cid";
    }
    $sql_plate_no;

    

}
else{
     echo "Plate no must be entered.";
}