<?php
session_start();
if(!$_SESSION['username'])
{
    header('location:../login/login.php');
}

//DATABASE CONNECTION
$conn = new mysqli('127.0.0.1:3307','root','','mossystem');


if (isset($_POST['jointitsubmit']))
{
    $cid = $_POST['cid'];
    $company = $_POST['company'];
    $fullname = $_POST['fullname'];
    $contact = $_POST['contact'];
    $titdate = $_POST['titdate'];
    $titmonth = $_POST['titmonth'];
    $titamount = $_POST['titamount'];
  

if ($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{

    $query =  "INSERT into jointithes (cid, company, fullname, contact, titdate, titmonth, titamount)
     VALUES ('$cid', '$company', '$fullname', '$contact', '$titdate', '$titmonth', '$titamount')";
    $queryrun = mysqli_query($conn,$query);

 
 if ($queryrun)
    {
        
        
        header('location: tithe.php');
        echo 'New Record Added';
    }else
    {
        header('location: tithe.php'); 
        echo 'New Record Not Added';
        

       
    }
}
}
?>
