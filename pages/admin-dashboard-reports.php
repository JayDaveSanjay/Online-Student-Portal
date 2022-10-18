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
        <title>Reports</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="navbar.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
        <script src="https://kit.fontawesome.com/3d29a5ce63.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="//cdn.ckeditor.com/4.19.1/standard/ckeditor.js"></script>         
<script src="ckfinder\ckfinder.js"></script>
<link
      rel="shortcut icon"
      type="image/x-icon"
      href="logo-2.svg"
    />
    <style>
            body{

background-color: #eee;
}


.badge{

font-size: 25px;
font-weight: 200;
}

.badge i {

font-size: 20px;
font-weight: 200;
}

.about-rating{

font-size: 15px;
font-weight: 500;
margin-top: 10px;
}

.total-ratings{

font-size: 12px;

}

.bg-custom{

background-color: #b7dd29 !important;
}

.progress{

margin-top:10px;
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
                    <h4 class="pt-sm-2 pb-1 mb-0 text-nowrap">John Smith</h4>
                    <p class="mb-0">@johnny.s</p>
                    <div class="text-muted"><small>Last seen 2 hours ago</small></div>
                    <div class="mt-2">
                      <button class="btn btn-primary" type="button">
                        <i class="fa fa-fw fa-camera"></i>
                        <span>Change Photo</span>
                      </button>
                    </div>
                  </div>
                  <div class="text-center text-sm-right">
                    <span class="badge badge-secondary">administrator</span>
                    <div class="text-muted"><small>Joined 09 Dec 2017</small></div>
                  </div>
                </div>
              </div>
              <ul class="nav nav-tabs">
                <li class="nav-item"><a href="" class="active nav-link">Reports</a></li>
              </ul>
              <div class="tab-content pt-3">
                <div class="tab-pane active">
                <div class="container mt-5">

         
             
        
         
<div  class="card">

   <div class="row no-gutters">

       <div class="col-md-4 border-right">

           <div class="ratings text-center p-4 py-5">

               <span class="badge bg-success">4.1 <i class="fa fa-star-o"></i></span>
               <span class="d-block about-rating">VERY GOOD</span>
               <span class="d-block total-ratings">183 ratings</span>
               
           </div>
           
       </div>

       <div class="col-md-8">
           
           <div class="rating-progress-bars p-3">

               <div class="progress-1 align-items-center">

                   <div class="progress mt-3">
                     <div class="progress-bar bg-success" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                       

                           71%

                       

                   </div>
                   </div>

                   <div class="progress mt-3">
                     <div class="progress-bar bg-custom" role="progressbar" style="width: 55%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">55%</div>
                   </div>

                   <div class="progress mt-3">
                     <div class="progress-bar bg-primary" role="progressbar" style="width: 48%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">48%</div>

                   </div>

                   <div class="progress mt-3">
                     <div class="progress-bar bg-warning" role="progressbar" style="width: 30%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">30%</div>
                   </div>

                   <div class="progress mt-3">
                     <div class="progress-bar bg-danger" role="progressbar" style="width: 15%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">15%</div>
                   </div>

                  
                   
               </div>
               
           </div>

           
       </div>
       
   </div>
    
</div>


</div>
<div class="graph">
<center><h2 style="font-weight:800;">Blogs report</h2></center>
<hr>
<canvas id="myChart" style="width:100%;max-width:600px"></canvas>
</div>

<div class="bar">
    <uhr>
<center><h2 style="font-weight:800;">User report</h2></center>
<hr>
<div id="myPlot" style="width:100%;max-width:700px"></div>
</div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
<!-- 
      <div class="col-12 col-md-3 mb-3">
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
<script>
var xValues = [50,60,70,80,90,100,110,120,130,140,150];
var yValues = [7,8,8,9,9,9,10,11,14,14,15];

new Chart("myChart", {
  type: "line",
  data: {
    labels: xValues,
    datasets: [{
      fill: false,
      lineTension: 0,
      backgroundColor: "rgba(0,0,255,1.0)",
      borderColor: "rgba(0,0,255,0.1)",
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    scales: {
      yAxes: [{ticks: {min: 6, max:16}}],
    }
  }

});
//-----------------------------------
var xArray = ["Students", "Faculty", "Admin"];
var yArray = [55, 49, 44];

var data = [{
  x:xArray,
  y:yArray,
  type:"bar"
}];

var layout = {title:"Users"};

Plotly.newPlot("myPlot", data, layout);
</script>
    </body>
</html>