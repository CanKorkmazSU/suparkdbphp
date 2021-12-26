<!DOCTYPE html>
<html>
<head>
	<title>Messages</title>

<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>

</head>
<body>

<div align="center">

	<table>

<tr> <th> Park Name </th> <th> Capacity </th> </tr> 


<?php

include "config.php";
include "delete.php";
if(!empty($_POST['inputdelpname'])){
    
    //$uid = $_POST['inputdelid'];
    $pname = $_POST['inputdelpname'];

    $sql_statement = "DELETE FROM parking_areas WHERE pname = '$pname'";

    $result =mysqli_query($db, $sql_statement);
    $sql_statement2 = 'Select * FROM parking_areas ';
    $result2 = mysqli_query($db, $sql_statement2);
    if($result){
        while($row = mysqli_fetch_assoc($result2)){
        
        $parkname = $row["pname"];
        $capacity = $row["capacity"];
        echo "<tr>" . "<td>" . $parkname . "</td>"  . "<td>" . $capacity. "</td>" . "</tr>";

       }  
    }      
    else{
        // eğer mevcut bir uid'li row'u silemediyse buraya giriyor, 
        // delete query'si için input edilen uid users table'da yoksa successfull sayıyor.
        echo "<br><br> Unsuccessful attemt at deleting parking area by parking area name <br><br>";
    }
    
}
    ?>
      </table>  
</div>