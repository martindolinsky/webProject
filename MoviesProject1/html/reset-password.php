<?php
include_once 'connection.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <link rel="stylesheet" href="../css/index.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body style="margin: 0; min-height: 100vh">
<?php include 'header.php';?>

<main>
    <div class="container1" style="background-color: #363836;color: #fff;margin: 100px 20%;">
        <h1 style="text-align: center">Reset Your password</h1>
        <?php
        if (isset($_GET["reset"])) {
            if ($_GET["reset"]) {
                echo '<p style="text-align: center" class="signupsuccess">Check your e-mail!</p>';
            }
        }
        ?>
        <form class="reset-form" action="reset-request.inc.php" method="post" style="display: flex; flex-direction: column;align-items: center">
            <h3 style="padding-top: 20px;">Username:</h3>
            <input style="width: 50%; margin: 10px; padding: 5px; border-radius: 10px; border: 2px solid black; font-size: 1.5em"
                   type="text" name="email" placeholder="Enter your email address...">
            <button type="submit" name="reset-request-submit" class="btn btn-outline-primary" style="margin: 10px">Reset password</button>
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
