<?php
$conn = new mysqli("localhost", "root", "password","registration");

if (!$conn) {
    die("Connection failed: " . mysql_error());
}

?>