<?php
include '../php/connection.php';
$loginstatus=$_SESSION['loginstatus'];
if(isset($_POST['changep']))
{
  if(!empty($_POST['pwd']))
  {
  
      if(!preg_match("/^\S*$/",$_POST['pwd']))
    {
      echo '<script>alert("white space not allowd in password")</script>';
    }
    else
    {
      $pwd=mysqli_real_escape_string($conn,$_POST['pwd']);
      $pwd=md5($pwd);
    }

    
    }
    else
    {
        echo '<script>alert("passord field empty")</script>';
    }
    if(!empty($pwd))
    {
    $sql=mysqli_query($conn,"update users set password='$pwd' where email='$loginstatus'");
    if($sql)
    {
        $_SESSION['passwordupdateadmin']="password was updated successfull";
        header('location:admin-dashboard.php');
        
    }
    }
}
if(isset($_POST['changenc']))
{
    if (!preg_match("/^\S[a-zA-Z]+ [a-zA-Z]+$/",$_POST['name']))
  {
    echo '<script>alert("enter first and last name in the name field")</script>';
  }
  else
      {
            $name=T($_POST['name']);
          
      }
      if(!preg_match("/^[6-9]\d{9}$/",$_POST['contact']))
      {
        echo '<script>alert("invalid mobile number")</script>';
      }
      else
      {
        $contact=$_POST['contact'];

      }
      if(!empty($name) && !empty($contact))
    {
    $sql=mysqli_query($conn,"update users set name='$name',contact=$contact where email='$loginstatus'");
    if($sql)
    {
        $_SESSION['namecontactupdateadmin']="name and contact were updated successfull";
        header('location:admin-dashboard.php');
     
    }
    }
}

function T($data)
{
  
  $data=trim($data);
  $data=stripcslashes($data);
  $data=htmlspecialchars($data);
  return $data;
}
?>