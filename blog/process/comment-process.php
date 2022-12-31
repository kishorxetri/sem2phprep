<?php
include("connection.php");
session_start();
    $comment = $_POST['comment'];
    $blog_id = $_POST['blog_id'];
    $user_id = $_SESSION['user_id'];
    $date = date('Y-m-d');
    $query = "INSERT INTO comments(message,comment_date,blog_id,user_id) VALUES('$comment','$date','$blog_id','$user_id')";
    if(mysqli_query($conn,$query)){
        $msg = "sucess";
        header('Location:../readmore.php?id='.$blog_id.'&msg='.$msg);
    }else{
        $errmsg = "failed";
        header('Location:../readmore.php?id='.$blog_id.'&errmsg='.$msg);
    }