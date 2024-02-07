<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display data from Database</title>
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
</head>

<body>
    <table>
        <tr>
            <th>ID</th>
            <th>USERNAME</th>
            <th>PASSWORD</th>
        </tr>
        <?php 
        $conn =mysqli_connect("localhost","root","","test");
        if($conn-> connect_error){
            die("Connection failed:". $conn -> connect_error);
        }
        $sql = "SELECT id, username, password from demo";
        $result= $conn ->query($sql);

        if($result -> num_rows > 0){
            // LOOP TILL END OF DATA
            while ($row = $result -> fetch_assoc()){
                //FETCHING DATA FROM EACH
                   // ROW OF EVERY COLUMN -->
                echo "<tr>
                <td>". $row["id"] ."</td>
                <td>". $row["username"]."</td>
                <td>". $row["password"]."</td>
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