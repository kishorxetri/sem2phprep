<?php
 session_start();
 if(!isset($_SESSION['login'])){
   header("Location:login.php?errmsg=login first");
 }
 include('process/connection.php');
 $id = $_GET['id'];
 $query = "SELECT * FROM blog WHERE id = '$id'";

 $result = mysqli_query($conn,$query);
 if(mysqli_num_rows($result)!=1){
    die("you are not allowed to edit ");
 }
 $row = mysqli_fetch_assoc($result);
  

?>
<?php include 'include/header.php'; ?>
 <div class="row">
  <div class="col-3 sidebar">
   <?php include 'include/sidebar.php'; ?>
  </div>
 
<div class="col-8">
   <h3>Edit Blog</h3>
   <hr/>
   <form method="post" action="process/edit-blog.php" enctype="multipart/form-data">
   <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Title</label>
    <input type="text" value="<?php echo $row['title'];?>" class="form-control" name="title" require>
   </div>
   <div class="mb-3">
    <div class="image">
        <h5>Current image</h5>
      <img src="/blog<?php echo $row['image'];?>" style="height:100px;width:auto;">
    </div>
    <label for="exampleFormControlInput1" class="form-label">Cover Image</label>
    <input type="file" class="form-control" name="image">
   </div>
   
   <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Content</label>
    <textarea id="content" name="content" class="form-control" require>
        <?php echo $row['content'];?>
    </textarea>
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
   <input type="hidden" name="blogid" value="<?php echo  $id;?>">

   <button type="submit" class="btn btn-info">Save</button>
</form>
</div>
</div>
<?php include 'include/footer.php'; ?>
