<?php
$conn =mysqli_connect('localhost','root','','user');
if(!$conn){
    die('connection error');
}

$sql = "SELECT * FROM student1";
$result = mysqli_query($conn,$sql);
?>
<table border="1" width="100%">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Address</th>
        <th>Phone</th>
    </tr>
    <?php $key=1; foreach ($result as $student) { ?>
    <tr>
        <td><?=$key;?></td>
        <td><?=$student['name']; ?></td>
        <td><?=$student['email']; ?></td>
        <td><?=$student['address']; ?></td>
        <td><?=$student['phone']; ?></td>
        <td>
            <a href="">Edit</a>
            <a href="">Delete</a>
        </td>
    </tr>
    <?php $key++; } ?>
</table>