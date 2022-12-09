<?php
include '../php/login.php';
if(!isset($_SESSION['loginstatus']))
{
  header('location:login-register/login.php');
}
require '../php/material.php';
include '../php/connection.php';
include 'updatematerial.php';
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
  <h2>Semester</h2>
<ul class="nav nav-tabs sem" id="semester">
                <li class="nav-item"><a href="material-faculty.php" class="active nav-link">1</a></li>
                <li class="nav-item ml-4"><a href="sem2.php" class="active nav-link">2</a></li>
                <li class="nav-item ml-4"><a href="sem3.php" class="active nav-link">3</a></li>
                <li class="nav-item ml-4"><a href="sem4.php" class="active nav-link">4</a></li>
                <li class="nav-item ml-4"><a href="sem5.php" class="active nav-link">5</a></li>
                <li class="nav-item ml-4"><a href="sem6.php" class="active nav-link">6</a></li>
                <li class="nav-item ml-4"><a href="sem7.php" class="active nav-link">7</a></li>
                <li class="nav-item ml-4"><a href="sem8.php" class="active nav-link">8</a></li>
                <li class="nav-item ml-4"><a href="sem9.php" class="active nav-link">9</a></li>
                <li class="nav-item ml-4"><a href="sem10.php" class="active nav-link">10</a></li>

</ul>

    <!-- table for question papers start-->
              <div class="container">
<h4>Upload Question Paper</h4>
  <div class="card card-body mt-5">
<form method="post" enctype="multipart/form-data">
<div class="form-group">
    <label for="subject">Subject Name</label>
    <input type="text"  name="subject" class="form-control" id="subject"  placeholder="Subject">
</div>
<div class="form-group">
    <label for="sem">Semester</label>
    <input type="number"  name="semester" class="form-control" id="semester"  placeholder="Semester">
</div>
<div class="custom-file">
  <input type="file" class="custom-file-input" name="material" id="customFile">
  <label class="custom-file-label" for="customFile">Choose file</label>
</div>
<button type="submit" name="upload" class="btn btn-primary mt-3">Upload</button>
</form>
</div>
</div>
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
      <th scope="col">Delete</th>

    </tr>
  </thead>
  <?php
    $sql="select * from tbl_material where semester=1 and type='questionpaper'";
    if ($result=mysqli_query($conn,$sql)) 
        {
          $cnt=1;
            while ($row = mysqli_fetch_assoc($result)) 
            {
            
    ?>
  <tbody>
  
    <tr>
      <th><?php echo $cnt; ?></th>
      <td><?php echo $row['subject'] ; ?></td>
      <td><a href="../material/<?php echo $row["file"] ?>"><i class="fa-solid fa-book"></i></a></td>
      <td onclick="return confirm('Delete this User?');"><a href="updatematerial.php?id=<?php echo $row['id'];?>" style=""><i class="fa-solid fa-trash"></i></a></td>

    </tr>
  </tbody>

<?php
           $cnt=$cnt+1;  
           }
            $result->free();
          }
          else
          {

          }
            ?>
            </table>
        </form>
  <div class="container">
<h4>Upload Material</h4>
  <div class="card card-body mt-5">
<form method="post" enctype="multipart/form-data">
<div class="form-group">
    <label for="subject">Subject Name</label>
    <input type="text"  name="subject1" class="form-control" id="subject"  placeholder="Subject">
</div>
<div class="form-group">
    <label for="sem">Semester</label>
    <input type="number"  name="semester1" class="form-control" id="semester"  placeholder="Semester">
</div>
<div class="custom-file">
  <input type="file" class="custom-file-input" name="material1" id="customFile">
  <label class="custom-file-label" for="customFile">Choose file</label>
</div>
<button type="submit" name="upload1" class="btn btn-primary mt-3">Upload</button>
</form>
</div>

  </div>
<center><h4 style="font-weight:800;font-size:30px;">Material</h2></center>
<form method="post" enctype="multipart/form-data">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Subject</th>
      <th scope="col">Unit pdf</th>
      <th scope="col">Delete</th>

    </tr>
  </thead>
  <?php
    $sql="select * from tbl_material where semester=1 and type='material'";
    
    if ($result=mysqli_query($conn,$sql)) 
        {
          $cnt=1;
            while ($row = mysqli_fetch_assoc($result)) 
            {
            
    ?>
  <tbody>
  
    <tr>
      <th><?php echo $cnt; ?></th>
      <td><?php echo $row['subject'] ; ?></td>
      <td><a href="../material/<?php echo $row["file"] ?>"><i class="fa-solid fa-book"></i></a></td>
      <td onclick="return confirm('Delete this Material?');"><a href="updatematerial.php?id=<?php echo $row['id'];?>" style=""><i class="fa-solid fa-trash"></i></a></td>

    </tr>
  </tbody>

<?php
          $cnt=$cnt+1;  
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
        <script>
            $('#imageupload').click(function(){ $('#imgupload').trigger('click'); });
            $('#imageupload3').click(function(){ $('#imgupload3').trigger('click'); });

            $('#ADD').click(function(){ $('#add').trigger('click'); });
            $('#ADD3').click(function(){ $('#add3').trigger('click'); });

            
        </script>
        <script type="application/javascript">
    $('input[type="file"]').change(function(e){
        var fileName = e.target.files[0].name;
        $('.custom-file-label').html(fileName);
    });
</script>
    </body>
</html>
</div>
    </body>
</html>