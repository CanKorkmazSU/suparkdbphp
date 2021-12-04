</html>
<head>
    <meta charset="UTF-8">
    <title>Insert Parked by</title>
</head>


<body>
    <div align = "center">
        <form action="insertparkedby.php" method ="POST">
        <br><br>
            <label for="cid"> Car id: </label>
            <input type ="number" id="cid" name="cid" placeholder="Enter car id"><br> <br>  
            <label for="uid"> Uid: </label>
            <input type ="number" id="uid" name="uid" placeholder="Enter user id"><br> <br>
            <label for="pid"> Pid: </label>
            <input type ="number" id="pid" name="pid" placeholder="Enter personnel id"><br> <br>
            <label for="arrival_tid"> Arrival Tid: </label>
            <input type ="date" id="arrival_tid" name="arrival_tid" placeholder="Enter user arrival tid"><br> <br>
            <label for="departure_tid"> Departure Tid: </label>
            <input type ="date" id="departure_tid" name="departure_tid" placeholder="Enter user departure tid"><br> <br>
            <input type="submit" value = "submit">
        </form>
    </div>
</body>

<?php
include "config.php";

if (isset($_POST["cid"])){

    $cid = $_POST["cid"];
    $uid = $_POST["uid"];
    $pid = $_POST["pid"];
    $arrival_tid = $_POST["arrival_tid"];
    $departure_tid = $_POST["departure_tid"];
    
    $insertparkedby = "INSERT INTO parked_by(cid, uid , pid, arrival_tid, departure_tid) VALUES ( $cid, $uid,  $pid, '$arrival_tid', '$departure_tid' )";
    $result = mysqli_query($db, $insertparkedby);
}
else {
    echo "You did not enter your car id.";
}
?>

<html>