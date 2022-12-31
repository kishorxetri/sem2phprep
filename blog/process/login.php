<?php 
 include 'connection.php';
 $email  = $_POST['email'];
 $pass1 = $_POST['pass1'];

  $encp = md5($pass1);
 $query = "SELECT * FROM users WHERE email = '$email' and password = '$encp'";
  $result  =  mysqli_query($conn,$query);
  if(mysqli_num_rows($result)==1){
    $row = mysqli_fetch_assoc($result);
    session_start();
    $_SESSION["login"] = "1";
    $_SESSION["user_id"] = $row['id'];
     header("Location:../admin.php");
  }else{
    header("Location:../login.php?errmsg=email or password does not match");
  }

 ?>