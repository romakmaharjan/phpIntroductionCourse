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

 // Taking all 5 values from the form data(input)
        
        $first_name =  $_REQUEST['first_name'];      
        $email = $_REQUEST['email'];

          // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO phpstudent  VALUES ('$id','$first_name','$email')";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>"; 
 
            echo nl2br("\n$first_name\n  ". " $email");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
        ?>
?>