<?php
include 'connection.php';
include_once 'login.php';
if(isset($_POST['ask']))
{
    if(empty($_POST['title']) || empty($_POST['domain']) || empty($_POST['body']) || empty($_POST['overview']))
    {
        echo "<script>alert('Enter all the details');</script>";
    }
    else
    {
        $title=$_POST['title'];
        $domain=$_POST['domain'];
        $overview=$_POST['overview'];
        if(isset($_SESSION['loginstatus']))
        {
            
            $useremail=$_SESSION['loginstatus'];
        }

       $body=$_POST['body'];
        $sql="insert into tbl_blog(title,domain,overview,body,useremail,time) values('$title','$domain','$overview','$body','$useremail',CURRENT_TIMESTAMP)";
        $result=mysqli_query($conn,$sql);
        if($result)
        {
            echo "hello";
        }
        else
        {
            echo "mc";
        }
    }
}

?>