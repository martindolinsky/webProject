<?php

function setComments($conn){
    if (isset($_POST['commentSubmit'])){

        $uid=$_POST['uid'];
        $date=$_POST['date'];
        $message=$_POST['message'];

        $sql= "INSERT INTO comments (uid, date, message) VALUES ('$uid', '$date','$message')";
        $result= $conn->query($sql);
    }
}

function getComments($conn){
    $sql="SELECT * FROM comments";
    $resolut = $conn->query($sql);
    echo "<br>";
    while ($row = $resolut->fetch_assoc()) {
        echo "<div class='comment-box'>";
        echo $row['uid']."<br>";
        echo $row['date']."<br>";
        echo $row['message'];
        echo "</div>";
    }
}