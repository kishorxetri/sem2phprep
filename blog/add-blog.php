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
 
<div class="col-8">
   <h3>Add Blog</h3>
   <?php include('include/message.php');?>
   <hr/>
   <form method="post" action="process/add-blog.php" enctype="multipart/form-data">
   <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Title</label>
    <input type="text" class="form-control" name="title">
   </div>
   <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Cover Image</label>
    <input type="file" class="form-control" name="image" accept="image/*">
   </div>
   
   <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Content</label>
    <textarea id="content" name="content" class="form-control"></textarea>
   </div>
   <label for="exampleFormControlInput1" req class="form-label">Categories</label>
   <select class="form-control" name = "catid" require>
     <?php 
       include('process/connection.php');
       $query = "SELECT * FROM categories";
       $result = mysqli_query($conn,$query);
       while($row = mysqli_fetch_assoc($result)){
     ?>
       <option value="<?php echo $row['id']?>"><?php echo $row['title'];?></option>

    <?php  } ?>
   </select>
   <hr/>
   <button type="submit" class="btn btn-info">Save</button>
</form>
</div>
</div>
<?php include 'include/footer.php'; ?>
+