<?php
 // servername => localhost
// username => root
// password => empty
// database name => data1
$conn = mysqli_connect("localhost","root","","data1");

//check connection
if($conn == false){
    die("ERROR: Could not connect. "
                . mysqli_connect_error());
}

 // Taking all 2 values from the form data(input)
        
        $first_name =  $_REQUEST['first_name'];      
        $email = $_REQUEST['email'];

          // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO phpstudent (first_name, email) VALUES ('$first_name', '$email')";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully.</h3>"; 
            echo nl2br("\n First name:$first_name\n Email: $email");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
        ?>
?>