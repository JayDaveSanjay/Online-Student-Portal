<?php
include '../php/connection.php';
$update_id = $_REQUEST['update'];
$sql="select * from users where id='$update_id'";
$result=mysqli_query($conn,$sql);
while ($row = mysqli_fetch_assoc($result)) {

?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>user update</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div class="container">
            <div class="card p-3">
        <form method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" name="name" id="name" placeholder="Enter email" value=<?php echo $row['name'];?>>
  </div>
  <div class="form-group">
    <label>Contact</label>
    <input type="number" class="form-control" id="contact" name="contact" placeholder="contact" value=<?php echo $row['contact'];?>>
  </div>
  <div class="form-group">
    <label>Enno</label>
    <input type="number" class="form-control" id="enno" name="enno" placeholder="Enno" value=<?php echo $row['enno'];?>>
  </div>
  <button type="submit" name="up" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
        <script src="" async defer></script>
    </body>
</html>
<?php
}
if(isset($_POST['up']))
{
    if (!preg_match("/^\S[a-zA-Z]+ [a-zA-Z]+$/",$_POST['name']))
  {
    echo '<script>alert("enter first and last name in the name field")</script>';
  }
  else
      {
            $name=E($_POST['name']);
          
      }
      if(!preg_match("/^[6-9]\d{9}$/",$_POST['contact']))
      {
        echo '<script>alert("invalid mobile number")</script>';
      }
      else
      {
        $contact=$_POST['contact'];

      }
      if(!preg_match("/^[2]\d{14}$/",$_POST['enno']))
      {
        echo '<script>alert("invalid mobile enrollment number")</script>';
      }
      else
      {
        $enno=E($_POST['enno']);
      }
    mysqli_query($conn, "update  users set name='$name',contact=$contact,enno=$enno WHERE id = '$update_id'") or die('query failed');
    header('location:admin-dashboard-users-info.php');
}
function E($data)
{
  
  $data=trim($data);
  $data=stripcslashes($data);
  $data=htmlspecialchars($data);
  return $data;
}
?>