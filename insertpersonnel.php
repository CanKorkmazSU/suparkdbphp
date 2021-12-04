</html>
<head>
    <meta charset="UTF-8">
    <title>Insert Personnel</title>
</head>


<body>
    <div align = "center">
        <form action="insertpersonnel.php" method ="POST">
        <br><br>
            <label for="uid"> Uid: </label>
            <input type ="number" id="uid" name="uid" placeholder="Enter user id"><br> <br>
            <label for="department"> Department: </label>
            <input type ="text" id="department" name="department" placeholder="Enter department"><br> <br> 
            <input type="submit" value = "submit">           
        </form>
    </div>
</body>

<?php
include "config.php";

if (isset($_POST["uid"])){

    $uid = $_POST["uid"];
    $department = $_POST["department"];
 
    $insertpersonnel = "INSERT INTO personnel(uid, department) VALUES ( $uid, '$department')";
    $result = mysqli_query($db, $insertpersonnel);
}
else {
    echo "You did not enter your user id.";
}

?>

<html>