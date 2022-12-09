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
        <title>Blogs</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="navbar.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script src="js/jquery-1.11.1.min.js"></script>
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
        $query = "SELECT * FROM tbl_blog where id=$id";
        if ($result =mysqli_query($conn,$query)) 
        {
          while ($row = mysqli_fetch_assoc($result)) 
          {
    ?>
    <div class="main">
    <center><h2><?php echo $row['title'];?></h2></center>
    <hr>  
    </div>
  
    <div class="container">
            <?php
            echo $row['body'];
            ?>
            <br>
            <i class="fa fa-thumbs-up" onclick="setlike('like',<?php echo $row['id']?>)">Like</i> <p>[<?php echo $row['likes'];?>]</p>
    </div>
    <?php
          }
          $result->free();
        }
        ?>
        
        <script>
          $(document).ready(function(){
      function setlike(type,id)
      {
        jQuery.ajax({
          url:'likes.php',
          type:'post',
          data:'type='+type+'&id='+id,
          success:function(result){
            alert(result);
          }
        })

      }
    })

      </script>
    </body>
   
</html> 