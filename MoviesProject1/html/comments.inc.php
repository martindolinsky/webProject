<?php
function setComments($conn)
{
    if (isset($_POST['commentSubmit']) && isset($_POST['message'])) {
        $uid = $_POST['userID'];
        $date = $_POST['date'];
        $message = $_POST['message'];
        if (isset($_POST['movieID'])){
            $mid = $_POST['movieID'];
        }else{
            $sid = $_POST['serialID'];
        }
        if (isset($_POST['commentSubmit']) && isset($_POST['movieID'])) {
            $sql = "INSERT INTO comments (userID, date, message, movieID) VALUES ('$uid', '$date','$message','$mid')";
            $result = $conn->query($sql);
        } else{
            $sql = "INSERT INTO comments (userID, date, message, serialID) VALUES ('$uid', '$date','$message','$sid')";
            $result = $conn->query($sql);
        }
    }
}
function getMovieComments($conn, $title)
{
    $sql = "SELECT * FROM comments ORDER BY date DESC";
    $resolut = $conn->query($sql);
    echo "<br>";
    while ($row = $resolut->fetch_assoc()) {
        if ($row['movieID']==$title){
            echo "<div class='comment-box'>";
            echo "<h5 style='color: white'>" . $row['userID'] . "<br>";
            echo $row['date'] . "</h5>" . "<br>";
            echo $row['message'];
            echo "</div>";
        }
    }
}
function getSerialComments($conn, $title)
{
    $sql = "SELECT * FROM comments ORDER BY date DESC";
    $resolut = $conn->query($sql);
    echo "<br>";
    while ($row = $resolut->fetch_assoc()) {
        if ($row['serialID']==$title){
            echo "<div class='comment-box'>";
            echo "<h5 style='color: white'>" . $row['userID'] . "<br>";
            echo $row['date'] . "</h5>" . "<br>";
            echo $row['message'];
            echo "</div>";
        }
    }
}
