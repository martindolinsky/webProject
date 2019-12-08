<?php

$dbServername = 'localhost';
$dbUsername = 'root';
$dbPassword = 'root';
$dbName = 'movies';

$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);


if ($conn -> error) {
    die("could not connect successfully");
}


function getMovieTitle($number) {
    global $conn;

    $sql = "SELECT * FROM movies where movieid = $number;";
    $result = mysqli_query($conn,$sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            return $row['titleEN'];
        }
    }
}

function getMovieSecondTitle($number) {
    global $conn;

    $sql = "SELECT * FROM movies where movieid = $number;";
    $result = mysqli_query($conn,$sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            return $row['secondTitleEN'];
        }
    }
}

function getMovieDesc($number)
{
    global $conn;

    $sql = "SELECT * FROM movies where movieid = $number;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            return $row['description'];
        }
    }
}

function getMovieRating($number)
{
    global $conn;

    $sql = "SELECT * FROM movies where movieid = $number;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            return $row['imdbSrc'];
        }
    }
}

function getMovieImageSrc($number) {
    global $conn;

    $sql = "SELECT * FROM movies where movieid = $number;";
    $result = mysqli_query($conn,$sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            return $row['srcImg'];
        }
    }
}

function getSerialTitle($number) {
    global $conn;

    $sql = "SELECT * FROM tvseries where serialid = $number;";
    $result = mysqli_query($conn,$sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            return $row['titleEN'];
        }
    }
}

function getSerialSecondTitle($number) {
    global $conn;

    $sql = "SELECT * FROM tvseries where serialid = $number;";
    $result = mysqli_query($conn,$sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            return $row['secondTitleEN'];
        }
    }
}

function getSerialImageSrc($number) {
    global $conn;

    $sql = "SELECT * FROM tvseries where serialid = $number;";
    $result = mysqli_query($conn,$sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            return $row['srcImg'];
        }
    }
}

function getItemSrc($number)
{
    global $conn;

    $sql = "SELECT * FROM movies where movieid = $number;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            return $row['src'];
        }
    }
}


