<?php
session_start();
if(!$_SESSION['username'])
{
    header('location:../login/login.php');
}
 $connection = new mysqli('127.0.0.1:3307','root','','mossystem');
?>


<?php


if (isset($_POST['teacher']))
{

$teacherno = $_POST['teacherno'];
$teachername = $_POST['teachername'];
$teachbirth = $_POST['teachbirth'];
$gender = $_POST['gender'];
$classgroup = $_POST['classgroup'];
$qualify = $_POST['qualify'];
$work = $_POST['work'];



if ($connection->connect_error){
    die('Connection Failed : '.$connection->connect_error);
}else{

    $query = "INSERT into teachers (teacherno, teachername, teachbirth, gender, classgroup, qualify, work)
    values('$teacherno', '$teachername', '$teachbirth', '$gender', '$classgroup', '$qualify', '$work')";


    $queryrun = mysqli_query($connection, $query);

    if ($queryrun)
    {
       
 
 header('location:childteacher.php');
   
    }

    else
    {
        echo "Record Fail";
    }
  
 
}
}


?>

