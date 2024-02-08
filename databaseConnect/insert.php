<?php
        
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display table</title>
</head>

<body>
    <table>
        <tr>
            <th>FirstName</th>
            <th>Email</th>

        </tr>
        <?php 
      $conn =mysqli_connect("localhost","root","","data1");
        // Check connection
        if($conn->connect_error){
            die("Connection failed:". $conn->connect_error);
        }
       
        $sql = "SELECT * from phpstudent";
        $result= $conn->query($sql);
        $num_rows =mysqli_num_rows($result);

        if($num_rows > 0){
            // LOOP TILL END OF DATA
            while ($row = $result -> fetch_assoc()){
                //FETCHING DATA FROM EACH
                   // ROW OF EVERY COLUMN -->
                echo "<tr>
                <td>". $row["first_name"] ."</td>
                <td>". $row["email"]."</td>
                </tr>";
            }
            echo "</table>";
        }else{
            echo " 0 result";
        }
        $conn -> close();
        ?>
    </table>
</body>

</html>