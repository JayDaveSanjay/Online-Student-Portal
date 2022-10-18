<?php
include '../php/connection.php';
if(isset($_REQUEST['delete'])){
    $delete_id = $_REQUEST['delete'];
    mysqli_query($conn, "DELETE FROM tbl_blog WHERE id = '$delete_id'") or die('query failed');
    header('location:admin-dashboard-manage-blogs.php');
 }
?>