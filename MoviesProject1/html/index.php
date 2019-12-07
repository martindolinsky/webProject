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
<div class="sep"></div>
<?php include 'header.php';?>


<content>
    <div class="sep"></div>
    <div class="slideshow  w3-display-container">
        <img class="mySlides" src="../img/movies/a_1920.jpg" style="width:100%">
        <img class="mySlides" src="../img/movies/aiw_1920.jpg" style="width:100%">
        <img class="mySlides" src="../img/movies/z_1920.jpg" style="width:100%">

    </div>
    <div class="sep"></div>
    <div class="container1">

        <div class="row" style="display: flex; flex-direction: row; justify-content: center">
            <div class="row-grid">

                <a href=""><img src="<?php echo getMovieImageSrc(1) ?>" alt="<?php echo getMovieTitle(1);
                    echo ' ';
                    echo getMovieSecondTitle(1) ?>"/></a>
                    <a href="">
                        <?php

                         echo getMovieTitle(1) . "<br>";
                        echo getMovieSecondTitle(1);

                        ?>

                    </a>

            </div>
            <div class="row-grid">

                    <a href=""><img src="<?php echo getMovieImageSrc(2) ?>" alt="<?php echo getMovieTitle(2); echo ' '; echo getMovieSecondTitle(2)?>" width="120"/></a>
                    <a href="">
                        <?php

                        echo getMovieTitle(2) . "<br>";
                        echo getMovieSecondTitle(2);

                        ?>
                    </a>


            </div>
            <div class="row-grid">

                    <a href=""><img src="<?php echo getMovieImageSrc(3) ?>" alt="<?php echo getMovieTitle(3); echo ' '; echo getMovieSecondTitle(4) ?>" width="120"/></a>
                    <a href="">
                        <?php

                        echo getMovieTitle(3) ."<br>";
                        echo getMovieSecondTitle(3);

                        ?>
                    </a>

            </div>
            <div class="row-grid">

                    <a href=""><img src="<?php echo getMovieImageSrc(4) ?>" alt="<?php echo getMovieTitle(4); echo ' '; echo getMovieSecondTitle(4) ?>" width="120"/></a>
                    <a href="">
                        <?php

                        echo getMovieTitle(4) . '<br>';
                        echo getMovieSecondTitle(4);

                        ?>
                    </a>

            </div>
            <div class="row-grid">

                    <a href=""><img src="<?php echo getMovieImageSrc(5) ?>" alt="<?php echo getMovieTitle(5); echo ' '; echo getMovieSecondTitle(5)?>" width="120"/></a>
                    <a href="">
                        <?php

                        echo getMovieTitle(5) . '<br>';
                        echo getMovieSecondTitle(5);

                        ?>
                    </a>


            </div>
            <div class="row-grid">

                <a href=""><img src="<?php echo getMovieImageSrc(6) ?>" alt="<?php echo getMovieTitle(6); echo ' '; echo getMovieSecondTitle(6)?>" width="120"/></a>
                <a href="">
                    <?php

                    echo getMovieTitle(6) . "<br>";
                    echo getMovieSecondTitle(6);

                    ?>
                </a>


            </div>
            <div class="row-grid">

                <a href=""><img src="<?php echo getMovieImageSrc(7) ?>" alt="<?php echo getMovieTitle(7); echo ' '; echo getMovieSecondTitle(7)?>" width="120"/></a>
                <a href="">
                    <?php

                    echo getMovieTitle(7) . '<br>';
                    echo getMovieSecondTitle(7);

                    ?>
                </a>

            </div>
            <div class="row-grid">

                <a href=""><img src="<?php echo getMovieImageSrc(8) ?>" alt="<?php echo getMovieTitle(8); echo ' '; echo getMovieSecondTitle(8)?>" width="120"/></a>
                <a href="">
                    <?php

                    echo getMovieTitle(8) . '<br>';
                    echo getMovieSecondTitle(8);

                    ?>
                </a>

            </div>
            <div class="row-grid1">

                <a href=""><img src="<?php echo getMovieImageSrc(9) ?>" alt="<?php echo getMovieTitle(9); echo ' '; echo getMovieSecondTitle(9)?>" width="120"/></a>
                <a href="">
                    <?php

                    echo getMovieTitle(9) . '<br>';
                    echo getMovieSecondTitle(9);

                    ?>
                </a>

            </div>
            <div class="row-grid2">

                <a href=""><img src="<?php echo getMovieImageSrc(10) ?>" alt="<?php echo getMovieTitle(10); echo ' '; echo getMovieSecondTitle(10)?>" width="120"/></a>
                <a href="">
                    <?php

                    echo getMovieTitle(10) . '<br>';
                    echo getMovieSecondTitle(10);

                    ?>
                </a>

            </div>
            <div class="row-grid-last">

                <a href=""><img src="<?php echo getMovieImageSrc(11) ?>" alt="<?php echo getMovieTitle(11); echo ' '; echo getMovieSecondTitle(11)?>" width="120"/></a>
                <a href="">
                    <?php

                    echo getMovieTitle(11) . '<br>';
                    echo getMovieSecondTitle(11);

                    ?>
                </a>

            </div>
        </div>

        <div class="sep"></div>
        <button type="button" class="moreMovies btn btn-lg "><a class="more" href="movies-tab.php">More movies</a>
        </button>
        <div class="sep"></div>

        <div class="row row2" style="display: flex; flex-direction: row; justify-content: center">
            <div class="row-grid">

                <a href=""><img src="<?php echo getSerialImageSrc(1) ?>" alt="<?php echo getSerialTitle(1);
                    echo ' ';
                    echo getSerialSecondTitle(1) ?>" width="120"/></a>
                <a href="">
                    <?php

                    echo getSerialTitle(1) . '<br>';
                    echo getSerialSecondTitle(1);

                    ?>
                </a>

            </div>
            <div class="row-grid">

                <a href=""><img src="<?php echo getSerialImageSrc(2) ?>" alt="<?php echo getSerialTitle(2);
                    echo ' ';
                    echo getSerialSecondTitle(2) ?>" width="120"/></a>
                <a href="">
                    <?php

                    echo getSerialTitle(2) . '<br>';
                    echo getSerialSecondTitle(2);

                    ?>
                </a>

            </div>
            <div class="row-grid">

                <a href=""><img src="<?php echo getSerialImageSrc(3) ?>" alt="<?php echo getSerialTitle(3);
                    echo ' ';
                    echo getSerialSecondTitle(3) ?>" width="120"/></a>
                <a href="">
                    <?php

                    echo getSerialTitle(3) . '<br>';
                    echo getSerialSecondTitle(3);

                    ?>
                </a>

            </div>
            <div class="row-grid">

                <a href=""><img src="<?php echo getSerialImageSrc(4) ?>" alt="<?php echo getSerialTitle(4);
                    echo ' ';
                    echo getSerialSecondTitle(4) ?>" width="120"/></a>
                <a href="">
                    <?php

                    echo getSerialTitle(4) . '<br>';
                    echo getSerialSecondTitle(4);

                    ?>
                </a>

            </div>
            <div class="row-grid">

                <a href=""><img src="<?php echo getSerialImageSrc(5) ?>" alt="<?php echo getSerialTitle(5);
                    echo ' ';
                    echo getSerialSecondTitle(5) ?>" width="120"/></a>
                <a href="">
                    <?php

                    echo getSerialTitle(5) . '<br>';
                    echo getSerialSecondTitle(5);

                    ?>
                </a>

            </div>

            <div class="row-grid">

                <a href=""><img src="<?php echo getSerialImageSrc(6) ?>" alt="<?php echo getSerialTitle(6);
                    echo ' ';
                    echo getSerialSecondTitle(6) ?>" width="120"/></a>
                <a href="">
                    <?php

                    echo getSerialTitle(6) . '<br>';
                    echo getSerialSecondTitle(6);

                    ?>
                </a>

            </div>
            <div class="row-grid">

                <a href=""><img src="<?php echo getSerialImageSrc(7) ?>" alt="<?php echo getSerialTitle(7);
                    echo ' ';
                    echo getSerialSecondTitle(7) ?>" width="120"/></a>
                <a href="">
                    <?php

                    echo getSerialTitle(7) . '<br>';
                    echo getSerialSecondTitle(7);

                    ?>
                </a>

            </div>
            <div class="row-grid">

                <a href=""><img src="<?php echo getSerialImageSrc(8) ?>" alt="<?php echo getSerialTitle(8);
                    echo ' ';
                    echo getSerialSecondTitle(8) ?>" width="120"/></a>
                <a href="">
                    <?php

                    echo getSerialTitle(8) . '<br>';
                    echo getSerialSecondTitle(8);

                    ?>
                </a>

            </div>
            <div class="row-grid1">

                <a href=""><img src="<?php echo getSerialImageSrc(9) ?>" alt="<?php echo getSerialTitle(9);
                    echo ' ';
                    echo getSerialSecondTitle(9) ?>" width="120"/></a>
                <a href="">
                    <?php

                    echo getSerialTitle(9) . '<br>';
                    echo getSerialSecondTitle(9);

                    ?>
                </a>

            </div>
            <div class="row-grid2">

                <a href=""><img src="<?php echo getSerialImageSrc(10) ?>" alt="<?php echo getSerialTitle(10);
                    echo ' ';
                    echo getSerialSecondTitle(10) ?>" width="120"/></a>
                <a href="">
                    <?php

                    echo getSerialTitle(10) . '<br>';
                    echo getSerialSecondTitle(10);

                    ?>
                </a>

            </div>
            <div class="row-grid-last">

                <a href=""><img src="<?php echo getSerialImageSrc(11) ?>" alt="<?php echo getSerialTitle(11);
                    echo ' ';
                    echo getSerialSecondTitle(11) ?>" width="120"/></a>
                <a href="">
                    <?php

                    echo getSerialTitle(11) . '<br>';
                    echo getSerialSecondTitle(11);

                    ?>
                </a>

            </div>
        </div>
        <div class="sep"></div>
        <button type="button" class="moreMovies btn btn-lg "><a class="more" href="movies-tab.php">More serials</a>
        </button>
    </div>
    <div class="sep"></div>
    <div class="sep"></div>
    <div class="sep"></div>
    <div class="sep"></div>
    <div class="sep"></div>

    <?php include 'footer.php';?>
</content>


<script>
    var slideIndex = 0;
    showDivs();


    function showDivs() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {
            slideIndex = 1
        }
        slides[slideIndex - 1].style.display = "block";
        setTimeout(showDivs, 3000);

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
</body>
</html>
