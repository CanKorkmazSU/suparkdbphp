<html>
<head>
    <meta charset="UTF-8">
</head>
<body>

<div align = "center">
    <br><br>
    <form action="delete.php" method ="POST">
        <select name="selectdeletestatement" id="selectdeletestament">
            <option value="deluserbyid">Delete User By Id</option>
            <option value="deluserbyname">Delete User By Name</option>
           <!--  <option value="delpersonnelbyid">Delete Personnel By Id</option>
            <option value="delstubyid">Delete Student By Id</option> -->

            <option value="delcarbydid">Delete Car By Driver Id</option>
            <option value="delcarbycid">Delete Car By Car Id</option>
            <option value="delstickerbysno">Delete Sticker By Sticker No</option>

            <option value="delpareabyname">Delete parking area by name</option>

        </select>
        <input type="submit" value = "submit">
    </form>
    <br><br>
</div>


<?php
include "config.php";

if (isset($_POST["selectdeletestatement"])){
    $queryoption = $_POST["selectdeletestatement"];
    if($queryoption == "deluserbyid"){
        echo '<form action="deleteuserbyid.php" method ="POST">
        <label for="inputdelid"> Input User id to be deleted: </label>
        <input type ="text" id="inputdelid" name="inputdelid" placeholder="Input user id of the row to be deleted"><br> 
        <input type="submit" value = "submit">
        <br><br>
    </form>';
    }
    else if($queryoption == "deluserbyname"){
        echo '<form action="deleteuserbyname.php" method ="POST">
        <label for="inputdelname"> Input User name to be deleted: </label>
        <input type ="text" id="inputdelname" name="inputdelname" placeholder="Input user name of the row to be deleted"><br> 
        <input type="submit" value = "submit">
        <br><br>
    </form>';
    }
    else if($queryoption == "delcarbydid"){
        echo '<form action="deletecarbydid.php" method ="POST">
        <label for="inputdeldid"> Input driver_id of the car to be deleted: </label>
        <input type ="text" id="inputdeldid" name="inputdeldid" placeholder="Input driver id of the cars row to be deleted"><br> 
        <input type="submit" value = "submit">
        <br><br>
    </form>';
    }
    else if($queryoption == "delcarbycid"){
        echo '<form action="deletecarbycid.php" method ="POST">
        <label for="inputdelcid"> Input car id to be deleted: </label>
        <input type ="text" id="inputdelcid" name="inputdelcid" placeholder="Input car id of the cars row to be deleted"><br> 
        <input type="submit" value = "submit">
        <br><br>
    </form>';
    }
    else if($queryoption == "delstickerbysno"){
        echo '<form action="deletestickerbysno.php" method ="POST">
        <label for="inputdelsno"> Input sticker no to be deleted: </label>
        <input type ="text" id="inputdelsno" name="inputdelsno" placeholder="Input sticker no of the cars sticker row to be deleted"><br> 
        <input type="submit" value = "submit">
        <br><br>
    </form>';
    }
    else if($queryoption == "delpareabyname"){
        echo '<form action="deletepareabyname.php" method ="POST">
        <label for="inputdelpname"> Input name of the parking area name to be deleted: </label>
        <input type ="text" id="inputdelpname" name="inputdelpname" placeholder="Input name of the parking area row to be deleted"><br> 
        <input type="submit" value = "submit">
        <br><br>
    </form>';
    }
}
?>

</body>

</html>
