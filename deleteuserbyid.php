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

<tr> <th> User ID </th> <th> User Name </th> <th> Driver License Number </th> <th> Age </th><th> Is Owner? </th> </tr> 


<?php

include "config.php";
include "delete.php";
if(!empty($_POST['inputdelid'])){
       
        //$uid = $_POST['inputdelid'];
        $uid = $_POST['inputdelid'];
  
        $sql_statement = "DELETE FROM users WHERE uid = $uid";
    
        $result =mysqli_query($db, $sql_statement);
        $sql_statement2 = 'Select * FROM users ';
        $result2 = mysqli_query($db, $sql_statement2);
        if($result){
            while($row= mysqli_fetch_assoc($result2)){
                $uid= $row['uid'];
                $name= $row['name']; 
                $drivers_license = $row["drivers_license"];
                $age= $row['age'];
                $isowner =$row["is_owner"];
                echo "<tr>" . "<td>". $uid . "</td>" . "<td>" . $name .  "</td>"  . "<td>"  .$drivers_license.  "</td>"  . "<td>"  . $age .  "</td>"  . "<td>"  .$isowner. "</td>" . "</tr>";
            }
        }      
        else{
            // eğer mevcut bir uid'li row'u silemediyse buraya giriyor, 
            // delete query'si için input edilen uid users table'da yoksa successfull sayıyor.
            echo "<br><br> Unsuccessful attemt at deleting user by user-id <br><br>";
        }
        
    }
    ?>