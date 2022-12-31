<?php
 include('connection.php');
 $title = $_POST['title'];
 $content = $_POST['content'];
 $catid = $_POST['catid']; 
 $id = $_POST['blogid'];

 if($_FILES['image']['size']!=0){
   $imageName =  $_FILES['image']['name'];
   $imageTempName = $_FILES['image']['tmp_name'];

    $location = "../img/blog/".$imageName;
    
    $imagelocation= "img/blog/".$imageName;

 if(move_uploaded_file($imageTempName,$location)){
   $query = "UPDATE blog SET title = '$title', content='$content', category_id='$catid',image='$imagelocation' WHERE id='$id'"; 
   if(mysqli_query($conn,$query)){
    $msg = "success";
    header("Location:../blogs.php?msg = ".$msg);
   }else{
     $msg = "error";
     header("Location:../add-blog.php?errmsg = ".$msg);
   }
  }
 }else{
    $query = "UPDATE blog SET title = '$title', content='$content', category_id='$catid' WHERE id='$id'"; 
    if(mysqli_query($conn,$query)){
     $msg = "successfully updated";
     header("Location:../blogs.php?msg = ".$msg);
    }else{
      $msg = "error";
      header("Location:../add-blog.php?errmsg = ".$msg);
    }
 }



?>

Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam, voluptates? Officiis, ad. Dolores blanditiis odit, quo accusantium, incidunt illum fuga unde amet impedit itaque accusamus et distinctio, repellendus ullam sunt.