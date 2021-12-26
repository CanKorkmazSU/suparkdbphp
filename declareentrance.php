<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <style>

.parent {
  text-align: center;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

.child {
  display: inline-block;
  height: 500px;
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

input[type=number], select {
  
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>

<body>

<div class="parent">
    <div class="child">
        <h2> Declare Entrnace</h2>
        <form action="declareentrancebusinesslogic.php" method ="POST">
            <label for="uid"> Your User id: </label>
            <input type ="number" id="uid" name="uid" placeholder="Type your user id"><br>
            <label for="cid"> Your Car id: </label>
            <input type ="number" id="cid" name="cid" placeholder="Enter your car id"><br>
            <label for="pid"> Parking area id: </label>
            <input type ="number" id="pid" name="pid" placeholder="Enter parking area id"><br>
            <input type="submit" value = "submit">             
        </form>
        </div>

</div>




</body>


