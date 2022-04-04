<?php
session_start();
if(!$_SESSION['username'])
{
    header('location:../login/login.php');
}
 $connection = new mysqli('127.0.0.1:3307','root','','mossystem');
?>


<?php


if (isset($_POST['submit']))
{

$memberno = $_POST['memberno'];
$fullname = $_POST['fullname'];
$memdate = $_POST['memdate'];
$gender = $_POST['gender'];
$status = $_POST['status'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$maddress = $_POST['maddress'];
$paddress = $_POST['paddress'];
$work = $_POST['work'];
$chgroup = $_POST['chgroup'];
$cell = $_POST['cell'];
$since = $_POST['since'];


if ($connection->connect_error){
    die('Connection Failed : '.$connection->connect_error);
}else{

    $query = "INSERT into membership (memberno, fullname, memdate, gender, status, email, contact, maddress, paddress, work, chgroup, cell, since)
    values('$memberno', '$fullname', '$memdate', '$gender', '$status', '$email', '$contact', '$maddress', '$paddress', '$work', '$chgroup', '$cell', '$since')";


    $queryrun = mysqli_query($connection, $query);

    if ($queryrun)
    {
       
      
       
       /*$_SESSION['success'] =' <div class="icon">
        <i class="fa fa-check"></i>
    </div>
    <div class="titled">
        Successful!
    </div>
    <div class="description">
       New Member Has Been Added
    </div>';

 sleep(2);*/
 
 header('location:admembership.php');
 
       
        
    }

    else
    {
        echo "Record Fail";
    }
  
 
}
}


?>
