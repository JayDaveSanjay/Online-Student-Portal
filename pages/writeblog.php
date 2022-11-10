<?php
include '../php/login.php';
if(!isset($_SESSION['loginstatus']))
{
  header('location:login-register/login.php');
}
include '../php/blog.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Write Blog</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="navbar.css">
        
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
    
        <div class="container">
        <center><h2 style="font-weight:800;font-size:50px;">Write Blog</h2></center>
    <hr>

    <form action="" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title"  name="title"  placeholder="Enter Title">
  </div>
  <div class="form-group">
    <label for="overview">Overview</label>
    <input type="text" class="form-control"   name="overview"  placeholder="Enter overview">
  </div>
  
  <select class="form-select" name="domain" aria-label="Default select example">
  <option selected>Select Domain</option>
  <option value="Science">Science</option>
  <option value="Technology">Technology</option>
  <option value="Coding">Coding</option>
</select>
  <div class="form-group">
    <label for="body">Body</label>
    <textarea class="form-control" id="editor1" name="body" rows="40" cols="30"></textarea>
  </div>

  <button type="submit" name="post" class="btn btn-primary">Post</button>
</form>
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