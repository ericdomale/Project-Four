<?php
session_start();
if(!$_SESSION['username'])
{
    header('location:../login/login.php');
}

//DATABASE CONNECTION
$conn = new mysqli('127.0.0.1:3307','root','','mossystem');


if (isset($_POST['reasonsubmit']))
{
    $reasondate = $_POST['reasondate'];
    $mainreason = $_POST['mainreason'];
  

if ($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{

    $query =  "INSERT into editreason (reasondate, mainreason)
     VALUES ('$reasondate', '$mainreason')";
    $queryrun = mysqli_query($conn,$query);

 
 if ($queryrun)
    {
        sleep(1);
        header ('location: tihedit.php'); 
        
    }else
    {
        header('location: tithe.php'); 
        echo 'New Record Not Added';
        

       
    }
}
}
?>
