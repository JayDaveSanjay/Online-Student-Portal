<?php
include '../php/login.php';
if(!isset($_SESSION['loginstatus']))
{
  header('location:login-register/login.php');
}
include '../php/connection.php';
$loginstatus=$_SESSION['loginstatus'];
include 'admin-dashboard-update.php';
$sql="select * from users where email='$loginstatus'";
$result=mysqli_query($conn,$sql);
while ($row = mysqli_fetch_assoc($result)) {

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Admin Dashboard</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
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
          <li class="nav-item"><a class="nav-link px-2" href="admin-dashboard-users.php" target=""><i class="fas fa-user mr-2"></i><span>Add Users</span></a></li>
          <li class="nav-item"><a class="nav-link px-2" href="admin-dashboard-users-info.php" target=""><i class="fas fa-user mr-2"></i><span>Manage Users</span></a></li>
          <li class="nav-item"><a class="nav-link px-2" href="admin-dashboard-manage-blogs.php" target=""><i class="fa-brands fa-readme mr-2"></i><span>Manage Blogs</span></a></li>
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
            <div class="e-profile">
              <div class="row">
                <div class="col-12 col-sm-auto mb-3">
                  <div class="mx-auto" style="width: 140px;">
                    <div class="d-flex justify-content-center align-items-center rounded" style="height: 140px; background-color: rgb(233, 236, 239);">
                      <span style="color: rgb(166, 168, 170); font: bold 8pt Arial;">140x140</span>
                    </div>
                  </div>
                </div>
                <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                  <div class="text-center text-sm-left mb-2 mb-sm-0">
                    <h4 class="pt-sm-2 pb-1 mb-0 text-nowrap"><?php echo $row['name'];?></h4>
                    <p class="mb-0"><?php echo $row['email'] ;?></p>
                    <div class="text-muted"><small>Last seen 2 hours ago</small></div>
                    <div class="mt-2">
                      <button class="btn btn-primary" type="button">
                        <i class="fa fa-fw fa-camera"></i>
                        <span>Change Photo</span>
                      </button>
                    </div>
                  </div>
                  <div class="text-center text-sm-right">
                    <span class="badge badge-secondary"><?php echo $row['type'];?> </span>
                    <div class="text-muted"><small>Joined 09 Dec 2017</small></div>
                  </div>
                </div>
              </div>
              <ul class="nav nav-tabs">
                <li class="nav-item"><a href="" class="active nav-link">Settings</a></li>
              </ul>
              <div class="tab-content pt-3">
                <div class="tab-pane active">
                  <form class="form" method="post" >
                    <div class="row">
                      <div class="col">
                      <?php
                              if(isset($_SESSION['namecontactupdateadmin']))
                              {
                                ?>
                                <div class="alert alert-warning alert-dismissible fade show " role="alert" style="background-color:#B2E8FF;">
                      <?php echo $_SESSION['namecontactupdateadmin'];?> 
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                      </button>
                     </div>
                     <?php
                     unset($_SESSION['namecontactupdateadmin']);
                              }
                              ?>
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              
                              <label>Full Name</label>
                              <input class="form-control" type="text" name="name" placeholder="John Smith" value="<?php echo $row['name'];?>">
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-group">
                              <label>Username</label>
                              <input class="form-control" type="text" name="username" placeholder="johnny.s" value="<?php echo $row['email'];?>" readonly>
                            </div>
                          </div>
                          
                        </div>
                      </div>
                    </div>
                    <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label>Contact number</label>
                              <input class="form-control" type="number" name="contact" value="<?php echo $row['contact'];?>">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                      <div class="col mt-2">
                        <button class="btn btn-primary" type="submit" name="changenc">Save Changes</button>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12 col-sm-6 mb-3 mt-3">
                        <div class="mb-2"><b>Change Password</b></div>
                        <div class="row">
                          <div class="col">
                          </div>
                        </div>
                        <?php
                              if(isset($_SESSION['passwordupdateadmin']))
                              {
                                ?>
                                <div class="alert alert-warning alert-dismissible fade show " role="alert" style="background-color:#B2E8FF;">
                      <?php echo $_SESSION['passwordupdateadmin'];?> 
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                      </button>
                     </div>
                     <?php
                              }
                              ?>
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                            
                              <label>New Password</label>
                              <input class="form-control" type="password" name="pwd" placeholder="•••••" >
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col">
                          <div class="row mt-1">
                      <div class="col mt-3">
                        <button class="btn btn-primary" type="submit" name="changep">Change Password</button>
                      </div>
                    </div>
                        </div>
                      </div>
                    </div>
                    
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- <div class="col-12 col-md-3 mb-3">
        <div class="card mb-3">
          <div class="card-body">
            <div class="px-xl-3">
              <button class="btn btn-block btn-primary">
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
    </body>
</html>
<?php
}
?>