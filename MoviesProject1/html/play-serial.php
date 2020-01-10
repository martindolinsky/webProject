<?php
date_default_timezone_get();
include 'connection.php';
include 'comments.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <link rel="stylesheet" type="text/css" href="../css/item-style.css" ?timestamp=<?php echo time() ?>>
    <link rel="stylesheet" href="../css/index.css">


    <link
            rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
            crossorigin="anonymous"
    />
    <script
            src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"
    ></script>
    <title>
        <?php
        $title = mysqli_real_escape_string($conn, $_GET['id']);


        $sql = "select * from tvseries where serialID = $title";

        $result = mysqli_query($conn, $sql);
        $queryResults = mysqli_num_rows($result);

        if ($queryResults > 0) {
            // output data of each row
            while ($row = mysqli_fetch_assoc($result)) {
                echo "" . $row['titleEN'] . " " . $row['secondTitleEN'];
            }
        } else {
            echo "0 results";
        }
        ?>

    </title>
</head>

<body style="margin: 0;">
<!-- nav bar -->
<?php
include "header.php"
?>
<div class="sep" style="height: 100px;"></div>
<!-- video -->
<div class="trailer">
    <iframe
        <?php
        $title = mysqli_real_escape_string($conn, $_GET['id']);
        $sql = "select * from tvseries where serialID = $title";
        $result = mysqli_query($conn, $sql);
        $queryResults = mysqli_num_rows($result);

        if ($queryResults > 0) {
            // output data of each row
            while ($row = mysqli_fetch_assoc($result)) {
                echo "src=" . $row['src'];
            }
        }
        ?>
            frameborder="0"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen
    ></iframe>
</div>


<div class="description">

    <!-- imdb -->
    <div class="imdb" style="padding: 20px;">
        <?php

        $title = mysqli_real_escape_string($conn, $_GET['id']);

        $sql = "select * from tvseries where serialID = $title";
        $result = mysqli_query($conn, $sql);
        $queryResults = mysqli_num_rows($result);

        if ($queryResults > 0) {
            // output data of each row
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<span class=\"imdbRatingPlugin\"
                data-user=\"ur110064039\"
                data-title=\"". $row["data-title"] ."\"
                data-style=\"p3\"
                style=\"color: white\"><a href=\"https://www.imdb.com/title/". $row["data-title"] ."/?ref_=plg_rt_1\"><img
                        src=\"https://ia.media-imdb.com/images/G/01/imdb/plugins/rating/images/imdb_37x18.png\"
                        alt=\" ". $row["titleEN"] . " " . $row["secondTitleEN"] . "
						(" . $row["year"] . ") on IMDb\"/> </a></span>";
            }
        }
        ?>
        <script>
            (function (d, s, id) {
                var js,
                    stags = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) {
                    return;
                }
                js = d.createElement(s);
                js.id = id;
                js.src =
                    "https://ia.media-imdb.com/images/G/01/imdb/plugins/rating/js/rating.js";
                stags.parentNode.insertBefore(js, stags);
            })(document, "script", "imdb-rating-api");
        </script>
    </div>

    <?php
    $title = mysqli_real_escape_string($conn, $_GET['id']);


    $sql = "select * from tvseries where serialID = $title";

    $result = mysqli_query($conn, $sql);
    $queryResults = mysqli_num_rows($result);

    if ($queryResults > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<div class='desc'><h1>" . $row["titleEN"] . " " . $row["secondTitleEN"] . " (" . $row["titleSK"] . " " . $row["secondTitleSK"] . ")" . "</h1>" .
                "<h2>" . $row["year"] . "</h2>" .
                "<h5>" . "Directors: " . $row["director"] . "</h5>" .
                "<h5>" . "Stars: " . $row["actors"] . "</h5>" . "<br>" .
                "<p style='color: lightgray'>" . $row["description"] . "</p>"
                . "</div>";
        }
    } else {
        echo "0 results";
    }
    ?>


</div>


<!-- comentSection -->
<div class="commentS">
    <?php

    echo "<form method='POST' action='" . setComments($conn) . "'>
<input type='hidden' name='userID' value='Anonymous'>

<input type='hidden' name='serialID' value='".$title."'>
<input  type='hidden' name='date' value='" . date('Y-m-d H:i:s') . "'>
<textarea required name='message' style='border-radius: 10px; padding: 5px;'></textarea>
<div class=buttonContainer>
<button name='commentSubmit'>Comment</button>
</div>
</form>";

    getSerialComments($conn, $title);

    ?>

</div>


<div class="content">
    <?php
    $title = mysqli_real_escape_string($conn, $_GET['id']);
    $sql = "SELECT * FROM tvseries where genre like (select genre from tvseries where serialID = $title) and serialID != $title";
    $result = mysqli_query($conn,$sql);
    $queryResult = mysqli_num_rows($result);

    if ($queryResult > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo '
                    <div class="row-grid">
                        <a href="play-serial.php?id=' . $row["serialID"] . '"><img src="' . $row["srcImg"] .'" alt="' .$row["titleEN"] .'" 
                            ' . $row["secondTitleEN"] . '"/></a>
                        <a href="play-serial.php?id='. $row["serialID"] .'">
                                 ' . $row["titleEN"] . '<br>
                                ' . $row["secondTitleEN"] .' </a>
                    </div>
                    ';
        }
    }
    ?>
</div>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script
        src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"
></script>
<script
        src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"
></script>
<script
        src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/js/bootstrap.min.js"
        integrity="sha384-3qaqj0lc6sV/qpzrc1N5DC6i1VRn/HyX4qdPaiEFbn54VjQBEU341pvjz7Dv3n6P"
        crossorigin="anonymous"
></script>


<?php
include "footer.php"
?>



