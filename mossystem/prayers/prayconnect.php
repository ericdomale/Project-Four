<?php
session_start();
if(!$_SESSION['username'])
{
    header('location:../login/login.php');
}

//DATABASE CONNECTION
$conn = new mysqli('127.0.0.1:3307','root','','mossystem');


if (isset($_POST['pray']))
{
    $praydate = $_POST['praydate'];
    $prayname = $_POST['prayname'];
    $praykind = $_POST['praykind'];
    $datescheduled = $_POST['datescheduled'];
    $prayvenue = $_POST['prayvenue'];
    $praycontact = $_POST['praycontact'];
   
   

if ($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{

    $query =  "INSERT into prayers (praydate, prayname, praykind, datescheduled, prayvenue, praycontact)
     VALUES ('$praydate', '$prayname', '$praykind', '$datescheduled', '$prayvenue','$praycontact')";
    $queryrun = mysqli_query($conn,$query);

 
 if ($queryrun)
    {
        
        
        header('location:prayers.php');
    }else
    {
        header('location:prayers.php'); 
        echo 'Record Not Added';
        

       
    }
}
}
?>
