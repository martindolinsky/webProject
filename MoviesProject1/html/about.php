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
                <img src="../img/us/dolinsky.jpeg" alt="Dolinsky">
                <div>Martin Dolinsky</div>
            </div>

            <div class="row-grid">
                <img src="../img/us/kutka.jpg" alt="Kutka">
                <div>Jakub Kutka</div>
            </div>

            <div class="row-grid">
                <img src="../img/us/matysko.jpg" alt="Matysko">
                <div>Damian Matysko</div>
            </div>
        </div>
    </div>

    <div class="container1" style="background-color: #363836;color: #fff;margin: 100px 20%; text-align: center">
        <h3 style="padding-top: 20px;">Martin Dolinsky</h3>
        <p style="padding: 10px">Student of academy SOVY ready to face all challenges ahed. Willing to learn new technologies.
        Want to become real backend developer but also willing to be full stack Java Android developer.</p>
        <h3 style="padding-top: 20px;">Jakub Kutka</h3>
        <p style="padding: 10px">Enthusiastic student, willing to learn new things and contribute to the team as much as I can.
            My main focus is to become a full stack developer because of wide variety of possibilities it offers.</p>
        <h3 style="padding-top: 20px;">Damian Matysko</h3>
        <p style="padding: 10px">Student of IT Academy SOVY.
            I am interested in software development and I focus on backend programming.</p>

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

