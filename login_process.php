<?php
require_once 'config.inc.php';

$email    = $_POST['email'];
$password = $_POST['password'];

$result = $conn->query("SELECT * FROM mphp4_users WHERE username = '$email' AND password = '$password'");

if (mysqli_num_rows($result) == 1) {

//  session_start();
//  $_SESSION['em'] = $email;

    header("Location:card.php");
} else {
    header("Location:index.php");
    exit;
}
?>
