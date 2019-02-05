<?php

require_once 'connect.php';
include_once 'delete.php';
if (isset($_POST['add']))

{

    $listItem = $_POST['add'];

    $sql = "INSERT INTO listContent (listItem) VALUES ('$listItem')";

    if ($conn->query($sql)) {

        } else {

            echo "ERROR: " . $sql . "<br>" . $conn->error;

        }

}

?>

<!DOCTYPE html>

<html>

<head>

    <meta charset="utf-8" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Posting data through a form</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" media="screen" href="styles.css" />

    <script src="main.js"></script>

</head>

<body>

    <main role="main" class="container">

    <br>

        <form class="form-inline" role="form" action="postLoop.php" method="post">

            <input type="text" class="form-control" name="add" id="addID">
            <br><br><br><br>
            <button type="submit" class="btn btn-default">INSERT</button>

            <button type="submit" class="btn btn-default">DELETE</button>

        </form>

    

    </main>

    

</body>

</html>