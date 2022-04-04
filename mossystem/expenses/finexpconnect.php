<?php
session_start();
if(!$_SESSION['username'])
{
    header('location:../login/login.php');
}

//DATABASE CONNECTION
$conn = new mysqli('127.0.0.1:3307','root','','mossystem');


if (isset($_POST['expsubmit']))
{
    $expdate = $_POST['expdate'];
    $expmonth = $_POST['expmonth'];
    $expname = $_POST['expname'];
    $expgory = $_POST['expgory'];
    $paytm = $_POST['paytm'];
    $expamount = $_POST['expamount'];
  

if ($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{

    $query =  "INSERT into expenses (expdate, expmonth, expname, expgory, paytm, expamount)
     VALUES ('$expdate', '$expmonth', '$expname', '$expgory', '$paytm', '$expamount')";
    $queryrun = mysqli_query($conn,$query);

 
 if ($queryrun)
    {
        
        
        header('location: finexpenses.php');
        echo 'New Record Added';
    }else
    {
        header('location: finexpenses.php'); 
        echo 'New Record Not Added';
        

       
    }
}
}
?>