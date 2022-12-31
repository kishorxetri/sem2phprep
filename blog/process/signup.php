<?php
include 'connection.php';
$name=$_POST["name"];
$email=$_POST["email"];
$pass1=$_POST["pass1"];
$pass2=$_POST["pass2"];


if(!preg_match("/^[a-zA-Z]{4,}(?: [a-zA-Z]+){0,2}$/",$name)){
  $errmsg = "name is not in proper format or empty" ;
  header('Location:../signup.php?errmsg='.$errmsg);
}else if(!preg_match("/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/",$email) || empty($_POST['email'])){
    $errmsg = "email is not in proper format" ;
    header('Location:../signup.php?errmsg='.$errmsg);
}

else if(empty($_POST['pass1']) or empty($_POST['pass2'])){
    $errmsg = "password and password confirmation must entered" ;
    header('Location:../signup.php?errmsg='.$errmsg);
}
else if($pass1 == $pass2){
    $encrypted_password = md5($pass1);
   $query = "INSERT INTO users(name,email,password) VALUES ('$name','$email','$encrypted_password')";
   if(mysqli_query($conn,$query)){
    $msg =  "Signup successfully";
    header("Location:../login.php?msg=".$msg);
   }else{
    $errmsg =  "error".mysqli_error($conn);
    header('Location:../signup.php?errmsg='.$errmsg);
   }

}else{
    $errmsg = "password does not match";
    header('Location:../signup.php?errmsg='.$errmsg);
}

?>