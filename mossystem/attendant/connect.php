<?php
session_start();
if(!$_SESSION['username'])
{
    header('location:../login/login.php');
}
 $connection = new mysqli('127.0.0.1:3307','root','','mossystem');
?>


<?php


if (isset($_POST['atsubmit']))
{

    $atdate = $_POST['atdate'];
    $atmonth = $_POST['atmonth'];
    $childtotal = $_POST['childtotal'];
    $memtotal = $_POST['memtotal'];
    $males = $_POST['males'];
    $females = $_POST['females'];
    $vistotal = $_POST['vistotal'];
    $overtotal = $_POST['overtotal'];



if ($connection->connect_error){
    die('Connection Failed : '.$connection->connect_error);
}else{

    $query = "INSERT into attendance (atdate, atmonth, memtotal, males, females, childtotal, vistotal, overtotal)
    values('$atdate', '$atmonth', '$memtotal', '$males', '$females', '$childtotal', '$vistotal', '$overtotal')";


    $queryrun = mysqli_query($connection, $query);

    if ($queryrun)
    {
        
        header('location:attendant.php');
        echo '<h2>New Record Added</h2>';
    }else
    {
        
        header('location:attendant.php');
        echo 'Record Not Added';
        


       
    }
  
 
}
}


?>

