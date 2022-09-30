<?php
/* Database connection start */
$servername = "fdb26.awardspace.net";
$username = "3074702_forum";
$password = "paulalabelle1";
$dbname = "3074702_forum";
$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>



