<?php
include_once 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">
    <link href="../css/movies-tab.css" rel="stylesheet">
    <title>Document</title>
</head>

<style>
    html {
        scroll-behavior: smooth;
    }

    ::-webkit-scrollbar {
        display: none;
    }
</style>
<body class="antialiased bg-fixed" style="background-image: url('../img/bg-img.jpg');">
<header class="header relative lg:overflow-hidden">
    <div class="absolute inset-0 z-negative lg:opacity-100">
        <video autoplay class="object-cover w-full h-full" loop muted src="../img/TVSeries-bg.mp4"></video>
    </div>

    <nav class="md:p-3 py-2 px-3 z-10">
        <div class="container mx-auto md:flex block flex-wrap items-center justify-start">
            <div class="flex-1 flex items-center justify-between">
                <a href="#">
                    <!--                    <img alt="Logo" class="w-32" src="../img/loog-wp.png"> -->
                </a>

                <button class="md:hidden block pr-1" data-menu-toggle>
                    <svg class="fill-current text-white w-6 h-6" height="20" viewBox="0 0 20 20" width="20"
                         xmlns="http://www.w3.org/2000/svg"><title>menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                    </svg>
                </button>

            </div>
            <div class="form">
                <form class="form-inline my-2 my-lg-0" action="search.php" method="POST">
                    <input class="form-control mr-sm-2" name="search" type="text" placeholder="Search..."
                           aria-label="Search">
                    <button class="btn btn-outline-primary my-2 my-sm-0" name="submit-search" id="submit" type="submit">
                        Search
                    </button>
                </form>
            </div>
            <ul class="md:flex hidden flex-wrap items-center justify-start text-white" data-menu>
                <li class="md:px-6 py-2">
                    <a class="text-brand" href="index.php">Home</a>
                </li>
                <li class="md:px-6 py-2">
                    <a href="movies-tab.php">Movies</a>
                </li>
                <li class="md:px-6 py-2">
                    <a href="tvseries-tab.php">TV Series</a>
                </li>
                <li class="md:px-6 py-2">
                    <a href="about.php">About Us</a>
                </li>
                <li class="md:px-6 py-2">
                    <a href="contact.php">Contact</a>
                </li>

            </ul>
        </div>
    </nav>
    <div class="container mx-auto lg:mt-56 lg:px-16 px-4 py-4">
        <div class="md:pl-8 md:border-l border-white">
            <p class="text-white tracking-wide text-base font-light leading-none">Out now</p>
            <h1 class="text-white md:text-6xl text-2xl font-bold font-sans m-0 md:leading-none">
                <?php
                $sql = "select * from tvseries WHERE serialID = 38";
                $result = mysqli_query($conn, $sql);
                $queryResults = mysqli_num_rows($result);

                if ($queryResults > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo $row['titleEN'] . " " . $row['secondTitleEN'];
                    }
                } else {
                    echo "0 results";
                }
                ?>
            </h1>
            <p class="text-white text-lg md:max-w-lg w-full md:my-4">
                <?php
                $sql = "select * from tvseries WHERE serialID = 38";
                $result = mysqli_query($conn, $sql);
                $queryResults = mysqli_num_rows($result);

                if ($queryResults > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo $row['description'];
                    }
                } else {
                    echo "0 results";
                }
                ?>
            </p>
            <a class="px-5 py-3 inline-block my-2 bg-orange-500 hover:bg-transparent hover:text-white transition-500 rounded-lg"
               href="#tvseries-section">TV Series</a>
        </div>
    </div>
</header>


<div class="container mx-auto my-6 lg:px-16 px-4" id="tvseries-section">
    <ul class="flex items-center leading-normal text-gray-500 font-alt">
        <li class="text-red-600 pr-2">
            <button class="color" id="a-section-latest" onclick="showOrHide1()" style="color: red;">Latest Additions</button>
        </li>
        <li class="pr-2">|</li>
        <li class="pr-2">
            <button class="color" id="a-section-title-az" onclick="showOrHide2()" style="color: white;">Title A-Z</button>
        </li>
        <li class="pr-2">|</li>
        <li class="pr-2">
            <button class="color" id="a-section-title-za" onclick="showOrHide3()" style="color: white;">Title Z-A</button>
        </li>
        <li class="pr-2">|</li>
        <li class="pr-2">
            <button class="color" id="a-section-year-az" onclick="showOrHide4()" style="color: white;">Year A-Z</button>
        </li>
        <li class="pr-2">|</li>
        <li class="pr-2">
            <button class="color" id="a-section-year-za" onclick="showOrHide5()" style="color: white;">Year Z-A</button>
        </li>
    </ul>
</div>

<div class="flex items-stretch justify-start mb-10 px-4 overflow-auto relative" id="section-latest" style="display: flex">
    <?php
    $sql = "select * from tvseries order by serialID desc";
    $result = mysqli_query($conn, $sql);
    $queryResults = mysqli_num_rows($result);

    if ($queryResults > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<a class=\"relative group block mr-4 flex-shrink-0\" href=\"play-serial.php?id="
                . $row['serialID'] . "\">\n"
                . "        <div style=\"border-radius: 10px;\"\n"
                . "             class=\"absolute inset-0 bg-black opacity-75 hidden group-hover:flex flex-col justify-end text-white px-4 py-4 cursor-pointer justify-center\">\n"
                . "            <div>\n"
                . "                <h3 class=\"text-lg mb-2\">"
                . $row['titleEN'] . "\n"
                . " "
                . $row['secondTitleEN'] . "</h3>\n"
                . "<p>" . $row['year'] . "</p>"
                . "                <p class=\"leading-normal\">"
                . $row['description'] . "</p>\n"
                . "            </div>\n"
                . "        </div>\n"
                . "        <img style=\"border-radius: 10px; height: 474.5px \" alt=\"#\" class=\"max-w-xs\" src=\""
                . $row['srcImg'] . "\">\n"
                . "    </a>";
        }
    } else {
        echo "0 results";
    }
    ?>

</div>

<div class="flex items-stretch justify-start mb-10 px-4 overflow-auto relative" id="section-title-az" style="display: none">
    <?php
    $sql = "select * from tvseries order by titleEN asc, secondTitleEN asc";
    $result = mysqli_query($conn, $sql);
    $queryResults = mysqli_num_rows($result);

    if ($queryResults > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<a class=\"relative group block mr-4 flex-shrink-0\" href=\"play-serial.php?id="
                . $row['serialID'] . "\">\n"
                . "        <div style=\"border-radius: 10px;\"\n"
                . "             class=\"absolute inset-0 bg-black opacity-75 hidden group-hover:flex flex-col justify-end text-white px-4 py-4 cursor-pointer justify-center\">\n"
                . "            <div>\n"
                . "                <h3 class=\"text-lg mb-2\">"
                . $row['titleEN'] . "\n"
                . " "
                . $row['secondTitleEN'] . "</h3>\n"
                . "<p>" . $row['year'] . "</p>"
                . "                <p class=\"leading-normal\">"
                . $row['description'] . "</p>\n"
                . "            </div>\n"
                . "        </div>\n"
                . "        <img style=\"border-radius: 10px; height: 474.5px \" alt=\"#\" class=\"max-w-xs\" src=\""
                . $row['srcImg'] . "\">\n"
                . "    </a>";
        }
    } else {
        echo "0 results";
    }
    ?>



</div>

<div class="flex items-stretch justify-start mb-10 px-4 overflow-auto relative" id="section-title-za" style="display: none">
    <?php
    $sql = "select * from tvseries order by titleEN desc, secondTitleEN desc";
    $result = mysqli_query($conn, $sql);
    $queryResults = mysqli_num_rows($result);

    if ($queryResults > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<a class=\"relative group block mr-4 flex-shrink-0\" href=\"play-serial.php?id="
                . $row['serialID'] . "\">\n"
                . "        <div style=\"border-radius: 10px;\"\n"
                . "             class=\"absolute inset-0 bg-black opacity-75 hidden group-hover:flex flex-col justify-end text-white px-4 py-4 cursor-pointer justify-center\">\n"
                . "            <div>\n"
                . "                <h3 class=\"text-lg mb-2\">"
                . $row['titleEN'] . "\n"
                . " "
                . $row['secondTitleEN'] . "</h3>\n"
                . "<p>" . $row['year'] . "</p>"
                . "                <p class=\"leading-normal\">"
                . $row['description'] . "</p>\n"
                . "            </div>\n"
                . "        </div>\n"
                . "        <img style=\"border-radius: 10px; height: 474.5px \" alt=\"#\" class=\"max-w-xs\" src=\""
                . $row['srcImg'] . "\">\n"
                . "    </a>";
        }
    } else {
        echo "0 results";
    }
    ?>

</div>

<div class="flex items-stretch justify-start mb-10 px-4 overflow-auto relative" id="section-year-az" style="display: none">
    <?php
    $sql = "select * from tvseries order by year asc";
    $result = mysqli_query($conn, $sql);
    $queryResults = mysqli_num_rows($result);

    if ($queryResults > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<a class=\"relative group block mr-4 flex-shrink-0\" href=\"play-serial.php?id="
                . $row['serialID'] . "\">\n"
                . "        <div style=\"border-radius: 10px;\"\n"
                . "             class=\"absolute inset-0 bg-black opacity-75 hidden group-hover:flex flex-col justify-end text-white px-4 py-4 cursor-pointer justify-center\">\n"
                . "            <div>\n"
                . "                <h3 class=\"text-lg mb-2\">"
                . $row['titleEN'] . "\n"
                . " "
                . $row['secondTitleEN'] . "</h3>\n"
                . "<p>" . $row['year'] . "</p>"
                . "                <p class=\"leading-normal\">"
                . $row['description'] . "</p>\n"
                . "            </div>\n"
                . "        </div>\n"
                . "        <img style=\"border-radius: 10px; height: 474.5px \" alt=\"#\" class=\"max-w-xs\" src=\""
                . $row['srcImg'] . "\">\n"
                . "    </a>";
        }
    } else {
        echo "0 results";
    }
    ?>

</div>

<div class="flex items-stretch justify-start mb-10 px-4 overflow-auto relative" id="section-year-za" style="display: none">
    <?php
    $sql = "select * from tvseries order by year desc";
    $result = mysqli_query($conn, $sql);
    $queryResults = mysqli_num_rows($result);

    if ($queryResults > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<a class=\"relative group block mr-4 flex-shrink-0\" href=\"play-serial.php?id="
                . $row['serialID'] . "\">\n"
                . "        <div style=\"border-radius: 10px;\"\n"
                . "             class=\"absolute inset-0 bg-black opacity-75 hidden group-hover:flex flex-col justify-end text-white px-4 py-4 cursor-pointer justify-center\">\n"
                . "            <div>\n"
                . "                <h3 class=\"text-lg mb-2\">"
                . $row['titleEN'] . "\n"
                . " "
                . $row['secondTitleEN'] . "</h3>\n"
                . "<p>" . $row['year'] . "</p>"
                . "                <p class=\"leading-normal\">"
                . $row['description'] . "</p>\n"
                . "            </div>\n"
                . "        </div>\n"
                . "        <img style=\"border-radius: 10px; height: 474.5px \" alt=\"#\" class=\"max-w-xs\" src=\""
                . $row['srcImg'] . "\">\n"
                . "    </a>";
        }
    } else {
        echo "0 results";
    }
    ?>

</div>


<footer class="container mx-auto text-white py-6 md:px-16 px-4">
    <div class="flex items-center justify-start flex-wrap">
        <p class="opacity-75 text-sm md:mb-0 mb-3">&copy; 2019 By Jakub Kutka, Martin Dolinsky and Damian Matysko.
            Template used from Wix.com.</p>
    </div>

</footer>


<script src="../js/movies-tab.js"></script>
</body>
</html>

