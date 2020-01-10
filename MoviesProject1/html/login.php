<?php
include_once 'connection.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/index.css" />
</head>
<body style="margin: 0; min-height: 100vh">
<?php include 'header.php';?>

<main>
    <div class="container1" style="background-color: #363836;color: #fff;margin: 100px 20%;">
        <h1 style="text-align: center">Log in</h1>
        <?php
        if (isset($_GET['error'])) {
            if ($_GET['error'] == "emptyfields") {
                echo '<h5 style="color: red; text-align: center;">Fill all fields please!</h5>';
            }
            else if ($_GET['error'] == "wrongpwd") {
                echo '<h5 style="color: red; text-align: center;">Invalid password!</h5>';
            }
            else if ($_GET['error'] == "nouser") {
                echo '<h5 style="color: red; text-align: center;">No user found!</h5>';
            }
        }
        ?>
        <form class="login-form" action="login.inc.php" method="post" style="display: flex; flex-direction: column;align-items: center">
            <h3 style="padding-top: 20px;">Username/E-mail:</h3>
            <input style="width: 50%; margin: 10px; padding: 5px; border-radius: 10px; border: 2px solid black; font-size: 1.5em"
                   type="text" name="mailuid" placeholder="Username">
            <h3>Password:</h3>
            <input style="width: 50%; margin: 10px; padding: 5px; border-radius: 10px; border: 2px solid black; font-size: 1.5em"
                   type="password" name="pwd" placeholder="Password">
            <button type="submit" name="login-submit" class="btn btn-outline-primary" style="margin: 10px">Log in</button>
            <?php
            if (isset($_GET['newpwd'])) {
                if ($_GET['newpwd'] == "passwordupdated") {
                    echo '<p style="color: green;">Your password has been reset!</p>';
                }
            }
            ?>
            <a href="reset-password.php">Forgot your password?</a>
        </form>
    </div>
</main>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>

<?php include 'footer.php'?>
