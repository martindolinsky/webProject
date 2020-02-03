<?php
include_once 'connection.php';
session_start()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">
    <link href="../css/movies-tab.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="../css/index.css" rel="stylesheet">
    <title>Movies</title>
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
        <video autoplay class="object-cover w-full h-full" loop muted src="../img/movie_bg.mp4"></video>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <a class="navbar-brand" href="index.php" style="color: rgb(204,68,75);">MovieTrailers</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="right">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="movies-tab.php">Movies</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tvseries-tab.php">TV Series</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                    <?php
                    if (!empty($_SESSION['userId'])) {
                        echo '
                            <li class="nav-item">
                            <a class="nav-link" href="profile.php">Profile</a>
                            </li>   
                            <li class="nav-item"><form action="logout.inc.php" method="post">
                                                <button class="btn btn-outline-danger my-2 my-sm-0" type="submit" name="logout-submit">Logout</button>
                                            </form></li>';
                    } else {
                        echo '
                    <a class="nav-link" href="login.php"><button class="btn btn-outline-danger my-2 my-sm-0" type="submit" name="login-page">Log in</button></a>
                    <li class="nav-item"><a href="signup.php" class="nav-link header-signup" style="text-align: center"><button class="btn btn-outline-danger my-2 my-sm-0" type="submit" name="signup-page">Sign up</button></a></li>
                ';
                    }
                    ?>
                </ul>
            </div>
            <div class="form">
                <form class="form-inline my-2 my-lg-0" action="search.php" method="POST">
                    <input class="form-control mr-sm-2" name="search" type="text" placeholder="Search..."
                           aria-label="Search">
                    <button class="btn btn-outline-danger my-2 my-sm-0" name="submit-search" id="submit" type="submit">
                        Search
                    </button>
                </form>
            </div>
        </div>
    </nav>
    <div class="container mx-auto lg:mt-56 lg:px-16 px-4 py-4">
        <div class="md:pl-8 md:border-l border-white">
            <p class="text-white tracking-wide text-base font-light leading-none">Out now</p>
            <h1 class="text-white md:text-6xl text-2xl font-bold font-sans m-0 md:leading-none">
                <?php
                $sql = "select * from movies WHERE movieID = 2";
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
                $sql = "select * from movies WHERE movieID = 2";
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
            <a class="px-5 py-3 inline-block my-2 bg-orange-500 hover:bg-transparent hover:text-white transition-500 rounded-lg hoverButton"
               href="#movies-section">Movies</a>
        </div>
    </div>
</header>
<div class="container mx-auto my-6 lg:px-16 px-4" id="movies-section">
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
<div class="flex items-stretch justify-start mb-10 px-4 overflow-auto relative" id="section-latest" style="display: flex;">
    <?php
    $sql = "select * from movies order by movieID desc";
    $result = mysqli_query($conn, $sql);
    $queryResults = mysqli_num_rows($result);
    if ($queryResults > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<a class=\"relative group block mr-4 flex-shrink-0\" href=\"play-movie.php?id="
                . $row['movieID'] . "\">\n"
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
<div class="flex items-stretch justify-start mb-10 px-4 overflow-auto relative" id="section-title-az" style="display: none;">
    <?php
    $sql = "select * from movies order by titleEN asc, secondTitleEN asc";
    $result = mysqli_query($conn, $sql);
    $queryResults = mysqli_num_rows($result);
    if ($queryResults > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<a class=\"relative group block mr-4 flex-shrink-0\" href=\"play-movie.php?id="
                . $row['movieID'] . "\">\n"
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
<div class="flex items-stretch justify-start mb-10 px-4 overflow-auto relative" id="section-title-za" style="display: none;">
    <?php
    $sql = "select * from movies order by titleEN desc, secondTitleEN desc";
    $result = mysqli_query($conn, $sql);
    $queryResults = mysqli_num_rows($result);
    if ($queryResults > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<a class=\"relative group block mr-4 flex-shrink-0\" href=\"play-movie.php?id="
                . $row['movieID'] . "\">\n"
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
<div class="flex items-stretch justify-start mb-10 px-4 overflow-auto relative" id="section-year-az" style="display: none;">
    <?php
    $sql = "select * from movies order by year asc";
    $result = mysqli_query($conn, $sql);
    $queryResults = mysqli_num_rows($result);
    if ($queryResults > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<a class=\"relative group block mr-4 flex-shrink-0\" href=\"play-movie.php?id="
                . $row['movieID'] . "\">\n"
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
<div class="flex items-stretch justify-start mb-10 px-4 overflow-auto relative" id="section-year-za" style="display: none;">
    <?php
    $sql = "select * from movies order by year desc";
    $result = mysqli_query($conn, $sql);
    $queryResults = mysqli_num_rows($result);
    if ($queryResults > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<a class=\"relative group block mr-4 flex-shrink-0\" href=\"play-movie.php?id="
                . $row['movieID'] . "\">\n"
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
<?php
include 'footer.php';
?>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
<script src="../js/movies-tab.js"></script>
</body>
</html>
