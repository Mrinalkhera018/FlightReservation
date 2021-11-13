<head>
<link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<?php include 'navbar1.php'; ?>
<br>
<h2 class="text-center">My Bookings</h2>
<div class="container mt-2">
    <div class="row">
        <div class="col-md-12">
            <div class="page-header">
         
                <br>
            </div>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Flight Number</th>
                  <th scope="col">From</th>
                  <th scope="col">To</th>
                  <th scope="col">Date</th>
                  <th scope="col">FlightName</th>
                  <th scope="col">DepartureTime</th>
                  <th scope="col">ArrivalTime</th>
                  <th scope="col">PassengerName</th>
                 
                 </tr>
              </thead>
              <tbody>
                <?php include 'myBookingsDB.php';?>
                     <?php if ($result->num_rows > 0): ?>
                <?php while($array=mysqli_fetch_row($result)): ?>
                <tr>
                    <td scope="row"><?php echo $array[0];?></td>
                    <td><?php echo $array[1];?></td>
                    <td><?php echo $array[2];?></td>
                    <td><?php echo $array[3];?></td>
                    <td><?php echo $array[4];?></td>
                    <td><?php echo $array[5];?></td>
                    <td><?php echo $array[6];?></td>
                    <td><?php echo $array[7];?></td>
                
                </tr>
                <?php endwhile; ?>
                <?php else: ?>
                <tr>
                   <td colspan="3" rowspan="1" headers="">No Data Found</td>
                </tr>
                
                <?php endif; ?>
               <?php mysqli_free_result($result); ?> 
              </tbody>
            </table>
        </div>
    </div>        
</div>
