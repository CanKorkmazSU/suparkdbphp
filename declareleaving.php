<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="parent">
    <div class="child">
        <h2> Declare Leaving</h2>
        <form action="declareleaving_action.php" method ="POST">
            <label for="plate_no"> Your Plate No: </label>
            <input type ="text" id="plate_no" name="plate_no" placeholder="Enter your plate no:"><br>
            <label for="arrival_date"> Arrival Date: </label>
            <input type ="date" id="arrival_date" name="arrival_date" placeholder="Enter arrival date"><br> <br>
            <label for="arrival_time"> Arrival Time: </label>
            <input type ="time" id="arrival_time" name="arrival_time" placeholder="Enter arrival time"><br> <br>
            
            <input type="submit" value = "submit">             
        </form>
    </div>
</div>

</body>
</html>