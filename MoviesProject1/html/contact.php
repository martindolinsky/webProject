<?php
include_once 'connection.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Contact</title>
    <link rel="stylesheet" href="../css/index.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body style="margin: 0;">
<div class="sep"></div>
<?php include 'header.php';?>
<div class="sep"></div>
<div class="container1" style="background-color: #363836;color: #fff; height: 700px;margin: 0 20%;">
    <div class="sep"></div>
    <form class="contact-form" action="contactform.php" method="post" style="display: flex; flex-direction: column;align-items: center">
        <h3>First name:</h3>
        <input type="text" name="firstName" placeholder="First name...">
        <h3>Last name:</h3>
        <input type="text" name="lastName" placeholder="Last name...">
        <h3>E-mail:</h3>
        <input type="email" name="email" placeholder="email@email.com">
        <h3>Message:</h3>
        <textarea name="message" placeholder="Message..." id="message" cols="50" rows="10"></textarea>
        <button type="submit" name="submit" class="btn btn-outline-primary" style="margin: 10px">Submit</button>
    </form>
</div>

<?php include 'footer.php'?>



</body>
</html>
