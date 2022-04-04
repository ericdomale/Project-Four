<?php
session_start();
if(!$_SESSION['username'])
{
    header('location:../login/login.php');
}
 $connection = new mysqli('127.0.0.1:3307','root','','mossystem');
?>


<?php


if (isset($_POST['shepadd']))
{

$shpid = $_POST['shpid'];
$fullname = $_POST['fullname'];
$appdate = $_POST['appdate'];
$position = $_POST['position'];
$cell = $_POST['cell'];
$location = $_POST['location'];



if ($connection->connect_error){
    die('Connection Failed : '.$connection->connect_error);
}else{

    $query = "INSERT into sheplist (shpid, fullname, appdate, position, cell, location)
    values('$shpid', '$fullname', '$appdate', '$position', '$cell', '$location')";


    $queryrun = mysqli_query($connection, $query);

    if ($queryrun)
    {
       
      
    header('location: sheplist.php');
   
        
    }

    else
    {
        echo "Record Fail";
    }
  
 
}
}


?>
