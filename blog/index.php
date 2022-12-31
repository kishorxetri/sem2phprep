<?php 
   include 'include/header.php';
   include('process/connection.php');
   $query = "SELECT * FROM blog";
   $result = mysqli_query($conn,$query);
 ?>
<div class="container">
<div class="row justify-content-md-center">
  <div class="col-10">
  <?php while($row=mysqli_fetch_assoc($result)){ ?>
  <div class="card">
  <img src="<?php echo $row['image'];?>" style="height:800px;width:auto;" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $row['title']; ?></h5>
    <p class="card-text"><?php echo substr($row['content'],0,200); ?></p>
    <a href="readmore.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Read more</a>
  </div>
</div>
<hr/>
<?php } ?>

  </div>
  </div>
</div>
</body>
<?php include 'include/footer.php'; ?>