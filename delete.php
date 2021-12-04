<?php
include "config.php";

if ($db->connect_error){
    die("Connection failed: " . $db->connect_error);
}

if(!empty($_POST['uids'])){
    $uid = $_POST['uids'];
    $sql_statement = "DELETE FROM users WHERE uid = $uid";
    $result = mysqli_query($db, $sql_statement);
    while($row_mysqli_fetch_assoc($result)){
        echo "Your result is " . $result;
    }
}
else if(!empty($_POST['driver_id'])){
    $driver_id = $_POST['driver_id'];
    $sql_statement = "DELETE FROM cars WHERE driver_id = $driver_id";
    $result = mysqli_query($db, $sql_statement);
    while($row_mysqli_fetch_assoc($result)){
        echo "Your result is " . $result;
    }
}
else if(!empty($_POST['sno'])){
    $sno = $_POST['sno'];
    $sql_statement = "DELETE FROM car_sticker WHERE sno = $sno";
    $result = mysqli_query($db, $sql_statement);
    while($row_mysqli_fetch_assoc($result)){
        echo "Your result is " . $result;
    }
}
 
else if(!empty($_POST['cid'])){
    $cid = $_POST['cid'];
    $sql_statement = "DELETE FROM parked_by WHERE cid = $cid";
    $result = mysqli_query($db, $sql_statement);
    while($row_mysqli_fetch_assoc($result)){
        echo "Your result is " . $result;
    }
}
else if(!empty($_POST['parkname'])){
    $parkename = $_POST['parkname'];
    $sql_statement = "DELETE FROM parking_areas WHERE parkname = $parkname";
    $result = mysqli_query($db, $sql_statement);
    while($row_mysqli_fetch_assoc($result)){
        echo "Your result is " . $result;
    }
}
else if(!empty($_POST['uid'])){
    $uid = $_POST['uid'];
    $sql_statement = "DELETE FROM personnel WHERE uid = $uid";
    $result = mysqli_query($db, $sql_statement);
    while($row_mysqli_fetch_assoc($result)){
        echo "Your result is " . $result;
    }
}

else if(!empty($_POST['uid'])){
    $uid = $_POST['uid'];
    $sql_statement = "DELETE FROM students WHERE uid = $uid";
    $result = mysqli_query($db, $sql_statement);
    while($row_mysqli_fetch_assoc($result)){
        echo "Your result is " . $result;
    }
}
else if(!empty($_POST['uname'])){
    $parkename = $_POST['uname'];
    $sql_statement = "DELETE FROM users WHERE uname = $uname";
    $result = mysqli_query($db, $sql_statement);
    while($row_mysqli_fetch_assoc($result)){
        echo "Your result is " . $result;
    }
}
if (mysqli_query($db, $sql_statement)){
    echo "Record deleted successfully";
} 
else{
    echo "Error deleting record: " . mysqli_error($db);
}


?>