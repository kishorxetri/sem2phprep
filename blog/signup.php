 <?php include 'include/header.php'; ?>
  <div class="container">
<div class="row justify-content-md-center">
  <?php include('include/message.php'); ?>
  <div class="col-6">
    <h3>SignUP</h3>
    <hr/>
    <div class="card p-3">
      <form method="post" action="process/signup.php">
        
      <div class="mb-3">
  <label for="name" class="form-label">Name</label>
  <input type="text" name="name" class="form-control" id="name" placeholder="Your name">
</div>
<div class="mb-3">
  <label for="email" class="form-label">Email</label>
  <input type="text" name="email" class="form-control" id="Email" placeholder="Email">
</div>
<div class="mb-3">
  <label for="pass1" class="form-label">Password</label>
  <input type="password" name="pass1" class="form-control" id="pass1" placeholder="Password">
</div>
<div class="mb-3">
  <label for="pass2" class="form-label">Confirm Password</label>
  <input type="password" name="pass2" class="form-control" id="pass2" placeholder="Password">
</div>

<button>Sign up</button>
</div>


</form>
  </div>
</div>

<?php include 'include/footer.php'; ?>