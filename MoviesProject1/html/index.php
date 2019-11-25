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
        <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">

            <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
            <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
            <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>

        </div>
    </div>
    <div class="sep"></div>
    <div class="container1">

        <div class="row" style="display: flex; flex-direction: row; justify-content: center">
            <div class="row-grid">

                    <a href=""><img src="<?php echo getMovieImageSrc(1) ?>" alt="<?php echo getMovieTitle(1); ?>" /></a>
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

        <div class="row row2" style="display: flex; flex-direction: row; justify-content: center">
            <div class="row-grid">

                <a href=""><img src="<?php echo getMovieImageSrc(12) ?>" alt="<?php echo getMovieTitle(12); echo ' '; echo getMovieSecondTitle(12)?>" width="120"/></a>
                <a href="">
                    <?php

                    echo getMovieTitle(12) . '<br>';
                    echo getMovieSecondTitle(12);

                    ?>
                </a>

            </div>
            <div class="row-grid">

                <a href=""><img src="<?php echo getMovieImageSrc(13) ?>" alt="<?php echo getMovieTitle(13); echo ' '; echo getMovieSecondTitle(13)?>" width="120"/></a>
                <a href="">
                    <?php

                    echo getMovieTitle(13) . '<br>';
                    echo getMovieSecondTitle(13);

                    ?>
                </a>

            </div>
            <div class="row-grid">

                <a href=""><img src="<?php echo getMovieImageSrc(14) ?>" alt="<?php echo getMovieTitle(14); echo ' '; echo getMovieSecondTitle(14)?>" width="120"/></a>
                <a href="">
                    <?php

                    echo getMovieTitle(14) . '<br>';
                    echo getMovieSecondTitle(14);

                    ?>
                </a>

            </div>
            <div class="row-grid">

                <a href=""><img src="<?php echo getMovieImageSrc(15) ?>" alt="<?php echo getMovieTitle(15); echo ' '; echo getMovieSecondTitle(15)?>" width="120"/></a>
                <a href="">
                    <?php

                    echo getMovieTitle(15) . '<br>';
                    echo getMovieSecondTitle(15);

                    ?>
                </a>

            </div>
            <div class="row-grid">

                <a href=""><img src="<?php echo getMovieImageSrc(11) ?>" alt="<?php echo getMovieTitle(11); echo ' '; echo getMovieSecondTitle(11)?>" width="120"/></a>
                <a href="">
                    <?php

                    echo getMovieTitle(11) . '<br>';
                    echo getMovieSecondTitle(11);

                    ?>
                </a>

            </div>
            <div class="row-grid">

                <a href=""><img src="<?php echo getSerialImageSrc(1) ?>" alt="<?php echo getSerialTitle(1); echo ' '; echo getSerialSecondTitle(1)?>" width="120"/></a>
                <a href="">
                    <?php

                    echo getSerialTitle(1) . '<br>';
                    echo getSerialSecondTitle(1);

                    ?>
                </a>

            </div>
            <div class="row-grid">

                <a href=""><img src="<?php getMovieImageSrc(5) ?>" alt="<?php getMovieTitle(5); echo ' '; getMovieSecondTitle(5)?>" width="120"/></a>
                <a href="">
                    <?php

                    echo getMovieTitle(18) . '<br>';
                    echo getMovieSecondTitle(18);

                    ?>
                </a>

            </div>
            <div class="row-grid">

                <a href=""><img src="<?php echo getMovieImageSrc(19) ?>" alt="<?php echo getMovieTitle(19); echo ' '; echo getMovieSecondTitle(19)?>" width="120"/></a>
                <a href="">
                    <?php

                    echo getMovieTitle(19) . '<br>';
                    echo getMovieSecondTitle(19);

                    ?>
                </a>

            </div>
            <div class="row-grid1">

                <a href=""><img src="<?php echo getMovieImageSrc(20) ?>" alt="<?php echo getMovieTitle(20); echo ' '; echo getMovieSecondTitle(20)?>" width="120"/></a>
                <a href="">
                    <?php

                    echo getMovieTitle(20) . '<br>';
                    echo getMovieSecondTitle(20);

                    ?>
                </a>

            </div>
            <div class="row-grid2">

                <a href=""><img src="<?php echo getMovieImageSrc(21) ?>" alt="<?php echo getMovieTitle(21); echo ' '; echo getMovieSecondTitle(21)?>" width="120"/></a>
                <a href="">
                    <?php

                    echo getMovieTitle(21) . '<br>';
                    echo getMovieSecondTitle(21);

                    ?>
                </a>

            </div>
            <div class="row-grid-last">

                <a href=""><img src="<?php echo getMovieImageSrc(22) ?>" alt="<?php echo getMovieTitle(22); echo ' '; echo getMovieSecondTitle(22)?>" width="120"/></a>
                <a href="">
                    <?php

                    echo getMovieTitle(22) . '<br>';
                    echo getMovieSecondTitle(22);

                    ?>
                </a>

            </div>
        </div>
    </div>
    <div class="sep"></div>
    <?php include 'footer.php';?>
</content>


<script>
    var slideIndex = 1;
    showDivs(slideIndex);

    function currentDiv(n) {
        showDivs(slideIndex = n);
    }

    function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("demo");
        if (n > x.length) {slideIndex = 1}
        if (n < 1) {slideIndex = x.length}
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" w3-white", "");
        }
        x[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " w3-white";

    }
</script>
</body>
</html>
