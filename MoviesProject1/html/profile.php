<?php
include_once 'connection.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/index.css" />
</head>
<body style="margin: 0; min-height: 100vh">
<?php include 'header.php';?>

<main>
    <div class="container1" style="background-color: #363836;color: #fff;margin: 100px 20%;">

        <h1 style="text-align: center">Profile</h1>

        <?php
        $title = mysqli_real_escape_string($conn, $_GET['id']);

        $sql = "select * from Users";
        $result = mysqli_query($conn, $sql);
        $queryResults = mysqli_num_rows($result);

        if ($queryResults > 0) {
            // output data of each row
            while ($row = mysqli_fetch_assoc($result)) {
                echo
                    "<h2>Name: " . $row["uidUsers"] . "</h2>" .
                    "<h5>E-Mail: " . $row["emailUsers"] . "</h5>"
                ;
            }
        } else {
            echo "0 results";
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
