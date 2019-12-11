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
        <video autoplay class="object-cover w-full h-full" loop muted src="../img/video.mp4"></video>
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
            <h1 class="text-white md:text-6xl text-2xl font-bold font-sans m-0 md:leading-none">Sample Text</h1>
            <p class="text-white text-lg md:max-w-lg w-full md:my-4">Lorem ipsum dolor sit amet, consectetur adipisicing
                elit. Quo laboriosam quae mollitia voluptatibus placeat. Libero adipisci ipsam, nobis, corrupti nesciunt
                id beatae laudantium quis dolorum aliquam impedit quae recusandae ad.</p>
            <a class="px-5 py-3 inline-block my-2 bg-orange-500 hover:bg-transparent hover:text-white transition-500 rounded-lg"
               href="#movies-section">Movies</a>
        </div>
    </div>
</header>

<div class="container mx-auto my-6 lg:px-16 px-4">
    <ul class="flex items-center leading-normal text-gray-500 font-alt">
        <li class="text-gray-300 pr-2">Latest Additions</li>
        <li class="pr-2">|</li>
        <li class="pr-2">
            <a class="text-red-600" href="#">All Movies</a>
        </li>
    </ul>
</div>

<div class="flex items-stretch justify-start mb-10 px-4 overflow-auto relative" id="movies-section">

    <!--    need to fix this!!!-->
    <?php


    $sql = "select * from movies";

    $result = mysqli_query($conn, $sql);
    $queryResults = mysqli_num_rows($result);


    if ($queryResults > 0) {
        // output data of each row
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<a class=\"relative group block mr-4 flex-shrink-0\" href=\""
                . getMoviePage($row['movieID']) . "\">\n"
                . "        <div style=\"border-radius: 10px;\"\n"
                . "             class=\"absolute inset-0 bg-black opacity-75 hidden group-hover:flex flex-col justify-end text-white px-4 py-4 cursor-pointer justify-center\">\n"
                . "            <div>\n"
                . "                <h3 class=\"text-lg mb-2\">"
                . getMovieTitle($row['movieID']) . "\n"
                . " "
                . getMovieSecondTitle($row['movieID']) . "</h3>\n"
                . "                <p class=\"leading-normal\">"
                . getMovieDesc($row['movieID']) . "</p>\n"
                . "            </div>\n"
                . "        </div>\n"
                . "        <img style=\"border-radius: 10px; height: 474.5px \" alt=\"#\" class=\"max-w-xs\" src=\""
                . getMovieImageSrc($row['movieID']) . "\">\n"
                . "    </a>";

        }
    } else {
        echo "0 results";
    }


    ?>

</div>

<div class="container mx-auto py-8 font-alt text-white text-center md:px-0 px-4">
    <h2 class="md:text-5xl text-2xl font-sans font-bold mb-4">About Us</h2>
    <p class="opacity-75 max-w-md mx-auto font-alt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam
        temporibus error ducimus necessitatibus eius excepturi nemo exercitationem distinctio minus ipsum! Delectus
        beatae ducimus eos repellendus. Sit consectetur ad expedita provident.</p>

    <a class="text-brand my-2 inline-block" href="#">More info +</a>
</div>

<footer class="container mx-auto text-white py-6 md:px-16 px-4">
    <div class="md:pl-3 md:border-l border-white mb-6">
        <p class="opacity-75">SOVY Newsletter</p>
        <h3 class="md:text-6xl text-3xl font-sans font-bold mb-4">See it First</h3>

        <form action="#">
            <div class="flex items-center justify-start flex-wrap">
                <input class="text-white border bg-transparent py-3 leading-tight px-4 md:w-1/3 w-full mr-4"
                       placeholder="Enter your email here*" type="email"/>
                <input class="bg-orange-400 p-3 rounded-lg hover:bg-transparent transition-500 cursor-pointer"
                       type="submit" value="Subscribe"/>
            </div>
        </form>
    </div>

    <div class="flex items-center justify-start flex-wrap">
        <p class="opacity-75 text-sm md:mb-0 mb-3">&copy; 2023 By Jakub Kutka, Martin Dolinsky and Damian Matysko.
            Template used from Wix.com.</p>

        <div class="md:ml-4 flex items-center justify-start">
            <a class="mx-2" href="#">
                <svg class="fill-current text-white opacity-50 hover:opacity-75 w-4 h-4" height="24" viewBox="0 0 24 24"
                     width="24" xmlns="http://www.w3.org/2000/svg"><title>instagram</title>
                    <path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913a5.885 5.885 0 0 0 1.384 2.126A5.868 5.868 0 0 0 4.14 23.37c.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558a5.898 5.898 0 0 0 2.126-1.384 5.86 5.86 0 0 0 1.384-2.126c.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913a5.89 5.89 0 0 0-1.384-2.126A5.847 5.847 0 0 0 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227a3.81 3.81 0 0 1-.899 1.382 3.744 3.744 0 0 1-1.38.896c-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421a3.716 3.716 0 0 1-1.379-.899 3.644 3.644 0 0 1-.9-1.38c-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678a6.162 6.162 0 1 0 0 12.324 6.162 6.162 0 1 0 0-12.324zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405a1.441 1.441 0 0 1-2.88 0 1.44 1.44 0 0 1 2.88 0z"></path>
                </svg>
            </a>

            <a class="mx-2" href="#">
                <svg class="fill-current text-white opacity-50 hover:opacity-75 w-4 h-4" height="24" viewBox="0 0 24 24"
                     width="24" xmlns="http://www.w3.org/2000/svg"><title>vimeo</title>
                    <path d="M23.977 6.416c-.105 2.338-1.739 5.543-4.894 9.609-3.268 4.247-6.026 6.37-8.29 6.37-1.409 0-2.578-1.294-3.553-3.881L5.322 11.4C4.603 8.816 3.834 7.522 3.01 7.522c-.179 0-.806.378-1.881 1.132L0 7.197a315.065 315.065 0 0 0 3.501-3.128C5.08 2.701 6.266 1.984 7.055 1.91c1.867-.18 3.016 1.1 3.447 3.838.465 2.953.789 4.789.971 5.507.539 2.45 1.131 3.674 1.776 3.674.502 0 1.256-.796 2.265-2.385 1.004-1.589 1.54-2.797 1.612-3.628.144-1.371-.395-2.061-1.614-2.061-.574 0-1.167.121-1.777.391 1.186-3.868 3.434-5.757 6.762-5.637 2.473.06 3.628 1.664 3.493 4.797l-.013.01z"></path>
                </svg>
            </a>

            <a class="mx-2" href="#">
                <svg class="fill-current text-white opacity-50 hover:opacity-75 w-4 h-4" height="24" viewBox="0 0 24 24"
                     width="24" xmlns="http://www.w3.org/2000/svg"><title>youtube</title>
                    <path class="a"
                          d="M23.495 6.205a3.007 3.007 0 0 0-2.088-2.088c-1.87-.501-9.396-.501-9.396-.501s-7.507-.01-9.396.501A3.007 3.007 0 0 0 .527 6.205a31.247 31.247 0 0 0-.522 5.805 31.247 31.247 0 0 0 .522 5.783 3.007 3.007 0 0 0 2.088 2.088c1.868.502 9.396.502 9.396.502s7.506 0 9.396-.502a3.007 3.007 0 0 0 2.088-2.088 31.247 31.247 0 0 0 .5-5.783 31.247 31.247 0 0 0-.5-5.805zM9.609 15.601V8.408l6.264 3.602z"></path>
                </svg>
            </a>

            <a class="mx-2" href="#">
                <svg class="fill-current text-white opacity-50 hover:opacity-75 w-4 h-4" height="24" viewBox="0 0 24 24"
                     width="24" xmlns="http://www.w3.org/2000/svg"><title>facebook</title>
                    <path d="M22.676 0H1.324C.593 0 0 .593 0 1.324v21.352C0 23.408.593 24 1.324 24h11.494v-9.294H9.689v-3.621h3.129V8.41c0-3.099 1.894-4.785 4.659-4.785 1.325 0 2.464.097 2.796.141v3.24h-1.921c-1.5 0-1.792.721-1.792 1.771v2.311h3.584l-.465 3.63H16.56V24h6.115c.733 0 1.325-.592 1.325-1.324V1.324C24 .593 23.408 0 22.676 0"></path>
                </svg>
            </a>

            <a class="mx-2" href="#">
                <svg class="fill-current text-white opacity-50 hover:opacity-75 w-4 h-4" height="24" viewBox="0 0 24 24"
                     width="24" xmlns="http://www.w3.org/2000/svg"><title>twitter</title>
                    <path d="M23.954 4.569a10 10 0 0 1-2.825.775 4.958 4.958 0 0 0 2.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 0 0-8.384 4.482C7.691 8.094 4.066 6.13 1.64 3.161a4.822 4.822 0 0 0-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 0 1-2.228-.616v.061a4.923 4.923 0 0 0 3.946 4.827 4.996 4.996 0 0 1-2.212.085 4.937 4.937 0 0 0 4.604 3.417 9.868 9.868 0 0 1-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 0 0 7.557 2.209c9.054 0 13.999-7.496 13.999-13.986 0-.209 0-.42-.015-.63a9.936 9.936 0 0 0 2.46-2.548l-.047-.02z"></path>
                </svg>
            </a>
        </div>
    </div>

</footer>


<script src="../js/movies-tab.js"></script>
</body>
</html>
