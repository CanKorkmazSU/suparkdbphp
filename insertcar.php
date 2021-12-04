</html>
<head>
    <meta charset="UTF-8">
    <title>Insert Car</title>
</head>


<body>
    <div align = "center">
        <form action="insertcar.php" method ="POST">
        <br><br>
            <label for="driver_id"> Driver's user id: </label>
            <input type ="text" id="driver_id" name="driver_id" placeholder="Enter owner's user id"><br> <br>
            <label for="plate_no"> Car's Plate No: </label>
            <input type ="text" id="plate_no" name="plate_no" placeholder="Car's plate no"><br><br>
            <label for="caryear"> Car year of production: </label>
            <input type ="number" id="caryear" name="caryear" placeholder="Enter Car's production year"><br><br>
            <label for="car_brand"> Car brand: </label>
            <input type ="text" id="car_brand" name="car_brand" placeholder="Car's brand "><br><br>
            <label for="car_model"> Car model: </label>
            <input type ="text" id="car_model" name="car_model" placeholder="Car's model "><br><br>
            <input type="submit" value = "submit">
        </form>
    </div>
</body>

<?php
include "config.php";

if (isset($_POST["driver_id"])){

    $did = $_POST["driver_id"];
    $plateno = $_POST["plate_no"];
    $caryear =$_POST["caryear"];
    $carbrand =$_POST["car_brand"];
    $carmodel =$_POST["car_model"];
    
    $insertcarsql = "INSERT INTO cars(driver_id, plate_no, car_year, car_brand, car_model) VALUES ( $did, '$plateno', $caryear, '$carbrand', '$carmodel' )";
    $result = mysqli_query($db, $insertcarsql);
}

?>

<html>