<?php

include "config.php";
include "delete.php";
if(!empty($_POST['inputdelname'])){
       
        //$uid = $_POST['inputdelid'];
        $uname = $_POST['inputdelname'];
  
        $sql_statement = "DELETE FROM users WHERE name = '$uname'";
    
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
                echo $uid . " " . $name . " " .$drivers_license. " " . $age . " " .$isowner. "<br>";
            }
        }      
        else{
            // eğer mevcut bir uid'li row'u silemediyse buraya giriyor, 
            // delete query'si için input edilen uid users table'da yoksa successfull sayıyor.
            echo "<br><br> Unsuccessful attemt at deleting user by user-name <br><br>";
        }
        
    }
    ?>