</html>
<head>
    <meta charset="UTF-8">
    <title>Insert Car Sticker</title>
</head>


<body>
    <div align = "center">
        <form action="insertcarsticker.php" method ="POST">
        <br><br>
            <label for="sno"> Driver's sno: </label>
            <input type ="number" id="sno" name="sno" placeholder="Enter owner's sno"><br> <br>
            <label for="cid"> Car id: </label>
            <input type ="number" id="cid" name="cid" placeholder="Enter car id"><br> <br>            
            <label for="issue_date"> Issue Date: </label>
            <input type ="date" id="issue_date" name="issue_date" placeholder="Enter issue date"><br> <br>
            <label for="due_date"> Due Date: </label>
            <input type ="date" id="due_date" name="due_date" placeholder="Enter due date"><br> <br>
            <input type="submit" value = "submit">
        </form>
    </div>
</body>

<?php
include "config.php";

if (isset($_POST["sno"])){

    $sno = $_POST["sno"];
    $cid = $_POST["cid"];
    $issue_date =$_POST["issue_date"];
    $due_date =$_POST["due_date"];
    
    $insertcarstickersql = "INSERT INTO car_sticker(sno, cid, issue_date, due_date) VALUES ( $sno, $cid, '$issue_date', '$due_date')";
    $result = mysqli_query($db, $insertcarstickersql);
}

?>

<html>