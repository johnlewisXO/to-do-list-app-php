
<?php

require_once 'user.php';

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed : " . "<br>" . $conn->connect_error);
}
echo " Connection succeeded " . "<br>";


?>