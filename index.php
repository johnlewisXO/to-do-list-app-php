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
<input type="text" name="Username" placeholder="Username" class="loginForm">
<br>
<br>
<input type="password" name="Password" placeholder="Username" class="loginForm">
<br>
<br>
<input type="button" value="Login" class="loginForm">
<br>

<br>

<input type="button" value="Insert" class="loginForm">

<input type="button" value="Read" class="loginForm">

<input type="button" value="Update" class="loginForm">

<input type="button" value="Delete" class="loginForm">




</form>
    
</body>
</html>


