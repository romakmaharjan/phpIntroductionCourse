<?php

// print_r($_POST);

if(!empty($_POST)){
    $firstName=$_POST['firstname'];
    $lastName=$_POST['lastname'];
    $city=$_POST['country'];
    $gender=$_POST['gender'];
    $subject=$_POST['subject'];
}
?>
<?php if(!empty($_POST)) {?>
<h1>Your First Name: <?=$firstName; ?></h1>
<h1>Your Last Name: <?php echo $lastName ?></h1>
<h1>Your City: <?=$city; ?></h1>
<h1>Your Gender: <?=$gender; ?></h1>
<h1>Your Message: <?=$subject; ?></h1>


<?php } ?>