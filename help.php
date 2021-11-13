<head>
<link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<?php include 'navbar.php' ?>
<section class="my-5">
<div class="py-5">
<h2 class="text-center">Contact US</h2>
</div>
<div class="w-50 m-auto">
  <form action = "index.php" method="post">
    <div class="form-group">
     <label>Username</label>
     <input type ="text" name="user" autocomplete="off" class="form-control">
   </div>
   <div class="form-group">
     <label>Email</label>
     <input type ="text" name="email" autocomplete="off" class="form-control">
   </div>
   <div class="form-group">
     <label>Mobile Number</label>
     <input type ="text" name="mobile" autocomplete="off" class="form-control">
   </div>
   <div class="form-group">
     <label>Comments</label>
     <textarea class="form-control"></textarea>
   </div>
   <button type="submit" class="btn btn-success">submit</button>
</form>
</div>
</section>