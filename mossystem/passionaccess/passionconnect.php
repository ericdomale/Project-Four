<?php
session_start();
if(!$_SESSION['username'])
{
    header('location:../login/login.php');
}
 $connection = new mysqli('127.0.0.1:3307','root','','mossystem');
?>


<?php


if (isset($_POST['cellentry']))
{

$entrydate = $_POST['entrydate'];
$connumber = $_POST['connumber'];
$choristers = $_POST['choristers'];
$preacher = $_POST['preacher'];
$message = $_POST['message'];
$ofamount = $_POST['ofamount'];
$members = $_POST['members'];
$connames = $_POST['connames'];
$attended =  implode('<br>', $_POST['attended']);


if ($connection->connect_error){
    die('Connection Failed : '.$connection->connect_error);
}else{

    
    $query = "INSERT into passion (entrydate, connumber, choristers, preacher, message, ofamount, members, connames, attended)
    values('$entrydate', '$connumber', '$choristers', '$preacher', '$message', '$ofamount', '$members', '$connames', '$attended')";


    $queryrun = mysqli_query($connection, $query);

    if ($queryrun)
    {
       
    header('location: passionaccess.php');
       
    }

    else
    {
        echo "Record Fail";
    }

}
}
