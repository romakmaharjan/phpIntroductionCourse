<?php
$conn = mysqli_connect("localhost","root","","data1");
if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}
?>