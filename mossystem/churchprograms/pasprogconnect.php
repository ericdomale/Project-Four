<?php
session_start();
if(!$_SESSION['username'])
{
    header('location:../login/login.php');
}
 $connection = new mysqli('127.0.0.1:3307','root','','mossystem');
?>


<?php


if (isset($_POST['addprogram']))
{

    $chprogdate = $_POST['chprogdate'];
    $chprogname = $_POST['chprogname'];
    $chprogrevenue = $_POST['chprogrevenue'];
    $chprogexpend = $_POST['chprogexpend'];
    $supdef = $_POST['supdef'];


if ($connection->connect_error){
    die('Connection Failed : '.$connection->connect_error);
}else{

    $query = "INSERT into chprograms (chprogdate, chprogname, chprogrevenue, chprogexpend, supdef)
    values('$chprogdate', '$chprogname', '$chprogrevenue', '$chprogexpend', '$supdef')";


    $queryrun = mysqli_query($connection, $query);

    if ($queryrun)
    {
       
      
       
        echo "Program Added";
 
        header('location:pasprogram.php');
 
        
    }

    else
    {
        echo "Record Fail";
    }
  
 
}
}


?>
