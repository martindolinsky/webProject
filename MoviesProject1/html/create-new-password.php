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
        $selector = $_GET["selector"];
        $validator = $_GET["Validator"];

        if (empty($selector) || empty($validator)) {
            echo "Could not validate your request!";
        } else {
            if (ctype_xdigit($selector) !== false && ctype_xdigit($validator) !== false) {
                ?>

                <form action="reset-password.inc.php" method="post">
                    <input type="hidden" name="selector" value="<?php echo $selector ?>">
                    <input type="hidden" name="validator" value="<?php echo $validator ?>">
                    <input type="password" name="pwd" placeholder="Enter a new password...">
                    <input type="password" name="pwd-repeat" placeholder="Repeat new password...">
                    <button type="submit" name="reset-password-submit">Reset password</button>
                </form>

        <?php
            }
        }
        ?>
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
