<?php
session_start();
if(!$_SESSION['username'])
{
    header('location:../login/login.php');
}
 $connection = new mysqli('127.0.0.1:3307','root','','mossystem');
?>


<?php


if (isset($_POST['partner']))
{

$partnerno = $_POST['partnerno'];
$fullname = $_POST['fullname'];
$partdate = $_POST['partdate'];
$gender = $_POST['gender'];
$status = $_POST['status'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$partaddress = $_POST['partaddress'];
$gpsaddress = $_POST['gpsaddress'];
$work = $_POST['work'];
$since = $_POST['since'];


if ($connection->connect_error){
    die('Connection Failed : '.$connection->connect_error);
}else{

    $query = "INSERT into partners (partnerno, fullname, partdate, gender, status, email, contact, partaddress, gpsaddress, work, since)
    values('$partnerno', '$fullname', '$partdate', '$gender', '$status', '$email', '$contact', '$partaddress', '$gpsaddress', '$work', '$since')";


    $queryrun = mysqli_query($connection, $query);

    if ($queryrun)
    {
      
 header('location:partners.php');
 
    }

    else
    {
        echo "Record Fail";
    }
  
 
}
}


?>

