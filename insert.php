<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>ADMIN PAGE</title>

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
    <div class="parent">
        <div class="child">
        <h2> Insert New Car</h2>
            <form action="insertcar.php" method ="POST">
                <label for="driver_id"> Driver's user id: </label>
                <input type ="text" id="driver_id" name="driver_id" placeholder="Enter owner's user id"><br>
                <label for="plate_no"> Car's Plate No: </label>
                <input type ="text" id="plate_no" name="plate_no" placeholder="Car's plate no"><br>
                <label for="caryear"> Car year of production: </label>
                <input type ="number" id="caryear" name="caryear" placeholder="Car's production year"><br>
                <label for="car_brand"> Car brand: </label>
                <input type ="text" id="car_brand" name="car_brand" placeholder="Car's brand "><br>
                <label for="car_model"> Car model: </label>
                <input type ="text" id="car_model" name="car_model" placeholder="Car's model "><br>
                <input type="submit" value = "Submit">
            </form>
        </div>

        
        <div class="child">
        <h2> Insert New User</h2>
            <form action="insertuser.php" method ="POST">
                <label for="uname"> Your Name: </label>
                <input type ="text" id="uname" name="uname" placeholder="Type your name and surname"><br>
                <label for="age"> Your age: </label>
                <input type ="number" id="age" name="age" placeholder="Enter your age"><br>
                <label for="driverid"> Your drivers id: </label>
                <input type ="number" id="driverid" name="driverid" placeholder="Enter your driver id"><br>
                <label for="is_owner"> Do you own a car? </label>
                <select name="is_owner" id="is_owner">
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                </select>
                <input type="submit" value = "Submit">
            </form>
        </div>
    </div>

    <div class="parent">
    
    <div class="child">
        <h2> Insert New Parking Area</h2>
            <form action="insertparkingareas.php" method ="POST">
                <label for="parkname"> Parking Area name: </label>
                <input type ="text" id="parkname" name="parkname" placeholder="Enter Parking Area Name"><br>
                <label for="capacity"> Parking Area's capacity: </label>
                <input type ="text" id="capacity" name="capacity" placeholder="Vehicle Capacity"><br>
                <input type="submit" value = "Submit">
            </form>
        </div>

        
        <div class="child">
        <h2> Insert New Car Sticker</h2>
            <form action="insertcarsticker.php" method ="POST">
                <label for="sno"> Sticker No: </label>
                <input type ="number" id="sno" name="sno" placeholder="Enter owner's sno"><br>
                <label for="cid"> Car id: </label>
                <input type ="number" id="cid" name="cid" placeholder="Enter car id"><br>          
                <label for="issue_date"> Issue Date: </label>
                <input type ="date" id="issue_date" name="issue_date" placeholder="Enter issue date"><br><br>
                <label for="due_date"> Due Date: </label>
                <input type ="date" id="due_date" name="due_date" placeholder="Enter due date"><br>
                <input type="submit" value = "submit">
            </form>
        </div>
    </div>

    <div class="parent">
      <div class="child">
        <h2> Insert New Student</h2>
        <form action="insertstudent.php" method ="POST">
              <label for="uname"> Your Name: </label>
              <input type ="text" id="uname" name="uname" placeholder="Type your name and surname"><br>
              <label for="age"> Your age: </label>
              <input type ="number" id="age" name="age" placeholder="Enter your age"><br>
              <label for="driverid"> Your drivers id: </label>
              <input type ="number" id="driverid" name="driverid" placeholder="Enter your driver id"><br>
              <label for="is_owner"> Do you own a car? </label>
              <select name="is_owner" id="is_owner">
                  <option value="1">Yes</option>
                  <option value="0">No</option>
              </select><br>
              <label for="education"> Education: </label>
              <input type ="text" id="education" name="education" placeholder="Enter education level"><br> <br>
              <input type="submit" value = "submit">            
          </form>
      </div>

      <div class="child">
        <h2> Insert New Personnel</h2>
        <form action="insertpersonnel.php" method ="POST">
        <label for="uname"> Your Name: </label>
            <input type ="text" id="uname" name="uname" placeholder="Type your name and surname"><br>
            <label for="age"> Your age: </label>
            <input type ="number" id="age" name="age" placeholder="Enter your age"><br>
            <label for="driverid"> Your drivers id: </label>
            <input type ="number" id="driverid" name="driverid" placeholder="Enter your driver id"><br>
            <label for="is_owner"> Do you own a car? </label>
            <select name="is_owner" id="is_owner">
                <option value="1">Yes</option>
                <option value="0">No</option>
            </select><br>
            <label for="department"> Department: </label>
            <input type ="text" id="department" name="department" placeholder="Enter department name"><br> <br> 
            <input type="submit" value = "submit">            
          </form>    
      </div>
    </div>

    <div class="parent">
      <div class="child">
      <h2> Park a Car</h2>
      <form action="insertparkingcar.php" method ="POST">
        <label for="uid"> Your User id: </label>
        <input type ="number" id="uid" name="uid" placeholder="Type your user id"><br>
        <label for="cid"> Your Car id: </label>
        <input type ="number" id="cid" name="cid" placeholder="Enter your car id"><br>
        <label for="pid"> Parking area id: </label>
        <input type ="number" id="pid" name="pid" placeholder="Enter parking area id"><br>
        <label for="date"> Arrival Date: </label>
        <input type ="date" id="date" name="date" placeholder="Enter arrival date"><br> <br>
        <label for="time"> Arrival Time: </label>
        <input type ="time" id="time" name="time" placeholder="Enter arrival time"><br> <br>
        <input type="submit" value = "submit">            
      </form>
      </div>

      <div class="child">
      <h2> Leave the Parking Area</h2>
      <form action="insertleavingcar.php" method ="POST">
        <label for="cid"> Your Car id: </label>
        <input type ="number" id="cid" name="cid" placeholder="Enter your car id"><br>
        <label for="tid"> Arrival time id: </label>
        <input type ="number" id="tid" name="tid" placeholder="Enter arrival time id"><br>
        <label for="Date"> Leaving Date: </label>
        <input type ="date" id="date" name="date" placeholder="Enter leaving date"><br> <br>
        <label for="time"> Leaving Time: </label>
        <input type ="time" id="time" name="time" placeholder="Enter leaving time"><br> <br>
        <input type="submit" value = "submit">            
      </form>
    </div>


<?php 


include "config.php";

?>

</body>
</html>