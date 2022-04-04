<?php
session_start();
if(!$_SESSION['username'])
{
    header('location:../login/login.php');
}
 $connection = new mysqli('127.0.0.1:3307','root','','mossystem');
?>


<?php


if (isset($_POST['booking']))
{

$bkgprogram = $_POST['bkgprogram'];
$bkgdate = $_POST['bkgdate'];
$bkgtime = $_POST['bkgtime'];
$bkgvenue = $_POST['bkgvenue'];
$bkgemail = $_POST['bkgemail'];
$rsvp = $_POST['rsvp'];
$bkgcontact = $_POST['bkgcontact'];



if ($connection->connect_error){
    die('Connection Failed : '.$connection->connect_error);
}else{

    $query = "INSERT into bookings (bkgprogram, bkgdate, bkgtime, bkgvenue, bkgemail, rsvp, bkgcontact)
    values('$bkgprogram', '$bkgdate', '$bkgtime', '$bkgvenue', '$bkgemail', '$rsvp', '$bkgcontact')";


    $queryrun = mysqli_query($connection, $query);

    if ($queryrun)
    {
       
 
 header('location:bookings.php');
   
    }

    else
    {
        echo "Record Fail";
    }
  
 
}
}


?>

