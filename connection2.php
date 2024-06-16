<?php
// session_start();
$conn = mysqli_connect("localhost", "root", "", "reg_data");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>