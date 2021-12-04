<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
<!-- 
1. select all users
2. select all cars
3. select parking areas

-->
<div align = "center">
    <form action="selection.php" method ="POST">
        <select name="selectsqlstatement" id="selectsqlstatement">
            <option value="allusers">Select all Users</option>
            <option value="usersbyname">Select users by name</option>
            <option value="usersbyid">Select users by id</option>
            <option value="allcars">Select all cars</option>
            <option value="carsbybrand">Select cars by brand</option>
            <option value="carsbyplateno">Select cars by plate no</option>
            <option value="allparea">Select all parking areas</option>
            <option value="pareabyname">Select parking area by name</option>
        </select>
        <input type="submit" value = "submit">
    </form>
    <br><br>
</div>


<?php
include "config.php";

if (isset($_POST["selectsqlstatement"])){

    $queryoption = $_POST["selectsqlstatement"];
   
    if( $queryoption == "allusers"){
        $uid= $row['uid'];
        $name= $row['name']; 
        $drivers_license = $row["drivers_license"];
        $age= $row['age'];
        $isowner =$row["is_owner"];
        echo $uid . "" . $name . "" .$drivers_license. "" . $age . "" .$isowner. "<br>";
    }
    else if( $queryoption == "usersbyname"){
        echo '<form action="selection.php" method ="POST">
        <label for="inputname"> Input Name for select query: </label>
        <input type ="text" id="inputname" name="inputname" placeholder="Input name to be queried"><br> 
        <input type="submit" value = "submit">
        <br><br>
    </form>';
    }
    else if( $queryoption == "usersbyid"){
        
    }
    else if( $queryoption == "allcars"){
        $did = $_POST["driver_id"];
        $plateno = $_POST["plate_no"];
        $caryear =$_POST["caryear"];
        $carbrand =$_POST["car_brand"];
        $carmodel =$_POST["car_model"];
        echo $did . "" . $plateno . "" .$caryear. "" . $carbrand . "" .$carmodel. "<br>";

    }
    else if( $queryoption == "carsbybrand"){
        
    }
    else if( $queryoption == "carsbyplateno"){
        
    }
    else if( $queryoption == "allparea"){
        
    }
    else if( $queryoption == "pareabyname"){
        
    }
    //$insertcarsql = "INSERT INTO cars(driver_id, plate_no, car_year, car_brand, car_model) VALUES ( $did, '$plateno', $caryear, '$carbrand', '$carmodel' )";
    $result = mysqli_query($db, $insertcarsql);
    
}


?>

<form action="selection.php" method ="POST">
    <label for="inputname"> Input Name for select query: </label>
    <input type ="text" id="inputname" name="inputname" placeholder="Input name to be queried"><br> 
    <input type="submit" value = "submit">
    <br><br>
</form>

</body>

</html>