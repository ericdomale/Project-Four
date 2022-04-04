<?php
session_start();
if(!$_SESSION['username'])
{
    header('location:../login/login.php');
}
 $connection = new mysqli('127.0.0.1:3307','root','','mossystem');
?>


<?php


if (isset($_POST['addevent']))
{

$eventdate = $_POST['eventdate'];
$eventname = $_POST['eventname'];
$eventvenue = $_POST['eventvenue'];
$eventkind = $_POST['eventkind'];
$eventype = $_POST['eventype'];
$dresscode = $_POST['dresscode'];
$eventcolours = $_POST['eventcolours'];



if ($connection->connect_error){
    die('Connection Failed : '.$connection->connect_error);
}else{

    $query = "INSERT into events (eventdate, eventname, eventvenue, eventkind, eventype, dresscode, eventcolours)
    values('$eventdate', '$eventname', '$eventvenue', '$eventkind', '$eventype', '$dresscode', '$eventcolours')";


    $queryrun = mysqli_query($connection, $query);

    if ($queryrun)
    {
       
 
 header('location:adevents.php');
      
    }

    else
    {
        echo "Record Fail";
    }
  
 
}
}


?>

