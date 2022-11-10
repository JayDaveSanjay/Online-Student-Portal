<?php
include '../php/login.php';
if(!isset($_SESSION['loginstatus']))
{
  header('location:login-register/login.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Material</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="navbar.css">
        <link rel="stylesheet" href="material/material.css">
        <script src="https://kit.fontawesome.com/3d29a5ce63.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
          
        <link
      rel="shortcut icon"
      type="image/x-icon"
      href="logo-2.svg"
    />
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <?php
        include 'navbar.php'
    ?>
    <div class="main">
        <div class="container">
        <center><h2 style="font-weight:800;font-size:50px;">Material</h2></center>
    <hr>
    <!-- select semester-->
    <h2>Semester</h2>
<ul class="nav nav-tabs sem" id="semester">
                <li class="nav-item"><a href="material-index.php" class="active nav-link">1</a></li>
                <li class="nav-item ml-4"><a href="sem2-stu.php" class="active nav-link">2</a></li>
                <li class="nav-item ml-4"><a href="sem3-stu.php" class="active nav-link">3</a></li>
                <li class="nav-item ml-4"><a href="sem4-stu.php" class="active nav-link">4</a></li>
                <li class="nav-item ml-4"><a href="sem5-stu.php" class="active nav-link">5</a></li>
                <li class="nav-item ml-4"><a href="sem6-stu.php" class="active nav-link">6</a></li>
                <li class="nav-item ml-4"><a href="sem7-stu.php" class="active nav-link">7</a></li>
                <li class="nav-item ml-4"><a href="sem8-stu.php" class="active nav-link">8</a></li>
                <li class="nav-item ml-4"><a href="sem9-stu.php" class="active nav-link">9</a></li>
                <li class="nav-item ml-4"><a href="sem10-stu.php" class="active nav-link">10</a></li>

</ul>
    </div>
    <!-- table for question papers start-->
    <div id="contain">
<div class="question-paper">
    <center><h4 style="font-weight:800;font-size:30px;">Question Paper</h2></center>
    <form method="post" enctype="multipart/form-data">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Subject</th>
      <th scope="col">Question Paper</th>

    </tr>
  </thead>
  <?php
    $sql="select * from tbl_material where semester=5 and type='questionpaper'";
    if ($result=mysqli_query($conn,$sql)) 
        {
            while ($row = mysqli_fetch_assoc($result)) 
            {
            
    ?>
  <tbody>
  
    <tr>
      <th><?php echo $row['id']; ?></th>
      <td><?php echo $row['subject'] ; ?></td>
      <td><a href="../material/<?php echo $row["file"] ?>"><i class="fa-solid fa-book"></i></a></td>

    </tr>
  </tbody>

<?php
            }
            $result->free();
          }
          else
          {

          }
            ?>
            </table>
            <form>
<center><h4 style="font-weight:800;font-size:30px;">Material</h2></center>
<form method="post" enctype="multipart/form-data">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Subject</th>
      <th scope="col">Material</th>

    </tr>
  </thead>
  <?php
    $sql="select * from tbl_material where semester=5 and type='material'";
    if ($result=mysqli_query($conn,$sql)) 
        {
            while ($row = mysqli_fetch_assoc($result)) 
            {
            
    ?>
  <tbody>
  
    <tr>
      <th><?php echo $row['id']; ?></th>
      <td><?php echo $row['subject'] ; ?></td>
      <td><a href="../material/<?php echo $row["file"] ?>"><i class="fa-solid fa-book"></i></a></td>

    </tr>
  </tbody>

<?php
            }
            $result->free();
          }
          else
          {

          }
            ?>
            </table>
            <form>
    </div>
    </div>
        <script src="" async defer></script>
    </body>
</html>