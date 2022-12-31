<?php
 session_start();
 if(!isset($_SESSION['login'])){
   header("Location:login.php?errmsg=login first");
 }
?>
<?php include 'include/header.php'; ?>
 <div class="row">
  <div class="col-3 sidebar">
   <?php include 'include/sidebar.php'; ?>
  </div>
 
<div class="col-9">     
 <?php include 'include/message.php';?>
  <?php
    $c = 1;
    include('process/connection.php');
    $query = "SELECT * FROM blog";
    $result = mysqli_query($conn,$query);
  ?>
  <table class="table">
    <th>S.N</th>
   <th>Title</th>
   <th>Action</th>

   <?php
     while($row = mysqli_fetch_assoc($result)){?>
       
       <tr>
        <td> <?php echo $c;?></td>
        <td><?php echo $row['title'];?></td>
        <td><a class="btn btn-info" href="blog-edit.php?id=<?php echo $row['id'];?>">Edit</a> | <a href="process/delete-blog.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></td>
       </tr>
        
     <?php  $c++;
     
    }
     ?>
  </table>
</div>
</div>
<?php include 'include/footer.php'; ?>
+