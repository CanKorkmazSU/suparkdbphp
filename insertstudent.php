</html>
<head>
    <meta charset="UTF-8">
    <title>Insert Student</title>
</head>


<body>
    <div align = "center">
        <form action="insertstudent.php" method ="POST">
        <br><br>
            <label for="uid"> Uid: </label>
            <input type ="number" id="uid" name="uid" placeholder="Enter user id"><br> <br>
            <label for="education"> Education: </label>
            <input type ="text" id="education" name="education" placeholder="Enter education"><br> <br>
            <input type="submit" value = "submit">            
        </form>
    </div>
</body>

<?php
include "config.php";

if (!empty($_POST["uid"])){

    $uid = $_POST["uid"];
    $education = $_POST["education"];
 
    $insertpersonnel = "INSERT INTO student(uid, education) VALUES ( $uid, '$education')";
    $result = mysqli_query($db, $insertstudent);
}
else {
    echo "You did not enter your user id.";
}

?>

<html>