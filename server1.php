<?php
session_start();

//initialize variables
$host="localhost";
$username="root";
$email="";

//connect to database
$db=mysqli_connect('localhost', 'root', '','myDB') or die('Connection failed on database');
if(isset($_POST['register'])){

    //receive all inputs from the form
    $name=mysqli_real_escape_string($db,$_POST['name']);
    $email=mysqli_real_escape_string($db,$_POST['email']);
    $phone=mysqli_real_escape_string($db,$_POST['phone']);
    $county=mysqli_real_escape_string($db,$_POST['county']);
$query="INSERT INTO myTB1(name, email, phone, county)
        VALUES('$name', '$email', '$phone', '$county')";
        mysqli_query($db,$query);
        $_SESSION['name']=$name;
        $_SESSION['success']="Your Submition is Successful";
        header('location: success.php');
}




?>
