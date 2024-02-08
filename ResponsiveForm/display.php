 <style>
table {
    border-collapse: collapse;
    width: 100%;
    color: #588c7e;
    font-family: monospace;
    font-size: 25px;
    text-align: left;
}

th {
    background-color: #588c7e;
    color: white;
}

tr:nth-child(even) {
    background-color: #f2f2f2;
}
 </style>

 <table>
     <tr>
         <th>FirstName</th>
         <th>LirstName</th>
         <th>City</th>
         <th>Gender</th>
         <th>Message</th>
     </tr>
     <?php 
      $conn =mysqli_connect("localhost","root","","responsiveform");
        // Check connection
        if($conn->connect_error){
            die("Connection failed:". $conn->connect_error);
        }
       
        $sql = "SELECT * from demo";
        $result= $conn->query($sql);
        $num_rows =mysqli_num_rows($result);

        if($num_rows > 0){
            // LOOP TILL END OF DATA
            while ($row = $result -> fetch_assoc()){
                //FETCHING DATA FROM EACH
                   // ROW OF EVERY COLUMN -->
                echo "<tr>
                <td>". $row["firstname"] ."</td>
                <td>". $row["lastname"]."</td>
                <td>". $row["city"]."</td>
                <td>". $row["gender"]."</td>
                <td>". $row["message"]."</td>
                </tr>";
            }
            echo "</table>";
        }else{
            echo " 0 result";
        }
        $conn -> close();
        ?>
 </table>