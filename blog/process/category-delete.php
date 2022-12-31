<?php
include('connection.php');
 $id = $_GET['id'];
 $query = "DELETE FROM categories WHERE id='$id'";

 if(mysqli_query($conn,$query)){
     $msg = "successfully Deleted";
     header('Location:../categories.php?msg='.$msg);
 }else{
    $msg = "error occured:-".mysqli_error($conn);
    header("Location:../categories.php?errmsg=".$msg);
 }