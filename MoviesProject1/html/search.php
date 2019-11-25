<?php
include_once 'connection.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Homepage</title>
    <link rel="stylesheet" href="../css/index.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body style="margin: 0;">
<?php
include "header.php";

?>
<div class="sep"></div>
<div class="container1">
<h1 style="color: #fff;">Results: </h1>
    <div class="row" style="display: flex; flex-direction: row; justify-content: center">



        <?php

        if (isset($_POST['submit-search'])) {
            $search = mysqli_real_escape_string($conn, $_POST['search']);

            $sql = "SELECT * FROM movies where titleEN like '%$search%' 
                        OR secondTitleEN like '%$search%' OR secondTitleSK like '%$search%'
                OR titleSK like '%$search%'";

            $result = mysqli_query($conn,$sql);
            $queryResult = mysqli_num_rows($result);



            if ($queryResult > 0) {
                while ($row = mysqli_fetch_assoc($result)) {

                    echo '
                <div class="row-grid" style="color: white;">
                    <a href="search-item.php?id=' . $row["movieID"] . '">
                    <img src="' . getMovieImageSrc($row["movieID"]) . '" alt="' . getMovieTitle($row["movieID"]) . ' ' . getMovieSecondTitle($row["movieID"]) . '" width="120"/></a>
                    <a href="search-item.php?id=' . $row["movieID"] . '"> ' .  getMovieTitle($row["movieID"]) . '<br>' .  getMovieSecondTitle($row["movieID"]) . '</a>
                </div>
    ';
                }

            } else {
                echo "There are no results matching your search:" . "$search";
            }
        }
        ?>


</div>


</body>
</html>
