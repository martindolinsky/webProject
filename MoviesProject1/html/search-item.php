<?php
include "connection.php";
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <title>Article </title>
</head>
<body>
<?php
include "header.php";
?>

<?php
$title = mysqli_real_escape_string($conn, $_GET['id']);



// show contacts
$sql = "select * from movies where movieID = $title";

$result =  mysqli_query($conn,$sql);
$queryResults = mysqli_num_rows($result);

if ($queryResults > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<div><h1>" . "Title: " . $row["titleEN"]. " " . $row["secondTitleEN"]." (" . $row["titleSK"]. " " . $row["secondTitleSK"] . ")" . "</h1>" .
            "<h2>" . "Year: " . $row["year"] . "</h2>" .
            "<h3>" . "Directors: " . $row["director"] . "</h3>" .
            "<h3>" . "Stars: " . $row["actors"] . "</h3>" .
            "<h4>" . "About: " . $row["description"] . "</h4>"

            ."</div>";
    }
} else {
    echo "0 results";
}
?>

</body>
</html>


