<?php
$con = mysqli_connect('localhost','root');
/*if($con)
echo "susscessfull";
else
echo "oops";*/

mysqli_select_db($con,'flightreservation');

$from = isset($_POST['from']) ? $_POST['from'] : false;
//echo htmlentities($_POST['from'], ENT_QUOTES, "UTF-8");

$to = isset($_POST['to']) ? $_POST['to'] : false;
/*if($o1)
echo htmlentities($_POST['to'], ENT_QUOTES, "UTF-8");
else
"perablem";*/
$date = isset($_POST['date']) ? $_POST['date'] : false;
$query = "select * from flightavailability where pickUp = '$from' and DropOff = '$to' and Date = '$date'";
$result = mysqli_query($con,$query);


?>