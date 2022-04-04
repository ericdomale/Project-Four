<?php
session_start();
if(!$_SESSION['username'])
{
    header('location:../login/login.php');
}

//DATABASE CONNECTION
$conn = new mysqli('127.0.0.1:3307','root','','mossystem');


if (isset($_POST['certificate']))
{
    $certdate = $_POST['certdate'];
    $certname = $_POST['certname'];
    $certype = $_POST['certype'];
    $certschool = $_POST['certschool'];
    $awdate = $_POST['awdate'];
    $certduration = $_POST['certduration'];
  

if ($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{

    $query =  "INSERT into certificates (certdate, certname, certype, certschool, awdate, certduration)
     VALUES ('$certdate', '$certname', '$certype', '$certschool', '$awdate', '$certduration')";
    $queryrun = mysqli_query($conn,$query);

 
 if ($queryrun)
    {
        
        
        header('location:pascertificates.php');
    }else
    {
        header('location:pascertificates.php'); 
        echo 'Certificate Not Added';
        

       
    }
}
}
?>
