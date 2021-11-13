<head>
<link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
 .backgroundBody  {
    background-color :FFE4C4;
    height:100%;
     background-image: url("images/flight2.jpg");
    background-position: center;
  background-repeat: no-repeat;
  background-size: cover; 
  
}
    </style>
</head>

<?php include 'navbar.php'; ?>
<div class="backgroundBody">
<section class="my-5">
<div class="py-5">

</div>
<div class="w-50 m-auto">
  <form action = "showAvailability.php" method="post" class="text-center">
   <div class="form-group">
     <label><h2>From</h2></label>
     <br>
 <h2><select name="from" required> </h2>
   <option value="">Select pickup point</option>
  <option value="Delhi">Delhi</option>
  <option value="Bangalore">Bangalore</option>
  <option value="Mumbai">Mumbai</option>
</select>
   
   </div>
   <div class="form-group">
   <label><h2>To</h2></label>
   <br>
   <h2>  <select name="to" required></h2>
       <option value="">Select DeropOff point</option>
   <option value="Bangalore">Bangalore</option>
  <option value="Mumbai">Mumbai</option>
  <option value="Delhi">Delhi</option>
</select>
    
   </div>
   <div class="form-group">
     <label><h2>Date</h2></label>
     <br>
    <h2> <input type ="date" name="date" autocomplete="off" size="40" required> </h2>
   </div>
   <br>
   <br>

  <input type="submit" class="btn btn-success" value="Search">
</form>
</div>
</section>
</div>