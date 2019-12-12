<?php
if (isset($_POST['submit'])) {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $mailFrom = $_POST['email'];
    $message = $_POST['message'];
    $mailTo = "martin.dolinsky@akademiasovy.sk";
    $headers = "From: " . $mailFrom;
    $txt = "You have received an email from " . $firstName . " " . $lastName . ".\n\n".$message;
    mail($mailTo,"MovieTrailers ",$txt,$headers);
    header('Location: index.php?mailSend');
}
