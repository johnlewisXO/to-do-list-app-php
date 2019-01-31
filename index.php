<?php 

include_once ('connect.php');

// Code to create table
$sql = "CREATE TABLE Students (
    userID VARCHAR(30) NOT NULL,
    passcode VARCHAR(30) NOT NULL,
    reg_date TIMESTAMP
)";
    
if (mysqli_query($conn, $sql)) {
    echo  '<br>' . "Table Creation succeeded. " . '<br>';
} else {
    echo '<br>' . '<br>' . " Error with creation of table : " . '<br>'. mysqli_error($conn);
}

mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="post">


<br>
<input type="text" name="Username" placeholder="Username" id="loginForm">
<br>
<br>
<input type="password" name="Password" placeholder="Username" id="loginForm">
<br>
<br>
<input type="button" value="Login" id="loginForm">
<br>

<br>

<input type="button" value="Insert">

<input type="button" value="Read">

<input type="button" value="Update">

<input type="button" value="Delete">




</form>
    
</body>
</html>


