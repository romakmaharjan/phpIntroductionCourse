<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Fill Up</title>
</head>

<body>
    <h1>Registration</h1>
    <form action="displayFile.php" method="post">
        FullName:<input type="text" name="fname"><br><br>
        Age:<input type="number" name="age"><br><br>
        Gender:<input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="female">female
        <input type="radio" name="gender" value="other">Other<br><br>
        <input type="submit" name="submit">
    </form>
</body>

</html>