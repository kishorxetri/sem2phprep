<?php
include('connection.php');
 $id = $_GET['id'];
 $query = "DELETE FROM blog WHERE id='$id'";

 if(mysqli_query($conn,$query)){
     $msg = "successfully Deleted";
     header('Location:../blogs.php?msg='.$msg);
 }else{
    $msg = "error occured:-".mysqli_error($conn);
    header("Location:../blogs.php?errmsg=".$msg);
 }