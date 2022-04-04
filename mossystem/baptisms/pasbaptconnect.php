<?php
session_start();
if(!$_SESSION['username'])
{
    header('location:../login/login.php');
}

//DATABASE CONNECTION
$conn = new mysqli('127.0.0.1:3307','root','','mossystem');


if (isset($_POST['baptize']))
{
    $baptname = $_POST['baptname'];
    $baptdate = $_POST['baptdate'];
    $baptizer = $_POST['baptizer'];
    $baptvenue = $_POST['baptvenue'];
   

if ($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{

    $query =  "INSERT into baptisms (baptname, baptdate, baptizer, baptvenue)
     VALUES ('$baptname', '$baptdate', '$baptizer', '$baptvenue')";
    $queryrun = mysqli_query($conn,$query);

 
 if ($queryrun)
    {
        
        
        header('location:pasbaptisms.php');
    }else
    {
        header('location:pasbaptisms.php'); 
        echo 'Record Not Added';
        

       
    }
}
}
?>
