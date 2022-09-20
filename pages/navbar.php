<?php
include '../php/connection.php';

include '../php/login.php';
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
            <a href="blog-index.php" style="font-size:20px;">Read Blog</a>
           
            </div>
            <hr>
            
            <div class="menu-item" style="display:flex;">
            <i class="fa-solid fa-pen" style="color:white;font-size:20px;padding-top:10px;padding-left:5px;"></i>
            <a href="writeblog.php" style="font-size:20px;">Write Blog</a>
            </div>
            <hr>
        
            <div class="menu-item" style="display:flex;">
            <i class="fa-solid fa-book" style="color:white;font-size:20px;padding-top:10px;padding-left:5px;"></i>
            <a href="material-index.php" style="font-size:20px;">Material</a>
            </div>
            <hr>
            <div class="menu-item" style="display:flex;">
            <i class="fa-solid fa-question" style="color:white;font-size:20px;padding-top:10px;padding-left:5px;"></i>
            <a href="askdoubt.php" style="font-size:20px;">Ask Doubt</a>
            </div>
            <hr>
            <div class="menu-item" style="display:flex;">
            <i class="fa-solid fa-gauge-high" style="color:white;font-size:20px;padding-top:10px;padding-left:5px;"></i> 
            <?php
            $email=$_SESSION['loginstatus'];
            $query = "SELECT * FROM users WHERE email = '$email'";
            $result = mysqli_query($conn, $query);  
            ?>
            <a href="dashboard.php" style="font-size:20px;">Dashboard</a>
            </div>
            <hr>
            <div class="menu-item" style="display:flex;">
            <i class="fa-solid fa-user" style="color:white;font-size:20px;padding-top:10px;padding-left:5px;"></i> 
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