<?php

function setComments($conn)
{
    if (isset($_POST['commentSubmit'])) {

        $uid = $_POST['userID'];
        $date = $_POST['date'];
        $message = $_POST['message'];

        if (isset($_POST['commentSubmit'])) {
            $sql = "INSERT INTO comments (userID, date, message) VALUES ('$uid', '$date','$message')";
            $result = $conn->query($sql);
        }


    }
}

function getComments($conn)
{
    $sql = "SELECT * FROM comments";
    $resolut = $conn->query($sql);
    echo "<br>";
    while ($row = $resolut->fetch_assoc()) {
        echo "<div class='comment-box'>";
        echo $row['userID'] . "<br>";
        echo $row['date'] . "<br>";
        echo $row['message'];
        echo "</div>";
    }
}
