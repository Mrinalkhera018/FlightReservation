<?php
$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'flightreservation');
$firstname = isset($_POST['firstname']) ? $_POST['firstname'] : false;
$lastname = isset($_POST['lastname']) ? $_POST['lastname'] : false;
$username = isset($_POST['username']) ? $_POST['username'] : false;
$password = isset($_POST['password']) ? $_POST['password'] : false;
$email = isset($_POST['email']) ? $_POST['email'] : false;
$phone=  isset($_POST['phone']) ? $_POST['phone'] : false;
$query = "select * from userdetails where Email = '$email'";
$resultQuery= mysqli_query($con,$query);
if(mysqli_num_rows($resultQuery))
{ 
    
    echo "location.href='SignUp.php';
    <script> alert('Email Already Registered');
    location.href='SignUp.php';
    </script>";
  
}
else
{
    $query1 = "insert into userdetails(firstname,lastname,username,password,email,mobile)
     values('$firstname','$lastname','$username','$password','$email',$phone)";
    echo "<script> location.href='SignUp.php';
     alert('Successfully submitted') </script>";
    mysqli_query($con,$query1);
}

?>
<script>
location.href='login.php';
</scrip>
