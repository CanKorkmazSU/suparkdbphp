</html>
<head>
    <meta charset="UTF-8">
    <title>Insert User</title>
</head>


<body>
    <div align = "center">
        <form action="insertuser.php" method ="POST">
        <br><br>
            <label for="uname"> Your Name: </label>
            <input type ="text" id="uname" name="uname" placeholder="Type your name"><br> <br>
            <!--  <label for="username"> Your SU Username: </label>
            <input type ="text" id="username" name="username" placeholder="Type your username"><br><br> -->
            <label for="uage"> Your age: </label>
            <input type ="number" id="uage" name="age" placeholder="Enter your age"><br><br>
            <label for="driverid"> Your drivers id: </label>
            <input type ="number" id="driverid" name="driverid" placeholder="Enter your driver id"><br><br>
            <select name="is_owner" id="isowner">
                <option value="true">1</option>
                <option value="true">0</option>
            </select>
            <br><br>
            <input type="submit" value = "submit">
        </form>
    </div>
</body>

<?php
include "config.php";

if (isset($_POST["uname"])){

    $name = $_POST["uname"];
    $drivers_licecne = $_POST["driverid"];
    $age =$_POST["age"];
    $isowner =$_POST["is_owner"];
    //$uid = $_POST["uid"];;
    
    $insertusersql = "INSERT INTO users(name, drivers_license , age, is_owner) VALUES ( '$name', $drivers_licecne,  $age, $isowner )";
    $result = mysqli_query($db, $insertusersql);
}
else {
    echo "You did not enter your name.";
}
?>

<html>