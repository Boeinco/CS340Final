<?php
require("config.php");
$conn = mysqli_connect(dbHost, dbUser, dbPass, dbName)
$sql = 'SELECT * FROM Recipe';
$result = mysqli_query($conn, $sql);
 ?>