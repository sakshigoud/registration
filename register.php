<?php

$firstname = $_POST['firstname'];
$lastname =$_POST['lastname'];
$email=$_POST['email'];
$password=$_POST['password'];


//create connection

$conn = mysqli_connect('localhost','root','','registration');
$q= "INSERT INTO registration values( '$firstname' ,'$lastname','$email','$password')";

//check connection

if(!$conn){
    die("connection failed:" . mysqli_connect_error());
}

 echo("connected successfully");

 ?>