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
  <div class="card p-4">
  <h3>Add New Category</h3>
   <hr/>
   
   <?php include 'include/message.php';?>
   <form method="post" action="process/add-category-process.php">
     <div class="mb-3">
         <label for="title" class="form-label">Title</label>
         <input type="text" class="form-control" name="title" id="title" require>
    </div>
    <button type="submit" class="btn btn-success">Save</button>
</form>
  </div>
</div>
</div>
<?php include 'include/footer.php'; ?>
