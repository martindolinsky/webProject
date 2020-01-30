<?php
    include_once 'connection.php';
    session_start();
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
<?php include 'header.php';?>


<main>
    <div class="slideshow  w3-display-container" style="margin-top: 100px">
        <a href="play-movie.php?id=2"><img class="mySlides" src="../img/movies/a_1920.jpg" style="width:100%"></a>
        <a href="play-movie.php?id=4"><img class="mySlides" src="../img/movies/aiw_1920.jpg" style="width:100%"></a>
        <a href="play-movie.php?id=16"><img class="mySlides" src="../img/movies/z_1920.jpg" style="width:100%"></a>
    </div>
    <div class="container1">

        <div class="row" style="display: flex; flex-direction: row; justify-content: center">

            <?php
            $sql = "SELECT * FROM movies order by year desc limit 10";
            $result = mysqli_query($conn,$sql);
            $queryResult = mysqli_num_rows($result);

            if ($queryResult > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '
                    <div class="row-grid">
                        <a href="play-movie.php?id=' . $row["movieID"] . '"><img src="' . $row["srcImg"].'" alt="' .$row["titleEN"] .'" 
                            ' . $row["secondTitleEN"] . '"/>
                        </a>
                        <a href="play-movie.php?id='. $row["movieID"] .'">
                                 ' . $row["titleEN"] . '<br>
                                ' . $row["secondTitleEN"] .' 
                        </a>
                    </div>';
                }
            }
            ?>


        </div>

        <button style="margin-top: 100px" type="button" class="moreMovies btn btn-lg "><a class="more" href="movies-tab.php">More movies</a></button>

        <div class="row row2" style="margin-top: 100px;display: flex; flex-direction: row; justify-content: center">

            <?php
            $sql = "SELECT * FROM tvseries order by year desc limit 10";
            $result = mysqli_query($conn,$sql);
            $queryResult = mysqli_num_rows($result);

            if ($queryResult > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '
                    <div class="row-grid">
                        <a href="play-serial.php?id=' . $row["serialID"] . '"><img src="' . $row["srcImg"].'" alt="' .$row["titleEN"] .'" 
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

        <button style="margin-top: 100px; margin-bottom: 100px"  type="button" class="moreMovies btn btn-lg "><a class="more" href="tvseries-tab.php">More serials</a></button>
    </div>

</main>


<script>
    let slideIndex = 0;
    showDivs();

    function showDivs() {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {
            slideIndex = 1
        }
        slides[slideIndex - 1].style.display = "block";
        setTimeout(showDivs, 5000);
    }

</script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>

<?php include 'footer.php';?>
