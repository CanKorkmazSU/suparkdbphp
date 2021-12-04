</html>
<head>
    <meta charset="UTF-8">
    <title>Insert Leaving Date Time</title>
</head>


<body>
    <div align = "center">
        <form action="insertleavingdatetime.php" method ="POST">
        <br><br>
            <label for="Date"> Date: </label>
            <input type ="date" id="Date" name="Date" placeholder="Enter parking date"><br> <br>
            <label for="Time"> Time: </label>
            <input type ="number" id="Time" name="Time" placeholder="Enter parking time"><br> <br>            
            <label for="tid"> Tid: </label>
            <input type ="number" id="tid" name="tid" placeholder="Enter tid"><br> <br>
        </form>
    </div>
</body>

<?php
include "config.php";

if (isset($_POST["Date"])){

    $Date = $_POST["Date"];
    $Time = $_POST["Time"];
    $tid =$_POST["tid"];
    
    $insertleavingdatetimesql = "INSERT INTO leaving_date_times(Date, Time, tid) VALUES ( '$Date', '$Time', $tid)";
    $result = mysqli_query($db, $insertleavingdatetimesql);
}


?>

<html>