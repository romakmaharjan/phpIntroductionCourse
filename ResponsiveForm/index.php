<?php
$conn =mysqli_connect("localhost","root","","responsiveform");
        // Check connection
        if($conn->connect_error){
            die("Connection failed:". $conn->connect_error);
        }
     // Taking all 5 values from the form data(input)
if(!empty($_POST)){
        $first_name =  $_REQUEST['firstname'];
        $last_name = $_REQUEST['lastname'];
        $gender =  $_REQUEST['gender'];
        $city = $_REQUEST['country'];
        $message =$_POST['subject'];
        $sql="INSERT INTO demo (firstname,message,lastname,city,gender)
                    VALUES('$first_name','$message','$last_name','$city','$gender')";      
        $result= $conn->query($sql);
        if($result){
            header("Location:display.php");
        }
       }



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive From</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <center>
        <h2>Responsive Form</h2>
        <p>Here is a responsive from sample.</p>

        <div class="container">
            <form action="" method="post">
                <div class="row">
                    <div class="col-25">
                        <label for="fname">First Name</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="fname" name="firstname" placeholder="Your name.." />
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="lname">Last Name</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="lname" name="lastname" placeholder="Your last name.." />
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="country">City</label>
                    </div>
                    <div class="col-75">
                        <select id="country" name="country">
                            <option value="australia">kathmandu</option>
                            <option value="canada">Lalitpur</option>
                            <option value="usa">Bhaktapur</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="gender">Gender</label>
                    </div>
                    <div class="col-75">
                        <input type="radio" name="gender" value="male" />Male
                        <input type="radio" name="gender" value="female" />female
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="subject">Subject</label>
                    </div>
                    <div class="col-75">
                        <textarea id="subject" name="subject" placeholder="Write something.."
                            style="height: 200px"></textarea>
                    </div>
                </div>
                <div class="row">
                    <input type="submit" value="Submit" />
                </div>
            </form>
        </div>
    </center>
</body>

</html>