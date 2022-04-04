<?php
session_start();
if(!$_SESSION['username'])
{
    header('location:../login/login.php');
}
 $connection = new mysqli('127.0.0.1:3307','root','','mossystem');
?>


<?php


if (isset($_POST['announce']))
{

$anndate = $_POST['anndate'];
$anntype = $_POST['anntype'];
$anninfo = $_POST['anninfo'];



if ($connection->connect_error){
    die('Connection Failed : '.$connection->connect_error);
}else{

    $query = "INSERT into announcement (anndate, anntype, anninfo)
    values('$anndate', '$anntype', '$anninfo')";


    $queryrun = mysqli_query($connection, $query);

    if ($queryrun)
    {
       
      
       
        echo "Added";
 
       header('location:adannounce.php');
 
        
    }

    else
    {
        echo "Record Fail";
    }
  
 
}
}


?>
