<?php
$db_host = 'localhost';
$db_name = 'mobiauth';
$db_password = '2O9n9f*n';
$db_user = 'mobiauth';

$con = mysqli_connect($db_host, $db_user, $db_password, $db_name);
if (mysqli_connect_errno() ) {
    // If there is an error with the connection, stop the script and display the error.
    echo 'error, no database connection';
}
?>