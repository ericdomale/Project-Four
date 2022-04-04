<?php
session_start();
if(!$_SESSION['username'])
{
    header('location:../login/login.php');
}

//DATABASE CONNECTION
$conn = new mysqli('127.0.0.1:3307','root','','mossystem');


if (isset($_POST['offsubmit']))
{
    $offmonth = $_POST['offmonth'];
    $offweek = $_POST['offweek'];
    $offdate = $_POST['offdate'];
    $offprogram = $_POST['offprogram'];
    $offertype = $_POST['offertype'];
    $ofamount = $_POST['ofamount'];
  

if ($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{

    $query =  "INSERT into offerings (offmonth, offweek, offdate, offprogram, offertype, ofamount)
     VALUES ('$offmonth','$offweek', '$offdate', '$offprogram', '$offertype', '$ofamount')";
    $queryrun = mysqli_query($conn,$query);

 
 if ($queryrun)
    {
        
        
        header('location: offerings.php');
        echo 'New Record Added';
    }else
    {
        header('location:offerings.php'); 
        echo 'New Record Not Added';
        

       
    }
}
}
?>
