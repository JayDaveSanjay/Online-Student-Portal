<?php
include 'connection.php';
// Uploads files
if (isset($_POST['upload'])) { // if save button on the form is clicked
    // name of the uploaded file
    $filename = $_FILES['material']['name'];
    $subject = $_POST['subject'];
    $semester = $_POST['semester'];
    $type="questionpaper";
    // destination of the file on the server
    $destination = '../material/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['material']['tmp_name'];
    $size = $_FILES['material']['size'];

    if (!in_array($extension, [ 'pdf'])) {
        echo "<script>alert('You file extension must be  .pdf') </script>";
    } elseif ($_FILES['material']['size'] > 1000000) { // file shouldn't be larger than 1Megabyte
        echo "<script>alert('File too large maximum size is 1Mb') </script>";
    }
    else if(empty($subject) || empty($semester) )
    {
        echo "<script>alert('Enter all the details') </script>";
    } 
    else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO tbl_material (subject,semester,type,file) VALUES('$subject',$semester,'$type','$filename')";
            if (mysqli_query($conn, $sql)) {
                echo "<script>alert('File uploaded succesfully') </script>";
                //header('location:../pages/material-faculty.php');
            }
        } else {
            echo "<script>alert('Failed to upload file') </script>";
        }
    }
}
if (isset($_POST['upload1'])) { // if save button on the form is clicked
    // name of the uploaded file
    $filename = $_FILES['material1']['name'];
    $subject = $_POST['subject1'];
    $semester = $_POST['semester1'];
    $type="material";
    // destination of the file on the server
    $destination = '../material/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['material1']['tmp_name'];
    $size = $_FILES['material1']['size'];

    if (!in_array($extension, [ 'pdf'])) {
        echo "<script>alert('You file extension must be  .pdf') </script>";
    } elseif ($_FILES['material1']['size'] > 1000000) { // file shouldn't be larger than 1Megabyte
        echo "<script>alert('File too large maximum size is 1Mb') </script>";
    }
    else if(empty($subject) || empty($semester) )
    {
        echo "<script>alert('Enter all the details') </script>";
    } 
    else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO tbl_material (subject,semester,type,file) VALUES('$subject',$semester,'$type','$filename')";
            if (mysqli_query($conn, $sql)) {
                echo "<script>alert('File uploaded succesfully') </script>";
                //header('location:../pages/material-faculty.php');
            }
        } else {
            echo "<script>alert('Failed to upload file') </script>";
        }
    }
}
// if (isset($_POST['update'])) { // if save button on the form is clicked
//     // name of the uploaded file
//     $filename = $_FILES['update']['name'];
//     // destination of the file on the server
//     $destination = '../material/' . $filename;

//     // get the file extension
//     $extension = pathinfo($filename, PATHINFO_EXTENSION);
//   echo $extension;
//     // the physical file on a temporary uploads directory on the server
//     $file = $_FILES['update']['tmp_name'];
//     $size = $_FILES['update']['size'];

//     if (!in_array($extension, ['pdf'])) {
//         echo "<script>alert('You file extension must be  .pdf') </script>";
//     } elseif ($_FILES['material']['size'] > 1000000) { // file shouldn't be larger than 1Megabyte
//         echo "<script>alert('File too large maximum size is 1Mb') </script>";
//     }
//     else {
//         // move the uploaded (temporary) file to the specified destination
//         if (move_uploaded_file($file, $destination)) {
//             $sql = "update tbl_material set file=$file";
//             if (mysqli_query($conn, $sql)) {
//                 echo "<script>alert('File updated succesfully') </script>";
//                 //header('location:../pages/material-faculty.php');
//             }
//         } else {
//             echo "<script>alert('Failed to update file') </script>";
//         }
//     }
// }
?>