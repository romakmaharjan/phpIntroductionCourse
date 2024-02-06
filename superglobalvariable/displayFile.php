<?php 
echo"<pre>";
print_r($_REQUEST);
echo "</pre>";

echo $_REQUEST['fname'];
echo "<br>";
echo $_REQUEST['age'];
echo "<br>";
echo $_REQUEST['gender'];
echo "<br>";

// $_GET is display the varaible in url parameter
//$_POST prefer to use developer it hide the data from url parameter 
//$_REQUEST this superglobal accept both get and post method to display data file rather url and other file.

?>