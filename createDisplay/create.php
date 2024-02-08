<?php
$conn = mysqli_connect("localhost","root","","data1");
if(!$conn){
    die("connection failed");
}
// Taking  4 values from the form data(input)
if(!empty($_POST)){
    $username = $_POST['username'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $message = $_POST['message'];

$sql = "INSERT INTO phpstudent1(username,address,email,message)VALUES('$username','$address','$email','$message')";
$result= mysqli_query($conn,$sql);
if($result){
            header("Location:display.php");
        }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>

<body>
    <center>
        <h1>Please Register Here</h1><br><br>
        <form action="display.php" method="post">
            Username:<input type="text" name="username" /><br><br>
            Address:<input type="text" name="address" /><br><br>
            Email: <input type="email" name="email" /><br><br>
            Message: <input type="text" name="message" /><br><br>
            <input type="submit" name="submit">
        </form>
    </center>
</body>

</html>