<?php
$conn =mysqli_connect("localhost","root","","data1");
if(!$conn){
    die("Connection Failed");
}

// Taking  2 values from the form data(input)
if(!empty($_POST)){
    $username = $_POST['first_name'];
    $email = $_POST['email'];

    $sql = "INSERT INTO phpstudent(first_name,email)VALUES('$username','$email')";
     $result= mysqli_query($conn,$sql);
        if($result){
            header("Location:insert.php");
        }
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
    <center>
        <h1>Storing Form data in Database</h1>
        <form action="" method="post">
            <p>
                <label for="firstName">First Name:</label>
                <input type="text" name="first_name" id="firstName">
            </p>
            <p>
                <label for="emailAddress">Email Address:</label>
                <input type="text" name="email" id="emailAddress">
            </p>

            <input type="submit" value="Submit">
        </form>
    </center>

</body>

</html>