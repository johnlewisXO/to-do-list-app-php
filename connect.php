<?php

include_once ('user.php');
$servername = "localhost";
$username = "root";
$password = "Carol786";

// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connection succeeded";

?>