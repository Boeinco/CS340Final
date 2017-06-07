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
$sql="SELECT * FROM Recipe WHERE RecipeName = '".$q."'";
$result = mysqli_query($conn,$sql);
if (!$result) {
  die("Query to show fields from recipe failed");
}

echo "<table>
<tr>
<th>Recipe Name</th>
<th>Username</th>
<th>Date Posted</th>
<th>Rating</th>
</tr>";


while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['RecipeName'] . "</td>";
    echo "<td>" . $row['Username'] . "</td>";
    echo "<td>" . $row['TimeStamp'] . "</td>";
    echo "<td>" . $row['Ratings'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($conn);
?>
</body>
</html>
