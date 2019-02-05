<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    
    
</body>
</html>

<?php

$sql = "DELETE FROM listContent WHERE ID='' ";

if ($conn->query($sql) === TRUE) {
    echo "Record deletion succeeded";
} else {
    echo "Error with deletion of record: " . $conn->error;
}

$conn->close();

?>