<!DOCTYPE html>
<html>
<head>
	<title>SABANCI UNIVERSITY PERSONAL VEHICLE AND PARKING MANAGEMENT SYSTEM </title>
	<link rel="stylesheet" href="style.css">
</head>
<body>



<?php
include "config.php";
include "declareleaving.php";

//to-do: 

if(!empty($_POST["plate_no"])){
    $plate_no = $_POST["plate_no"];
    $arrival_time = $_POST["arrival_time"];
    $arrival_date = $_POST["arrival_date"];

    // Return current date from the remote server
    date_default_timezone_set('Europe/Istanbul');
    $date = date('y-m-d');
    $time = date('h:i:s');
    $plate_no = str_replace(' ', '', $plate_no);
    $plate_no = strtoupper($plate_no);

    $sql_plate_no = "SELECT cid FROM cars WHERE plate_no = '$plate_no'";
    
    $cid = "";
    $result1= mysqli_query($db, $sql_plate_no);
    while($row = mysqli_fetch_assoc($result1)){
        
        $cid = $row["cid"];
        echo "Plate no $plate_no";
        echo "CID $cid";
        
    }
    if ($cid == ""){
?>
        <div class="parent" align ="center">
            <h1><b>OOPS ERROR HAPPENED</b></h1>
            <p>You entered a wrong plate number.<p>
            <br>
            <a href="index.php" class="button button1">MAIN MENU</a>
        </div>
<?php
        return;
    }
    $tid = "";
    $sql_arrival_tid = "SELECT tid FROM parking_date_times WHERE Date = '$arrival_date' and Time = '$arrival_time'";
    $result23= mysqli_query($db, $sql_arrival_tid);
    while($row = mysqli_fetch_assoc($result23)){
        
        $tid = $row["tid"];
        echo "Plate no $plate_no";
        echo "TID $tid";
        
    }
    if ($tid == ""){
        ?>
                <div class="parent" align ="center">
                    <h1><b>OOPS ERROR HAPPENED</b></h1>
                    <p>You entered a wrong arrival date and time.<p>
                    <br>
                    <a href="index.php" class="button button1">MAIN MENU</a>
                </div>
        <?php
                return;
    }

    $insertleavingdatetimesql = "INSERT INTO leaving_date_times(Date, Time) VALUES ( '$date', '$time')";

    $gettid = "SELECT LAST_INSERT_ID()";
    $result1 = mysqli_query($db, $insertleavingdatetimesql);
    $result2 = mysqli_query($db, $gettid);

    while($row = mysqli_fetch_assoc($result2)) {
        $leave_tid = $row['LAST_INSERT_ID()'];
        $updatesql = "UPDATE parked_by SET departure_tid = $leave_tid WHERE cid = $cid AND arrival_tid = $tid";
        $result3 = mysqli_query($db, $updatesql);
    }


    $sql_statement_all= "SELECT P.pname, P.pid FROM cars C, parked_by B, parking_areas P WHERE C.cid = B.cid and P.pid = B.pid and C.cid = $cid and B.departure_tid = $leave_tid";
    $result5 = mysqli_query($db, $sql_statement_all);
    while($row = mysqli_fetch_assoc($result5)) {
        $pname = $row["pname"];
        $pid = $row["pid"];
        ?>
                <div class="parent" align ="center">
                    <h1><b>SUCCESS</b></h1>
                    <p>You are leaving the campus. You can find your car at: <p>
                        <?php echo $pname ?> 
                    <br>
                    <a href="index.php" class="button button1">MAIN MENU</a>
                </div>
        <?php

        // Increase currCapacity
        $sql_currcap = "UPDATE parking_areas SET curr_capacity = curr_capacity - 1 WHERE parking_areas.pid = $pid";
        $result6 = mysqli_query($db, $sql_currcap);

    } 
}
else{
     echo "Plate no must be entered.";
}

//$sql_statement= SELECT P.pname FROM cars S, parked_by R, parking_area P WHERE S.cid = R.cid and P.pid = R.pid;
?>


</body>
</html>