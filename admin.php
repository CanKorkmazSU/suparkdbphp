<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>ADMIN PAGE</title>

    <style>

.parent {
  text-align: center;
  margin: 5px;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

.child {
  display: inline-block;
  width: 40%;
  border: 1px solid;
  padding: 1rem 1rem;
  vertical-align: middle;
}

input[type=text], select {
  
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
.button {
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button1 {
  background-color: white; 
  color: black; 
  border: 2px solid #4CAF50;
}

.button1:hover {
  background-color: #4CAF50;
  color: white;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>

<div class="parent">
<h1>WELCOME TO ADMIN PANEL</h1>
</div>

<div class="parent">
<h2>Select the operation you want to perform</h2>

<div class="child">
<a href="insert.php" class="button button1">INSERT</a>
<a href="delete.php" class="button button1">DELETE</a>
<a href="selection.php" class="button button1">DISPLAY</a>

</div>

</div>


</html>