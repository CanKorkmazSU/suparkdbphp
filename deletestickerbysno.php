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

<tr> <th> Sticker No </th> <th> Car Id </th> <th> Issue Date </th> <th>Due Date </th> </tr> 


<?php

include "config.php";
include "delete.php";
if(!empty($_POST['inputdelsno'])){
    
    //$uid = $_POST['inputdelid'];
    $cs = $_POST['inputdelsno'];

    $sql_statement = "DELETE FROM car_sticker WHERE sno = $cs";

    $result =mysqli_query($db, $sql_statement);
    $sql_statement2 = 'Select * FROM car_sticker ';
    $result2 = mysqli_query($db, $sql_statement2);
    if($result){
        while($row = mysqli_fetch_assoc($result2)){           
            $cs = $row["sno"];
            $cid = $row["cid"];
            $isd =$row["issue_date"];
            $dd =$row["due_date"];
            echo "<tr>" . "<td>" . $cs . "</td>"  . "<td>"  . $cid . "</td>"  . "<td>"  .$isd. "</td>"  . "<td>"  . $dd . "</td>" . "</tr>";
        }   
    }      
    else{
        // eğer mevcut bir uid'li row'u silemediyse buraya giriyor, 
        // delete query'si için input edilen uid users table'da yoksa successfull sayıyor.
        echo "<br><br> Unsuccessful attemt at deleting car sticker by sticker no <br><br>";
    }
    
}
    ?>
      </table>  
</div>