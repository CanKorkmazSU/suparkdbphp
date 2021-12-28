<html>
<head>
	<title>SABANCI UNIVERSITY PERSONAL VEHICLE AND PARKING MANAGEMENT SYSTEM </title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

<?php
include "config.php";

if (isset($_POST["selectsign"])){
    $queryoption = $_POST["selectsign"];
    if($queryoption == "student"){
?>

<div class="parent">
      <div class="child">
        <h2> Sign in as a student</h2>
        <form action="signstudent.php" method ="POST">
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
    </div>
<?php
    }
    else if($queryoption == "personnel"){
?>

<div class="parent">
    <div class="child">
        <h2> Sign in as a personnel</h2>
        <form action="signpersonnel.php" method ="POST">
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

<?php
    }
    else if($queryoption == "user"){
?>

    <div class="parent">
        <div class="child">
        <h2> Sign in as a user</h2>
            <form action="signuser.php" method ="POST">
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

<?php
    }


}

?>



</body>
</html>