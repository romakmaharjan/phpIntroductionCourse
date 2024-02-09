<?php
include "connectiondb.php";

?>
<html>

<head>
    <title>Display Data Table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <h1>Table Data Display</h1>
    <a href="insert.php"><button class="btn btn-primary">Add +</button></a>
    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>USERNAME</th>
            <th>ADDRESS</th>
            <th>EMAIL</th>
            <th>MESSAGE</th>
        </tr>
        <?php
            $sql = "SELECT * FROM phpstudent2";
            $result= mysqli_query($conn,$sql);
        ?>
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
</body>

</html>