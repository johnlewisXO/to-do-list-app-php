<?php



require_once 'connect.php';



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

    <title>Page Title</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />

    <script src="main.js"></script>

</head>

<body>

    

<main role="main" class="container">

    <br>



        <form class="form-inline" role="form" action="postLoop.php" method="post">

            <input type="text" class="form-control" name="add" id="addID">

            <button type="submit" class="btn btn-default">ADD</button>

            <button type="submit">DELETE</button>

        </form>

    

    </main>

</body>

</html>



<?php





require_once 'connect.php';



$todo_res = $conn->query("SELECT * FROM listContent ORDER BY listItemID DESC");



while ($row = $todo_res->fetch_assoc())

    {

        echo "<br>" . $row['listItem'] . "<br>"; 

    }

?>