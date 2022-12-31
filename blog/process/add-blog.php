<?php
 include('connection.php');
 $title = $_POST['title'];
 $content = $_POST['content'];
 $catid = $_POST['catid']; 

 if(empty($_POST['title'])){
  $errmsg = "title can not be empty";
 }else if(empty($_POST['content'])){
  $errmsg = "content can be empty";
 }else if($_FILES['image']['size']==0){
  $errmsg = "image must be upload";
 }
 if(isset($errmsg)==1){
  header("Location:../add-blog.php?errmsg=".$errmsg);
 }else{
 $imageName =  $_FILES['image']['name'];
 $imageTempName = $_FILES['image']['tmp_name'];

 $location = "../img/blog/".$imageName;
 $imagelocation= "img/blog/".$imageName;
 $currentDate = date('Y-m-d');
 
 if(move_uploaded_file($imageTempName,$location)){
   $query = "INSERT INTO blog(title,content,image,posted_date,category_id) 
   values ('$title','$content','$imagelocation','$currentDate',$catid)";

   if(mysqli_query($conn,$query)){
    $msg = "success";
    header("Location:../blogs.php?msg = ".$msg);
   }else{
     $msg = "error";
     header("Location:../add-blog.php?errmsg = ".$msg);
   }
 }
 }
 echo "test";
?>