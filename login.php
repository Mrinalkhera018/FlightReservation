<?php include 'navbar.php'; ?>
<br>
<br>
<head>
<link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<div class="w-50 m-auto">
<form action = "userLogin.php" method="post">
<div class="form-group">
     <label>Email</label>
     <br>
     <input type="email" name="email" class="form-control" required> 
   </div>
   <div class="form-group">
     <label>Password</label>
     <br>
     <input type="password" name="password" class="form-control" required> 
   </div>
   <input type='submit' class='btn btn-success' value='Login'>
  
</form>
<br>
<br>
<a class='btn btn-success' href = 'SignUp.php' >Sign up</a>
</div>