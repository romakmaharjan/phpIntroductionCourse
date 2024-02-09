<?php
include "index.php";

$sql = "SELECT * FROM phpstudent2";
$result= mysqli_query($conn,$sql);
?>
<table border="1" width=100%>
    <tr>
        <th>ID</th>
        <th>USERNAME</th>
        <th>ADDRESS</th>
        <th>EMAIL</th>
        <th>MESSAGE</th>
    </tr>

    <?php $key=1; foreach ($result as $student) { ?>
    <tr>
        <td><?=$key;?></td>
        <td><?=$student['username']; ?></td>
        <td><?=$student['address']; ?></td>
        <td><?=$student['email']; ?></td>
        <td><?=$student['message']; ?></td>
        <td>
            <a href="">Edit</a>
            <a href="">Delete</a>
        </td>
    </tr>
    <?php $key++; } ?>
</table>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DISPLAY TABLE</title>
</head>

<body>


</body>

</html>