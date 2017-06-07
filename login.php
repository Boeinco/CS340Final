<?php
include('loginverify.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: tool.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Login Form in PHP with Session</title>
<link href="style2.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="main">
<h1>PHP Login Session Example</h1>
<div id="login">
<h2>Login Form</h2>
<form action="" method="post">
<label>UserName :</label>
<input id="name" name="username" placeholder="username" type="text">
<label>Password :</label>
<input id="password" name="password" placeholder="**********" type="password">
<input name="submit" type="submit" value=" Login ">
<span><?php echo $error; ?></span>
<?php
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
$table = 'Users';
    $query = "select * from Users where Password='$password' AND Username='$username'";

    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("Query to show fields from table failed");
    }
    
    $fields_num = mysqli_num_fields($result);
    echo "<h1>Table: {$table}</h1>";
	echo $rows;
    echo "<table border='1'><tr>";
    // printing table headers
    for($i=0; $i<$fields_num; $i++) {    
        $field = mysqli_fetch_field($result);    
        echo "<td><b>{$field->name}</b></td>";
    }
    echo "</tr>\n";
    while($row = mysqli_fetch_row($result)) {    
        echo "<tr>";    
        // $row is array... foreach( .. ) puts every element
        // of $row to $cell variable    
        foreach($row as $cell)        
            echo "<td>$cell</td>";    
        echo "</tr>\n";
    }
                ?>

</form>
</div>
</div>
</body>
</html>