<?php
require_once "header.php";


$sql="SELECT * FROM phpstudent";

$res =mysqli_query($conn,$sql);

$allData =mysqli_fetch_all($res);

var_dump($allData);


?>


<h1>Index page</h1>



<?php

require_once "footer.php";
?>