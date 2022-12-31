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
<table class="table">
    <th>Title</th>
    <Th>Action</Th>
    <?php
      include 'process/connection.php';
      $query = "SELECT * FROM categories";
      $result = mysqli_query($conn,$query);
     while($row = mysqli_fetch_assoc($result)){
     ?>
    <tr>
       <td><?php  echo $row['title']; ?></td>
       <td><a href="edit-category.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Edit</a> | <a href="process/category-delete.php?id=<?php echo $row['id'];?>" class="btn btn-danger">Delete</a> </td>
    </tr>
    <?php } ?>
</table>

</div>
</div>
<?php include 'include/footer.php'; ?>
