<?php
$db = mysqli_connect('localhost', 'root', '','suparkdb');

if($db->connect_error >0){
    die('Unable to connect to database [' . $db->connect_error . ']');
}
?>