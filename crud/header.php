<?php

$conn = mysqli_connect("localhost",'root','',"data1");
if(!$conn){
    die("Database connection errors");
    
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <blockquote>
        <a href="index.php">Home</a>
        <a href="insert.php">Add Studnet</a>
        <hr>