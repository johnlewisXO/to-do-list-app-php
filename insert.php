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

    $sql = "INSERT INTO `listContent` (`listID`, `listItem`, `listItemDone`, `listItemID`) 
    VALUES (NULL, \'Email Attorney\', \'1014\', \'102834\')";

    $sql = "SELECT * FROM listContent";
?>

    <div id="displayItems">
        
        <?php
        
        if($conn->query($sql) === TRUE) {
            echo '<br> Data addition succeeded.' . "<br>";
        } else {
            echo "Error:" . $sql . "<br>" / $conn->error; 
        }

        ?>

    </div>
    
</body>
</html>

        