<?php
include "connectiondb.php";

// Taking  4 values from the form data(input)
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $message = $_POST['message'];

$sql = "INSERT INTO phpstudent2(username,address,email,message)VALUES('$username','$address','$email','$message')";
$result=mysqli_query($conn,$sql);
if($result){
    header("Location:display1.php");
}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM FILL UP PAGE</title>
</head>

<body>
    <?php include('header.php');?>
    <center>
        <h1>This is Form Fill Up Page</h1>
        <form action="" method="post">
            Username:<input type="text" name="username" required /><br><br>
            Address:<input type="text" name="address" required /><br><br>
            Email: <input type="email" name="email" required /><br><br>
            Message: <input type="text" name="message" required /><br><br>
            <input type="submit" name="submit">
        </form>
    </center>
    <?php include('footer.php'); ?>
</body>

</html>