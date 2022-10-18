<?php
include '../php/connection.php';
if(isset($_SESSION['loginstatus']))
 {
 $loginstatus=$_SESSION['loginstatus'];
 }
$sql=mysqli_query($conn,"select type from users where email='$loginstatus'");
$arr=mysqli_fetch_assoc($sql);
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>navbar</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="navbar.css">
    </head>
    <body>
       <!-- Side navigation -->
        <div class="sidenav">
            <div class="logo">
                <center>
                <img src="logo-2.svg" alt="">
                </center>
            </div>
            <h5>Student Portal</h5>
            <hr>
            <div class="menu-item" style="display:flex;">
            <i class="fa-brands fa-readme" style="color:white;font-size:20px;padding-top:10px;padding-left:5px;"></i>
            <a href="blog-index.php" style="font-size:15px;">Read Blog</a>
           
            </div>
            <hr>
            
            <div class="menu-item" style="display:flex;">
            <i class="fa-solid fa-pen" style="color:white;font-size:20px;padding-top:10px;padding-left:5px;"></i>
            <a href="writeblog.php" style="font-size:15px;">Write Blog</a>
            </div>
            <hr>
        
            <div class="menu-item" style="display:flex;">
            <i class="fa-solid fa-book" style="color:white;font-size:20px;padding-top:10px;padding-left:5px;"></i>
            <?php if($arr['type']=='faculty' || $arr['type']=='admin')
            {
            ?>
            <a href="material-faculty.php" style="font-size:15px;">Material</a>
            <?php
            }
            else
            {
          
            ?>
              <a href="material-index.php" style="font-size:15px;">Material</a>
              <?php
            }
            ?>
            </div>
            <hr>
            <div class="menu-item" style="display:flex;">
            <i class="fa-solid fa-question" style="color:white;font-size:20px;padding-top:10px;padding-left:5px;"></i>
            <a href="askdoubt.php" style="font-size:15px;">Ask Doubt</a>
            </div>
            <hr>
            <div class="menu-item" style="display:flex;">
            <i class="fa-solid fa-question" style="color:white;font-size:15px;padding-top:10px;padding-left:5px;"></i>
            <a href="solve.php" style="font-size:15px;">Solve Doubts</a>
            </div>
            <hr>
            <div class="menu-item" style="display:flex;">
            <i class="fa-solid fa-gauge-high" style="color:white;font-size:15px;padding-top:10px;padding-left:5px;"></i> 
            <?php if( $arr['type']=='admin')
            {
            
            ?>
            <a href="admin-dashboard.php" style="font-size:15px;">Dashboard</a>
            <?php
            }
            else
            {
                ?>
                <a href="dashboard.php" style="font-size:15px;">Dashboard</a>
                <?php
            }
            ?>
            </div>
            <hr>
            <div class="menu-item" style="display:flex;">
            <i class="fa-solid fa-user" style="color:white;font-size:15px;padding-top:10px;padding-left:5px;"></i> 
           <form method="post">
            <button name="log"
                class=""
                data-wow-delay=".6s"
                style="border:none;color:white;background-color:#0d6efd;padding-left:5px;margin-left:5px;"
                >Logout</button>
</form>
            </div>
        </div>
<!-- Page content -->
     
        
        <script src="" async defer></script>
    </body>
</html>