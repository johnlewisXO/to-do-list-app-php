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



<ul id="toDoList">

<?php

require_once 'connect.php';

$todo_res = $conn->query("SELECT * FROM listContent ORDER BY listItemID DESC");

while ($row = $todo_res->fetch_assoc())

    {
        if($row["listItemDone"]==1) {
            echo "<li><strike>" . $row["listItem"] . "<strike></li>";
        }else{
        echo "<br>" . $row['listItem'] . "<br>"; 
    }

?>

</ul>

<!-- imported jquery library for server-side functionality -->
<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>


<!-- script for identifying list item indexes -->
<script>

$( "li" ).click(function() {}
    var index = $("li").index(this);
    
    //$("li").eq( index ).css("background-color", "pink");
    $( "span" ).text("That was li index #" + index);
});

</script>

<script>
$("li").click(function) {
    var index = $("li").index( this );
    $("span").text( "That was li index # " + index );
    $("li").load("ajax.php", {index}, function(myObj) {
        var myArr = JSON.parse(myObj);

        for (i=0; i < myArr.text.length; i++ ){
            if(myArr.done[i]==0)
        }
    }
}

</script>

</body>

</html>

