<?php
 include('connection.php');

 $title = $_POST['title'];
 if(empty($_POST['title'])){
    $msg = "title can not be empty";
    header("Location:../add-category.php?errmsg=".$msg);
 }else{

 $id = $_POST['id'];
 $query = "UPDATE categories SET title='$title' WHERE id='$id'";

 
 if(mysqli_query($conn,$query)){
     $msg = "successfully updated";
     header('Location:../categories.php?msg='.$msg);
 }else{
    $msg = "error occured:-".mysqli_error($conn);
    header("Location:../edit-category.php?errmsg=".$msg."&id=".$id);
 }
}
?>