<?php
include '../php/login.php';
if(!isset($_SESSION['loginstatus']))
{
  header('location:login-register/login.php');
}
include '../php/connection.php';
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Blog-index</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="navbar.css">
          <link rel="stylesheet" href="blogs/style/style.css">
          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
          <script src="https://kit.fontawesome.com/3d29a5ce63.js" crossorigin="anonymous"></script>
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
    <center><h2>Blogs</h2></center>
    <hr>  
    <div class="search" id="sb" >
    <i class="fa-solid fa-magnifying-glass icon" style="height:40px;font-size:25px;"></i>
    <input type="text" class="input-field" placeholder="Search.." style="height:35px;width:250px;"> 
    </div>
    <div class="container">
    <?php
        // $query = "SELECT * FROM tbl_blog";
        // if ($result =mysqli_query($conn,$query)) 
        // {
        //   while ($row = mysqli_fetch_assoc($result)) 
        //   {
          // define how many results you want per page
$results_per_page = 2;

// find out the number of results stored in database
$sql='SELECT * FROM tbl_blog';
$result = mysqli_query($conn, $sql);
$number_of_results = mysqli_num_rows($result);

// determine number of total pages available
$number_of_pages = ceil($number_of_results/$results_per_page);

// determine which page number visitor is currently on
if (!isset($_GET['page'])) {
  $page = 1;
} else {
  $page = $_GET['page'];
}

// determine the sql LIMIT starting number for the results on the displaying page
$this_page_first_result = ($page-1)*$results_per_page;

// retrieve selected results from database and display them on page
$sql='SELECT * FROM tbl_blog LIMIT ' . $this_page_first_result . ',' .  $results_per_page;
if($result = mysqli_query($conn, $sql))
{
while($row=mysqli_fetch_assoc($result))
{
    ?>
   
    <form action="" method="post">
  <div class="card">
    <div class="card__header">
      <img src="https://source.unsplash.com/600x400/?computer" alt="card__image" class="card__image" width="600">
    </div>
    <div class="card__body">
      <span class="tag tag-blue"><?php echo $row['domain'];?></span>
      <h4><?php $row['title'];?></h4>
      <p><?php echo $row['overview'];?></p>
      <button type="button" class="btn btn-primary" style="width:100px;border-radius:20px;"><a href="blogpage.php?id=<?php echo $row['id'];?>" style="color:white;">Read more</a></button>
    </div>
    <div class="card__footer">
      <div class="user">
        <img src="https://i.pravatar.cc/40?img=1" alt="user__image" class="user__image">
        <div class="user__info">
          <h5><?php echo $row['useremail'];?></h5>
          <small><?php echo $row['time'];?></small>
        </div>
      </div>
    </div>
  </div>
  </form>
  <?php
          }
           $result->free();
        }
        else

        {

        }
        
        ?>
        </div>


<nav aria-label="Page navigation example" >
<ul class="pagination">
  <?php
  for ($page=1;$page<=$number_of_pages;$page++) {
  ?>
    <li class="page-item"><?php echo '<a class="page-link" href="blog-index.php?page=' . $page . '">' . $page . '</a> ';?></li>

<?php
  }  ?>
  </ul>
  </nav>

        <script src="" async defer></script>
    </body>
</html>
