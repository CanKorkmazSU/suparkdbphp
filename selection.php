<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<!-- 
1. select all users
2. select all cars
3. select parking areas

-->
<div align = "center">
    <br><br>
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
        $sql_statement= "SELECT * FROM users";
        $result= mysqli_query($db, $sql_statement);
        while($row = mysqli_fetch_assoc($result)){
            $uid= $row['uid'];
            $name= $row['name']; 
            $drivers_license = $row["drivers_license"];
            $age= $row['age'];
            $isowner =$row["is_owner"];
            echo $uid . " " . $name . " " .$drivers_license. " " . $age . " " .$isowner. "<br>";
       }
        
    }else if( $queryoption == "usersbyname"){
        echo '<form action="queryresultuserbyname.php" method ="POST">
        <label for="inputname"> Input Name for select query: </label>
        <input type ="text" id="inputname" name="inputname" placeholder="Input name to be queried"><br> 
        <input type="submit" value = "submit">
        <br><br>
    </form>';
       
    }
    else if( $queryoption == "usersbyid"){
        echo '<form action="queryresultuserbyid.php" method ="POST">
        <label for="inputid"> Input id for select query: </label>
        <input type ="number" id="inputid" name="inputid" placeholder="Input user id to be queried"><br> 
        <input type="submit" value = "submit">
        <br><br>
    </form>';
        $sql_statement= 'SELECT * FROM users WHERE uid = $_POST["inputid"]';
        $result= mysqli_query($db, $sql_statement);

   

    }
    else if( $queryoption == "allcars"){
        $sql_statement= "SELECT * FROM cars";
        $result= mysqli_query($db, $sql_statement);
        while($row = mysqli_fetch_assoc($result)){
            $did = $row["driver_id"];
            $plateno = $row["plate_no"];
            $caryear =$row["car_year"];
            $carbrand =$row["car_brand"];
            $carmodel =$row["car_model"];
            echo $did . " " . $plateno . " " .$caryear. " " . $carbrand . " " .$carmodel. "<br>";
        }
    }
    else if( $queryoption == "carsbybrand"){
        
        echo '<form action="queryresultscarsbybrand.php" method ="POST">
        <label for="inputbrand"> Input car brand for select query: </label>
        <input type ="text" id="inputbrand" name="inputbrand" placeholder="Input car brand to be queried"><br> 
        <input type="submit" value = "submit">
        <br><br>
    </form>';
    
    }
    else if( $queryoption == "carsbyplateno"){
        echo '<form action="queryresultcarsbyplateno.php" method ="POST">
        <label for="inputplate"> Input car plate no for select query: </label>
        <input type ="text" id="inputplate" name="inputplate" placeholder="Input car plate no to be queried"><br> 
        <input type="submit" value = "submit">
        <br><br>
        ';
  
    }
    else if( $queryoption == "allparea"){
        $sql_statement= 'SELECT * FROM parking_areas';
        $result= mysqli_query($db, $sql_statement);
        while(($row = mysqli_fetch_assoc($result))){
            $parkname = $row["pname"];
            $capacity = $row["capacity"];
            echo $parkname . " " . $capacity. "<br>";
       }   
    }
    else if( $queryoption == "pareabyname"){
        echo '<form action="queryresultpareabyname.php" method ="POST">
        <label for="inputparkname"> Input parking area name for select query: </label>
        <input type ="text" id="inputparkname" name="inputparkname" placeholder="Input parking area name to be queried"><br> 
        <input type="submit" value = "submit">
        <br><br>
    </form>';
    
}
}


?>

</body>

</html>
