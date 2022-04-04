<?php
session_start();
if(!$_SESSION['username'])
{
    header('location:../login/login.php');
}

//DATABASE CONNECTION
$conn = new mysqli('127.0.0.1:3307','root','','mossystem');


if (isset($_POST['addstaff']))
{
    $staffid = $_POST['staffid'];
    $staffname = $_POST['staffname'];
    $department = $_POST['department'];
  

if ($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{

    $query =  "INSERT into staff (staffid, staffname, department)
     VALUES ('$staffid', '$staffname', '$department')";
    $queryrun = mysqli_query($conn,$query);

 
 if ($queryrun)
    {
        
        
        header('location:staff.php');
        echo 'New Staff Added';
    }else
    {
        header('location:staff.php'); 
        echo 'New Staff Not Added';
        

       
    }
}
}
?>
