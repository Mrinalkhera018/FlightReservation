<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FlightReservation</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 
</head>
</head>
<body>

<?php include 'navbar.php'; ?>
<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/flight1.jpg" alt="flight1" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Los Angeles</h3>
        <p>We had such a great time in LA!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/flight8.jpg" alt="flight8" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Chicago</h3>
        <p>Thank you, Chicago!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/flight9.jpg" alt="flight9" width="1100" height="500">
      <div class="carousel-caption">
        <h3>New York</h3>
        <p>We love the Big Apple!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section class="my-5">
<div class="py-5">
<!--<h2 class="text-center">About Us</h2>-->
</div>
<div class="container-fluid">
<div class="row">
  <div class="col-lg-6 col-md-6 col-12">
    <img src="images/flight1.jpg" class="img-fluid aboutimg">
</div>
<div class="col-lg-6 col-md-6 col-12">
   <h2 class="display-4"><b>Leaves piling on</b></h2>
  <!-- <p class="py-3">Time to get a move on-->
    <h3>Time to get a move on</h3>
     
</p>
</div>
</div>
</section>

<section class="my-5">
  <div class="py-5">
<h2 class="text-center">Partner Airlines</h2>
</div>
<div class="container-fluid">
<div class="row">
<div class="col-lg-4 col-md-4 col-12">
<div class="card" >
   <img class="card-img-top" src="images/flight3.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Singapore Airlines</h4>
    <p class="card-text">Partner airlines</p>
    <a href="https://www.singaporeair.com/en_UK/us/plan-travel/partner-airlines/" class="btn btn-primary">See Profile</a>
  </div>
</div>
</div>

<div class="col-lg-4 col-md-4 col-12">
<div class="card" >
    <img class="card-img-top" src="images/flight4.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">United Airlines</h4>
    <p class="card-text">Partner airlines</p>
    <a href="https://www.united.com/en/us" class="btn btn-primary">See Profile</a>
  </div>
</div>
</div>

<div class="col-lg-4 col-md-4 col-12">
<div class="card" >
    <img class="card-img-top" src="images/flight8.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Air Canada</h4>
    <p class="card-text">Partner airlines</p>
    <a href="https://www.aircanada.com/ca/en/aco/home.html#/" class="btn btn-primary">See Profile</a>
  </div>
</div>
</div>


<div class="col-lg-4 col-md-4 col-12">
<div class="card" >
    <img class="card-img-top" src="images/flight2.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Aegion Airlines</h4>
    <p class="card-text">Partner airlines</p>
    <a href="https://en.aegeanair.com/" class="btn btn-primary">See Profile</a>
  </div>
</div>
</div>

<div class="col-lg-4 col-md-4 col-12">
<div class="card" >
    <img class="card-img-top" src="images/flight9.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Ethiopian Airlines</h4>
    <p class="card-text">Partner airlines</p>
    <a href="https://www.ethiopianairlines.com/in" class="btn btn-primary">See Profile</a>
  </div>
</div>
</div>

<div class="col-lg-4 col-md-4 col-12">
<div class="card" >
    <img class="card-img-top" src="images/flight1.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Asiana Airlines</h4>
    <p class="card-text">Partner airlines</p>
    <a href="https://flyasiana.com/C/pc/gateway/gateway.html" class="btn btn-primary">See Profile</a>
  </div>
</div>
</div>

</div>
</div>
</section>





<?php include 'footer.php'; ?>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>