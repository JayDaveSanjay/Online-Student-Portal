<?php
include 'connection.php';
session_start();
#logincode
if(isset($_POST['signin']))
{
    $email=test_input($_POST['email']);
    $pass=mysqli_real_escape_string($conn,$_POST['pass']);
    $pass=md5($pass);
    $query = "SELECT * FROM users WHERE email = '$email' AND password = '$pass'";  
    $result = mysqli_query($conn, $query);  
    $num=mysqli_num_rows($result);
    if($num!=0)  
    {  
         $_SESSION['loginstatus'] =  "$email";  
         header("location:../index/index.php");  
    } 
    else
    {
      echo '<script>alert("Invalid credentials!")</script>';
    }    
 }
 #logout button on indexpage 
 if(isset($_POST['logout']))
 {
    unset($_SESSION['loginstatus']);
    session_destroy();
    header('location:index.php');
 }
 #logout button for dashboard
 if(isset($_POST['log']))
 {
    unset($_SESSION['loginstatus']);
    session_destroy();
    header('location:index/index.php');
 }
 #function to test input
function test_input($data)
{
  $data=trim($data);
  $data=stripcslashes($data);
  $data=htmlspecialchars($data);
  return $data;
}