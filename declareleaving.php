<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="parent">
    <div class="child">
        <h2> Park a Car</h2>
        <form action="declareleavinglogic.php" method ="POST">
            <!-- <label for="plate_no"> Your Plate No: </label>
            <input type ="text" id="plate_no" name="plate_no" placeholder="Enter your plate no:"><br> -->
            <label for="uid"> Your User id: </label>
            <input type ="number" id="uid" name="uid" placeholder="Type your user id"><br>
            <label for="cid"> Your Car id: </label>
            <input type ="number" id="cid" name="cid" placeholder="Enter your car id"><br>
            <label for="pid"> Parking area id: </label>
            <input type ="number" id="pid" name="pid" placeholder="Enter parking area id"><br>
            <input type="submit" value = "submit">             
        </form>
    </div>
</div>

</body>
</html>



