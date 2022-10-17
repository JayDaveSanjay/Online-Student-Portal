<?php
include 'connection.php' ;
if(!isset($_SESSION))
{
include 'session.php';
}
#user add on admin dashboard code with validation
if(isset($_POST['add']))
{
  if(!empty($_POST['name']) && !empty($_POST['enno']) && !empty($_POST['email']) && !empty($_POST['contact']) && !empty($_POST['password']) && !empty($_POST['type']))
  {
    if (!preg_match("/^\S[a-zA-Z]+ [a-zA-Z]+$/",$_POST['name'])) {

      $_SESSION['nameError']="invalid name";
      header('Location:../pages/admin-dashboard-users.php');
      }
      else
      {
            $name=TEST($_POST['name']);
      }
      if(!preg_match("/^[2]\d{14}$/",$_POST['enno']))
      {
        $_SESSION['ennoError']="invalid!";
        header('Location:../pages/admin-dashboard-users.php');
      }
      else
      {
        $enno=TEST($_POST['enno']);
      }
      if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
      {
        $_SESSION['emailError']="invalid email!";
        header('Location:../pages/admin-dashboard-users.php');
      }
      else
      {
        $email=TEST($_POST['email']);
      }
      if(!preg_match("/^[6-9]\d{9}$/",$_POST['contact']))
      {
        $_SESSION['contactError']="invalid number";
        header('Location:../pages/admin-dashboard-users.php');
      }
      else
      {
        $contact=$_POST['contact'];
      }
    
    
    if(!empty($_POST['type'])){
    $type=$_POST['type'];
    }
    if(!preg_match("/^\S*$/",$_POST['password']))
    {
      $_SESSION['passwordError']="white space not allowed!";
        header('Location:../pages/admin-dashboard-users.php');
    
    }
    else
    {
      $pwd=mysqli_real_escape_string($conn,$_POST['password']);
      if($type=="admin" )
      {
      $pwd=md5($pwd);
      }
      if($type=="faculty" )
      {
      $pwd=md5($pwd);
      }
      if($type=="student" )
      {
        $pwd=md5($pwd);
      }
    }

    if(!empty($name) && !empty($enno) && !empty($email) && !empty($contact) && !empty($pwd) && !empty($type))
    { 
    $q="select * from users where email='$email'";
    $result=mysqli_query($conn,$q);
    $numrows=mysqli_num_rows($result); 
    if($numrows!=0)
    {
      $_SESSION['register']="email already in use";
      header('Location:../pages/admin-dashboard-users.php');
    }
    else
    {
    $sql="insert into users(name,enno,email,contact,password,type) values('$name','$enno','$email','$contact','$pwd','$type')";
    $run=mysqli_query($conn,$sql);
    if ($run) {
        $_SESSION['register']="a new $type was inserted ";
        header('Location:../pages/admin-dashboard-users.php');
      
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
    }
  }
    mysqli_close($conn);
}
else
{
  $_SESSION['emptyfields']="fill all details";
  header('Location:../pages/admin-dashboard-users.php');
}
}

#to upload a csv file

if(isset($_POST['upload']))
{
  if($_FILES['file']['name'])
  {
   
    $filename=explode(".",$_FILES['file']['name']);
    if($filename[1]=='csv')
    {
        $handle=fopen($_FILES['file']['tmp_name'],"r");
        while($data=fgetcsv($handle))
        {
          $item1=mysqli_real_escape_string($conn,$data[0]);
          $item2=mysqli_real_escape_string($conn,$data[1]);
          $item3=mysqli_real_escape_string($conn,$data[2]);
          $item4=mysqli_real_escape_string($conn,$data[3]);
          $item5=mysqli_real_escape_string($conn,md5($data[4]));
          $item6=mysqli_real_escape_string($conn,$data[5]);
            $sql="insert into users(name,enno,email,contact,password,type) values ('$item1','$item2','$item3','$item4','$item5','$item6')";
             $run=mysqli_query($conn,$sql);
             if($run)
            {
              $_SESSION['csv']="records of csv file has been uploaded";
              header('location:../pages/admin-dashboard-users.php');
            }
            else
            {
              $_SESSION['csv']="records of csv file were not uploaded!";
              header('location:../pages/admin-dashboard-users.php');
            }
          }
        fclose($handle);
        }
    }
    else
    {
      $_SESSION['csv']="Please choose a csv file";
      header('location:../pages/admin-dashboard-users.php');
    }
  }
function TEST($data)
{
  $data=trim($data);
  $data=stripcslashes($data);
  $data=htmlspecialchars($data);
  return $data;
}