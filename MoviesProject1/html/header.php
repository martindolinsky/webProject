<?php
session_start();
?>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <a class="navbar-brand" href="index.php">LOGO</a>
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
                            <a class="nav-link" href="profile.php">Profile</a></li>    
                            <li class="nav-item"><form action="logout.inc.php" method="post">
                            <button class="btn btn-outline-danger my-2 my-sm-0" type="submit" name="logout-submit">Logout</button>
                            </form></li>';
                        }
                        else {
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
</header>
