<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="styles.css" />

</head>
<body>

<?php

require_once 'connect.php';

$sql = "SELECT * FROM listContent";

$output = $conn->query($sql)

?>

<div id="displayItems">

<?php
if($output->num_rows > 0) {
    while ($row = $output->fetch_assoc()) {
        echo "ID : " . $row["listID"]. " - Item: " . $row["listText"]. " " . "Item Status: ". "<br>". 
        $row["listItemDone"]. "itemID: ". "<br>" .  $row["listItemID"].  "<br>" ; 
    }
} else {
    echo "No results identified by root";
}

$conn->close();

?>

</div>
    
</body>
</html>