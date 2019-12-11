<?php
include_once 'connection.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Homepage</title>
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="../css/index.css" />

</head>
<body style="margin: 0;">
<?php
include "header.php";

?>
<main>

    <div class="container1">
        <div class="row" style="display: flex; flex-direction: row; justify-content: center">
            <div class="row-grid">
                <img src="../img/movies/joker-2019.jpg" alt="Dolinsky">
                <div>Martin Dolinsky</div>
            </div>

            <div class="row-grid">
                <img src="../img/movies/joker-2019.jpg" alt="Kutka">
                <div>Jakub Kutka</div>
            </div>

            <div class="row-grid">
                <img src="../img/movies/joker-2019.jpg" alt="Matysko">
                <div>Damian Matysko</div>
            </div>
        </div>
    </div>

</main>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>

<?php include "footer.php"; ?>

