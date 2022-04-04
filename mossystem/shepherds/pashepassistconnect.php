<?php
session_start();
if(!$_SESSION['username'])
{
    header('location:../login/login.php');
}
 $connection = new mysqli('127.0.0.1:3307','root','','mossystem');
?>


<?php


if (isset($_POST['shepassist']))
{

$assid = $_POST['assid'];
$fullname = $_POST['fullname'];
$appdate = $_POST['appdate'];
$cell = $_POST['cell'];



if ($connection->connect_error){
    die('Connection Failed : '.$connection->connect_error);
}else{

    $query = "INSERT into shepassist (assid, fullname, appdate, cell)
    values('$assid', '$fullname', '$appdate', '$cell')";


    $queryrun = mysqli_query($connection, $query);

    if ($queryrun)
    {
       
      
    header('location: pashepassistant.php');
   
        
    }

    else
    {
        echo "Record Fail";
    }
  
 
}
}


?>
