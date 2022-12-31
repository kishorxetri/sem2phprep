<?php
 include('connection.php');
 $title = $_POST['title'];
 if(empty($_POST['title'])){
    $msg = "title can not be empty";
    header("Location:../add-category.php?errmsg=".$msg);
 }else{

    $query = "INSERT INTO categories(title) VALUES ('$title')";
    if(mysqli_query($conn,$query)){
        $msg = "successfully saved";
        header('Location:../categories.php?msg='.$msg);
    }else{
        $msg = "error occured:-".mysqli_error($conn);
        header("Location:../add-category.php?errmsg=".$msg);
    }
  }
?>