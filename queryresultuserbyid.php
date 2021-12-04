
<?php
include "config.php";
include "selection.php";

if (isset($_POST["inputid"])){
            
            //$sql_statement= 'SELECT * FROM users WHERE name = $_POST["inputname"]';
            $sql_statement= 'SELECT * FROM users';
            $result= mysqli_query($db, $sql_statement);
            while($row = mysqli_fetch_assoc($result)){
               if($row["uid"] == $_POST["inputid"]){
                $uid= $row['uid'];
                $name= $row['name']; 
                $drivers_license = $row["drivers_license"];
                $age= $row['age'];
                $isowner =$row["is_owner"];
                echo $uid . " " . $name . " " .$drivers_license. " " . $age . " " .$isowner. "<br>";
               }
    
           }   
        }
?>