<?php
session_start();
if(!$_SESSION['username'])
{
    header('location:../login/login.php');
}
 $connection = new mysqli('127.0.0.1:3307','root','','mossystem');
?>


<?php


if (isset($_POST['attendance']))
{

$atdate = $_POST['atdate'];
$atmonth = $_POST['atmonth'];
$shepherds = $_POST['shepherds'];
$assistants = $_POST['assistants'];
$shepnames = implode('<br>', $_POST['shepnames']);
$assistnames = implode('<br>', $_POST['assistnames']);



if ($connection->connect_error){
    die('Connection Failed : '.$connection->connect_error);
}else{

    $query = "INSERT into shepherdsattendance (atdate, atmonth, shepherds, assistants, shepnames, assistnames)
    values('$atdate', '$atmonth', '$shepherds', '$assistants', '$shepnames', '$assistnames')";


    $queryrun = mysqli_query($connection, $query);

    if ($queryrun)
    {
       
    header('location: shepattendance.php');
       
    }

    else
    {
        echo "Record Fail";
    }
  
}
}


?>
