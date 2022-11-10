<?php
include '../php/login.php';
if(!isset($_SESSION['loginstatus']))
{
  header('location:login-register/login.php');
}
include '../php/connection.php';
if(isset($_GET['id']))
{
    $id=$_GET['id'];
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Solve Doubts</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="navbar.css">
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
    <style>
        .main h2{
    font-weight: 800;
    font-size: 50px;
    padding-bottom: 50px;
    }
body
 {
  font-family: "Quicksand", sans-serif;

}
    </style>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <?php
        include 'navbar.php'
    ?>
      <?php
        $query = "SELECT * FROM doubts where id=$id";
        if ($result =mysqli_query($conn,$query)) 
        {
          while ($row = mysqli_fetch_assoc($result)) 
          {
    ?>
    <div class="container">
    <div class="container-fluid mt-100">
     <div class="row">
         <div class="col-md-12">
             <div class="card mb-4">
                 <div class="card-header">
                     <div class="media flex-wrap w-100 align-items-center"> <img src="https://i.imgur.com/iNmBizf.jpg" class="d-block ui-w-40 rounded-circle" alt="">
                         <div class="media-body ml-3"> <a href="javascript:void(0)" data-abc="true"><?php echo $row['useremail'];?></a>
                         </div>
                         <div class="text-muted small ml-3">
                             <div>Posted on<strong><?php echo $row['time'];?></strong></div>
                             <div><strong>134</strong> posts</div>
                         </div>
                     </div>
                 </div>
                 <div class="card-body">
                     <p> 
                        <?php echo $row['body'];?>
                    </p>
                     
                 </div>
                 <div class="card-footer d-flex flex-wrap justify-content-between align-items-center px-0 pt-0 pb-3">
                     <div class="px-4 pt-3"> <a href="javascript:void(0)" class="text-muted d-inline-flex align-items-center align-middle" data-abc="true"> <i class="fa fa-heart text-danger"></i>&nbsp; <span class="align-middle">445</span> </a> <span class="text-muted d-inline-flex align-items-center align-middle ml-4"> <i class="fa fa-eye text-muted fsize-3"></i>&nbsp; <span class="align-middle">14532</span> </span> </div>
                     <div class="px-4 pt-3">  <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    Reply
  </button> </div>
                 </div>
             </div>
         </div>
         </div>
         <?php
          }
        }?>
<div class="collapse" id="collapseExample">
  <div class="card card-body">
    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
  </div>
</div>

<center><h4 style="font-weight:800;font-size:30px;">Answers</h2></center>
<hr>
<?php
        $query = "SELECT * FROM answers where doubt_id=$id";
        if ($result =mysqli_query($conn,$query)) 
        {
          while ($row = mysqli_fetch_assoc($result)) 
          {
    ?>
    <div class="container ml-5">
    <div class="container-fluid mt-100">
     <div class="row">
         <div class="col-md-12">
             <div class="card mb-4">
                 <div class="card-header">
                     <div class="media flex-wrap w-100 align-items-center"> <img src="https://i.imgur.com/iNmBizf.jpg" class="d-block ui-w-40 rounded-circle" alt="">
                         <div class="media-body ml-3"> <a href="javascript:void(0)" data-abc="true"><?php echo $row['useremail'];?></a>
                         </div>
                         <div class="text-muted small ml-3">
                             <div>Posted on<strong><?php echo $row['time'];?></strong></div>
                             <div><strong>134</strong> posts</div>
                         </div>
                     </div>
                 </div>
                 <div class="card-body">
                     <p> 
                        <?php echo $row['body'];?>
                    </p>
                     
                 </div>
             </div>
         </div>
         </div>
         <?php
          }
        }?>