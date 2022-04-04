<?php
session_start();
if(!$_SESSION['username'])
{
    header('location:../login/login.php');
}

//DATABASE CONNECTION
$conn = new mysqli('127.0.0.1:3307','root','','mossystem');


if (isset($_POST['mstudent']))
{
    $erlid = $_POST['erlid'];
    $fullname = $_POST['fullname'];
    $bdate = $_POST['bdate'];
    $erldate = $_POST['erldate'];
    $duration = $_POST['duration'];
    $startdate = $_POST['startdate'];
    $enddate = $_POST['enddate'];
    $erlmonth = $_POST['erlmonth'];
    $contact = $_POST['contact'];
    $maddress = $_POST['maddress'];
    $cstatus = $_POST['cstatus'];
  

if ($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{

    $query =  "INSERT into minilead (erlid, fullname, bdate, erldate, duration, startdate, enddate, erlmonth, contact, maddress, cstatus)
     VALUES ('$erlid', '$fullname', '$bdate','$erldate', '$duration', '$startdate', '$enddate','$erlmonth', '$contact', '$maddress', '$cstatus')";
    $queryrun = mysqli_query($conn,$query);

 
 if ($queryrun)
    {
        
        
        header('location: adminilead.php');
        echo 'New Record Added';
    }else
    {
        header('location: adminilead.php'); 
        echo 'New Record Not Added';
        

       
    }
}
}
?>
