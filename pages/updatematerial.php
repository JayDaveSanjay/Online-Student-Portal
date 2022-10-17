<?php
include '../php/connection.php';
if(isset($_GET['id']))
{
$id=$_GET["id"];
$q="delete from tbl_material where id=$id";
$run=mysqli_query($conn,$q);
if($run)
{
 header('location:material-faculty.php');
}
}
?>