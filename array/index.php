<?php
// $users= ['name'=>'ram', 'address'=>'chovar', 'age'=>'26'];

// print_r($users);
// var_dump($users);
// echo $users['name'];
if(!empty($_POST)){
    $Name=$_POST['fullname'];
    $Address=$_POST['address'];
    $Email=$_POST['email'];
    $Phone=$_POST['phone'];
    $Message=$_POST['message'];
}
?>
<form action="" method="post">
    Name:<input type="text" name="fullname"><br><br>
    Address:<input type="text" name="address"><br><br>
    Email:<input type="email" name="email"><br><br>
    Phone:<input type="number" name="phone"><br><br>
    Message:<textarea name="message"></textarea><br><br>
    <button>Add record</button>
</form>
<hr>
<?php if(!empty($_POST)) {?>
<h1>Hello: <?=$Name; ?></h1>
<h1>Address: <?php echo $Address ?></h1>
<h1>Email: <?=$Email; ?></h1>
<h1>Phone: <?=$Phone; ?></h1>
<h1>Message: <?=$Message; ?></h1>


<?php } ?>