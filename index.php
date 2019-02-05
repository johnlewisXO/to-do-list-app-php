

<?php

    require_once 'connect.php';

    // build a resource
    $drop = $conn->query("DROP TABLE IF EXISTS listContent");

    // create table with sql
    $sql = "CREATE TABLE listContent(
        ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        listItem VARCHAR(80) NOT NULL,
        listItemDone INT(4) NULL,
        listItemID INT(10)
    )";


    if ($conn->query($sql) === TRUE) {
        echo "Table creation succeeded";
    } else {
        echo "Error with creation of table: " . $conn->error;
    }
    ?>




    <div>
        <!--  loop through all fields NB! - Insert while loop to iterate through fields -->
    </div> <br><br><br><br>
    

    <?php
    $conn->close();
    ?>

    <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="styles.css" />
    <script src="main.js"></script>
</head>
<body>

    <form action="postLoop.php" method="post">
        <input type="text" name="Name" id="add" placeholder="Add a task..">

        <input class="buttons" type="submit" value="Add"><br><br>

        <input class="buttons" type="submit" value="View">

        <input class="buttons" type="submit" value="Delete" action="delete.php">

    </form>
    
</body>
</html>


