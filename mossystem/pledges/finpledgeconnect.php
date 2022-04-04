<?php
session_start();
if(!$_SESSION['username'])
{
    header('location:../login/login.php');
}

//DATABASE CONNECTION
$conn = new mysqli('127.0.0.1:3307','root','','mossystem');


if (isset($_POST['pdgsubmit']))
{
    $pledger = $_POST['pledger'];
    $pdgdate = $_POST['pdgdate'];
    $pdgmonth = $_POST['pdgmonth'];
    $pdgprogram = $_POST['pdgprogram'];
    $pdgstatus = $_POST['pdgstatus'];
    $pdgamount = $_POST['pdgamount'];
  

if ($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{

    $query =  "INSERT into pledges (pledger, pdgdate, pdgmonth, pdgprogram, pdgstatus, pdgamount)
     VALUES ('$pledger', '$pdgdate', '$pdgmonth','$pdgprogram', '$pdgstatus', '$pdgamount')";
    $queryrun = mysqli_query($conn,$query);

 
 if ($queryrun)
    {
        
        
        header('location: finpledges.php');
        echo 'New Record Added';
    }else
    {
        header('location: finpledges.php'); 
        echo 'New Record Not Added';
        

       
    }
}
}
?>
