<?php
include "create.php";

$sql = "SELECT * from phpstudent1";
$result= mysqli_query($conn,$sql);
?>
<table border="1" width="100%">
    <tr>
        <th>ID</th>
        <th>Username</th>
        <th>Address</th>
        <th>Email</th>
        <th>Message</th>
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