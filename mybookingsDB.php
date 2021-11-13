<?php
session_start();

$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'flightreservation');

$memberId = $_SESSION['member_id'];
$query1 = "SELECT fa.Id, fa.PickUp, fa.DropOff,fa.Date,fa.FlightName,fa.DepartureTime,fa.ArrivalTime,ab.PassengerName
FROM flightavailability as fa
INNER JOIN allbookings as ab
ON fa.Id=ab.FlightId
where ab.UserId= $memberId";
$result =  mysqli_query($con,$query1);

?>

