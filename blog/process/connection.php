<?php
 $servername = "localhost:3311";
 $username = "root";
 $password = '';
 $database = "blog2";

 $conn = mysqli_connect($servername,$username,$password,$database);

 if(!$conn){
    die("can not connect to the database". mysqli_connect_error());
 }
 ?>