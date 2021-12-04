<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>ADMIN PAGE</title>

    <style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=number], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
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
    <h4> Insert New Car</h4>
    <div>
        <form action="insertcar.php" method ="POST">
            <label for="driver_id"> Driver's user id: </label>
            <input type ="text" id="driver_id" name="driver_id" placeholder="Enter owner's user id">
            <label for="plate_no"> Car's Plate No: </label>
            <input type ="text" id="plate_no" name="plate_no" placeholder="Car's plate no">
            <label for="caryear"> Car year of production: </label>
            <input type ="number" id="caryear" name="caryear" placeholder="Car's production year">
            <label for="car_brand"> Car brand: </label>
            <input type ="text" id="car_brand" name="car_brand" placeholder="Car's brand ">
            <label for="car_model"> Car model: </label>
            <input type ="text" id="car_model" name="car_model" placeholder="Car's model ">
            <input type="submit" value = "Submit">
        </form>
    </div>

    <h4> Insert New User</h4>
    <div>
        <form action="insertuser.php" method ="POST">
            <label for="uname"> Your Name: </label>
            <input type ="text" id="uname" name="uname" placeholder="Type your name and surname">
            <label for="age"> Your age: </label>
            <input type ="number" id="age" name="age" placeholder="Enter your age">
            <label for="driverid"> Your drivers id: </label>
            <input type ="number" id="driverid" name="driverid" placeholder="Enter your driver id">
            <label for="is_owner"> Do you own a car? </label>
            <select name="is_owner" id="is_owner">
                <option value=1>Yes</option>
                <option value=0">No</option>
            </select>
            <input type="submit" value = "Submit">
        </form>
    </div>

    <h4> Insert New Parking Area</h4>
    <div>
        <form action="insertparkingareas.php" method ="POST">
            <label for="parkname"> Parking Area name: </label>
            <input type ="text" id="parkname" name="parkname" placeholder="Enter Parking Area Name">
            <label for="capacity"> Parking Area's capacity: </label>
            <input type ="text" id="capacity" name="capacity" placeholder="Vehicle Capacity">
            <input type="submit" value = "Submit">
        </form>
    </div>

    <h4> Insert New Car Sticker</h4>
    <div>
        <form action="insertcarsticker.php" method ="POST">
            <label for="sno"> Driver's sticker No: </label>
            <input type ="number" id="sno" name="sno" placeholder="Enter owner's sno">
            <label for="cid"> Car id: </label>
            <input type ="number" id="cid" name="cid" placeholder="Enter car id">          
            <label for="issue_date"> Issue Date: </label>
            <input type ="date" id="issue_date" name="issue_date" placeholder="Enter issue date">
            <label for="due_date"> Due Date: </label>
            <input type ="date" id="due_date" name="due_date" placeholder="Enter due date">
            <input type="submit" value = "submit">
        </form>
    </div>


<?php 



include "config.php";

?>

</body>
</html>