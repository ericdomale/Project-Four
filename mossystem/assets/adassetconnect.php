<?php
session_start();
if(!$_SESSION['username'])
{
    header('location:../login/login.php');
}
 $connection = new mysqli('127.0.0.1:3307','root','','mossystem');
?>


<?php


if (isset($_POST['asset']))
{

$assetdate = $_POST['assetdate'];
$assetname = $_POST['assetname'];
$assetamount = $_POST['assetamount'];
$assetlocation = $_POST['assetlocation'];
$assetspecs = $_POST['assetspecs'];



if ($connection->connect_error){
    die('Connection Failed : '.$connection->connect_error);
}else{

    $query = "INSERT into assets (assetdate, assetname, assetamount, assetlocation, assetspecs)
    values('$assetdate', '$assetname', '$assetamount', '$assetlocation', '$assetspecs')";


    $queryrun = mysqli_query($connection, $query);

    if ($queryrun)
    {
       
      
       
        
 
    header('location: admasset.php');
 
       
        
    }

    else
    {
        echo "Record Fail";
    }
  
 
}
}


?>
