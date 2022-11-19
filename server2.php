<?php
session_start();

//initialize variables
$host="localhost";
$username="root";
$email="";

//connect to database
$db=mysqli_connect('localhost', 'root', '','myDB') or die('Connection failed on database');
if(isset($_POST['register1'])){

    //receive all inputs from the form
    $sname=mysqli_real_escape_string($db,$_POST['sname']);
    $semail=mysqli_real_escape_string($db,$_POST['semail']);
    $sphone=mysqli_real_escape_string($db,$_POST['sphone']);
    $apartment=mysqli_real_escape_string($db,$_POST['apartment']);
    $location=mysqli_real_escape_string($db,$_POST['location']);
$query="INSERT INTO myTB2 (sname, semail, sphone, apartment, location)
        VALUES('$sname', '$semail', '$sphone', '$apartment', '$location')";
        mysqli_query($db,$query);
        $_SESSION['sname']=$sname;
        $_SESSION['success']="Your Request is Successful";
        header('location: success1.php');
}



?>