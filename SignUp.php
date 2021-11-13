<head>
<link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<?php include 'navbar.php'; ?>
<br>
<br>
<div class="w-50 m-auto">
    <form action="userSignUp.php" method="post">
    <div class="form-group">
     <label>Firstname</label>
     <br>
     <input type="text" name="firstname" class="form-control" required> 
   </div>
   <div class="form-group">
     <label>Lastname</label>
     <br>
     <input type="text" name="lastname" class="form-control" required> 
   </div>
    <div class="form-group">
     <label>Username</label>
     <br>
     <input type="text" name="username" class="form-control" required> 
   </div>
   <div class="form-group">
     <label>Password</label>
     <br>
     <input type="password" name="password" class="form-control" required> 
   </div>
   <div class="form-group">
     <label>Email</label>
     <br>
     <input type="email" name="email" class="form-control" required>
   </div>
   <div class="form-group">
     <label>Mobile No.</label>
     <br>
     <input type="text" name="phone" class="form-control" required> 
   </div>
   <input type="submit" class="btn btn-success" value="Submit">
    </form>
</div>