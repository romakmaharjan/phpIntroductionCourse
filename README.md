# PHP CRASH COURSE 2024

## Software

- xampp and vs code

## Introduction

- print and echo

## Variable

- Think of variables as containers for storing data.
- variable is a container which store data.

## DataType

### List of the data type

1. string
2. integer
3. float
4. boolean
5. object
6. Null
7. resource
8. array
9. undefined

### PHP OPERATORS

- Operators are used to perform operations on variables and values.

### PHP divides the operators in the following groups:

1. Arithmetic operators
2. Assignment operators
3. Comparison operators
4. Increment/Decrement operators
5. Logical operators
6. String operators
7. Array operators
8. Conditional assignment operators

### PHP Global Variables - Superglobals
- The "superglobals", which means that they are always accessible, regardless of scope - and we can access them from any function, class or file without having to do anything special.

### The PHP superglobal variables are:
1. $GLOBALS
2. $_SERVER
3. $_REQUEST
4. $_POST
5. $_GET
6. $_FILES
7. $_ENV
8. $_COOKIE
9. $_SESSION

### Created Responsive Form With HTML CSS and PHP
- By using $_POST and display in another file name display.php

### PHP Conditional Statements
- Very often when we write code, we want to perform different actions for different conditions. we can use conditional statements in our code to do this.

- In PHP we have the following conditional statements:

1. if statement - executes some code if one condition is true
2. if...else statement - executes some code if a condition is true and another code if that condition is false
3. if...elseif...else statement - executes different codes for more than two conditions
4. switch statement - selects one of many blocks of code to be executed

### Connect to MySQL Database
- Here is Syntax...
  <br/>
 <?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $databasename = "anynameyouwant";

 $conn = mysqli_connect("loclahost","root","","sameasdatabasename");
 if(!$conn){
 die("Connection Failed");
 }
 
>?


### INSERT DATA IN DATABASE

 <?php
include "connectiondb.php";

// Taking  4 values from the form data(input)
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $message = $_POST['message'];

$sql = "INSERT INTO phpstudent2(username,address,email,message)VALUES('$username','$address','$email','$message')";
$result=mysqli_query($conn,$sql);
if($result){
    header("Location:display1.php");
}
}


### DISPLAY DATA FROM DATABASE

$sql = "SELECT * FROM phpstudent2";
            $result= mysqli_query($conn,$sql);
      


### Fetch Data From Database in PHP
1. Creating Database: First, we will create a database named ‘whatyoulike’. You can use your existing database or create a new one.
2. Create Table: Create a table named ‘userdata’.
3. Creating folder and files:
4. Write PHP code to fetch data from the database and display it in an HTML table. 
