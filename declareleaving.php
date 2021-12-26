<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <subtitle>Declare Entrance </subtitle>

    <style>

.parent {
  text-align: center;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

.child {
  display: inline-block;
  height: 500px;
  width: 40%;
  border: 1px solid;
  padding: 1rem 1rem;
  vertical-align: middle;
}

input[type=text], select {
  
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=number], select {
  
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>

<body>

div class="parent">
    <div class="child">
        <h2> Park a Car</h2>
        <form action="declareentrance.php" method ="POST">
            <label for="uid"> Your User id: </label>
            <input type ="number" id="uid" name="uid" placeholder="Type your user id"><br>
            <label for="cid"> Your Car id: </label>
            <input type ="number" id="cid" name="cid" placeholder="Enter your car id"><br>
            <label for="parkname"> Park Name: </label>
            <input type ="text" id="parkname" name="parkname" placeholder="Enter your park name"><br>
            <label for="pid"> Parking area id: </label>
            <input type ="number" id="pid" name="pid" placeholder="Enter parking area id"><br>
        <!--     <label for="date"> Arrival Date: </label>
            <input type ="date" id="date" name="date" placeholder="Enter arrival date"><br> <br>
            <label for="time"> Arrival Time: </label>
            <input type ="time" id="time" name="time" placeholder="Enter arrival time"><br> <br>
            <input type="submit" value = "submit">             -->
        </form>
        </div>

</div>
<?php
include "config.php";

if (!empty($_POST["uid"])){
    $uid = $_POST["uid"];
    $cid = $_POST["cid"];
    $parkname = $_POST["parkname"];
    $pid =$_POST["pid"];

    date_default_timezone_set('Europe/Istanbul');
    $date = date('d-m-y');
    $time = date('h:i:s');

    $currCapacity = "Select curr_capacity FROM parking_areas WHERE pid = '$pid' ";
    $Capacity = "Select capacity FROM parking_areas WHERE pid = '$pid'";

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

</body>

