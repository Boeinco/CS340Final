<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q = $_GET['q'];

include("config.php");
include("connect.php");
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
if (!$conn) {
die('Could not connect: ' . mysql_error());
}

mysqli_select_db($conn,DB_NAME);
$sql=  "SELECT * FROM `Recipe Comments` WHERE RecipeName  = '".$q."'";
$result = mysqli_query($conn,$sql);
if (!$result) {
  die("No comments on this recipe yet :(");
}
  echo "<br><h2> Comments </h2>";
  echo "<table>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>";
    echo "<h3>" . $row['Username'] . " says: </h1>";
    echo "<h3>" . $row['TimePosted'] . "</h3>";
    echo "<h3>Rating: " . $row['Rating'] . "</h3><br>";

    echo "</td><td>";


    echo "<h3>" . $row['Comment'] . "</h3>";
    //echo "<img src= " .$row['Picture'] . " alt=\"".$row['Picture'] ."\">";
    echo "</td></tr>";

}
  echo "</table>";


mysqli_close($conn);
?>
</body>
</html>
