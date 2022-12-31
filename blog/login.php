<?php include 'include/header.php'; ?>
  <div class="container">
<div class="row justify-content-md-center">
  <div class="col-6">
    <h3>Login</h3>
    <hr/>
    <div class="card p-3">
        <?php include 'include/message.php';?>
      <form method="post" action="process/login.php">
        

<div class="mb-3">
  <label for="email" class="form-label">Email</label>
  <input type="email" name="email" class="form-control" id="Email" placeholder="Email" require>
</div>
<div class="mb-3">
  <label for="pass1" class="form-label">Password</label>
  <input type="password" name="pass1" class="form-control" id="pass1" placeholder="Password" require>
</div>


<button>Login</button>
</div>


</form>
  </div>
</div>
</body>
<?php include 'include/footer.php'; ?>