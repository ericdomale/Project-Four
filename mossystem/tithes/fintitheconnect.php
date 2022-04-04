<?php
session_start();
if(!$_SESSION['username'])
{
    header('location:../login/login.php');
}

//DATABASE CONNECTION
$conn = new mysqli('127.0.0.1:3307','root','','mossystem');


if (isset($_POST['titsubmit']))
{
    $titweek = $_POST['titweek'];
    $titdate = $_POST['titdate'];
    $titmonth = $_POST['titmonth'];
    $titprogram = $_POST['titprogram'];
    $titamount = $_POST['titamount'];
  

if ($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{

    $query =  "INSERT into tithes (titweek, titdate, titmonth, titprogram, titamount)
     VALUES ('$titweek', '$titdate', '$titmonth','$titprogram', '$titamount')";
    $queryrun = mysqli_query($conn,$query);

 
 if ($queryrun)
    {
        
        
        header('location: fintithe.php');
        echo 'New Record Added';
    }else
    {
        header('location: fintithe.php'); 
        echo 'New Record Not Added';
        

       
    }
}
}
?>
