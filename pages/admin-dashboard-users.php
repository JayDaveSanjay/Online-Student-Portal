<?php
include '../php/login.php';
if(!isset($_SESSION['loginstatus']))
{
  header('location:login-register/login.php');
}
?>
?>
<?php
include '../php/register.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Users</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="admin-dashboard-users.css">
        <link rel="stylesheet" href="navbar.css">
        
        <script src="https://kit.fontawesome.com/3d29a5ce63.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
        <script src="//cdn.ckeditor.com/4.19.1/standard/ckeditor.js"></script>         
        <script src="ckfinder\ckfinder.js"></script>
        <link
        rel="shortcut icon"
        type="image/x-icon"
        href="logo-2.svg"
        />
        <style>
           @media (max-width: 1700px) {
            .btn-add
            {
              width:150px; 
            }
            .btn-block
            {
              width:150px;
            }

            }
         
          @media (max-width: 410px) {
            
            .btn-add
            {
              width:80px; 
            }
            .btn-block
            {
              width:80px;
            }

            }
           
        </style>
    </head>
    <body>
    <?php
        include 'navbar.php'
    ?>
<div class="main">
    <div class="container">
<div class="row flex-lg-nowrap">
  <div class="col-12 col-lg-auto mb-3" style="width: 200px;">
    <div class="card p-3">
      <div class="e-navlist e-navlist--active-bg">
        <ul class="nav">
          <li class="nav-item"><a class="nav-link px-2 active" href="admin-dashboard-reports.php"><i class="fa fa-fw fa-bar-chart mr-1"></i><span>Reports</span></a></li>
          <li class="nav-item"><a class="nav-link px-2" href="admin-dashboard-users.php" target=""><i class="fas fa-user mr-2"></i><span>Add/Block Users</span></a></li>
          <li class="nav-item"><a class="nav-link px-2" href="admin-dashboard-users-info.php" target=""><i class="fas fa-user mr-2"></i><span>Manage Users</span></a></li>
          <li class="nav-item"><a class="nav-link px-2" href="admin-dashboard.php" target=""><i class="fa fa-fw fa-cog mr-1"></i><span>Settings</span></a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="row">
      <div class="col mb-3">
        <div class="card">
          <div class="card-body">
          <center><h2 style="font-weight:800;" class="heading">Add Users</h2></center>
          <hr>
          <div class="add" style="padding-left:30px;padding-top:30px;"> 
                 <p>
                   <center><h4>Add User</h4></center>
                </p>
            </div>
            <div class="card card-body">
                <form method="post" action="../php/register.php" enctype='multipart/form-data'>
                <div class="alert" style="">
              <?php if(isset($_SESSION['register']))
              {
              ?>
         
              <div class="alert alert-warning alert-dismissible fade show " role="alert" style="background-color:#B2E8FF;">
                <?php echo $_SESSION['register'];?> 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php 
            unset($_SESSION['register']);
            }
            ?>
             <?php if(isset($_SESSION['emptyfields']))
              {
              ?>
         
              <div class="alert alert-warning alert-dismissible fade show " role="alert" style="background-color:#B2E8FF;">
                <?php echo $_SESSION['emptyfields'];?> 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php 
            unset($_SESSION['emptyfields']);
            }
            ?>
            </div>
                    <div class="error-message">
                      <?php if(isset($_SESSION['nameError']))
                      {
                      ?>
         
              <div class="alert alert-warning alert-dismissible fade show " role="alert" style="background-color:#B2E8FF;">
                <?php echo $_SESSION['nameError'];?> 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php 
            unset($_SESSION['nameError']);
            }
            ?>

                    </div>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name"  name="name" placeholder="Name" onkeyup="validateName()">
                        <span id="name-error"></span>
                    </div> 
                    <div class="error-message">
                      <?php if(isset($_SESSION['ennoError']))
                      {
                      ?>
         
                      <div class="alert alert-warning alert-dismissible fade show " role="alert" style="background-color:#B2E8FF;">
                      <?php echo $_SESSION['ennoError'];?> 
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                      </button>
                     </div>
                 <?php 
                    unset($_SESSION['ennoError']);
                     }
            ?>
                      </span>
                    </div>
                    <div class="form-group">
                        <label for="enno">Enrollment number</label>
                        <input type="number" class="form-control" id="enno" name="enno" aria-describedby="emailHelp" placeholder="Enrollment number" onkeyup="validateEnno()">
                        <span id="enno-error"></span>
                      </div>
                    <div class="error-message">
                        
                        <?php if(isset($_SESSION['emailError']))
                      {
                      ?>
         
                      <div class="alert alert-warning alert-dismissible fade show " role="alert" style="background-color:#B2E8FF;">
                      <?php echo $_SESSION['emailError'];?> 
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                      </button>
                     </div>
                 <?php 
                    unset($_SESSION['emailError']);
                     }
            ?>
                        </span>
                  </div>
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" onkeyup="validateEmail()">
                        <span id="email-error"></span>
                      </div>
                    <div class="error-message">
                      <span id="contactError"></span>
                      <?php if(isset($_SESSION['contactError']))
                      {
                      ?>
         
                      <div class="alert alert-warning alert-dismissible fade show " role="alert" style="background-color:#B2E8FF;">
                      <?php echo $_SESSION['contactError'];?> 
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                      </button>
                     </div>
                 <?php 
                    unset($_SESSION['contactError']); 
                     }
            ?>
                      </span>
                    </div>
                    <div class="form-group">
                        <label for="contact">Contact number</label>
                        <input type="number" class="form-control" id="contact" name="contact" a placeholder="Contact Number" onkeyup="validateNumber()">
                        <span id="numberError"></span>
                      </div>
                    <div class="error-message">
                      <span id="password-error">
                      <?php if(isset($_SESSION['passwordError']))
                      {
                      ?>
         
                      <div class="alert alert-warning alert-dismissible fade show " role="alert" style="background-color:#B2E8FF;">
                      <?php echo $_SESSION['passwordError'];?> 
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                      </button>
                     </div>
                 <?php 
                    unset($_SESSION['passwordError']); 
                     }
            ?>
                    <div class="form-group">
                       <label for="password">Password</label>
                       <input type="password" class="form-control" name="password" id="password" placeholder="Password" data-ng-pattern="/^\S*$/">
                    </div>
                    <div class="form-group">
                    <select class="form-select form-control" name="type" aria-label="Default select example" required>
                        <option value="admin">Admin</option>
                        <option value="faculty">Faculty</option>
                        <option value="student">Student</option>
                    </select>
                    </div>
                    <div class="error-message">
                      <span id="add-error"></span>
                    </div>
                   
                    <button type="submit" class="btn btn-primary btn-add " id="btn-Add" name="add"  onclick="validateForm()" >Add</button>
                     
                    <div class="alert alert-primary mt-3" role="alert">
                    Only students should be inserted by csv file
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="error-message">
                      <?php if(isset($_SESSION['csv']))
                      {
                      ?>
         
                      <div class="alert alert-warning alert-dismissible fade show " role="alert" style="background-color:#B2E8FF;">
                      <?php echo $_SESSION['csv'];?> 
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                      </button>
                     </div>
                 <?php 
                    unset($_SESSION['csv']); 
                     }
            ?>
              <div class="mb-3">
              <label for="formFile" class="form-label mt-3">Add csv file</label>
               <input class="form-control " type="file" name="file">   
               <button type="submit" class="btn btn-primary btn-add mt-3" id="btn-Add" name="upload"  >upload</button>
              </div>
              </form>
        </div>
          <hr>
        <center><h2 style="font-weight:800;">Block Users</h2></center>
          <hr>
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                    <!-- <div class="form-group">
                       <label for="exampleInputPassword1">Password</label>
                       <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div> -->
                    <select class="form-select form-control" aria-label="Default select example">
                        <option selected>Select User Type</option>
                        <option value="1">Admin</option>
                        <option value="2">Faculty</option>
                        <option value="3">Student</option>
                    </select>
                   
                
                  </form>
                  <button type="submit" class="btn btn-primary btn-block" style="">Block</button>
      </div>
    </div>
      </div>

      <!-- <div class="col-12 col-md-3 mb-3">
        <div class="card mb-3">
          <div class="card-body">
            <div class="px-xl-3">
              <button class="btn btn-block btn-primary" >
                <i class="fa fa-sign-out"></i>
                <span><a href="index/index.php" style="text-decoration:none;color:white;">Logout</a></span>
              </button>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <h6 class="card-title font-weight-bold">Support</h6>
            <p class="card-text">Get fast, free help from our friendly assistants.</p>
            <button type="button" class="btn btn-primary">Contact Us</button>
          </div>
        </div>
      </div>
    </div> -->

  </div>
</div>
</div>
</div>
        <script src="validation.js" async defer></script>
    </body>
</html>
<!--<select class="form-select" aria-label="Default select example">
  <option selected>Select User Type</option>
  <option value="1">Admin</option>
  <option value="2">Faculty</option>
  <option value="3">Student</option>
</select>-->