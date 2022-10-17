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

    </head>
    <body>
    <!-- select semester-->
   <!-- <select class="form-select" aria-label="Default select example">
    <option selected>Select Semester</option>

    </select>
    <button type="button" class="btn btn-primary">View</button>
    </div>
    <p class="ml-5">
  <a class="btn btn-primary ml-5"   data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
  Edit Semester
  </a>
</p>
<div class="collapse ml-5" id="collapseExample">
  <div class="card card-body ml-5">
  <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Enter sem</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">Enter semster seperated with comma.</small>
  </div>
</form>
  </div>
</div> -->

    <!-- table for question papers start-->
    <div class="question-paper">
    <center><h4 style="font-weight:800;font-size:30px;">1 Question Paper</h2></center>
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
  </tbody>
</table>
    </div>
    </div>
        <script src="" async defer></script>
        <script>
            $('#imageupload').click(function(){ $('#imgupload').trigger('click'); });
            $('#imageupload3').click(function(){ $('#imgupload3').trigger('click'); });

            $('#ADD').click(function(){ $('#add').trigger('click'); });
            $('#ADD3').click(function(){ $('#add3').trigger('click'); });

            
        </script>
        
    </body>
</html>