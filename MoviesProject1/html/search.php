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
<div class="main-container" style="display: flex; flex-direction: column; margin: 0 5%">

        <?php

        if (isset($_POST['submit-search'])) {
            $search = mysqli_real_escape_string($conn, $_POST['search']);

            $sql = "SELECT * FROM movies where titleEN like '%$search%' 
                        OR secondTitleEN like '%$search%' OR secondTitleSK like '%$search%'
                OR titleSK like '%$search%'";

            $result = mysqli_query($conn,$sql);
            $queryResult = mysqli_num_rows($result);



            if ($queryResult > 0) {
                echo '
                <div class="container2">
            <h1 style="color: #fff;">Results in Movies : </h1>
            <div class="row" style="display: flex; flex-direction: row; justify-content: center">
                
                ';
                while ($row = mysqli_fetch_assoc($result)) {

                    echo '
        

                <div class="row-grid" style="color: white;">
                    <a href="play-movie.php?id=' . $row["movieID"] . '">
                    <img src="' . getMovieImageSrc($row["movieID"]) . '" alt="' . getMovieTitle($row["movieID"]) . ' ' . getMovieSecondTitle($row["movieID"]) . '" width="120"/></a>
                    <a href="play-movie.php?id=' . $row["movieID"] . '"> ' . getMovieTitle($row["movieID"]) . '<br>' . getMovieSecondTitle($row["movieID"]) . '</a>
                </div>
                    
    ';
                }
                echo '
                </div>
                    </div>
                ';

            } else {
                echo "<div style='color: white'>";
                echo "There are no results in movies matching your search: " . "$search";
                echo "</div>";
            }
        }
        ?>



        <?php

        if (isset($_POST['submit-search'])) {
            $search = mysqli_real_escape_string($conn, $_POST['search']);

            $sql = "SELECT * FROM tvseries where titleEN like '%$search%' 
                    OR secondTitleEN like '%$search%' OR secondTitleSK like '%$search%'
            OR titleSK like '%$search%'";

            $result = mysqli_query($conn, $sql);
            $queryResult = mysqli_num_rows($result);


            if ($queryResult > 0) {
                echo '

                <div class="container2">

    <h1 style="color: #fff;">Results in TV Series : </h1>
    <div class="row" style="display: flex; flex-direction: row; justify-content: center">
                ';
                while ($row = mysqli_fetch_assoc($result)) {

                    echo '
            <div class="row-grid" style="color: white;">
                <a href="play-serial.php?id=' . $row["serialID"] . '">
                <img src="' . getSerialImageSrc($row["serialID"]) . '" alt="' . getSerialTitle($row["serialID"]) . ' ' . getSerialSecondTitle($row["serialID"]) . '" width="120"/></a>
                <a href="play-serial.php?id=' . $row["serialID"] . '"> ' . getSerialTitle($row["serialID"]) . '<br>' . getSerialSecondTitle($row["serialID"]) . '</a>
            </div>
';
                }
                echo '
                </div>
                ';

            } else {
                echo "<div style='color: white'>";
                echo "There are no results in TV Series matching your search: " . "$search";
                echo "</div>";
            }
        }
        ?>

</div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
            crossorigin="anonymous"></script>


</body>
</html>
