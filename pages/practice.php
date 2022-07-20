!<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Practice page</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="">
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div class="container">
        <form method="post" action="">

  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
  </div>
  <label for="">Available devices</label>
  <div class="form-check">
    
  <input class="form-check-input" type="checkbox" value="" id="mobile" name="mobile">
  <label class="form-check-label" for="mobile">
    smart phone
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="computer" name="computer">
  <label class="form-check-label" for="computer">
    computer
  </label>
</div>
<hr>
<label for="">Gender</label>
<div class="form-check">
  <input class="form-check-input" type="radio" name="radiobtn" id="male" value="option1" checked>
  <label class="form-check-label" for="radio">
    Male
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="radiobtn" id="female" value="option2">
  <label class="form-check-label" for="radio">
    Female
  </label>
</div>
<div class="form-check disabled">
  <input class="form-check-input" type="radio" name="radiobtn" id="other" value="option3" >
  <label class="form-check-label" for="radio">
    Other
  </label>
</div>
<hr>
<label for="">Fav Color</label>
<div class="div">
<select width=300 style="width: 350px"
            size="8" multiple>
      <option value='blue'>Blue</option>
      <option value='green'>Green</option>
      <option value='red'>Red</option>
      <option value='yellow'>Yellow</option>
      <option value='orange'>Orange</option>
    </select>
  </div>   
  <hr>
  <label for="birthdaytime">Birthday (date and time):</label>
<input type="datetime-local" id="birthdaytime" name="birthdaytime">
<hr>
<label for="adress">Address</label>
<div class="form-group">
  
  <textarea name="address" id="address" cols="40" rows="5"></textarea>
</div>
<hr>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
</div>
<?php
if(isset($_POST))
{
  $email=$_POST['email'];
  echo "<script>alert("hello");</script>";
}
?>
        
        <script src="" async defer></script>
    </body>
</html>