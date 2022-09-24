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
        <title>Material-faculty</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="navbar.css">
        <link rel="stylesheet" href="material/material.css">
        
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
        <center><h2 style="font-weight:800;font-size:50px;">Material</h2></center>
    <hr>
    <!-- select semester-->
   <select class="form-select" aria-label="Default select example">
    <option selected>Select Semester</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="3">4</option>
    <option value="3">5</option>
    <option value="3">6</option>

    </select>
    <button type="button" class="btn btn-primary">View</button>
    </div>
    <!-- table for question papers start-->
    <div class="question-paper">
    <center><h4 style="font-weight:800;font-size:30px;">Question Paper</h2></center>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Subject</th>
      <th scope="col">Internal Question Paper</th>
      <th scope="col">External Question Paper</th>
      <th scope="col">Add</th>
      <th scope="col">Update</th>
      <th scope="col">Delete</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <input type="file" id="add" style="display:none"/> 
      <td><button type="button" id="ADD" class="btn btn-primary">Add</button></td>
      <input type="file" id="imgupload" style="display:none"/> 
      <td><button type="button" class="btn btn-primary" id="imageupload">Update</button></td>
      <td><button type="button" class="btn btn-primary">Delete</button></td>

    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
      <input type="file" id="add1" style="display:none"/> 
      <td><button type="button" id="ADD1" class="btn btn-primary">Add</button></td>
      <input type="file" id="imgupload1" style="display:none"/> 
      <td><button type="button" class="btn btn-primary" id="imageupload1">Update</button></td>
      <td><button type="button" class="btn btn-primary">Delete</button></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
      <input type="file" id="add2" style="display:none"/> 
      <td><button type="button" id="ADD2" class="btn btn-primary">Add</button></td>
      <input type="file" id="imgupload2" style="display:none"/> 
      <td><button type="button" class="btn btn-primary" id="imageupload2">Update</button></td>
      <td><button type="button" class="btn btn-primary">Delete</button></td>
    </tr>
  </tbody>
</table>
<center><h4 style="font-weight:800;font-size:30px;">Material</h2></center>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Subject</th>
      <th scope="col">PPT/PDF</th>
      <th scope="col">Add</th>
      <th scope="col">Update</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <input type="file" id="add3" style="display:none"/> 
      <td><button type="button" id="ADD3" class="btn btn-primary">Add</button></td>
      <input type="file" id="imgupload3" style="display:none"/> 
      <td><button type="button" class="btn btn-primary" id="imageupload3">Update</button></td>
      <td><button type="button" class="btn btn-primary">Delete</button></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
     <input type="file" id="add4" style="display:none"/> 
      <td><button type="button" id="ADD4" class="btn btn-primary">Add</button></td>
      <input type="file" id="imgupload4" style="display:none"/> 
      <td><button type="button" class="btn btn-primary" id="imageupload4">Update</button></td>
      <td><button type="button" class="btn btn-primary">Delete</button></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <input type="file" id="add5" style="display:none"/> 
      <td><button type="button" id="ADD5" class="btn btn-primary">Add</button></td>
      <input type="file" id="imgupload5" style="display:none"/> 
      <td><button type="button" class="btn btn-primary" id="imageuploa5">Update</button></td>
      <td><button type="button" class="btn btn-primary">Delete</button></td>
    </tr>
  </tbody>
</table>
    </div>
    </div>
        <script src="" async defer></script>
        <script>
            $('#imageupload').click(function(){ $('#imgupload').trigger('click'); });
            $('#imageupload1').click(function(){ $('#imgupload1').trigger('click'); });
            $('#imageupload2').click(function(){ $('#imgupload2').trigger('click'); });
            $('#imageupload3').click(function(){ $('#imgupload3').trigger('click'); });
            $('#imageupload4').click(function(){ $('#imgupload4').trigger('click'); });
            $('#imageupload5').click(function(){ $('#imgupload5').trigger('click'); });

            $('#ADD').click(function(){ $('#add').trigger('click'); });
            $('#ADD1').click(function(){ $('#add1').trigger('click'); });
            $('#ADD2').click(function(){ $('#add2').trigger('click'); });
            $('#ADD3').click(function(){ $('#add3').trigger('click'); });
            $('#ADD4').click(function(){ $('#add4').trigger('click'); });
            $('#ADD5').click(function(){ $('#add5').trigger('click'); });

            
        </script>
    </body>
</html>