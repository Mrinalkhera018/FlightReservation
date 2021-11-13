<?php
session_start();
$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'flightreservation');
$email = isset($_POST['email']) ? $_POST['email'] : false;
$password = isset($_POST['password']) ? $_POST['password'] : false;
$query = "select * from userdetails where email = '$email' and password = '$password'";
$result = mysqli_query($con,$query);
$fetch = $result->fetch_array();
if($result->num_rows == 1)
{
    if($fetch)
    {
       
        $_SESSION['member_id'] = $fetch['Id'];
        $_SESSION['Email'] = $fetch['Email'];
         header('location:book1.php');
    }
else {
    $_SESSION['error'] = '';

    }
}
else
{
    echo "<script>alert('Please enter Complete and Valid details.')
    location.href='login.php'</script>";
}


?>

