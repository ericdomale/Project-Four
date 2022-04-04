<?php
session_start();
if(!$_SESSION['username'])
{
    header('location:../login/login.php');
}
 $connection = new mysqli('127.0.0.1:3307','root','','mossystem');
?>


<?php


if (isset($_POST['visit']))
{

$visdate = $_POST['visdate'];
$visname = $_POST['visname'];
$service = $_POST['service'];
$vstatus = $_POST['vstatus'];
$chinfo = $_POST['chinfo'];



if ($connection->connect_error){
    die('Connection Failed : '.$connection->connect_error);
}else{

    $query = "INSERT into visitors (visdate, visname, service, vstatus, chinfo)
    values('$visdate', '$visname', '$service', '$vstatus', '$chinfo')";


    $queryrun = mysqli_query($connection, $query);

    if ($queryrun)
    {
       
      
       
        
 
    header('location:visitors.php');
 
       
        
    }

    else
    {
        echo "Record Fail";
    }
  
 
}
}


?>
