<?php
session_start();
if(!$_SESSION['username'])
{
    header('location:../login/login.php');
}
 $connection = new mysqli('127.0.0.1:3307','root','','mossystem');
?>


<?php


if (isset($_POST['procure']))
{

    $prodate = $_POST['prodate'];
    $proname = $_POST['proname'];
    $quantity = $_POST['quantity'];
    $vendor = $_POST['vendor'];
    $ventact = $_POST['ventact'];
    $purpose = $_POST['purpose'];
    $proamount = $_POST['proamount'];
    $receiver = $_POST['receiver'];



if ($connection->connect_error){
    die('Connection Failed : '.$connection->connect_error);
}else{

    $query = "INSERT into procurement (prodate, proname, quantity, vendor, purpose, proamount, receiver)
    values('$prodate', '$proname', '$quantity', '$vendor', '$ventact', '$purpose', '$proamount', '$receiver')";


    $queryrun = mysqli_query($connection, $query);

    if ($queryrun)
    {
       
      
       
        
 
    header('location:finprocurement.php');
 
       
        
    }

    else
    {
        echo "Record Fail";
    }
  
 
}
}


?>
