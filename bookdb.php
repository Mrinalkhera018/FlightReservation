<?php
session_start();

$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'flightreservation');

$paxName = isset($_POST['paxName']) ? $_POST['paxName'] : false;
$age = isset($_POST['age']) ? $_POST['age'] : false;
$gender = isset($_POST['gender']) ? $_POST['gender'] : false;
$phone = isset($_POST['phone']) ? $_POST['phone'] : false;
$flightId = isset($_POST['flightId']) ? $_POST['flightId'] : false;
$userId = $_SESSION['member_id'];
$query1 = "insert into allbookings(UserId,FlightId,PassengerName,Age,Gender,Phone) 
values($userId,$flightId,'$paxName',$age,'$gender',$phone);";
 mysqli_query($con,$query1);
$query = "update flightavailability
set seatsAvailable = seatsAvailable - 1
where id = $id";
mysqli_query($con,$query);

?>

<script>
location.href = "MyBookings.php";
</script>