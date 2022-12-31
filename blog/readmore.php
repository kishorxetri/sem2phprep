<?php 
   include 'include/header.php';
   include('process/connection.php');
   $id = $_GET['id'];
   $query = "SELECT * FROM blog WHERE id = '$id'";
   $result = mysqli_query($conn,$query);
   $row = mysqli_fetch_assoc($result);
 ?>
<div class="container">
<div class="row justify-content-md-center">
  <div class="col-10">
  <div class="card">
  <img src="<?php echo $row['image'];?>" style="height:800px;width:auto;" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $row['title']; ?></h5>
    <p class="card-text"><?php echo $row['content']; ?></p>
  </div>
</div>
<hr/>
<?php 
  $query = "SELECT * FROM comments as c join users as u 
  on u.id = c.user_id WHERE blog_id ='$id'";
  $result = mysqli_query($conn,$query);
?>
<ul style="list-style-type:none;">
 <?php 
   while($row = mysqli_fetch_assoc($result)){ ?>
  <li style="border-bottom:1px solid gray;">
    <div>
       <h5><?php echo $row['name'];?></h5>
       <p><?php echo $row['message'];?></p>
    </div>
  </li>

<?php } ?>
</ul>

<?php
 session_start();
 if(isset($_SESSION['login'])){ ?>

 <form method="post" action="process/comment-process.php">
    <label for="">Comment</label>
   <textarea class="form-control" name="comment"> </textarea>
   <input type="hidden" name="blog_id" value="<?php echo $row['id']; ?>">
   <button type="submit" class="btn btn-primary" style="float:right">Comment</button>

</form>

<?php }else { ?>
      <div class="row justify-content-md-center">
         <div class="col-3">
            
         <a href="login.php" class="btn btn-primary">Login First</a>
          </div>
      </div>
 <?php } ?> 
</div>
  </div>
</div>
</body>
<?php include 'include/footer.php'; ?>