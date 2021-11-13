<head>
<link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<?php include 'navbar.php'; session_start();?>
<br>
<br>
<div class="w-50 m-auto">
    <form action="bookdb.php" method="post">
        <h1>Passenger Details</h1>
        <p>Ticket Details will be shared on <?php echo $_SESSION['Email'];?>></p>
    <div class="form-group">
     <label>Passenger Name</label>
     <br>
     <input type="text" name="paxName" class="form-control" required> 
   </div>
    <div class="form-group">
     <label>Age</label>
     <br>
     <input type="text" name="age" class="form-control" required> 
   </div>
   <div class="form-group">
     <label>Gender</label>
     <br>
 <select name="gender" required>
   <option value="">Select gender</option>
  <option value="male">Male</option>
  <option value="female">Female</option>
  <option value="transgender">Transgender</option>
</select>
   </div>
   <div class="form-group">
     <label> Passenger Mobile No.</label>
     <br>
     <input type="text" name="phone" class="form-control" required> 
   </div>
   <input type="hidden" name="flightId" value="<?php echo $_GET['flightId']; ?>" />
   <input type="submit" class="btn btn-success" value="Book Now">
    </form>
</div>
