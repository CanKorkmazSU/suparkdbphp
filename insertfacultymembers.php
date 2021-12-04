</html>
<head>
    <meta charset="UTF-8">
    <title>Insert Faculty Member</title>
</head>


<body>
    <div align = "center">
        <form action="insertfacultymember.php" method ="POST">
        <br><br>
            <label for="uid"> Uid: </label>
            <input type ="number" id="uid" name="uid" placeholder="Enter user id"><br> <br>
            <select name="stays_in_campus" id="stays_in_campus">
                <option value="true">1</option>
                <option value="true">0</option>
            </select>       
        </form>
    </div>
</body>

<?php
include "config.php";

if (isset($_POST["uid"])){

    $uid = $_POST["uid"];
    $stays_in_campus = $_POST["stays_in_campus"];
 
    $insertfacultymember = "INSERT INTO faculty_members(uid, stays_in_campus) VALUES ( $uid, '$stays_in_campus')";
    $result = mysqli_query($db, $insertfacultymember);
}
else {
    echo "You did not enter your user id.";
}

?>

<html>