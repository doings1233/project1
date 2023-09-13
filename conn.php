<?php
$hostname = "localhost";
$username = "pediforte";
$password = "Pediforte";
$dbname = "contact_form";

$conn = mysqli_connect($hostname, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
