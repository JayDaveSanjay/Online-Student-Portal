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
        <title>Ask Question</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="navbar.css">
        <link rel="stylesheet" href="askdoubt.css">

        
        <script src="https://kit.fontawesome.com/3d29a5ce63.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="//cdn.ckeditor.com/4.19.1/standard/ckeditor.js"></script>         
<script src="ckfinder\ckfinder.js"></script>
<link
      rel="shortcut icon"
      type="image/x-icon"
      href="logo-2.svg"
    />
    </head>
    <body>
    <?php
        include 'navbar.php'
    ?>
    <div class="main">
    <center><h2 style="font-weight:800;font-size:50px;">Start Asking</h2></center>
    <hr>    
    <!-- <div class="askque" style="display:flex;padding-left:50px;padding-right:50px;">
    <button type="button" class="btn btn-primary">Post Question</button>
    
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Start Asking" style="padding-left:20px;">
    </div> -->
    <div class="askdoubt" style="padding-left:50px;">
    <p>
  <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    Ask Doubt
  </a>
  <!-- <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    Button with data-target
  </button> -->
</p>
</div>
<div class="collapse" id="collapseExample">
  <div class="card card-body">
  <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Enter Title</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Title">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Body</label>
    <textarea class="form-control" id="editor1" name="body" ></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Post</button>
</form>   
</div>
</div>
      
    </div>
    <script src="" async defer></script>
        <!-- <script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script> -->
        <script>
                // Replace the <textarea id="editor1"> with a CKEditor 4
                // instance, using default configuration.
                // CKEDITOR.replace( 'editor1' );
                var editor = CKEDITOR.replace( 'editor1' );
                CKFinder.setupCKEditor( editor1 );
            </script>
   </body>

</html>